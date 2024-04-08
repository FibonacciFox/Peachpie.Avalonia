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
        private static readonly Dictionary<string,( EventInfo?, Delegate?)> CachedEventAll = new();
        
        public static void On(object targetClass, string eventName, Closure callback , string eventId)
        {
            if (CachedEventAll.TryGetValue(eventId, out _))
            {
                throw new ArgumentException($"Event handler '{eventId}' already exists");
            }

            var eventInfo = targetClass.GetType().GetEvent(eventName);
            if (eventInfo == null)
            {
                throw new ArgumentException($"Event '{eventName}' not found on object of type '{targetClass?.GetType().Name}'");
            }
            
            var handler = CreateHandler(callback);
            var newDelegate = CreateDelegate(eventInfo.EventHandlerType, handler);
            eventInfo.AddEventHandler(targetClass, newDelegate);
            CachedEventAll.Add(eventId, (eventInfo, newDelegate));
        }
        
        public static void On(Control? targetClass, RoutedEvent eventType, Closure callback , string eventId)
        {
            if (targetClass == null || CachedEventAvalonia.TryGetValue(eventId, out var _))
            {
                throw new ArgumentException($"Event handler '{eventId}' already exists");
            }

            var handler = CreateHandler(callback);
            targetClass.AddHandler(eventType, handler);
            CachedEventAvalonia.Add(eventId, (eventType, handler));
        }
    
        public static void Off(object targetClass, string eventId )
        {
            if (targetClass == null)
            {
                throw new ArgumentException($"Event not found on object of type '{targetClass?.GetType().Name}'");
            }

            if (targetClass is Control avaloniaControl && CachedEventAvalonia.TryGetValue(eventId, out var eventHandlerPairAvalonia))
            {
                avaloniaControl.RemoveHandler(eventHandlerPairAvalonia.Item1, eventHandlerPairAvalonia.Item2);
                CachedEventAvalonia.Remove(eventId);
            }
            else if (CachedEventAll.TryGetValue(eventId, out var eventHandlerPairAll))
            {
                eventHandlerPairAll.Item1?.RemoveEventHandler(targetClass , eventHandlerPairAll.Item2);
                CachedEventAll.Remove(eventId);
            }
            else
            {
                throw new ArgumentException($"Event handler '{eventId}' not found");
            }
        }
        
        private static EventHandler CreateHandler(Closure callback)
        {
            return (sender, e) => callback.__invoke(PhpValue.FromClass(sender), PhpValue.FromClass(e));
        }

        private static Delegate? CreateDelegate(Type? type, EventHandler handler)
        {
            return (Delegate) type?.GetConstructor(new[] {typeof(object), typeof(IntPtr)})
                ?.Invoke(new object[] {handler.Target, handler.Method.MethodHandle.GetFunctionPointer()});
        }
    }
}
