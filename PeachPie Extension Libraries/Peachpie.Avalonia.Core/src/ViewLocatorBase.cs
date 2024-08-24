using System;
using Avalonia.Controls;
using Avalonia.Controls.Templates;
using Peachpie.Community.Reactive;

namespace Peachpie.Avalonia.Core;

public class ViewLocatorBase : IDataTemplate
{
    public Control Build(object data)
    {
        var typeObject = data.GetType();
        var name = typeObject.FullName!.Replace("ViewModel", "View");
        var assemblyName = typeObject.Assembly.FullName;
        
        var type = Type.GetType($"{name}, {assemblyName}");
        
        if (type != null)
        {
            return (Control)Activator.CreateInstance(type)!;
        }
        else
        {
            return new TextBlock { Text = "Not Found: " + name };
        }
    }

    public bool Match(object data)
    {
        return data is ReactiveObject;
    }
}