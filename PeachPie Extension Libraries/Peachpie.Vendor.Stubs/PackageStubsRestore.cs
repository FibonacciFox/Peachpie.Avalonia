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
    /// <summary>
    /// Кроссплатформенный MSBuild‑таск, который:
    /// 1) запускает "dotnet list package --include-transitive --format json" в каталоге проекта;
    /// 2) находит у пакетов папку "vendor" в NuGet‑кэше;
    /// 3) копирует оттуда *.php в проект в vendor/Stubs/{packageId}/{version}.
    /// </summary>
    public sealed class PackageStubsRestore : Task
    {
        /// <summary>
        /// Куда складывать стобы (например: $(ProjectDir)vendor/Stubs).
        /// </summary>
        [Required]
        public string StubsDirectory { get; set; } = null!;

        /// <summary>
        /// Шаблон пути к NuGet‑кэшу — уже развёрнутый в .targets (например: $(NuGetPackageRoot){PackageId}/{Version}/vendor).
        /// </summary>
        [Required]
        public string NugetPackagePathPattern { get; set; } = null!;

        /// <summary>
        /// Рабочая папка для вызова "dotnet list package" (обычно $(MSBuildProjectDirectory)).
        /// </summary>
        [Required]
        public string ProjectDirectory { get; set; } = null!;

        public override bool Execute()
        {
            try
            {
                if (string.IsNullOrWhiteSpace(StubsDirectory))
                {
                    Log.LogError("StubsDirectory is empty.");
                    return false;
                }
                if (string.IsNullOrWhiteSpace(NugetPackagePathPattern))
                {
                    Log.LogError("NugetPackagePathPattern is empty.");
                    return false;
                }
                if (string.IsNullOrWhiteSpace(ProjectDirectory))
                {
                    Log.LogError("ProjectDirectory is empty.");
                    return false;
                }

                Log.LogMessage(MessageImportance.Low, $"PeachPie Stubs: ProjectDirectory = {ProjectDirectory}");
                Log.LogMessage(MessageImportance.Low, $"PeachPie Stubs: NuGetPattern   = {NugetPackagePathPattern}");

                DeleteAndCreateDirectory(StubsDirectory);

                string output = RunDotnetListPackage(ProjectDirectory);
                if (string.IsNullOrWhiteSpace(output))
                {
                    Log.LogMessage(MessageImportance.Low, "dotnet list package returned empty output; nothing to restore.");
                    return true; // не валим билд
                }

                var json = JObject.Parse(output);
                ProcessPackages(json);

                return !Log.HasLoggedErrors;
            }
            catch (Exception ex)
            {
                Log.LogError($"PackageStubsRestore failed: {ex.Message}");
                return false;
            }
        }

        private void DeleteAndCreateDirectory(string path)
        {
            try
            {
                if (Directory.Exists(path))
                {
                    Directory.Delete(path, recursive: true);
                }
                Directory.CreateDirectory(path);
            }
            catch (Exception ex)
            {
                Log.LogError($"Failed to recreate stubs directory '{path}': {ex.Message}");
                throw;
            }
        }

        private string RunDotnetListPackage(string workingDir)
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

            using var proc = new Process { StartInfo = psi };
            proc.Start();

            string stdout = proc.StandardOutput.ReadToEnd();
            string stderr = proc.StandardError.ReadToEnd();

            proc.WaitForExit();

            if (!string.IsNullOrWhiteSpace(stderr))
                Log.LogMessage(MessageImportance.Low, $"dotnet list package (stderr): {stderr.Trim()}");

            return stdout;
        }

        private void ProcessPackages(JObject root)
        {
            var projects = root["projects"]?.Children<JObject>() ?? Enumerable.Empty<JObject>();
            foreach (var project in projects)
            {
                var frameworks = project["frameworks"]?.Children<JObject>() ?? Enumerable.Empty<JObject>();
                foreach (var fw in frameworks)
                {
                    foreach (var pkg in fw["topLevelPackages"]?.Children<JObject>() ?? Enumerable.Empty<JObject>())
                        ProcessPackage(pkg);

                    foreach (var pkg in fw["transitivePackages"]?.Children<JObject>() ?? Enumerable.Empty<JObject>())
                        ProcessPackage(pkg);
                }
            }
        }

        private void ProcessPackage(JObject package)
        {
            var packageId = (package["id"] ?? "").ToString();
            var version   = (package["resolvedVersion"] ?? "").ToString();

            if (string.IsNullOrEmpty(packageId) || string.IsNullOrEmpty(version))
                return;

            var packageIdLower = packageId.ToLowerInvariant();

            // Собираем путь к vendor‑каталогу в кэше NuGet
            // Пример: /home/user/.nuget/packages/{packageIdLower}/{version}/vendor
            var nugetVendorDir = NugetPackagePathPattern
                .Replace("{PackageId}", packageIdLower)
                .Replace("{Version}", version);

            Log.LogMessage(MessageImportance.Low, $"Searching vendor stubs: {nugetVendorDir}");

            if (!Directory.Exists(nugetVendorDir))
            {
                Log.LogMessage(MessageImportance.Low, $"No PHP stubs for '{packageId}' at '{nugetVendorDir}'.");
                return;
            }

            var destRoot = Path.Combine(StubsDirectory, packageIdLower, version);
            ProcessFiles(nugetVendorDir, destRoot);
        }

        private void ProcessFiles(string sourcePath, string destinationPath)
        {
            var files = Directory.GetFiles(sourcePath, "*.php", SearchOption.AllDirectories);
            foreach (var file in files)
            {
                var relative = Path.GetRelativePath(sourcePath, file);
                var destFile = Path.Combine(destinationPath, relative);

                var destDir = Path.GetDirectoryName(destFile);
                if (!string.IsNullOrEmpty(destDir))
                    EnsureDirectoryExists(destDir);

                File.Copy(file, destFile, overwrite: true);
                Log.LogMessage(MessageImportance.Low, $"Copied: {relative}");
            }
        }

        private void EnsureDirectoryExists(string path)
        {
            if (!Directory.Exists(path))
            {
                Directory.CreateDirectory(path);
                Log.LogMessage(MessageImportance.Low, $"Created: {path}");
            }
        }
    }
}
