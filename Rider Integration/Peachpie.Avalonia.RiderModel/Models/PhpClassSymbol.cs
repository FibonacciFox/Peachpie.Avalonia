namespace Peachpie.Avalonia.RiderModel.Models;

public sealed record PhpClassSymbol(
    string Namespace,
    string Name,
    string FilePath,
    int Line,
    IReadOnlyList<PhpMemberSymbol> Members)
{
    public string FullName => string.IsNullOrWhiteSpace(Namespace) ? Name : $"{Namespace}.{Name}";
}
