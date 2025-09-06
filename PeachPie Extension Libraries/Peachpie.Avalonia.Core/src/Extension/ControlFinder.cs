using Avalonia.Controls;

namespace Peachpie.Avalonia.Core.Extension
{
    /// <summary>
    /// Предоставляет метод для поиска вложенного контрола по имени
    /// во внутренних NameScope.
    /// </summary>
    public static class ControlFinder
    {
        /// <summary>
        /// Ищет control (типа <see cref="Control"/>) с указанным <paramref name="name"/>
        /// в scope <paramref name="targetComponent"/>.
        /// Возвращает <c>null</c>, если элемент не найден.
        /// </summary>
        /// <param name="targetComponent">Контейнер, с которого начинается поиск</param>
        /// <param name="name">Имя искомого элемента</param>
        /// <returns>Найденный <see cref="Control"/> или <c>null</c>, если не найден</returns>
        public static Control? ByName(Control targetComponent, string name)
        {
            // Для поиска по имени используем NameScope, 
            // предоставляемый Avalonia (FindNameScope()?.Find<T>(name)).
            return targetComponent.FindNameScope()?.Find<Control>(name);
        }
    }
}
