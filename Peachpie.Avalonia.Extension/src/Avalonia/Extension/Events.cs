using System;
using Pchp.Core;
using System.Collections.Generic;
using System.Reflection;

namespace Peachpie.Avalonia.Extension
{
    public static class Events
    {
        // Кэш для хранения информации о событиях для различных типов объектов
        private static readonly Dictionary<Type, Dictionary<string, EventInfo>> _cachedEventInfos = new Dictionary<Type, Dictionary<string, EventInfo>>();

        // Метод для подключения обработчика события к объекту
        public static void On(object targetClass, string eventName, Closure callback)
        {
            if (targetClass == null)
            {
                throw new ArgumentNullException(nameof(targetClass));
            }

            // Получаем тип объекта
            var targetType = targetClass.GetType();
            // Получаем информацию о событии из кэша
            var eventInfo = GetCachedEventInfo(targetType, eventName);

            if (eventInfo != null)
            {
                // Создаем делегат для вызова замыкания при возникновении события
                eventInfo.AddEventHandler(targetClass,
                    CreateDelegate(eventInfo.EventHandlerType,
                        (sender, e) =>
                        {
                            // Вызываем замыкание, передавая аргументы в PHP-значениях
                            callback.__invoke(PhpValue.FromClass(sender), PhpValue.FromClass(e));
                        }));
            }
            else
            {
                // Если событие не найдено, выбрасываем исключение
                throw new ArgumentException($"Событие '{eventName}' не найдено на объекте типа '{targetType.Name}'");
            }
        }
        
        // Метод для получения информации о событии из кэша
        private static EventInfo GetCachedEventInfo(Type targetType, string eventName)
        {
            // Если в кэше нет информации о данном типе, создаем запись в словаре
            if (!_cachedEventInfos.TryGetValue(targetType, out var eventDictionary))
            {
                eventDictionary = new Dictionary<string, EventInfo>();
                _cachedEventInfos[targetType] = eventDictionary;
            }

            // Если в записи нет информации о данном событии, получаем информацию о событии и сохраняем в словаре
            if (!eventDictionary.TryGetValue(eventName, out var eventInfo))
            {
                eventInfo = targetType.GetEvent(eventName);
                eventDictionary[eventName] = eventInfo;
            }

            // Возвращаем информацию о событии
            return eventInfo;
        }

        private static Delegate CreateDelegate(Type type, EventHandler handler)
        {
            return (Delegate) type.GetConstructor(new[] {typeof(object), typeof(IntPtr)})
                ?.Invoke(new[] {handler.Target, handler.Method.MethodHandle.GetFunctionPointer()});
        }
    }
}


/*
public static class Events
{
    public static void On(object targetClass, string eventName, Closure callback)
    {
        var eventInfo = targetClass.GetType().GetEvent(eventName);
        if (eventInfo != null)
            eventInfo.AddEventHandler(targetClass,
                CreateDelegate(eventInfo.EventHandlerType,
                    (sender, e) =>
                    {
                        callback.__invoke(PhpValue.FromClass(sender), PhpValue.FromClass(e));
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
}*/