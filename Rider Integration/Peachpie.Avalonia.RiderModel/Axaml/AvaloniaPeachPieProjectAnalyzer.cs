using System.Text.Json;
using Peachpie.Avalonia.RiderModel.Models;
using Peachpie.Avalonia.RiderModel.Php;

namespace Peachpie.Avalonia.RiderModel.Axaml;

public sealed class AvaloniaPeachPieProjectAnalyzer
{
    private readonly PhpProjectIndexer _phpIndexer = new();
    private readonly AxamlProjectIndexer _axamlIndexer = new();

    public AxamlAnalysisResult Analyze(string rootDirectory)
    {
        var phpClasses = _phpIndexer.IndexDirectory(rootDirectory);
        var axamlDocuments = _axamlIndexer.IndexDirectory(rootDirectory);

        var classMap = phpClasses.ToDictionary(c => c.FullName, c => c, StringComparer.Ordinal);
        var diagnostics = new List<AxamlBindingDiagnostic>();
        var navigationTargets = new List<AxamlNavigationTarget>();

        foreach (var document in axamlDocuments)
        {
            AnalyzeXClass(document, classMap, diagnostics, navigationTargets);
            AnalyzeDataTypeAndBindings(document, classMap, diagnostics, navigationTargets);
        }

        return new AxamlAnalysisResult(diagnostics, navigationTargets, phpClasses, axamlDocuments);
    }

    public void WriteJson(string rootDirectory, string outputPath)
    {
        var result = Analyze(rootDirectory);
        Directory.CreateDirectory(Path.GetDirectoryName(outputPath)!);
        File.WriteAllText(outputPath, JsonSerializer.Serialize(result, new JsonSerializerOptions
        {
            WriteIndented = true
        }));
    }

    private static void AnalyzeXClass(
        AxamlDocumentModel document,
        IReadOnlyDictionary<string, PhpClassSymbol> classMap,
        List<AxamlBindingDiagnostic> diagnostics,
        List<AxamlNavigationTarget> navigationTargets)
    {
        if (string.IsNullOrWhiteSpace(document.XClass))
        {
            return;
        }

        if (!classMap.TryGetValue(document.XClass!, out var target))
        {
            diagnostics.Add(new AxamlBindingDiagnostic(
                document.FilePath,
                1,
                "AXAML001",
                $"x:Class '{document.XClass}' was not resolved to a PHP class."));
            return;
        }

        navigationTargets.Add(new AxamlNavigationTarget(
            document.FilePath,
            1,
            target.FilePath,
            target.Line,
            "x:Class",
            target.FullName));
    }

    private static void AnalyzeDataTypeAndBindings(
        AxamlDocumentModel document,
        IReadOnlyDictionary<string, PhpClassSymbol> classMap,
        List<AxamlBindingDiagnostic> diagnostics,
        List<AxamlNavigationTarget> navigationTargets)
    {
        if (string.IsNullOrWhiteSpace(document.XDataType))
        {
            return;
        }

        var fullDataType = AxamlTypeResolver.ResolveTypeName(document.XDataType!, document.XmlnsAliases);
        if (fullDataType is null || !classMap.TryGetValue(fullDataType, out var dataTypeClass))
        {
            diagnostics.Add(new AxamlBindingDiagnostic(
                document.FilePath,
                1,
                "AXAML002",
                $"x:DataType '{document.XDataType}' was not resolved to a PHP class."));
            return;
        }

        navigationTargets.Add(new AxamlNavigationTarget(
            document.FilePath,
            1,
            dataTypeClass.FilePath,
            dataTypeClass.Line,
            "x:DataType",
            dataTypeClass.FullName));

        foreach (var binding in document.Bindings)
        {
            var bindingDataTypeClass = AxamlTypeResolver.ResolveBindingContext(document, binding, classMap);
            if (bindingDataTypeClass is null)
            {
                diagnostics.Add(new AxamlBindingDiagnostic(
                    document.FilePath,
                    binding.Line,
                    "AXAML002",
                    $"Binding context '{binding.ContextTypeName ?? document.XDataType}' was not resolved to a PHP class."));
                continue;
            }

            var target = bindingDataTypeClass.Members.FirstOrDefault(m => string.Equals(m.Name, binding.Path, StringComparison.Ordinal));
            if (target is null)
            {
                diagnostics.Add(new AxamlBindingDiagnostic(
                    document.FilePath,
                    binding.Line,
                    "AXAML003",
                    $"Binding path '{binding.Path}' was not resolved in '{bindingDataTypeClass.FullName}'."));
                continue;
            }

            navigationTargets.Add(new AxamlNavigationTarget(
                document.FilePath,
                binding.Line,
                bindingDataTypeClass.FilePath,
                target.Line,
                target.Kind == PhpMemberKind.Property ? "binding-property" : "binding-method",
                $"{bindingDataTypeClass.FullName}.{target.DeclaredName}"));
        }
    }
}
