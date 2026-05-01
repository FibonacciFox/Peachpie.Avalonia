using System.Text.RegularExpressions;
using System.Xml;
using System.Xml.Linq;
using Peachpie.Avalonia.RiderModel.Models;

namespace Peachpie.Avalonia.RiderModel.Axaml;

public sealed class AxamlProjectIndexer
{
    private static readonly Regex BindingRegex = new(@"\{Binding\s+(?:[^}]*?\bPath=)?\s*([A-Za-z_][A-Za-z0-9_]*)", RegexOptions.Compiled);

    public IReadOnlyList<AxamlDocumentModel> IndexDirectory(string rootDirectory)
    {
        var result = new List<AxamlDocumentModel>();
        foreach (var file in Directory.EnumerateFiles(rootDirectory, "*.axaml", SearchOption.AllDirectories))
        {
            result.Add(IndexFile(file));
        }

        return result;
    }

    public AxamlDocumentModel IndexFile(string filePath)
    {
        var content = File.ReadAllText(filePath);
        var doc = XDocument.Parse(content, LoadOptions.SetLineInfo);
        var root = doc.Root ?? throw new InvalidOperationException($"AXAML root element was not found in '{filePath}'.");

        var aliases = root.Attributes()
            .Where(a => a.IsNamespaceDeclaration)
            .Select(a => new KeyValuePair<string, string>(a.Name.LocalName == "xmlns" ? string.Empty : a.Name.LocalName, a.Value))
            .ToDictionary(x => x.Key, x => x.Value, StringComparer.Ordinal);

        var xNamespace = XNamespace.Get("http://schemas.microsoft.com/winfx/2006/xaml");
        var xClass = root.Attribute(xNamespace + "Class")?.Value;
        var xDataType = root.Attribute(xNamespace + "DataType")?.Value;

        var bindings = new List<AxamlBindingReference>();
        CollectBindings(root, xNamespace, xDataType, bindings);

        return new AxamlDocumentModel(filePath, xClass, xDataType, aliases, bindings);
    }

    private static void CollectBindings(
        XElement element,
        XNamespace xNamespace,
        string? inheritedDataType,
        List<AxamlBindingReference> bindings)
    {
        var currentDataType = element.Attribute(xNamespace + "DataType")?.Value ?? inheritedDataType;

        foreach (var attribute in element.Attributes())
        {
            var match = BindingRegex.Match(attribute.Value);
            if (!match.Success)
            {
                continue;
            }

            var lineInfo = (IXmlLineInfo)attribute;
            bindings.Add(new AxamlBindingReference(
                Path: match.Groups[1].Value,
                Line: lineInfo.HasLineInfo() ? lineInfo.LineNumber : 1,
                AttributeName: attribute.Name.LocalName,
                ContextTypeName: currentDataType));
        }

        foreach (var child in element.Elements())
        {
            CollectBindings(child, xNamespace, currentDataType, bindings);
        }
    }
}
