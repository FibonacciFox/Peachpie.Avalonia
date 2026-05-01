using System.Text.Json;
using Peachpie.Avalonia.RiderModel.Models;

namespace Peachpie.Avalonia.RiderModel.Axaml;

public sealed class AxamlIndexQueryService
{
    public AxamlAnalysisResult Load(string indexFilePath)
    {
        var json = File.ReadAllText(indexFilePath);
        return JsonSerializer.Deserialize<AxamlAnalysisResult>(json)
            ?? throw new InvalidOperationException($"Unable to deserialize AXAML index '{indexFilePath}'.");
    }

    public IReadOnlyList<AxamlNavigationTarget> FindNavigationTargets(AxamlAnalysisResult result, string sourcePath, int line)
    {
        var normalizedPath = Path.GetFullPath(sourcePath);
        return result.NavigationTargets
            .Where(x => PathsEqual(x.SourcePath, normalizedPath) && x.SourceLine == line)
            .OrderBy(x => x.Kind, StringComparer.Ordinal)
            .ToArray();
    }

    public IReadOnlyList<AxamlCompletionItem> GetBindingCompletions(
        AxamlAnalysisResult result,
        string sourcePath,
        int line,
        string? prefix = null)
    {
        var normalizedPath = Path.GetFullPath(sourcePath);
        var document = result.AxamlDocuments.FirstOrDefault(x => PathsEqual(x.FilePath, normalizedPath));
        if (document is null)
        {
            return Array.Empty<AxamlCompletionItem>();
        }

        var classMap = result.PhpClasses.ToDictionary(x => x.FullName, x => x, StringComparer.Ordinal);
        var binding = document.Bindings.FirstOrDefault(x => x.Line == line)
            ?? document.Bindings.LastOrDefault(x => x.Line <= line);
        var contextClass = AxamlTypeResolver.ResolveBindingContext(document, binding, classMap);
        if (contextClass is null)
        {
            return Array.Empty<AxamlCompletionItem>();
        }

        var normalizedPrefix = prefix ?? string.Empty;
        return contextClass.Members
            .Where(x => x.Name.StartsWith(normalizedPrefix, StringComparison.OrdinalIgnoreCase))
            .GroupBy(x => x.Name, StringComparer.OrdinalIgnoreCase)
            .Select(SelectPreferredMember)
            .OrderBy(x => x.Name, StringComparer.OrdinalIgnoreCase)
            .Select(x => new AxamlCompletionItem(
                x.Name,
                x.Kind == PhpMemberKind.Property ? "property" : "method",
                $"{contextClass.FullName}.{x.DeclaredName}",
                contextClass.FilePath,
                x.Line))
            .ToArray();
    }

    private static bool PathsEqual(string left, string right) =>
        string.Equals(Path.GetFullPath(left), Path.GetFullPath(right), StringComparison.OrdinalIgnoreCase);

    private static PhpMemberSymbol SelectPreferredMember(IGrouping<string, PhpMemberSymbol> group) =>
        group.OrderBy(x => GetMemberPriority(x))
            .ThenBy(x => x.Line)
            .First();

    private static int GetMemberPriority(PhpMemberSymbol member)
    {
        if (member.Kind == PhpMemberKind.Property)
        {
            if (member.DeclaredName.StartsWith("get_", StringComparison.Ordinal))
            {
                return 0;
            }

            if (member.DeclaredName.StartsWith("set_", StringComparison.Ordinal))
            {
                return 1;
            }

            return 2;
        }

        return 3;
    }
}
