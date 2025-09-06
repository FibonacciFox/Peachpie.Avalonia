<?php

namespace Peachpie\Avalonia\Traits;

use Peachpie\Avalonia\Core\Extension\ControlFinder;
use Avalonia\Controls\Control;

trait GetControlTrait
{
    /**
     * Находит вложенный контрол (Control) по имени,
     * начиная от текущего объекта (this), используя его NameScope.
     *
     * @param string $name Имя искомого элемента.
     * @return mixed|null Вернёт объект Control, если найден, иначе null.
     */
    public function FindByName(string $name): ?Control
    {
        // Вызваем C#-метод ControlFinder.ByName(this, $name)
        // который внутри использует targetComponent.FindNameScope()?.Find<Control>($name);
        return ControlFinder::ByName($this, $name);
    }
}
