#nullable enable
using System;
using System.Diagnostics;
using System.IO;
using System.Linq;
using Microsoft.Build.Framework;
using Microsoft.Build.Utilities;
using Newtonsoft.Json.Linq;

namespace Peachpie.Vendor.Stubs
{
    public sealed class PackageStubsRestore : Task
    {
        [Required] public string ProjectFile { get; set; } = null!;
        [Required] public string StubsDirectory { get; set; } = null!;
        [Required] public string NugetPackagePathPattern { get; set; } = null!;

        public override bool Execute()
        {
            try
            {
                var projectFullPath = Path.GetFullPath(ProjectFile ?? throw new ArgumentNullException(nameof(ProjectFile)));
                var projectDir = Path.GetDirectoryName(projectFullPath)!;

                var stubsRoot = NormalizeAbsPath(projectDir, StubsDirectory);
                Directory.CreateDirectory(stubsRoot);

                if (string.IsNullOrWhiteSpace(NugetPackagePathPattern))
                {
                    Log.LogError("NugetPackagePathPattern is empty.");
                    return false;
                }

                Log.LogMessage(MessageImportance.Low, $"PeachPie Stubs: ProjectFile = {projectFullPath}");
                Log.LogMessage(MessageImportance.Low, $"PeachPie Stubs: ProjectDir  = {projectDir}");
                Log.LogMessage(MessageImportance.Low, $"PeachPie Stubs: StubsDir    = {stubsRoot}");

                var output = RunDotnetListPackage(projectDir);
                if (string.IsNullOrWhiteSpace(output))
                    return true;

                var json = JObject.Parse(output);
                ProcessPackages(json, stubsRoot);

                return !Log.HasLoggedErrors;
            }
            catch (Exception ex)
            {
                Log.LogError($"PackageStubsRestore failed: {ex.Message}");
                return false;
            }
        }

        private static string NormalizeAbsPath(string projectDir, string path)
        {
            var s = string.IsNullOrWhiteSpace(path) ? projectDir : path;
            s = s.Replace('\\', Path.DirectorySeparatorChar).Replace('/', Path.DirectorySeparatorChar);
            return Path.GetFullPath(Path.IsPathRooted(s) ? s : Path.Combine(projectDir, s));
        }

        private static string RunDotnetListPackage(string workingDir)
        {
            var psi = new ProcessStartInfo
            {
                FileName = "dotnet",
                Arguments = "list package --include-transitive --format json",
                RedirectStandardOutput = true,
                RedirectStandardError = true,
                UseShellExecute = false,
                CreateNoWindow = true,
                WorkingDirectory = workingDir
            };
            using var p = new Process { StartInfo = psi };
            p.Start();
            var stdout = p.StandardOutput.ReadToEnd();
            p.WaitForExit();
            return stdout;
        }

        private void ProcessPackages(JObject root, string stubsRoot)
        {
            var projects = root["projects"]?.Children<JObject>() ?? Enumerable.Empty<JObject>();
            foreach (var project in projects)
            {
                var frameworks = project["frameworks"]?.Children<JObject>() ?? Enumerable.Empty<JObject>();
                foreach (var fw in frameworks)
                {
                    foreach (var pkg in fw["topLevelPackages"]?.Children<JObject>() ?? Enumerable.Empty<JObject>())
                        ProcessPackage(pkg, stubsRoot);
                    foreach (var pkg in fw["transitivePackages"]?.Children<JObject>() ?? Enumerable.Empty<JObject>())
                        ProcessPackage(pkg, stubsRoot);
                }
            }
        }

        private void ProcessPackage(JObject package, string stubsRoot)
        {
            var id = (package["id"] ?? "").ToString();
            var ver = (package["resolvedVersion"] ?? "").ToString();
            if (string.IsNullOrWhiteSpace(id) || string.IsNullOrWhiteSpace(ver))
                return;

            var vendorDirRaw = NugetPackagePathPattern
                .Replace("{PackageId}", id.ToLowerInvariant())
                .Replace("{Version}", ver);

            var vendorDir = vendorDirRaw.Replace('\\', Path.DirectorySeparatorChar)
                                        .Replace('/', Path.DirectorySeparatorChar);
            vendorDir = Path.GetFullPath(vendorDir);

            if (!Directory.Exists(vendorDir))
                return;

            var destRoot = Path.Combine(stubsRoot, id.ToLowerInvariant(), ver);
            foreach (var src in Directory.EnumerateFiles(vendorDir, "*.php", SearchOption.AllDirectories))
            {
                var rel = Path.GetRelativePath(vendorDir, src);
                var dst = Path.Combine(destRoot, rel);
                Directory.CreateDirectory(Path.GetDirectoryName(dst)!);
                File.Copy(src, dst, overwrite: true);
            }
        }
    }
}
