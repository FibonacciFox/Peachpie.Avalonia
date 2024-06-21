using System;
using System.Collections.Concurrent;
using System.Collections.Generic;
using System.Reflection;
using Pchp.Core;

namespace Php.Listener
{
    /// <summary>
    /// A static class for managing events in the context of PHP using Peachpie.
    /// Статический класс для управления событиями в контексте PHP с использованием Peachpie.
    /// </summary>
    public static class Event
    {
        // Кэш для хранения информации о событиях и делегатах
        private static readonly ConcurrentDictionary<string, (EventInfo, Delegate)> CachedEventAll = new();
        // Кэш для хранения EventInfo по типу и имени события
        private static readonly ConcurrentDictionary<Type, Dictionary<string, EventInfo>> EventInfoCache = new();

        /// <summary>
        /// Adds an event handler to the specified event of the target object.
        /// Добавляет обработчик события к указанному событию целевого объекта.
        /// </summary>
        /// <param name="ctx">The PHP context. Контекст PHP.</param>
        /// <param name="targetObject">The target object. Целевой объект.</param>
        /// <param name="eventName">The name of the event. Имя события.</param>
        /// <param name="eventHandler">The PHP callable event handler. Обработчик события, вызываемый из PHP.</param>
        /// <param name="eventId">The optional event ID. Опциональный идентификатор события.</param>
        /// <exception cref="ArgumentException">Thrown if the event handler already exists or the event is not found. Выбрасывается, если обработчик события уже существует или событие не найдено.</exception>
        public static void On(Context ctx, object targetObject, string eventName, IPhpCallable eventHandler, string? eventId = null)
        {
            if (string.IsNullOrWhiteSpace(eventName))
                throw new ArgumentException("Event name must be provided.", nameof(eventName));

            eventId ??= $"{eventName}:{eventHandler.GetHashCode()}";

            if (CachedEventAll.ContainsKey(eventId))
            {
                throw new ArgumentException($"Event handler '{eventId}' already exists");
            }

            var targetType = targetObject.GetType();
            if (!EventInfoCache.TryGetValue(targetType, out var eventInfoDict))
            {
                eventInfoDict = new Dictionary<string, EventInfo>();
                EventInfoCache[targetType] = eventInfoDict;
            }

            if (!eventInfoDict.TryGetValue(eventName, out var eventInfo))
            {
                eventInfo = targetType.GetEvent(eventName);
                if (eventInfo == null)
                {
                    throw new ArgumentException($"Event '{eventName}' not found on object of type '{targetObject.GetType().Name}'");
                }
                eventInfoDict[eventName] = eventInfo;
            }

            var handler = CreateHandler(ctx, eventHandler);
            var newDelegate = CreateDelegate(eventInfo.EventHandlerType, handler);
            if (newDelegate == null)
            {
                throw new InvalidOperationException("Could not create delegate for event handler.");
            }

            eventInfo.AddEventHandler(targetObject, newDelegate);
            CachedEventAll[eventId] = (eventInfo, newDelegate);
        }

        /// <summary>
        /// Removes an event handler from the specified event of the target object.
        /// Удаляет обработчик события с указанного события целевого объекта.
        /// </summary>
        /// <param name="targetObject">The target object. Целевой объект.</param>
        /// <param name="eventId">The event ID. Идентификатор события.</param>
        /// <exception cref="ArgumentException">Thrown if the event ID is not provided or the event handler is not found. Выбрасывается, если идентификатор события не предоставлен или обработчик события не найден.</exception>
        public static void Off(object targetObject, string eventId)
        {
            if (string.IsNullOrWhiteSpace(eventId))
            {
                throw new ArgumentException("Event ID must be provided.", nameof(eventId));
            }

            if (CachedEventAll.TryRemove(eventId, out var eventHandlerPairAll))
            {
                eventHandlerPairAll.Item1.RemoveEventHandler(targetObject, eventHandlerPairAll.Item2);
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
        private static EventHandler CreateHandler(Context ctx, IPhpCallable callback)
        {
            return (sender, e) => callback.Invoke(ctx, PhpValue.FromClass(sender), PhpValue.FromClass(e));
        }

        /// <summary>
        /// Creates a delegate for the specified event handler type.
        /// Создает делегат для указанного типа обработчика события.
        /// </summary>
        /// <param name="eventType">The event handler type. Тип обработчика события.</param>
        /// <param name="handler">The event handler. Обработчик события.</param>
        /// <returns>Returns a Delegate. Возвращает Delegate.</returns>
        /// <exception cref="InvalidOperationException">Thrown if the constructor for the event handler type is not found. Выбрасывается, если конструктор для типа обработчика события не найден.</exception>
        private static Delegate CreateDelegate(Type eventType, EventHandler handler)
        {
            var constructor = eventType.GetConstructor(new[] { typeof(object), typeof(IntPtr) });
            if (constructor == null)
            {
                throw new InvalidOperationException("Could not find constructor for event handler type.");
            }

            return (Delegate)constructor.Invoke(new object[] { handler.Target, handler.Method.MethodHandle.GetFunctionPointer() });
        }
    }
}
