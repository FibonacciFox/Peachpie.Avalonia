using System;
using Avalonia.Controls;

namespace Peachpie.Avalonia.Core.Extension
{
    /// <summary>
    /// A class for finding controls by their name within a target component in Avalonia.
    /// Класс для поиска элементов управления по их имени в целевом компоненте Avalonia.
    /// </summary>
    public class GetControl
    {
        /// <summary>
        /// Finds a control by its name within the specified target component.
        /// Находит элемент управления по его имени в указанном целевом компоненте.
        /// </summary>
        /// <param name="targetComponent">The target component where the search will be performed.
        /// Целевой компонент, в котором будет производиться поиск.</param>
        /// <param name="name">The name of the control to find.
        /// Имя элемента управления, который нужно найти.</param>
        /// <returns>Returns the control if found, otherwise null.
        /// Возвращает элемент управления, если он найден, иначе null.</returns>
        public static Control? FindByName(Control targetComponent, string name)
        {
            if (targetComponent == null)
            {
                throw new ArgumentNullException(nameof(targetComponent), "Target component must not be null.");
            }

            if (string.IsNullOrWhiteSpace(name))
            {
                throw new ArgumentException("Control name must be provided and not be empty or whitespace.", nameof(name));
            }

            var nameScope = targetComponent.FindNameScope();
            if (nameScope == null)
            {
                throw new InvalidOperationException("Name scope not found in the target component.");
            }

            return nameScope.Find<Control>(name);
        }
    }
}