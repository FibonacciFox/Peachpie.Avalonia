using System;
using System.Linq;
using System.Reflection;
using Avalonia;
using Avalonia.Controls.ApplicationLifetimes;

namespace Peachpie.Avalonia.Core
{
    public class AppPhpBuilder
    {
        public AppBuilder Builder => _appBuilder;
        
        private readonly AppBuilder _appBuilder;

        /// <summary>
        /// Настраивает построитель приложения с указанным типом приложения.
        /// Если имя сборки не указано, оно определяется автоматически.
        /// Configure the application builder with the specified application type.
        /// If the assembly name is not provided, it is determined automatically.
        /// </summary>
        /// <param name="applicationType">Имя класса приложения. / The application class name.</param>
        /// <param name="assemblyName">
        /// Имя сборки, содержащей класс приложения. / The name of the assembly containing the application class.
        /// Если не указано, определяется автоматически. / If not provided, it is determined automatically.
        /// </param>
        /// <returns>Экземпляр AppPhpBuilder. / An instance of AppPhpBuilder.</returns>
        public static AppPhpBuilder Configure(string applicationType, string? assemblyName = null)
        {
            if (string.IsNullOrWhiteSpace(applicationType))
            {
                throw new ArgumentException("Application type must be provided. / Тип приложения должен быть указан.", nameof(applicationType));
            }

            if (string.IsNullOrWhiteSpace(assemblyName))
            {
                assemblyName = Assembly.GetEntryAssembly()?.GetName().Name;
                if (string.IsNullOrWhiteSpace(assemblyName))
                {
                    throw new ArgumentException("Unable to determine the assembly name automatically. / Невозможно автоматически определить имя сборки.", nameof(assemblyName));
                }
            }

            // Формируем полное квалифицированное имя типа
            // Combine the application type and assembly name to form the fully qualified name
            string qualifiedName = $"{applicationType}, {assemblyName}";
            Type? appType = Type.GetType(qualifiedName);
            if (appType == null)
            {
                throw new ArgumentException("Invalid application type or assembly name. / Неверный тип приложения или имя сборки.", nameof(applicationType));
            }

            AppBuilder appBuilder = CreateAppBuilder(appType);
            return new AppPhpBuilder(appBuilder);
        }

        /// <summary>
        /// Создает AppBuilder для указанного типа приложения.
        /// Creates an AppBuilder for the specified application type.
        /// </summary>
        /// <param name="applicationType">Тип класса приложения. / The application class type.</param>
        /// <returns>Экземпляр AppBuilder. / An instance of AppBuilder.</returns>
        /// <exception cref="InvalidOperationException">Если метод Configure не найден.</exception>
        private static AppBuilder CreateAppBuilder(Type applicationType)
        {
            // Ищем универсальный метод Configure в AppBuilder
            // Find the generic Configure method in AppBuilder
            var configureMethod = typeof(AppBuilder).GetMethods()
                .FirstOrDefault(method => method.Name == "Configure" && method.IsGenericMethod);

            if (configureMethod == null)
            {
                throw new InvalidOperationException("Configure method not found. / Метод Configure не найден.");
            }

            // Делаем метод Configure специфичным для указанного типа приложения
            // Make the Configure method specific to the application type
            var genericConfigureMethod = configureMethod.MakeGenericMethod(applicationType);
            return (AppBuilder)genericConfigureMethod.Invoke(null, null);
        }

        /// <summary>
        /// Инициализирует новый экземпляр AppPhpBuilder.
        /// Initializes a new instance of the AppPhpBuilder class.
        /// </summary>
        /// <param name="appBuilder">Экземпляр AppBuilder. / An instance of AppBuilder.</param>
        private AppPhpBuilder(AppBuilder appBuilder)
        {
            _appBuilder = appBuilder ?? throw new ArgumentNullException(nameof(appBuilder));
        }
        
        /// <summary>
        /// Настраивает приложение с указанным временем жизни.
        /// Sets up the application with the specified lifetime.
        /// </summary>
        /// <param name="lifetime">Время жизни приложения. / The application lifetime.</param>
        /// <returns>Текущий экземпляр AppPhpBuilder для цепочки вызовов. / The current instance of AppPhpBuilder for chaining.</returns>
        public AppPhpBuilder SetupWithLifetime(IApplicationLifetime lifetime)
        {
            _appBuilder.SetupWithLifetime(lifetime);
            return this;
        }
        
        /// <summary>
        /// Настраивает логирование в трассировку.
        /// Configures the application to log to trace.
        /// </summary>
        /// <returns>Текущий экземпляр AppPhpBuilder для цепочки вызовов. / The current instance of AppPhpBuilder for chaining.</returns>
        public AppPhpBuilder LogToTrace()
        {
            _appBuilder.LogToTrace();
            return this;
        }
    }
}
