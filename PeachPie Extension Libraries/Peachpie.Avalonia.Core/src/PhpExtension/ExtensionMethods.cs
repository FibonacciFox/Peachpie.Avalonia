using Pchp.Core;
using Peachpie.Avalonia.Core.Threading;

[assembly: PhpExtension]

namespace Peachpie.Avalonia.Core.PhpExtension;

public static class ExtensionMethods
{
    public static void UiLater(Context ctx, IPhpCallable callback)
    {
        UiDispatcher.Post(ctx, callback);
    }
}
