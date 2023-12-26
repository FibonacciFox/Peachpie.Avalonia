using Avalonia.Controls.ApplicationLifetimes;

namespace Peachpie.Avalonia;

public class Application : global::Avalonia.Application
{
    public bool IsClassicDesktopStyleApplicationLifetime()
    {
        if (ApplicationLifetime is IClassicDesktopStyleApplicationLifetime)
        {
            return true;
        }
        return false;
    }
    
    public bool IsSingleViewApplicationLifetime()
    {
        if (ApplicationLifetime is ISingleViewApplicationLifetime)
        {
            return true;
        }
        return false;
    }
}