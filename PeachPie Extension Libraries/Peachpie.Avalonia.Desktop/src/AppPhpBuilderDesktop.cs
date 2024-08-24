using Avalonia;
using Peachpie.Avalonia.Core;

namespace Peachpie.Avalonia.Desktop;

public static class AppPhpBuilderDesktop
{
    /// <summary>
    /// Configures the application to use platform detection.
    /// Настраивает приложение относительно платформы.
    /// </summary>
    /// <returns>The current instance of AppPhpBuilder. / Текущий экземпляр AppPhpBuilder.</returns>
    public static AppPhpBuilder UsePlatformDetect(this AppPhpBuilder appPhpBuilder)
    {
        appPhpBuilder.Builder.UsePlatformDetect();
        return appPhpBuilder;
    }
    
}