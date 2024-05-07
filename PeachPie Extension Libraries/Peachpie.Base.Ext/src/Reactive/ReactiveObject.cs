using System.ComponentModel;
using System.Runtime.CompilerServices;

namespace Peachpie.Base.Ext.Reactive;

public class ReactiveObject : INotifyPropertyChanged
{
    public event PropertyChangedEventHandler? PropertyChanged;
    
    protected virtual void OnPropertyChanged([CallerMemberName] string? propertyName = null)
    {
        PropertyChanged?.Invoke(this, new PropertyChangedEventArgs(propertyName));
    }
}