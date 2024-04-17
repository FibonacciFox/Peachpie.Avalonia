using System;
using System.Collections.Generic;
using System.Reflection;
using Avalonia.Controls;
using Avalonia.Interactivity;
using Pchp.Core;

namespace Peachpie.Avalonia.Core.Extension
{
    public static class Event
    {
        private static readonly Dictionary<string, (RoutedEvent, EventHandler)> CachedEventAvalonia = new();
        private static readonly Dictionary<string, (EventInfo?, Delegate?)> CachedEventAll = new();
        
        public static void On(Context ctx , object targetObect, string eventName, IPhpCallable eventHandler , string? eventId = null)
        {
            if (eventId == null)
            {
                eventId = $"{eventName}:{targetObect.GetHashCode()}";
            }
            
            if (CachedEventAll.TryGetValue(eventId, out _))
            {
                throw new ArgumentException($"Event handler '{eventId}' already exists");
            }

            var eventInfo = targetObect.GetType().GetEvent(eventName);
            if (eventInfo == null)
            {
                throw new ArgumentException($"Event '{eventName}' not found on object of type '{targetObect?.GetType().Name}'");
            }
            
            var handler = CreateHandler(ctx, eventHandler);
            var newDelegate = CreateDelegate(eventInfo.EventHandlerType, handler);
            eventInfo.AddEventHandler(targetObect, newDelegate);
            CachedEventAll.Add(eventId, (eventInfo, newDelegate));
        }
        
        [PhpHidden]
        public static void On(Context ctx, Control? targetObect, RoutedEvent eventType, IPhpCallable eventHandler , string? eventId)
        {
            if (targetObect == null || CachedEventAvalonia.TryGetValue(eventId, out var _))
            {
                throw new ArgumentException($"Event handler '{eventId}' already exists");
            }

            var handler = CreateHandler(ctx, eventHandler);
            targetObect.AddHandler(eventType, handler);
            CachedEventAvalonia.Add(eventId, (eventType, handler));
        }
    
        public static void Off(object targetObect, string? eventId )
        {
            if (targetObect == null)
            {
                throw new ArgumentException($"Event not found on object of type '{targetObect?.GetType().Name}'");
            }

            if (targetObect is Control avaloniaControl && CachedEventAvalonia.TryGetValue(eventId, out var eventHandlerPairAvalonia))
            {
                avaloniaControl.RemoveHandler(eventHandlerPairAvalonia.Item1, eventHandlerPairAvalonia.Item2);
                CachedEventAvalonia.Remove(eventId);
            }
            else if (CachedEventAll.TryGetValue(eventId, out var eventHandlerPairAll))
            {
                eventHandlerPairAll.Item1?.RemoveEventHandler(targetObect , eventHandlerPairAll.Item2);
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
            return (Delegate) type?.GetConstructor(new[] {typeof(object), typeof(IntPtr)})
                ?.Invoke(new object[] {handler.Target, handler.Method.MethodHandle.GetFunctionPointer()});
        }
    }
}
