namespace Peachpie.Avalonia.RiderModel.Models;

public sealed record AxamlCompletionItem(
    string Name,
    string Kind,
    string Symbol,
    string TargetPath,
    int TargetLine);
