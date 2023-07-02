using System;
using Pchp.Core;

namespace Peachpie.Avalonia.Extension;

public class Events
{
    public static void On(object targetClass, string eventName, Closure callback)
    {
        var eventInfo = targetClass.GetType().GetEvent(eventName);
        if (eventInfo != null)
            eventInfo.AddEventHandler(targetClass,
                CreateDelegate(eventInfo.EventHandlerType,
                    (_, e) =>
                    {
                        callback.__invoke(PhpValue.FromClass(_), PhpValue.FromClass(e));
                    }));
        else
            throw new ArgumentException(
                $"Event '{eventName}' not found on object of type '{targetClass.GetType().Name}'");
    }
    
    private static Delegate CreateDelegate(Type type, EventHandler handler)
    {
        return (Delegate) type.GetConstructor(new[] {typeof(object), typeof(IntPtr)})
            ?.Invoke(new[] {handler.Target, handler.Method.MethodHandle.GetFunctionPointer()});
    }
}