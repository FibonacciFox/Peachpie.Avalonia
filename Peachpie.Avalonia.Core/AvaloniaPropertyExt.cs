using Avalonia;
using Avalonia.Controls;

namespace Peachpie.Avalonia.Core;

public static class AvaloniaPropertyExt
{
    public static StyledProperty<object> Register(this UserControl control, string name)
    {
#pragma warning disable AVP1001
        return AvaloniaProperty.Register<UserControl, object>(name);
#pragma warning restore AVP1001
    }
}