using System;

namespace Peachpie.Avalonia.Core.Extension;

public static class BaseType
{
    public static Type? Get(object obj)
    {
        return obj.GetType().BaseType;
    }
}