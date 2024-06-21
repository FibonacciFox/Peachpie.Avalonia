using System;
using System.Linq;
using Avalonia;
using Avalonia.Controls.ApplicationLifetimes;

namespace Peachpie.Avalonia.Core
{
    /// <summary>
    /// A class to configure and build an Avalonia application from PHP.
    /// Класс для конфигурации и сборки приложения Avalonia из PHP.
    /// </summary>
    public class AppPhpBuilder
    {
        private AppBuilder _appBuilder;

        /// <summary>
        /// Configures the application builder with the specified application type.
        /// Конфигурирует сборщик приложений с указанным типом приложения.
        /// </summary>
        /// <param name="applicationType">The full name of the application type, including namespace.
        /// Полное имя типа приложения, включая пространство имен.</param>
        /// <returns>Returns an instance of AppPhpBuilder.
        /// Возвращает экземпляр AppPhpBuilder.</returns>
        /// <exception cref="ArgumentException">Thrown if the application type is null or invalid.
        /// Выбрасывается, если тип приложения равен null или недействителен.</exception>
        public static AppPhpBuilder Configure(string applicationType)
        {
            if (string.IsNullOrWhiteSpace(applicationType))
                throw new ArgumentException("Application type must be provided.", nameof(applicationType));

            var appType = Type.GetType(applicationType)
                          ?? throw new ArgumentException("Invalid application type.", nameof(applicationType));

            return new AppPhpBuilder(CreateAppBuilder(appType));
        }

        /// <summary>
        /// Creates an instance of AppBuilder with the specified application type.
        /// Создает экземпляр AppBuilder с указанным типом приложения.
        /// </summary>
        /// <param name="applicationType">The application type.
        /// Тип приложения.</param>
        /// <returns>Returns an instance of AppBuilder.
        /// Возвращает экземпляр AppBuilder.</returns>
        /// <exception cref="InvalidOperationException">Thrown if the Configure method is not found.
        /// Выбрасывается, если метод Configure не найден.</exception>
        private static AppBuilder CreateAppBuilder(Type applicationType)
        {
            var configureMethod = typeof(AppBuilder)
                .GetMethods()
                .FirstOrDefault(m => m.Name == "Configure" && m.IsGenericMethod);

            if (configureMethod == null)
                throw new InvalidOperationException("Configure method not found.");

            var genericConfigureMethod = configureMethod.MakeGenericMethod(applicationType);
            return (AppBuilder)genericConfigureMethod.Invoke(null, null);
        }

        private AppPhpBuilder(AppBuilder appBuilder)
        {
            _appBuilder = appBuilder;
        }

        /// <summary>
        /// Detects the platform for the application.
        /// Определяет платформу для приложения.
        /// </summary>
        /// <returns>Returns the current instance of AppPhpBuilder.
        /// Возвращает текущий экземпляр AppPhpBuilder.</returns>
        public AppPhpBuilder UsePlatformDetect()
        {
            _appBuilder.UsePlatformDetect();
            return this;
        }

        /// <summary>
        /// Sets up the application with the specified lifetime.
        /// Настраивает приложение с указанным временем жизни.
        /// </summary>
        /// <param name="lifetime">The application lifetime.
        /// Время жизни приложения.</param>
        /// <returns>Returns the current instance of AppPhpBuilder.
        /// Возвращает текущий экземпляр AppPhpBuilder.</returns>
        public AppPhpBuilder SetupWithLifetime(IApplicationLifetime lifetime)
        {
            _appBuilder.SetupWithLifetime(lifetime);
            return this;
        }

        /// <summary>
        /// Uses the Inter font in the application.
        /// Использует шрифт Inter в приложении.
        /// </summary>
        /// <returns>Returns the current instance of AppPhpBuilder.
        /// Возвращает текущий экземпляр AppPhpBuilder.</returns>
        public AppPhpBuilder WithInterFont()
        {
            _appBuilder.WithInterFont();
            return this;
        }

        /// <summary>
        /// Enables logging to trace for the application.
        /// Включает логирование в трассировку для приложения.
        /// </summary>
        /// <returns>Returns the current instance of AppPhpBuilder.
        /// Возвращает текущий экземпляр AppPhpBuilder.</returns>
        public AppPhpBuilder LogToTrace()
        {
            _appBuilder.LogToTrace();
            return this;
        }
    }
}
