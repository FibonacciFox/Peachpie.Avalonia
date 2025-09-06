<?php

namespace Peachpie\Avalonia\Traits;

use Exception;

/**
 * Этот трейт добавляет метод on($eventName, $callback), который:
 *  1) Проверяет, существует ли в объекте публичное событие $eventName
 *  2) Вызывает ->add($callback), возвращая hook-объект
 *  3) Позволяет потом вызвать $hook->dispose() для отписки
 */
trait EventTrait
{
    /**
     * Подписка на .NET-событие $eventName у текущего объекта (this).
     * Возвращает объект-подписку (hook), у которого есть метод `dispose()`.
     *
     * Пример использования:
     *   $hook = $button->on("Click", function($sender, $args) {
     *       echo "Button clicked!";
     *   });
     *   // Позже, если нужно отписаться:
     *   $hook->dispose();
     *
     * @param string   $eventName
     * @param callable $callback
     * @return mixed           Возвращаемый объект-подписку
     * @throws Exception       Если событие не найдено
     */
    public function on(string $eventName, callable $callback): mixed
    {
        // Проверяем, что действительно существует публичное свойство-событие
        // (например, $this->Click и т.д.)
        if (!property_exists($this, $eventName)) {
            throw new Exception("Event '$eventName' not found on " . get_class($this));
        }

        // Извлекаем объект события, который PeachPie предоставляет как "ClrEvent" (или похожий тип).
        // У него должен быть метод ->add($callback), который возвращает 'hook' (подписку).
        $eventObj = $this->$eventName;

        // Вызываем ->add($callback). В новых версиях PeachPie это вернёт subscription-объект
        // со методом dispose().
        return $eventObj->add($callback);
    }
}
