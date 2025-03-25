using System;

namespace Peachpie.Community;

/// <summary>
/// Utility methods for working with .NET types from PeachPie.
/// </summary>
public static class TypeHelper
{
    /// <summary>
    /// Gets the System.Type of the provided non-null object instance.
    /// </summary>
    /// <param name="obj">Any non-null object.</param>
    /// <returns>The runtime type of <paramref name="obj"/>.</returns>
    /// <exception cref="ArgumentNullException"></exception>
    public static Type GetObjectType(object obj)
    {
        if (obj == null) throw new ArgumentNullException(nameof(obj));
        return obj.GetType();
    }

    /// <summary>
    /// Gets the base type of the provided object's runtime type,
    /// or null if this type is <see cref="object"/> or an interface.
    /// </summary>
    /// <param name="obj">Any non-null object.</param>
    /// <returns>The base type, or null if none.</returns>
    /// <exception cref="ArgumentNullException"></exception>
    public static Type? GetBaseType(object obj)
    {
        if (obj == null) throw new ArgumentNullException(nameof(obj));
        return obj.GetType().BaseType;
    }
}