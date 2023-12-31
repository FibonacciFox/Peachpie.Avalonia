﻿using System;
using Avalonia.Controls;
using Avalonia.Controls.ApplicationLifetimes;
using Avalonia.Themes.Fluent;

namespace Peachpie.Avalonia.Platform;

public static class UxAppBuilderMinimalExtensions
{
    public static TAppBuilder UseFluentTheme<TAppBuilder>(this TAppBuilder builder, FluentThemeMode mode = FluentThemeMode.Light)
        where TAppBuilder : AppBuilderBase<TAppBuilder>, new()
    {
        return builder.AfterSetup(_ =>
            builder.Instance?.Styles.Add(new FluentTheme(new Uri($"avares://{System.Reflection.Assembly.GetExecutingAssembly().GetName()}")) { Mode = mode }));
    }

    public static int StartWithClassicDesktopLifetime<T>(this T builder, Action<IClassicDesktopStyleApplicationLifetime> callback, string[]? args, ShutdownMode shutdownMode = ShutdownMode.OnLastWindowClose) where T : AppBuilderBase<T>, new()
    {
        var classicDesktopStyleApplicationLifetime = new ClassicDesktopStyleApplicationLifetime
        {
            Args = args,
            ShutdownMode = shutdownMode
        };

        builder.SetupWithLifetime(classicDesktopStyleApplicationLifetime);

        callback?.Invoke(classicDesktopStyleApplicationLifetime);

        return classicDesktopStyleApplicationLifetime.Start(args);
    }
}