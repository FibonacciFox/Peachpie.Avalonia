using Peachpie.Vendor.Stubs;

namespace Peachpie.Vendor.Stubs.Tests;

public sealed class PackageDiscoveryTests
{
    [Fact]
    public void ParsePackageListJson_ReturnsDistinctTopLevelAndTransitivePackages()
    {
        const string json = """
        {
          "projects": [
            {
              "frameworks": [
                {
                  "topLevelPackages": [
                    { "id": "Peachpie.Avalonia", "resolvedVersion": "1.0.4" },
                    { "id": "peachpie.avalonia", "resolvedVersion": "1.0.4" },
                    { "id": "", "resolvedVersion": "1.0.0" }
                  ],
                  "transitivePackages": [
                    { "id": "System.Drawing.Common", "resolvedVersion": "10.0.7" },
                    { "id": "MissingVersion" }
                  ]
                }
              ]
            }
          ]
        }
        """;

        var packages = PackageDiscovery.ParsePackageListJson(json);

        Assert.Collection(
            packages.OrderBy(p => p.Id, StringComparer.OrdinalIgnoreCase),
            p =>
            {
                Assert.Equal("Peachpie.Avalonia", p.Id);
                Assert.Equal("1.0.4", p.Version);
            },
            p =>
            {
                Assert.Equal("System.Drawing.Common", p.Id);
                Assert.Equal("10.0.7", p.Version);
            });
    }
}
