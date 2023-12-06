using Avalonia.Markup.Xaml;

namespace  Peachpie.Avalonia.Markup.Xaml;
/// <summary>
/// Loads XAML for a Peachpie.Avalonia application.
/// </summary>
public static class AvaloniaXamlLoader
{
    /// <summary>
    /// Loads the XAML into a Avalonia component.
    /// </summary>
    /// <param name="obj">The object to load the XAML into.</param>
    public static void Load(object obj)
    {
        throw new XamlLoadException(
            $"No precompiled XAML found for {obj.GetType()}, make sure to specify x:Class and include your XAML file as AvaloniaResource");
    }
}