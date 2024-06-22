using Avalonia.Threading;
using Pchp.Core;

[assembly: PhpExtension]

namespace Peachpie.Avalonia.Core.PhpExtension
{
    public static class UiHelpers
    {
        /// <summary>
        /// Планирует выполнение указанного вызываемого PHP объекта в потоке пользовательского интерфейса.
        /// </summary>
        /// <param name="ctx">Контекст PHP, в котором будет выполнен вызов.</param>
        /// <param name="callable">Вызываемый объект PHP, который будет выполнен в потоке пользовательского интерфейса.</param>
        /// <remarks>
        /// Этот метод гарантирует, что указанный вызываемый объект будет выполнен в потоке пользовательского интерфейса Avalonia,
        /// что позволяет безопасно обновлять пользовательский интерфейс из PHP-кода.
        /// </remarks>
        /// <example>
        /// <code>
        /// uiLater(callable $callable);
        /// </code>
        /// </example>
        public static void UiLater(Context ctx, IPhpCallable callable)
        {
            Dispatcher.UIThread.Post(() =>
            {
                callable.Invoke(ctx);
            });
        }
    }
}