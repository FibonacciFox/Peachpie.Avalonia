<?php

namespace Peachpie\Avalonia\Ux;

use Avalonia\Controls\Control;
use SplObjectStorage;

/**
 * Входная точка: Ux::of($control)->onClick(...)
 * Кэширует EventProxy, чтобы один Control имел один прокси.
 */
final class Ux
{
    /** @var SplObjectStorage<Control, EventProxy> */
    private static ?SplObjectStorage $map = null;

    public static function of(Control $c): EventProxy
    {
        if (self::$map === null) self::$map = new SplObjectStorage();
        if (!isset(self::$map[$c])) self::$map[$c] = new EventProxy($c);
        return self::$map[$c];
    }

    public static function on(Control $c, string|array $ev, callable $h): EventProxy
    {
        return self::of($c)->on($ev, $h);
    }

    public static function once(Control $c, string $ev, callable $h): EventProxy
    {
        return self::of($c)->once($ev, $h);
    }

    public static function off(Control $c, string $ev, ?callable $h = null): EventProxy
    {
        return self::of($c)->off($ev, $h);
    }

    public static function offAll(Control $c): void
    {
        self::of($c)->offAll();
    }

    // Удобный хелпер поиска по имени (делегирует твоему ControlFinder)
    public static function find(Control $root, string $name): ?Control
    {
        return \Peachpie\Avalonia\Core\Extension\ControlFinder::ByName($root, $name);
    }
}

/** Необязательный глобальный сахар: ux($control)->onClick(...) */
function ux(Control $c): EventProxy { return Ux::of($c); }
