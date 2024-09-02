using Avalonia.Threading;
using Pchp.Core;

[assembly: PhpExtension]

namespace Peachpie.Avalonia.Core.PhpExtension;

public static class ExtensionMethods
{
    public static void UiLater(Context ctx, IPhpCallable callback)
    {
        Dispatcher.UIThread.Post(() => callback.Invoke(ctx));
    }
}