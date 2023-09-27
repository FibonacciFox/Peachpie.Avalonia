using Avalonia.Collections;
using Pchp.Core;

namespace Peachpie.Avalonia.Core;

public class DataTable
{
    [PhpHidden]
    public AvaloniaDictionary<object, object> Data { get;} = new();
    
    public object this[object key]
    {
        get { return Data[key]; }
        set { Data[key] = value; }
    }
}