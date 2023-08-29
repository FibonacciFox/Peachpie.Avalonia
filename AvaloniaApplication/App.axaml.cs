using Avalonia;
using Avalonia.Controls.ApplicationLifetimes;
using MyPhpLib;



namespace AvaloniaApplication;

public class App : Application
{
    
    public override void OnFrameworkInitializationCompleted()
    {
        if (ApplicationLifetime is IClassicDesktopStyleApplicationLifetime desktop)
        {
            desktop.MainWindow =  new PHPWindow();
        }

        base.OnFrameworkInitializationCompleted();
    }
}