<?php

namespace Peachpie\Avalonia\Mvvm;

use Peachpie\Community\Reactive\DelegateCommand;

final class Command
{
    public static function create(callable $execute, ?callable $canExecute = null): DelegateCommand
    {
        return DelegateCommand::Create($execute, $canExecute);
    }

    public static function refresh(DelegateCommand $command): void
    {
        $command->RaiseCanExecuteChanged();
    }
}
