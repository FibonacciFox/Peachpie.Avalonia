using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;

namespace Peachpie.Vendor.Stubs;

public static class NugetResolver
{
    public static string GetNugetRoot()
    {
        var env = Environment.GetEnvironmentVariable("NUGET_PACKAGES");
        if (!string.IsNullOrWhiteSpace(env) && Directory.Exists(env))
            return env;

        var home = Environment.GetFolderPath(Environment.SpecialFolder.UserProfile);
        return Path.Combine(home, ".nuget", "packages");
    }

    public static IReadOnlyList<string> BuildTfmPreference(string? _)
    {
        // Без ручного --tfm: дефолтный приоритет
        return new[]
        {
            "net9.0","net8.0","net7.0","net6.0","net5.0",
            "netcoreapp3.1","netcoreapp3.0",
            "netstandard2.1","netstandard2.0",
            "net48","net472","net471","net47","net462","net461","net46",
        };
    }

    /// <summary>
    /// Находит лучший каталог API-ассемблей (сперва lib, затем ref) под указанный пакет.
    /// </summary>
    public static IEnumerable<string> FindBestApiDirs(string nugetRoot, string packageId, string version, IReadOnlyList<string> tfmPreference)
    {
        var idLower = packageId.ToLowerInvariant();
        var baseDir = Path.Combine(nugetRoot, idLower, version);

        foreach (var apiKind in new[] { "lib", "ref" }) // lib приоритетнее
        {
            var apiDir = Path.Combine(baseDir, apiKind);
            if (!Directory.Exists(apiDir))
                continue;

            var map = Directory.EnumerateDirectories(apiDir)
                .ToDictionary(d => Path.GetFileName(d)!, d => d, StringComparer.OrdinalIgnoreCase);

            foreach (var tfm in tfmPreference)
                if (map.TryGetValue(tfm, out var path))
                {
                    yield return path;
                    yield break;
                }

            // Fallback: берём самый «похожий» netstandard
            var netstd = map.Keys.Where(k => k.StartsWith("netstandard", StringComparison.OrdinalIgnoreCase))
                .OrderByDescending(k => k, StringComparer.Ordinal)
                .FirstOrDefault();
            if (netstd != null) { yield return map[netstd]; yield break; }

            // Последний шанс: самый «длинный» TFM, как правило, самый специфичный
            var best = map.Keys.OrderByDescending(k => k.Length).FirstOrDefault();
            if (best != null) { yield return map[best]; yield break; }
        }
    }
}