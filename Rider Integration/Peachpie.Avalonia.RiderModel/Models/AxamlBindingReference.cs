namespace Peachpie.Avalonia.RiderModel.Models;

public sealed record AxamlBindingReference(
    string Path,
    int Line,
    string AttributeName,
    string? ContextTypeName);
