using System;
using System.Collections.Generic;
using Avalonia.Controls;
using Avalonia.Interactivity;
using Pchp.Core;

namespace Peachpie.Avalonia.Core.Extension
{
    public static class Event
    {
        private static readonly Dictionary<string, (RoutedEvent, EventHandler)> CachedEventAvalonia = new();
        
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
