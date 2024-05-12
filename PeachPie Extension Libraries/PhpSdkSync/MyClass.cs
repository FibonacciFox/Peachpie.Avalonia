using System;
using System.Diagnostics;
using System.IO;
using Microsoft.Build.Utilities;
using Newtonsoft.Json;
using Newtonsoft.Json.Linq;

namespace PhpSdkSync
{
    public class MyClass : Task
    {
        public override bool Execute()
        {
            var startInfo = new ProcessStartInfo
            {
                FileName = "dotnet",
                Arguments = "list package --include-transitive --format json",
                RedirectStandardOutput = true,
                UseShellExecute = false,
                CreateNoWindow = true,
            };

            var process = new Process { StartInfo = startInfo };
            process.Start();

            var reader = new StreamReader(process.StandardOutput.BaseStream);
            var output = reader.ReadToEnd();
            process.WaitForExit();

            var packages = JsonConvert.DeserializeObject<JObject>(output);

            foreach (var project in packages["projects"].Children<JObject>())
            {
                foreach (var framework in project["frameworks"].Children<JObject>())
                {
                    Console.WriteLine($"Framework: {framework["framework"]}");
                    Console.WriteLine("Top Level Packages:");
                    foreach (var package in framework["topLevelPackages"].Children<JObject>())
                    {
                        Console.WriteLine($"Package: {package["id"]}, Version: {package["resolvedVersion"]}");
                    }
                    Console.WriteLine("Transitive Packages:");
                    foreach (var package in framework["transitivePackages"].Children<JObject>())
                    {
                        Console.WriteLine($"Package: {package["id"]}, Version: {package["resolvedVersion"]}");
                    }
                }
            }
            return true;
        }
    }
}
