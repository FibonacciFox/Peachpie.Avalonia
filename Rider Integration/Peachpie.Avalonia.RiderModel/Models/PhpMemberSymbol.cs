namespace Peachpie.Avalonia.RiderModel.Models;

public sealed record PhpMemberSymbol(
    string Name,
    PhpMemberKind Kind,
    string DeclaredName,
    int Line);
