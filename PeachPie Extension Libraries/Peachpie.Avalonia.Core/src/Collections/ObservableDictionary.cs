using System;
using System.Collections;
using System.Collections.Generic;
using System.Collections.Specialized;
using System.ComponentModel;
using Pchp.Core;

namespace Peachpie.Avalonia.Core.Collections;

public class ObservableDictionary<TKey, TValue> : IDictionary<TKey, TValue>, INotifyCollectionChanged, INotifyPropertyChanged
    where TKey : notnull
    where TValue : notnull
{
    private readonly IDictionary<TKey, TValue> _dictionary;

    public ObservableDictionary()
    {
        _dictionary = new Dictionary<TKey, TValue>();
    }

    public ObservableDictionary(IDictionary<TKey, TValue> dictionary)
    {
        _dictionary = new Dictionary<TKey, TValue>(dictionary);
    }

    public event NotifyCollectionChangedEventHandler? CollectionChanged;
    public event PropertyChangedEventHandler? PropertyChanged;

    public void Add(TKey key, TValue value)
    {
        Insert(key, value, true);
    }

    public bool ContainsKey(TKey key)
    {
        return _dictionary.ContainsKey(key);
    }

    public ICollection<TKey> Keys => _dictionary.Keys;

    public bool Remove(TKey key)
    {
        if (key == null) throw new ArgumentNullException(nameof(key));
        if (_dictionary.TryGetValue(key, out var value))
        {
            var removed = _dictionary.Remove(key);
            if (removed)
                OnCollectionChanged(NotifyCollectionChangedAction.Remove, new KeyValuePair<TKey, TValue>(key, value));
            return removed;
        }

        return false;
    }

    public bool TryGetValue(TKey key, out TValue value)
    {
        return _dictionary.TryGetValue(key, out value);
    }

    public ICollection<TValue> Values => _dictionary.Values;

    public TValue this[TKey key]
    {
        get => _dictionary[key];
        set => Insert(key, value, false);
    }

    public void Add(KeyValuePair<TKey, TValue> item)
    {
        Insert(item.Key, item.Value, true);
    }

    public void Clear()
    {
        if (_dictionary.Count > 0)
        {
            _dictionary.Clear();
            OnCollectionChanged(NotifyCollectionChangedAction.Reset);
        }
    }

    public bool Contains(KeyValuePair<TKey, TValue> item)
    {
        return _dictionary.Contains(item);
    }

    public void CopyTo(KeyValuePair<TKey, TValue>[] array, int arrayIndex)
    {
        _dictionary.CopyTo(array, arrayIndex);
    }

    public int Count => _dictionary.Count;

    public bool IsReadOnly => _dictionary.IsReadOnly;

    public bool Remove(KeyValuePair<TKey, TValue> item)
    {
        return Remove(item.Key);
    }

    public IEnumerator<KeyValuePair<TKey, TValue>> GetEnumerator()
    {
        return _dictionary.GetEnumerator();
    }

    IEnumerator IEnumerable.GetEnumerator()
    {
        return ((IEnumerable)_dictionary).GetEnumerator();
    }

    protected virtual void OnPropertyChanged(string propertyName)
    {
        PropertyChanged?.Invoke(this, new PropertyChangedEventArgs(propertyName));
    }

    private void OnCollectionChanged(NotifyCollectionChangedAction action, KeyValuePair<TKey, TValue> changedItem,
        KeyValuePair<TKey, TValue> oldItem)
    {
        OnPropertyChanged(nameof(Count));
        OnPropertyChanged("Item[]");
        OnPropertyChanged("Keys");
        OnPropertyChanged("Values");
        CollectionChanged?.Invoke(this, new NotifyCollectionChangedEventArgs(action, changedItem, oldItem));
    }

    private void OnCollectionChanged(NotifyCollectionChangedAction action, KeyValuePair<TKey, TValue> changedItem)
    {
        OnPropertyChanged(nameof(Count));
        OnPropertyChanged("Item[]");
        OnPropertyChanged("Keys");
        OnPropertyChanged("Values");
        CollectionChanged?.Invoke(this, new NotifyCollectionChangedEventArgs(action, changedItem));
    }

    private void OnCollectionChanged(NotifyCollectionChangedAction action)
    {
        OnPropertyChanged(nameof(Count));
        OnPropertyChanged("Item[]");
        OnPropertyChanged("Keys");
        OnPropertyChanged("Values");
        CollectionChanged?.Invoke(this, new NotifyCollectionChangedEventArgs(action));
    }

    private void Insert(TKey key, TValue value, bool add)
    {
        if (key == null) throw new ArgumentNullException(nameof(key));
        if (_dictionary.TryGetValue(key, out var item))
        {
            if (add)
            {
                throw new ArgumentException("An item with the same key has already been added.");
            }

            if (!EqualityComparer<TValue>.Default.Equals(item, value))
            {
                _dictionary[key] = value;
                OnCollectionChanged(NotifyCollectionChangedAction.Replace, new KeyValuePair<TKey, TValue>(key, value),
                    new KeyValuePair<TKey, TValue>(key, item));
            }
        }
        else
        {
            _dictionary[key] = value;
            OnCollectionChanged(NotifyCollectionChangedAction.Add, new KeyValuePair<TKey, TValue>(key, value));
        }
    }
}


public class ObservableDictionary : ObservableDictionary<object, object>
{
    
}