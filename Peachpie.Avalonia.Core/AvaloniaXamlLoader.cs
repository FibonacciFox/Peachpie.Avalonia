using Pchp.Core;

[assembly: PhpExtension] 

namespace Avalonia.Markup.Xaml;
public static class AvaloniaXamlLoader
{
    /// <summary>
    /// Loads the XAML into a Avalonia component.
    /// </summary>
    /// <param name="obj">The object to load the XAML into.</param>
    public static void Load([ImportValue(ImportValueAttribute.ValueSpec.This)] object obj)
    {
        throw new XamlLoadException(
            $"No precompiled XAML found for {obj.GetType()}, make sure to specify x:Class and include your XAML file as AvaloniaResource");
    }

}