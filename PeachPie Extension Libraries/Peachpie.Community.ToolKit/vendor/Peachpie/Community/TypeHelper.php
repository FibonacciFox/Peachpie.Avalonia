<?php

namespace Peachpie\Community;

use InvalidArgumentException;
use System\Type;

/**
 * Utility methods for working with .NET types from PeachPie.
 */
class TypeHelper
{
    /**
     * Gets the System.Type of the provided non-null object instance.
     *
     * @param mixed $obj Any non-null object.
     * @return Type The runtime type of $obj.
     *
     * @throws InvalidArgumentException if $obj is null
     */
    public static function GetObjectType(Type $obj) : Type
    {
        // Заглушка: реализация происходит в C#.
    }

    /**
     * Gets the base type of the provided object's runtime type,
     * or null if this type is 'object' or an interface.
     *
     * @param mixed $obj Any non-null object.
     * @return Type|null The base type, or null if none (e.g. Object or interface).
     *
     * @throws InvalidArgumentException if $obj is null
     */
    public static function GetBaseType(Type $obj) : ?Type
    {
        // Заглушка: реализация происходит в C#.
    }
}
