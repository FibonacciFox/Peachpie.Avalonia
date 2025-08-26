using System;
using System.Collections.Generic;
using System.Diagnostics;
using System.Linq;
using Newtonsoft.Json.Linq;

namespace Peachpie.Vendor.Stubs;

public static class PackageDiscovery
{
    public sealed class PackageInfo
    {
        public string Id { get; }
        public string Version { get; }

        public PackageInfo(string id, string version)
        {
            Id = id;
            Version = version;
        }
    }

    public static List<PackageInfo> ListPackages(string projectDir)
    {
        var json = RunDotnetListPackage(projectDir);
        if (string.IsNullOrWhiteSpace(json))
            return new List<PackageInfo>();

        var root = JObject.Parse(json);
        var result = new List<PackageInfo>();

        var projects = root["projects"]?.Children<JObject>() ?? Enumerable.Empty<JObject>();
        foreach (var project in projects)
        {
            var frameworks = project["frameworks"]?.Children<JObject>() ?? Enumerable.Empty<JObject>();
            foreach (var fw in frameworks)
            {
                foreach (var pkg in fw["topLevelPackages"]?.Children<JObject>() ?? Enumerable.Empty<JObject>())
                    Add(pkg, result);

                foreach (var pkg in fw["transitivePackages"]?.Children<JObject>() ?? Enumerable.Empty<JObject>())
                    Add(pkg, result);
            }
        }

        // distinct по (Id, Version), регистр не важен
        return result
            .GroupBy(p => (p.Id, p.Version), PackageIdVersionComparer.Instance)
            .Select(g => g.First())
            .ToList();

        static void Add(JObject pkg, List<PackageInfo> list)
        {
            var id = (pkg["id"] ?? "").ToString();
            var v  = (pkg["resolvedVersion"] ?? "").ToString();
            if (!string.IsNullOrWhiteSpace(id) && !string.IsNullOrWhiteSpace(v))
                list.Add(new PackageInfo(id, v));
        }
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
        var stderr = p.StandardError.ReadToEnd();
        p.WaitForExit();
        if (!string.IsNullOrWhiteSpace(stderr))
            Console.WriteLine(stderr.Trim());
        return stdout;
    }

    private sealed class PackageIdVersionComparer : IEqualityComparer<(string Id, string Version)>
    {
        public static readonly PackageIdVersionComparer Instance = new PackageIdVersionComparer();

        public bool Equals((string Id, string Version) x, (string Id, string Version) y) =>
            StringComparer.OrdinalIgnoreCase.Equals(x.Id, y.Id) &&
            StringComparer.OrdinalIgnoreCase.Equals(x.Version, y.Version);

        public int GetHashCode((string Id, string Version) obj) =>
            HashCode.Combine(
                StringComparer.OrdinalIgnoreCase.GetHashCode(obj.Id ?? string.Empty),
                StringComparer.OrdinalIgnoreCase.GetHashCode(obj.Version ?? string.Empty)
            );
    }
}