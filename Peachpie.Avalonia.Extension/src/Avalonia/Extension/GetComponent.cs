using Avalonia.Controls;

namespace Peachpie.Avalonia.Extension;

public class GetComponent
{
    public static Control FindByName(Control targetComponent, string name)
    {
        return targetComponent.FindNameScope()?.Find<Control>(name);
    }
    
}