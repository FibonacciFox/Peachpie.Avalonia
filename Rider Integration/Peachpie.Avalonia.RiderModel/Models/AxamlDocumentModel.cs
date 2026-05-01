namespace Peachpie.Avalonia.RiderModel.Models;

public sealed record AxamlDocumentModel(
    string FilePath,
    string? XClass,
    string? XDataType,
    IReadOnlyDictionary<string, string> XmlnsAliases,
    IReadOnlyList<AxamlBindingReference> Bindings);
