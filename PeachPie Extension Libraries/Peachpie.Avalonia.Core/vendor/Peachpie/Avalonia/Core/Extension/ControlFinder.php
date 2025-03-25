<?php

namespace Peachpie\Avalonia\Core\Extension;

use Avalonia\Controls\Control;

/**
 * Предоставляет метод для поиска вложенного контрола по имени
 * во внутренних NameScope.
 */
class ControlFinder
{
    /**
     * Ищет control (типа Control) с указанным $name
     * в scope $targetComponent.
     * Возвращает null, если элемент не найден.
     *
     * @param Control $targetComponent Контейнер, с которого начинается поиск
     * @param string  $name            Имя искомого элемента
     * @return Control|null            Найденный Control или null, если не найден
     */
    public static function ByName(Control $targetComponent, string $name): ?Control
    {
        // Заглушка: фактическая реализация в C# (Peachpie).
        return $targetComponent;
    }
}
