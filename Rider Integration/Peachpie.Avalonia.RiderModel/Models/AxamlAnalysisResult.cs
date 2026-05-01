namespace Peachpie.Avalonia.RiderModel.Models;

public sealed record AxamlAnalysisResult(
    IReadOnlyList<AxamlBindingDiagnostic> Diagnostics,
    IReadOnlyList<AxamlNavigationTarget> NavigationTargets,
    IReadOnlyList<PhpClassSymbol> PhpClasses,
    IReadOnlyList<AxamlDocumentModel> AxamlDocuments);
