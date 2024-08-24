using System;
using System.Diagnostics;
using System.IO;
using Microsoft.Build.Utilities;
using Newtonsoft.Json;
using Newtonsoft.Json.Linq;

namespace Peachpie.Vendor.Stubs
{
    public class PackageListInfo : Task
    {
        public string StubsDirectory { get; set; }
        public string NugetPackagePathPattern { get; set; }

        public override bool Execute()
        {
            try
            {
                DeleteAndCreateDirectory(StubsDirectory);

                string output = RunDotnetListPackage();

                var packages = JsonConvert.DeserializeObject<JObject>(output);

                if (packages == null)
                {
                    Log.LogError("Failed to parse package list JSON.");
                    return false;
                }

                ProcessPackages(packages);

                return true;
            }
            catch (Exception ex)
            {
                Log.LogError($"An error occurred: {ex.Message}");
                return false;
            }
        }

        private void DeleteAndCreateDirectory(string path)
        {
            if (Directory.Exists(path))
            {
                Directory.Delete(path, true);
            }
            Directory.CreateDirectory(path);
        }

        private string RunDotnetListPackage()
        {
            var startInfo = new ProcessStartInfo
            {
                FileName = "dotnet",
                Arguments = "list package --include-transitive --format json",
                RedirectStandardOutput = true,
                UseShellExecute = false,
                CreateNoWindow = true,
            };

            using var process = new Process { StartInfo = startInfo };
            process.Start();

            using var reader = new StreamReader(process.StandardOutput.BaseStream);
            var output = reader.ReadToEnd();
            process.WaitForExit();

            return output;
        }

        private void ProcessPackages(JObject packages)
        {
            foreach (var project in packages["projects"].Children<JObject>())
            {
                foreach (var framework in project["frameworks"].Children<JObject>())
                {
                    foreach (var package in framework["topLevelPackages"].Children<JObject>())
                    {
                        var packageId = package["id"].ToString();
                        var version = package["resolvedVersion"].ToString();

                        var nugetPackagePath = NugetPackagePathPattern
                            .Replace("{PackageId}", packageId)
                            .Replace("{Version}", version);

                        var packageStubsDirectory = Path.Combine(StubsDirectory, packageId, version);

                        Log.LogMessage($"Searching for PHP files in '{nugetPackagePath}'");

                        if (Directory.Exists(nugetPackagePath))
                        {
                            ProcessFiles(nugetPackagePath, packageStubsDirectory);
                        }
                        else
                        {
                            Log.LogWarning($"The directory '{nugetPackagePath}' does not exist.");
                        }
                    }
                }
            }
        }

        private void ProcessFiles(string sourcePath, string destinationPath)
        {
            var directories = Directory.GetDirectories(sourcePath, "*", SearchOption.AllDirectories);
            foreach (var dir in directories)
            {
                var phpFiles = Directory.GetFiles(dir, "*.php", SearchOption.TopDirectoryOnly);
                foreach (var file in phpFiles)
                {
                    var relativePath = Path.GetRelativePath(sourcePath, file);
                    var destFile = Path.Combine(destinationPath, relativePath);

                    EnsureDirectoryExists(Path.GetDirectoryName(destFile));
                    File.Copy(file, destFile, true);
                }
            }
        }

        private void EnsureDirectoryExists(string path)
        {
            if (!Directory.Exists(path))
            {
                Log.LogMessage($"Creating directory at '{path}'");
                Directory.CreateDirectory(path);
            }
        }
    }
}
