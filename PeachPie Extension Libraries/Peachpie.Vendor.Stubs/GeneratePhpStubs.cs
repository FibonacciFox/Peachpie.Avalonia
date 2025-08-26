#nullable enable
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Reflection;
using System.Runtime.Loader;
using Microsoft.Build.Framework;
using Microsoft.Build.Utilities;

namespace Peachpie.Vendor.Stubs
{
    public sealed class GeneratePhpStubs : Task
    {
        [Required] public string ProjectFile { get; set; } = null!;
        [Required] public string StubsDirectory { get; set; } = null!;
        [Required] public string NugetRoot { get; set; } = null!;

        public override bool Execute()
        {
            try
            {
                var projectFullPath = Path.GetFullPath(ProjectFile ?? throw new ArgumentNullException(nameof(ProjectFile)));
                var projectDir = Path.GetDirectoryName(projectFullPath)!;

                var outDir = NormalizeAbsPath(projectDir, StubsDirectory);
                Directory.CreateDirectory(outDir);

                var nugetRoot = Path.GetFullPath(NugetRoot);

                Log.LogMessage(MessageImportance.Low, $"PeachPie Stubs Gen: ProjectFile = {projectFullPath}");
                Log.LogMessage(MessageImportance.Low, $"PeachPie Stubs Gen: ProjectDir  = {projectDir}");
                Log.LogMessage(MessageImportance.Low, $"PeachPie Stubs Gen: OutDir      = {outDir}");
                Log.LogMessage(MessageImportance.Low, $"PeachPie Stubs Gen: NugetRoot   = {nugetRoot}");

                var pkgs = PackageDiscovery.ListPackages(projectDir);
                if (pkgs.Count == 0) return true;

                var tfmPref = NugetResolver.BuildTfmPreference(null);
                var apiDirs = new HashSet<string>(StringComparer.OrdinalIgnoreCase);
                foreach (var p in pkgs)
                    foreach (var d in NugetResolver.FindBestApiDirs(nugetRoot, p.Id, p.Version, tfmPref))
                        apiDirs.Add(d);

                if (apiDirs.Count == 0) return true;

                RegisterAssemblyResolver(apiDirs);

                var assemblyPaths = apiDirs
                    .SelectMany(d => Directory.EnumerateFiles(d, "*.dll", SearchOption.TopDirectoryOnly))
                    .Where(IsManaged)
                    .Distinct(StringComparer.OrdinalIgnoreCase)
                    .ToList();

                var docs = new XmlDocProvider();
                foreach (var a in assemblyPaths) docs.TryAddFromAssemblyPath(a);

                foreach (var a in assemblyPaths)
                {
                    try
                    {
                        var asm = AssemblyLoadContext.Default.LoadFromAssemblyPath(a);
                        PhpStubGenerator.GenerateAssembly(asm, outDir, recurseExternal: false, docs);
                    }
                    catch (Exception ex)
                    {
                        Log.LogMessage(MessageImportance.Low, $"Skip assembly '{Path.GetFileName(a)}': {ex.Message}");
                    }
                }

                PhpStubGenerator.WritePeachpieEventHelpers(outDir);
                return !Log.HasLoggedErrors;
            }
            catch (Exception ex)
            {
                Log.LogError($"PeachPie Stubs Gen failed: {ex.Message}");
                return false;
            }
        }

        private static string NormalizeAbsPath(string projectDir, string path)
        {
            var s = string.IsNullOrWhiteSpace(path) ? projectDir : path;
            s = s.Replace('\\', Path.DirectorySeparatorChar).Replace('/', Path.DirectorySeparatorChar);
            return Path.GetFullPath(Path.IsPathRooted(s) ? s : Path.Combine(projectDir, s));
        }

        private static bool IsManaged(string path)
        {
            try { AssemblyName.GetAssemblyName(path); return true; }
            catch { return false; }
        }

        private static void RegisterAssemblyResolver(IEnumerable<string> searchDirs)
        {
            var dirs = searchDirs.Select(d =>
                Path.GetFullPath(d.Replace('\\', Path.DirectorySeparatorChar).Replace('/', Path.DirectorySeparatorChar)))
                .Distinct(StringComparer.OrdinalIgnoreCase)
                .ToArray();

            AssemblyLoadContext.Default.Resolving += (ctx, name) =>
            {
                try
                {
                    var file = name.Name + ".dll";
                    foreach (var d in dirs)
                    {
                        var candidate = Path.Combine(d, file);
                        if (File.Exists(candidate))
                            return ctx.LoadFromAssemblyPath(candidate);
                    }
                }
                catch { }
                return null;
            };
        }
    }
}
