using System;
using System.Collections.Concurrent;
using System.Collections.Generic;
using System.Reflection;
using Avalonia.Controls;
using Avalonia.Interactivity;
using Pchp.Core;

namespace Peachpie.Avalonia.Core.Extension
{
    /// <summary>
    /// A static class for managing events in Avalonia controls using PHP and Peachpie.
    /// Статический класс для управления событиями в элементах управления Avalonia с использованием PHP и Peachpie.
    /// </summary>
    public static class Event
    {
        // Кэш для хранения информации о событиях и обработчиках
        private static readonly ConcurrentDictionary<string, (RoutedEvent, Delegate)> CachedEventAvalonia = new();
        private static readonly ConcurrentDictionary<Type, Dictionary<string, RoutedEvent>> EventCache = new();

        /// <summary>
        /// Binds an event handler to the specified event of the target object.
        /// Привязывает обработчик события к указанному событию целевого объекта.
        /// </summary>
        /// <param name="ctx">The PHP context. Контекст PHP.</param>
        /// <param name="targetObject">The target control object. Целевой объект управления.</param>
        /// <param name="eventType">The type of the event. Тип события.</param>
        /// <param name="eventHandler">The PHP callable event handler. Обработчик события, вызываемый из PHP.</param>
        /// <param name="eventId">The optional event ID. Опциональный идентификатор события.</param>
        /// <exception cref="ArgumentException">Thrown if the event handler already exists or the target object is null. Выбрасывается, если обработчик события уже существует или целевой объект равен null.</exception>
        public static void Bind(Context ctx, Control? targetObject, string eventType, IPhpCallable eventHandler, string? eventId = null)
        {
            if (targetObject == null)
            {
                throw new ArgumentNullException(nameof(targetObject), "Target object must not be null.");
            }

            if (string.IsNullOrWhiteSpace(eventType))
            {
                throw new ArgumentException("Event type must be provided.", nameof(eventType));
            }

            eventId ??= $"{eventType}:{eventHandler.GetHashCode()}";

            if (CachedEventAvalonia.ContainsKey(eventId))
            {
                throw new ArgumentException($"Event handler '{eventId}' already exists");
            }

            var targetType = targetObject.GetType();
            if (!EventCache.TryGetValue(targetType, out var eventDict))
            {
                eventDict = new Dictionary<string, RoutedEvent>();
                EventCache[targetType] = eventDict;
            }

            if (!eventDict.TryGetValue(eventType, out var routedEvent))
            {
                routedEvent = FindRoutedEvent(targetObject, eventType);
                if (routedEvent == null)
                {
                    throw new ArgumentException($"Event '{eventType}' not found on object of type '{targetObject.GetType().Name}'");
                }
                eventDict[eventType] = routedEvent;
            }

            var handler = CreateHandler(ctx, eventHandler);
            targetObject.AddHandler(routedEvent, handler);
            CachedEventAvalonia[eventId] = (routedEvent, handler);
        }

        /// <summary>
        /// Removes an event handler from the specified event of the target object.
        /// Удаляет обработчик события с указанного события целевого объекта.
        /// </summary>
        /// <param name="targetObject">The target control object. Целевой объект управления.</param>
        /// <param name="eventId">The event ID. Идентификатор события.</param>
        /// <exception cref="ArgumentException">Thrown if the event ID is not provided, the target object is null, or the event handler is not found. Выбрасывается, если идентификатор события не предоставлен, целевой объект равен null или обработчик события не найден.</exception>
        public static void Off(object targetObject, string eventId)
        {
            if (targetObject == null)
            {
                throw new ArgumentNullException(nameof(targetObject), "Target object must not be null.");
            }

            if (string.IsNullOrWhiteSpace(eventId))
            {
                throw new ArgumentException("Event ID must be provided.", nameof(eventId));
            }

            if (targetObject is Control avaloniaControl && CachedEventAvalonia.TryRemove(eventId, out var eventHandlerPair))
            {
                avaloniaControl.RemoveHandler(eventHandlerPair.Item1, eventHandlerPair.Item2);
            }
            else
            {
                throw new ArgumentException($"Event handler '{eventId}' not found");
            }
        }

        /// <summary>
        /// Creates an event handler that invokes a PHP callable.
        /// Создает обработчик события, который вызывает PHP-вызываемую функцию.
        /// </summary>
        /// <param name="ctx">The PHP context. Контекст PHP.</param>
        /// <param name="callback">The PHP callable. PHP-вызываемая функция.</param>
        /// <returns>Returns an EventHandler. Возвращает EventHandler.</returns>
        private static EventHandler<RoutedEventArgs> CreateHandler(Context ctx, IPhpCallable callback)
        {
            return (sender, e) => callback.Invoke(ctx, PhpValue.FromClass(sender), PhpValue.FromClass(e));
        }

        /// <summary>
        /// Finds a routed event by its name in the target control.
        /// Находит маршрутизируемое событие по его имени в целевом элементе управления.
        /// </summary>
        /// <param name="targetObject">The target control object. Целевой объект управления.</param>
        /// <param name="eventType">The type of the event. Тип события.</param>
        /// <returns>Returns the RoutedEvent if found, otherwise null. Возвращает RoutedEvent, если найден, иначе null.</returns>
        private static RoutedEvent? FindRoutedEvent(Control targetObject, string eventType)
        {
            var routedEvents = targetObject.GetType().GetFields(BindingFlags.Static | BindingFlags.Public | BindingFlags.FlattenHierarchy);
            foreach (var routedEvent in routedEvents)
            {
                if (routedEvent.FieldType == typeof(RoutedEvent) && routedEvent.Name == eventType)
                {
                    return (RoutedEvent?)routedEvent.GetValue(null);
                }
            }
            return null;
        }
    }
}
