using Peachpie.Vendor.Stubs;

namespace Peachpie.Vendor.Stubs.Tests;

public sealed class NugetResolverTests
{
    [Fact]
    public void FindBestApiDirs_PrefersLibOverRef()
    {
        using var temp = new TempDirectory();
        var packageRoot = Path.Combine(temp.Path, "sample.package", "1.2.3");
        var libNet8 = Path.Combine(packageRoot, "lib", "net8.0");
        var refNet10 = Path.Combine(packageRoot, "ref", "net10.0");
        Directory.CreateDirectory(libNet8);
        Directory.CreateDirectory(refNet10);

        var dirs = NugetResolver.FindBestApiDirs(
            temp.Path,
            "Sample.Package",
            "1.2.3",
            NugetResolver.BuildTfmPreference(null));

        Assert.Equal(libNet8, Assert.Single(dirs));
    }

    [Fact]
    public void FindBestApiDirs_UsesTfmPreferenceWithinApiKind()
    {
        using var temp = new TempDirectory();
        var packageRoot = Path.Combine(temp.Path, "sample.package", "1.2.3", "lib");
        var net6 = Path.Combine(packageRoot, "net6.0");
        var net10 = Path.Combine(packageRoot, "net10.0");
        Directory.CreateDirectory(net6);
        Directory.CreateDirectory(net10);

        var dirs = NugetResolver.FindBestApiDirs(
            temp.Path,
            "Sample.Package",
            "1.2.3",
            NugetResolver.BuildTfmPreference(null));

        Assert.Equal(net10, Assert.Single(dirs));
    }

    [Fact]
    public void FindBestApiDirs_FallsBackToHighestNetstandard()
    {
        using var temp = new TempDirectory();
        var packageRoot = Path.Combine(temp.Path, "sample.package", "1.2.3", "lib");
        var netstandard20 = Path.Combine(packageRoot, "netstandard2.0");
        var netstandard21 = Path.Combine(packageRoot, "netstandard2.1");
        Directory.CreateDirectory(netstandard20);
        Directory.CreateDirectory(netstandard21);

        var dirs = NugetResolver.FindBestApiDirs(
            temp.Path,
            "Sample.Package",
            "1.2.3",
            new[] { "net11.0" });

        Assert.Equal(netstandard21, Assert.Single(dirs));
    }
}
