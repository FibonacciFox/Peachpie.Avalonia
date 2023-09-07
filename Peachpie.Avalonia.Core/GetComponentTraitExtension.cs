using Avalonia.Controls;

namespace Peachpie.Avalonia.Core;

public class GetComponentTraitExtension
{
    public static Control FindByName(Control targetComponent, string name)
    {
        return targetComponent.FindNameScope()?.Find<Control>(name);
    }
    
}