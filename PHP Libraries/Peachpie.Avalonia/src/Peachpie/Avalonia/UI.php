<?php

namespace Peachpie\Avalonia;

use Peachpie\Avalonia\Core\Threading\UiDispatcher;

final class UI
{
    public static function checkAccess(): bool
    {
        return UiDispatcher::CheckAccess();
    }

    public static function invoke(callable $callback): void
    {
        UiDispatcher::Invoke($callback);
    }

    public static function post(callable $callback): void
    {
        UiDispatcher::Post($callback);
    }

    public static function later(callable $callback): void
    {
        self::post($callback);
    }
}
