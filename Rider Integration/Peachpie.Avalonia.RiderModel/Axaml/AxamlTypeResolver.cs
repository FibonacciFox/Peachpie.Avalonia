using Peachpie.Avalonia.RiderModel.Models;

namespace Peachpie.Avalonia.RiderModel.Axaml;

internal static class AxamlTypeResolver
{
    public static string? ResolveTypeName(string xDataType, IReadOnlyDictionary<string, string> aliases)
    {
        var parts = xDataType.Split(':', 2, StringSplitOptions.TrimEntries);
        if (parts.Length == 1)
        {
            return parts[0];
        }

        var alias = parts[0];
        var shortName = parts[1];
        if (!aliases.TryGetValue(alias, out var ns) || !ns.StartsWith("using:", StringComparison.Ordinal))
        {
            return null;
        }

        var phpNamespace = ns["using:".Length..].Replace('\\', '.');
        return $"{phpNamespace}.{shortName}";
    }

    public static PhpClassSymbol? ResolveBindingContext(
        AxamlDocumentModel document,
        AxamlBindingReference? binding,
        IReadOnlyDictionary<string, PhpClassSymbol> classMap)
    {
        var contextType = binding?.ContextTypeName ?? document.XDataType;
        if (string.IsNullOrWhiteSpace(contextType))
        {
            return null;
        }

        var fullName = ResolveTypeName(contextType, document.XmlnsAliases);
        return fullName is not null && classMap.TryGetValue(fullName, out var @class) ? @class : null;
    }
}
