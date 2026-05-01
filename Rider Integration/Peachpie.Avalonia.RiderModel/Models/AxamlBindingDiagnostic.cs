namespace Peachpie.Avalonia.RiderModel.Models;

public sealed record AxamlBindingDiagnostic(
    string FilePath,
    int Line,
    string Code,
    string Message);
