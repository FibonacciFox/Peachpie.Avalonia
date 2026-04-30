using Peachpie.Vendor.Stubs;

namespace Peachpie.Vendor.Stubs.Tests;

public sealed class PhpStubGeneratorTests
{
    [Fact]
    public void Generate_EmitsPropertiesEventsMethodsAndOverloads()
    {
        var php = PhpStubGenerator.Generate(typeof(SampleControl), docs: null);

        Assert.Contains("namespace Peachpie\\Vendor\\Stubs\\Tests;", php);
        Assert.Contains("class SampleControl", php);
        Assert.Contains("@var string", php);
        Assert.Contains("public $Title;", php);
        Assert.Contains("@var \\Pchp\\Core\\ClrEvent", php);
        Assert.Contains("function(object $sender, \\Peachpie\\Vendor\\Stubs\\Tests\\PhpStubGeneratorTests\\SampleEventArgs $e): void", php);
        Assert.Contains("<br/><b>.NET overloads</b>:", php);
        Assert.Contains("public function SetValue(...$args) {}", php);
    }

    [Fact]
    public void Generate_SkipsGenericMembers()
    {
        var php = PhpStubGenerator.Generate(typeof(SampleControl), docs: null);

        Assert.DoesNotContain("GenericMethod", php);
        Assert.DoesNotContain("$Items", php);
    }

    [Fact]
    public void WritePeachpieEventHelpers_CreatesClrEventAndHookStubs()
    {
        using var temp = new TempDirectory();

        PhpStubGenerator.WritePeachpieEventHelpers(temp.Path);

        Assert.True(File.Exists(Path.Combine(temp.Path, "Pchp", "Core", "ClrEvent.php")));
        Assert.True(File.Exists(Path.Combine(temp.Path, "Pchp", "Core", "ClrEvent", "Hook.php")));
    }

    public sealed class SampleControl
    {
        public event EventHandler<SampleEventArgs>? Click;

        public string Title { get; set; } = "";

        public List<string> Items { get; } = new();

        public void SetValue(int value)
        {
        }

        public void SetValue(string value)
        {
        }

        public void GenericMethod<T>(T value)
        {
        }

        public void RaiseClick()
        {
            Click?.Invoke(this, new SampleEventArgs());
        }
    }

    public sealed class SampleEventArgs : EventArgs
    {
    }
}
