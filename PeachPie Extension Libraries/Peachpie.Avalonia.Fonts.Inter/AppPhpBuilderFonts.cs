using Avalonia;
using Peachpie.Avalonia.Core;

namespace Peachpie.Avalonia.Fonts.Inter;

public static class AppPhpBuilderFonts
{
    /// <summary>
    /// Configures the application to use the Inter font.
    /// Настраивает приложение для использования шрифта Inter.
    /// </summary>
    /// <returns>The current instance of AppPhpBuilder. / Текущий экземпляр AppPhpBuilder.</returns>
    public static AppPhpBuilder WithInterFont(this AppPhpBuilder appPhpBuilder)
    {
        appPhpBuilder.Builder.WithInterFont();
        return appPhpBuilder;
    }
}