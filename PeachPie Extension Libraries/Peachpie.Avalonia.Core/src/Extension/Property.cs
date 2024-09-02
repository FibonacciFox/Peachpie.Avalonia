using Avalonia;
using Avalonia.Controls;


namespace Peachpie.Avalonia.Core.Extension;

public static class Property
{
    public static StyledProperty<object> Register(string nameProperty)
    {
#pragma warning disable AVP1001
        return AvaloniaProperty.Register<Control, object>(nameProperty);
#pragma warning restore AVP1001
    }
}