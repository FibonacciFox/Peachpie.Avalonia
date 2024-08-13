using System;
using System.Linq;
using Avalonia;
using Avalonia.Controls.ApplicationLifetimes;

namespace Peachpie.Avalonia.Core
{
    public class AppPhpBuilder
    {
        private readonly AppBuilder _appBuilder;

        /// <summary>
        /// Configures the application builder with the specified application type and assembly name.
        /// Настраивает построитель приложений с указанным типом приложения и именем сборки.
        /// </summary>
        /// <param name="applicationType">The type of the application class. / Тип класса приложения.</param>
        /// <param name="assemblyName">The name of the assembly containing the application class. / Имя сборки, содержащей класс приложения.</param>
        /// <returns>An instance of AppPhpBuilder. / Экземпляр AppPhpBuilder.</returns>
        /// <exception cref="ArgumentException">Thrown when applicationType or assemblyName is invalid. / Выбрасывается, когда applicationType или assemblyName недействительны.</exception>
        public static AppPhpBuilder Configure(string applicationType, string assemblyName)
        {
            if (string.IsNullOrWhiteSpace(applicationType))
            {
                throw new ArgumentException("Application type must be provided. / Тип приложения должен быть указан.", nameof(applicationType));
            }

            if (string.IsNullOrWhiteSpace(assemblyName))
            {
                throw new ArgumentException("Assembly name must be provided. / Имя сборки должно быть указано.", nameof(assemblyName));
            }

            // Combine the application type and assembly name to form the fully qualified name
            // Комбинируем тип приложения и имя сборки, чтобы сформировать полное квалифицированное имя
            string qualifiedName = $"{applicationType}, {assemblyName}";
            Type appType = Type.GetType(qualifiedName);
            if (appType == null)
            {
                throw new ArgumentException("Invalid application type or assembly name. / Неверный тип приложения или имя сборки.", nameof(applicationType));
            }

            AppBuilder appBuilder = CreateAppBuilder(appType);
            return new AppPhpBuilder(appBuilder);
        }

        /// <summary>
        /// Creates an AppBuilder for the specified application type.
        /// Создает AppBuilder для указанного типа приложения.
        /// </summary>
        /// <param name="applicationType">The type of the application class. / Тип класса приложения.</param>
        /// <returns>An instance of AppBuilder. / Экземпляр AppBuilder.</returns>
        /// <exception cref="InvalidOperationException">Thrown when the Configure method is not found. / Выбрасывается, когда метод Configure не найден.</exception>
        private static AppBuilder CreateAppBuilder(Type applicationType)
        {
            // Find the generic Configure method in AppBuilder
            // Найти универсальный метод Configure в AppBuilder
            var configureMethod = typeof(AppBuilder).GetMethods()
                .FirstOrDefault(method => method.Name == "Configure" && method.IsGenericMethod);

            if (configureMethod == null)
            {
                throw new InvalidOperationException("Configure method not found. / Метод Configure не найден.");
            }

            // Make the Configure method specific to the application type
            // Сделать метод Configure специфичным для типа приложения
            var genericConfigureMethod = configureMethod.MakeGenericMethod(applicationType);
            return (AppBuilder)genericConfigureMethod.Invoke(null, null);
        }

        /// <summary>
        /// Initializes a new instance of the AppPhpBuilder class.
        /// Инициализирует новый экземпляр класса AppPhpBuilder.
        /// </summary>
        /// <param name="appBuilder">An instance of AppBuilder. / Экземпляр AppBuilder.</param>
        private AppPhpBuilder(AppBuilder appBuilder)
        {
            _appBuilder = appBuilder ?? throw new ArgumentNullException(nameof(appBuilder));
        }

        /// <summary>
        /// Configures the application to use platform detection.
        /// Настраивает приложение для использования платформенной детекции.
        /// </summary>
        /// <returns>The current instance of AppPhpBuilder. / Текущий экземпляр AppPhpBuilder.</returns>
        public AppPhpBuilder UsePlatformDetect()
        {
            _appBuilder.UsePlatformDetect();
            return this;
        }

        /// <summary>
        /// Sets up the application with the specified lifetime.
        /// Настраивает приложение с указанным временем жизни.
        /// </summary>
        /// <param name="lifetime">The application lifetime. / Время жизни приложения.</param>
        /// <returns>The current instance of AppPhpBuilder. / Текущий экземпляр AppPhpBuilder.</returns>
        public AppPhpBuilder SetupWithLifetime(IApplicationLifetime lifetime)
        {
            _appBuilder.SetupWithLifetime(lifetime);
            return this;
        }

        /// <summary>
        /// Configures the application to use the Inter font.
        /// Настраивает приложение для использования шрифта Inter.
        /// </summary>
        /// <returns>The current instance of AppPhpBuilder. / Текущий экземпляр AppPhpBuilder.</returns>
        public AppPhpBuilder WithInterFont()
        {
            _appBuilder.WithInterFont();
            return this;
        }

        /// <summary>
        /// Configures the application to log to trace.
        /// Настраивает приложение для логирования в трассировку.
        /// </summary>
        /// <returns>The current instance of AppPhpBuilder. / Текущий экземпляр AppPhpBuilder.</returns>
        public AppPhpBuilder LogToTrace()
        {
            _appBuilder.LogToTrace();
            return this;
        }
    }
}
