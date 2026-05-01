<?php

namespace Peachpie\Avalonia\Xaml;

use Avalonia\Controls\Control;
use Peachpie\Avalonia\Core\Extension\ControlFinder;
use ReflectionObject;
use ReflectionProperty;
use RuntimeException;

final class Xaml
{
    /**
     * Binds public typed properties to controls with matching x:Name values.
     *
     * @param Control $root
     * @param array<string, string>|null $map
     * @return Control
     */
    public static function bind(Control $root, ?array $map = null): Control
    {
        $reflection = new ReflectionObject($root);

        foreach ($reflection->getProperties(ReflectionProperty::IS_PUBLIC) as $property) {
            if ($property->isStatic()) {
                continue;
            }

            $propertyName = $property->getName();
            $controlName = $map[$propertyName] ?? $propertyName;
            $control = self::find($root, $controlName);

            if ($control === null) {
                continue;
            }

            $property->setValue($root, $control);
        }

        return $root;
    }

    public static function find(Control $root, string $name): ?Control
    {
        return ControlFinder::ByName($root, $name);
    }

    public static function require(Control $root, string $name): Control
    {
        $control = self::find($root, $name);

        if ($control === null) {
            throw new RuntimeException("Control '$name' was not found in the current XAML namescope.");
        }

        return $control;
    }
}
