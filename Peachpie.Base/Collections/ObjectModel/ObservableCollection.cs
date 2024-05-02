using System.Collections.Generic;
using System.Collections.ObjectModel;
using Pchp.Core;


namespace Peachpie.Base.Collections.ObjectModel;

public class ObservableCollection : ObservableCollection<object>
{
    public ObservableCollection(IEnumerable<object> collection) : base(collection)
    {
    }

    public ObservableCollection(IList<object> collection) : base(collection)
    {
    }

    public ObservableCollection()
    {
    }

    public void SetAll(PhpArray phpArray)
    {
        if (phpArray.IntrinsicEnumerator == null)
        {
            return;
        }
        
        Clear();

        foreach (var item in phpArray)
        {
            Add(item.Value.Alias);
        }
        
    }
}