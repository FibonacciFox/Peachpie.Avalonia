using Avalonia;
using Avalonia.Controls;

namespace Peachpie.Avalonia.Extension;

public class GetComponent
{
    public static Control FindByName(Control targetComponent, string name)
    {
        INamed vv = targetComponent;
       
        return targetComponent.FindNameScope()?.Find<Control>(name);
        
    }
    
}