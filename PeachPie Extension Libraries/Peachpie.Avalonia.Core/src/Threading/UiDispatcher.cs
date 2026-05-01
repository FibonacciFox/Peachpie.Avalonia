using System;
using Avalonia.Threading;
using Pchp.Core;

namespace Peachpie.Avalonia.Core.Threading;

public static class UiDispatcher
{
    public static bool CheckAccess() => Dispatcher.UIThread.CheckAccess();

    public static void Invoke(Context ctx, IPhpCallable callback)
    {
        ArgumentNullException.ThrowIfNull(ctx);
        ArgumentNullException.ThrowIfNull(callback);

        if (Dispatcher.UIThread.CheckAccess())
        {
            callback.Invoke(ctx);
            return;
        }

        Dispatcher.UIThread.Invoke(() => callback.Invoke(ctx));
    }

    public static void Post(Context ctx, IPhpCallable callback)
    {
        ArgumentNullException.ThrowIfNull(ctx);
        ArgumentNullException.ThrowIfNull(callback);

        Dispatcher.UIThread.Post(() => callback.Invoke(ctx));
    }
}
