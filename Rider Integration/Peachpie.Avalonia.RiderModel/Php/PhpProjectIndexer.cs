using System.Text.RegularExpressions;
using Peachpie.Avalonia.RiderModel.Models;

namespace Peachpie.Avalonia.RiderModel.Php;

public sealed class PhpProjectIndexer
{
    private static readonly Regex NamespaceRegex = new(@"namespace\s+([^;{]+)", RegexOptions.Compiled);
    private static readonly Regex ClassRegex = new(@"class\s+([A-Za-z_][A-Za-z0-9_]*)", RegexOptions.Compiled);
    private static readonly Regex PublicPropertyRegex = new(@"^\s*public\s+(?!function\b)(?:[^$;\n=]+?\s+)?\$([A-Za-z_][A-Za-z0-9_]*)\s*(?:[;=])", RegexOptions.Compiled);
    private static readonly Regex PublicFunctionRegex = new(@"public\s+function\s+([A-Za-z_][A-Za-z0-9_]*)\s*\(", RegexOptions.Compiled);

    public IReadOnlyList<PhpClassSymbol> IndexDirectory(string rootDirectory)
    {
        var result = new List<PhpClassSymbol>();
        foreach (var file in Directory.EnumerateFiles(rootDirectory, "*.php", SearchOption.AllDirectories))
        {
            var symbol = IndexFile(file);
            if (symbol is not null)
            {
                result.Add(symbol);
            }
        }

        return result;
    }

    public PhpClassSymbol? IndexFile(string filePath)
    {
        var content = File.ReadAllText(filePath);
        var namespaceName = NamespaceRegex.Match(content).Groups[1].Value.Trim().Replace('\\', '.');
        var classMatch = ClassRegex.Match(content);
        if (!classMatch.Success)
        {
            return null;
        }

        var className = classMatch.Groups[1].Value.Trim();
        var members = new List<PhpMemberSymbol>();
        var lines = File.ReadAllLines(filePath);

        for (var i = 0; i < lines.Length; i++)
        {
            var line = lines[i];

            var propertyMatch = PublicPropertyRegex.Match(line);
            if (propertyMatch.Success)
            {
                members.Add(new PhpMemberSymbol(
                    Name: propertyMatch.Groups[1].Value,
                    Kind: PhpMemberKind.Property,
                    DeclaredName: propertyMatch.Groups[1].Value,
                    Line: i + 1));
            }

            var functionMatch = PublicFunctionRegex.Match(line);
            if (!functionMatch.Success)
            {
                continue;
            }

            var declaredName = functionMatch.Groups[1].Value;
            var normalizedName = NormalizeMemberName(declaredName);
            var kind = declaredName.StartsWith("get_", StringComparison.Ordinal) || declaredName.StartsWith("set_", StringComparison.Ordinal)
                ? PhpMemberKind.Property
                : PhpMemberKind.Method;

            members.Add(new PhpMemberSymbol(
                Name: normalizedName,
                Kind: kind,
                DeclaredName: declaredName,
                Line: i + 1));
        }

        return new PhpClassSymbol(
            Namespace: namespaceName,
            Name: className,
            FilePath: filePath,
            Line: GetLineNumber(content, classMatch.Index),
            Members: members);
    }

    private static string NormalizeMemberName(string declaredName)
    {
        if (declaredName.StartsWith("get_", StringComparison.Ordinal) || declaredName.StartsWith("set_", StringComparison.Ordinal))
        {
            return declaredName[4..];
        }

        return declaredName;
    }

    private static int GetLineNumber(string content, int charIndex)
    {
        var line = 1;
        for (var i = 0; i < charIndex && i < content.Length; i++)
        {
            if (content[i] == '\n')
            {
                line++;
            }
        }

        return line;
    }
}
