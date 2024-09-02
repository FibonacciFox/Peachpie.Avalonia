using Avalonia.Controls;

namespace Peachpie.Avalonia.Core.Extension;

public class GetControl
{
    public static Control? FindByName(Control targetComponent, string name)
    {
        return targetComponent.FindNameScope()?.Find<Control>(name);
    }
    
}