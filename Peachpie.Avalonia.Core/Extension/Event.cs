using System;
using System.Collections.Generic;
using Avalonia.Controls;
using Avalonia.Interactivity;
using Pchp.Core;

namespace Peachpie.Avalonia.Core.Extension
{
    public static class Event
    {
        private static readonly Dictionary<string, (RoutedEvent, EventHandler)> CachedEvent = new();
        
        public static void On(Control? targetClass, RoutedEvent eventType, Closure callback , string eventName)
        {
            if (targetClass == null)
            {
                throw new ArgumentException($"Event '{eventType}' not found on object of type '{targetClass?.GetType().Name}'");
            }
            
            if (CachedEvent.ContainsKey(eventName))
            {
                throw new ArgumentException($"Event handler '{eventName}' already exists");
            }

            EventHandler handler = (sender, e) =>
            {
                callback.__invoke(PhpValue.FromClass(sender), PhpValue.FromClass(e));
            };
            
            targetClass.AddHandler(eventType, handler);
            
            CachedEvent.Add(eventName, (eventType, handler));
        }

        public static void Off(Control? targetClass, string eventName )
        {
            if (targetClass == null)
            {
                throw new ArgumentException($"Event not found on object of type '{targetClass?.GetType().Name}'");
            }
            
            if (CachedEvent.TryGetValue(eventName, out var eventHandlerPair))
            {
                targetClass.RemoveHandler(eventHandlerPair.Item1, eventHandlerPair.Item2);

                CachedEvent.Remove(eventName);
            }
            else
            {
                throw new ArgumentException($"Event handler '{eventName}' not found");
            }
        }
    }
}