using System;
using System.Windows.Input;
using Pchp.Core;

namespace Peachpie.Community.Reactive;

public sealed class DelegateCommand : ICommand
{
    private readonly Context _ctx;
    private readonly IPhpCallable _execute;
    private readonly IPhpCallable? _canExecute;

    private DelegateCommand(Context ctx, IPhpCallable execute, IPhpCallable? canExecute)
    {
        _ctx = ctx ?? throw new ArgumentNullException(nameof(ctx));
        _execute = execute ?? throw new ArgumentNullException(nameof(execute));
        _canExecute = canExecute;
    }

    public event EventHandler? CanExecuteChanged;

    public static DelegateCommand Create(Context ctx, IPhpCallable execute, IPhpCallable? canExecute = null) =>
        new(ctx, execute, canExecute);

    public bool CanExecute(object? parameter)
    {
        if (_canExecute is null)
        {
            return true;
        }

        return parameter is null
            ? _canExecute.Invoke(_ctx).ToBoolean()
            : _canExecute.Invoke(_ctx, PhpValue.FromClr(parameter)).ToBoolean();
    }

    public void Execute(object? parameter)
    {
        if (parameter is null)
        {
            _execute.Invoke(_ctx);
            return;
        }

        _execute.Invoke(_ctx, PhpValue.FromClr(parameter));
    }

    public void RaiseCanExecuteChanged() => CanExecuteChanged?.Invoke(this, EventArgs.Empty);
}
