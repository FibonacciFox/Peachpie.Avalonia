using System.Collections.ObjectModel;
using System.Linq;
using Pchp.Core;

namespace Php.Collections;

public class ObservableCollection : ObservableCollection<object>, Iterator, ArrayAccess
{
    private int _position = 0;

    public ObservableCollection() : base()
    {
        
    }

    public ObservableCollection(PhpArray phpArray)
    {
        if (phpArray.IntrinsicEnumerator == null)
        {
            return;
        }
        
        foreach (var item in phpArray)
        {
            Add(item.Value.Alias);
        }
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

    // Реализация методов интерфейса Iterator
    public void rewind()
    {
        _position = 0;
    }

    public void next()
    {
        _position++;
    }

    public bool valid()
    {
        return _position >= 0 && _position < Count;
    }

    public PhpValue key()
    {
        return _position;
    }

    public PhpValue current()
    {
        return PhpValue.FromClr(this[_position]);
    }

    // Реализация методов интерфейса ArrayAccess
    public PhpValue offsetGet(PhpValue offset)
    {
        return PhpValue.FromClr(this[offset.ToInt()]);
    }

    public void offsetSet(PhpValue offset, PhpValue value)
    {
        this[offset.ToInt()] = value.ToClr();
    }

    public void offsetUnset(PhpValue offset)
    {
        RemoveAt(offset.ToInt());
    }

    public bool offsetExists(PhpValue offset)
    {
        return offset.ToInt() >= 0 && offset.ToInt() < Count;
    }
    
    public PhpArray toArray()
    {
        return new PhpArray(this.ToArray());
    }

}