namespace Peachpie.Avalonia.RiderModel.Models;

public sealed record AxamlNavigationTarget(
    string SourcePath,
    int SourceLine,
    string TargetPath,
    int TargetLine,
    string Kind,
    string Symbol);
