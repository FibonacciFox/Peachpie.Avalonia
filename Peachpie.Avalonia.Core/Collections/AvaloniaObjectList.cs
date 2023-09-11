using System.Collections.Generic;
using Avalonia.Collections;

namespace Peachpie.Avalonia.Core.Collections
{
    public class AvaloniaObjectList : AvaloniaList<object>
    {
        public bool IsReadOnly => ((ICollection<object>)this).IsReadOnly;
        
    }
}
