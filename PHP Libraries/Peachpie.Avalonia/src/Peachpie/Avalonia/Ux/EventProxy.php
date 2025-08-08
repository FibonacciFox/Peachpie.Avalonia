<?php

namespace Peachpie\Avalonia\Ux;

use Avalonia\Controls\Control;
use Avalonia\Controls\Window;

/**
 * Прокси над ЛЮБЫМ Avalonia Control.
 * Сахар: on(), once(), off(), offAll(), onClick(), onceClick(), offClick(), Click(fn)
 * Реализовано через PeachPie-хуки: $control->Event->add($callable) и hook->close()/dispose().
 */
final class EventProxy
{
    /** @var Control */
    private Control $c;

    /**
     * Map: eventName => list of ['callable' => callable, 'hook' => object]
     * @var array<string, array<int, array{callable: callable, hook: object}>>
     */
    private array $subs = [];

    public function __construct(Control $c)
    {
        $this->c = $c;
        $this->attachAutoCleanup();
    }

    #region Public API

    /**
     * Подписаться на одно или несколько событий.
     * @param string|string[] $event
     * @return $this
     */
    public function on(string|array $event, callable $handler): static
    {
        foreach ((array)$event as $ev) {
            $this->subs[$ev] ??= [];
            $hook = $this->attach($ev, $handler);
            $this->subs[$ev][] = ['callable' => $handler, 'hook' => $hook];
        }
        return $this;
    }

    /**
     * Подписка «один раз».
     * @return $this
     */
    public function once(string $event, callable $handler): static
    {
        $wrapper = null;
        $wrapper = function (...$args) use (&$wrapper, $event, $handler) {
            $handler(...$args);
            $this->off($event, $wrapper); // снять себя
        };
        return $this->on($event, $wrapper);
    }

    /**
     * Отписка. Если $handler не задан — снимает все обработчики на событии.
     * @return $this
     */
    public function off(string $event, ?callable $handler = null): static
    {
        if (!isset($this->subs[$event])) return $this;

        if ($handler === null) {
            foreach ($this->subs[$event] as $rec) $this->close($rec['hook']);
            $this->subs[$event] = [];
            return $this;
        }

        $kept = [];
        foreach ($this->subs[$event] as $rec) {
            if ($this->callableEquals($rec['callable'], $handler)) {
                $this->close($rec['hook']);
            } else {
                $kept[] = $rec;
            }
        }
        $this->subs[$event] = $kept;
        return $this;
    }

    /**
     * Снять ВСЕ подписки на ВСЕ события.
     * @return $this
     */
    public function offAll(): static
    {
        foreach ($this->subs as $list) {
            foreach ($list as $rec) $this->close($rec['hook']);
        }
        $this->subs = [];
        return $this;
    }

    /**
     * Сахар:
     *  - onClick(fn), onceClick(fn), offClick([fn])
     *  - Click(fn) → on('Click', fn)
     */
    public function __call(string $name, array $args)
    {
        if (preg_match('/^(on|once|off)([A-Z].*)$/', $name, $m)) {
            $verb = $m[1];
            $ev   = $m[2];
            return $this->$verb($ev, $args[0] ?? null);
        }

        // Короткая форма: $proxy->Click(fn)
        if (isset($args[0]) && is_callable($args[0]) && $this->hasEvent($name)) {
            return $this->on($name, $args[0]);
        }

        throw new \BadMethodCallException("Method $name not found");
    }

    #endregion

    #region Internals

    private function hasEvent(string $event): bool
    {
        // В PeachPie события — это публичные объекты с методом add()
        return property_exists($this->c, $event) && is_object($this->c->$event);
    }

    /** Подписка через официальный PeachPie-API: ->add($callable) → hook */
    private function attach(string $event, callable $handler): object
    {
        if (!$this->hasEvent($event)) {
            throw new \Exception("Event '$event' not found on ".get_class($this->c));
        }
        return $this->c->$event->add($handler);
    }

    /** Закрыть hook корректно. */
    private function close(object $hook): void
    {
        if (method_exists($hook, 'close')) { $hook->close(); return; }
        if (method_exists($hook, 'dispose')) { $hook->dispose(); return; }
    }

    /** Сравнение колбеков для точечной отписки. */
    private function callableEquals(callable $a, callable $b): bool
    {
        if ($a === $b) return true;
        if (is_array($a) && is_array($b) && count($a) === 2 && count($b) === 2) {
            return $a[0] === $b[0] && $a[1] === $b[1];
        }
        return false;
    }

    /** Авто-уборка подписок — полезно против утечек. */
    private function attachAutoCleanup(): void
    {
        if ($this->hasEvent('DetachedFromVisualTree')) {
            $this->on('DetachedFromVisualTree', fn() => $this->offAll());
        }
        if ($this->c instanceof Window && $this->hasEvent('Closed')) {
            $this->on('Closed', fn() => $this->offAll());
        }
    }

    #endregion
}
