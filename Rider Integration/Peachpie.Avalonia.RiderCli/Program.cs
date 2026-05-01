using System.Text.Json;
using Peachpie.Avalonia.RiderModel.Axaml;

if (args.Length == 0)
{
    Console.Error.WriteLine("""
Usage:
  Peachpie.Avalonia.RiderCli index <project-root> [output-json]
  Peachpie.Avalonia.RiderCli resolve <index-json> <source-file> <line>
  Peachpie.Avalonia.RiderCli complete <index-json> <source-file> <line> [prefix]
""");
    return 1;
}

return args[0] switch
{
    "index" => RunIndex(args),
    "resolve" => RunResolve(args),
    "complete" => RunComplete(args),
    _ => RunLegacyIndex(args)
};

static int RunIndex(string[] args)
{
    if (args.Length is < 2 or > 3)
    {
        Console.Error.WriteLine("Usage: Peachpie.Avalonia.RiderCli index <project-root> [output-json]");
        return 1;
    }

    var root = Path.GetFullPath(args[1]);
    var output = args.Length == 3
        ? Path.GetFullPath(args[2])
        : Path.Combine(root, ".peachpie-rider", "index.json");

    var analyzer = new AvaloniaPeachPieProjectAnalyzer();
    analyzer.WriteJson(root, output);
    Console.WriteLine(output);
    return 0;
}

static int RunResolve(string[] args)
{
    if (args.Length != 4 || !int.TryParse(args[3], out var line))
    {
        Console.Error.WriteLine("Usage: Peachpie.Avalonia.RiderCli resolve <index-json> <source-file> <line>");
        return 1;
    }

    var service = new AxamlIndexQueryService();
    var result = service.Load(Path.GetFullPath(args[1]));
    var targets = service.FindNavigationTargets(result, Path.GetFullPath(args[2]), line);
    Console.WriteLine(JsonSerializer.Serialize(targets, new JsonSerializerOptions { WriteIndented = true }));
    return 0;
}

static int RunComplete(string[] args)
{
    if (args.Length is < 4 or > 5 || !int.TryParse(args[3], out var line))
    {
        Console.Error.WriteLine("Usage: Peachpie.Avalonia.RiderCli complete <index-json> <source-file> <line> [prefix]");
        return 1;
    }

    var prefix = args.Length == 5 ? args[4] : null;
    var service = new AxamlIndexQueryService();
    var result = service.Load(Path.GetFullPath(args[1]));
    var items = service.GetBindingCompletions(result, Path.GetFullPath(args[2]), line, prefix);
    Console.WriteLine(JsonSerializer.Serialize(items, new JsonSerializerOptions { WriteIndented = true }));
    return 0;
}

static int RunLegacyIndex(string[] args)
{
    if (args.Length is < 1 or > 2)
    {
        Console.Error.WriteLine("Usage: Peachpie.Avalonia.RiderCli <project-root> [output-json]");
        return 1;
    }

    var root = Path.GetFullPath(args[0]);
    var output = args.Length == 2
        ? Path.GetFullPath(args[1])
        : Path.Combine(root, ".peachpie-rider", "index.json");

    var analyzer = new AvaloniaPeachPieProjectAnalyzer();
    analyzer.WriteJson(root, output);
    Console.WriteLine(output);
    return 0;
}
