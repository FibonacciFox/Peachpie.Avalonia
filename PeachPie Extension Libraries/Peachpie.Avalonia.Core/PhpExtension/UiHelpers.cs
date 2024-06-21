using Avalonia.Threading;
using Pchp.Core;

[assembly: PhpExtension]


namespace Peachpie.Avalonia.Core.PhpExtension;

public static class UiHelpers
{
    public static void UiLater(Context ctx, IPhpCallable callable)
    {
        Dispatcher.UIThread.Post(() =>
        {
            callable.Invoke(ctx);
        });
    }
}