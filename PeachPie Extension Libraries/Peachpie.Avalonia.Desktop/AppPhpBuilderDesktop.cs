using Avalonia;
using Peachpie.Avalonia.Core;

namespace Peachpie.Avalonia.Desktop;

public static class AppPhpBuilderDesktop
{

    public static AppPhpBuilder UsePlatformDetect(this AppPhpBuilder appPhpBuilder)
    {
        appPhpBuilder.Builder.UsePlatformDetect();
        return appPhpBuilder;
    }
    
}