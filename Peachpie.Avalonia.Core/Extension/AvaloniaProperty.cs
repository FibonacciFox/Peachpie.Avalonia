using Avalonia;
using Avalonia.Controls;

namespace Peachpie.Avalonia.Core.Extension;

public static class AvaloniaProperty
{
    public static StyledProperty<object> Register(this UserControl control, string name)
    {
#pragma warning disable AVP1001
        return global::Avalonia.AvaloniaProperty.Register<UserControl, object>(name);
#pragma warning restore AVP1001
    }
}