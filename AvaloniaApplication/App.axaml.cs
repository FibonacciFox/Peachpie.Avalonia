using Avalonia;
using Avalonia.Controls.ApplicationLifetimes;
using Avalonia.Markup.Xaml;
using MyPhpLib;



namespace AvaloniaApplication;

public class App : Application
{
    public override void Initialize()
    {
        AvaloniaXamlLoader.Load(this);
    }

    public override void OnFrameworkInitializationCompleted()
    {
        if (ApplicationLifetime is IClassicDesktopStyleApplicationLifetime desktop)
        {
           //desktop.MainWindow =  new MainWindow();
            desktop.MainWindow =  new PHPWindow();
        }

        base.OnFrameworkInitializationCompleted();
    }
}