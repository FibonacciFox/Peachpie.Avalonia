using System;
using System.Linq;
using Avalonia;
using Avalonia.Controls.ApplicationLifetimes;

namespace Peachpie.Avalonia.Extension;

public class AppPhpBuilder
{
    public static AppPhpBuilder Configure(string application)
    {
        var method =
            typeof(AppBuilder).GetMethods().Where(x => x.Name == "Configure")
                .FirstOrDefault(x => x.IsGenericMethod)!.MakeGenericMethod(Type.GetType(application));

        var builder = (AppBuilder)method.Invoke(typeof(AppBuilder), null)!;

        return new AppPhpBuilder()
        {
            _appBuilder = builder
        };
    }

    private static Type GetType(string application)
    {
        return Type.GetType(application); //"AvaloniaApplication.App"
    }

    public AppPhpBuilder UsePlatformDetect()
    {
        _appBuilder = _appBuilder.UsePlatformDetect();
        return this;
    }

    public AppPhpBuilder SetupWithLifetime(IApplicationLifetime lifetime)
    {
        _appBuilder = _appBuilder.SetupWithLifetime(lifetime);
        return this;
    }

    private AppBuilder _appBuilder;
}