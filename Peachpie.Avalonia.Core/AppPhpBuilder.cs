using System;
using System.Linq;
using Avalonia;
using Avalonia.Controls.ApplicationLifetimes;

namespace Peachpie.Avalonia.Core;

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