using System;
using System.Collections.Generic;
using System.Reflection;
using Pchp.Core;

namespace Peachpie.Community.Listener;

public static class Event
{
    public static void On(Context ctx, object targetObject, string eventName, IPhpCallable eventHandler,
        string? eventId = null)
    {
        if (eventId == null)
        {
            eventId = $"{eventName}:{eventHandler.GetHashCode()}";
        }

        if (CachedEventAll.TryGetValue(eventId, out _))
        {
            throw new ArgumentException($"Event handler '{eventId}' already exists");
        }

        var eventInfo = targetObject.GetType().GetEvent(eventName);
        if (eventInfo == null)
        {
            throw new ArgumentException(
                $"Event '{eventName}' not found on object of type '{targetObject?.GetType().Name}'");
        }

        var handler = CreateHandler(ctx, eventHandler);
        var newDelegate = CreateDelegate(eventInfo.EventHandlerType, handler);
        eventInfo.AddEventHandler(targetObject, newDelegate);
        CachedEventAll.Add(eventId, (eventInfo, newDelegate));
    }
    
    public static void Off(object targetObject, string? eventId)
    {
        if (targetObject == null)
        {
            throw new ArgumentException($"Event not found on object of type '{targetObject.GetType().Name}'");
        }
        
        if (CachedEventAll.TryGetValue(eventId, out var eventHandlerPairAll))
        {
            eventHandlerPairAll.Item1?.RemoveEventHandler(targetObject, eventHandlerPairAll.Item2);
            CachedEventAll.Remove(eventId);
        }
        else
        {
            throw new ArgumentException($"Event handler '{eventId}' not found");
        }
    }

    private static EventHandler CreateHandler(Context ctx, IPhpCallable callback)
    {
        return (sender, e) => callback.Invoke(ctx, PhpValue.FromClass(sender), PhpValue.FromClass(e));
    }

    private static Delegate? CreateDelegate(Type? type, EventHandler handler)
    {
        return (Delegate)type?.GetConstructor(new[] { typeof(object), typeof(IntPtr) })
            ?.Invoke(new object[] { handler.Target, handler.Method.MethodHandle.GetFunctionPointer() });
    }
    
    private static readonly Dictionary<string, (EventInfo, Delegate)> CachedEventAll = new();
}

