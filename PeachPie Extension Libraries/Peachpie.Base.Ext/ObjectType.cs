using System;

namespace Peachpie.Base.Ext;

public static class ObjectType
{
    /**
     * Gets the Type of the current instance.
     */
    public static Type? Get(object obj)
    {
        return obj.GetType();
    }

    /**
     * The Type from which the current Type directly inherits, or null if the current Type represents the Object class or an interface.
     */
    public static Type? GetBaseType(object obj)
    {
        return obj.GetType().BaseType;
    }
}