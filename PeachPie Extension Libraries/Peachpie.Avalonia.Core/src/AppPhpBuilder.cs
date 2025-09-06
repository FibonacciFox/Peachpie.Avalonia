#nullable enable
using System;
using System.Linq;
using System.Reflection;
using Avalonia;
using Avalonia.Controls.ApplicationLifetimes;

namespace Peachpie.Avalonia.Core
{
    /// <summary>
    /// Позволяет инициализировать Avalonia-приложение из PHP без дженериков.
    /// Аналогично коду C#:
    /// <code>
    /// AppBuilder.Configure&lt;App&gt;()
    ///     .UsePlatformDetect()
    ///     .LogToTrace()
    ///     .SetupWithLifetime(lifetime);
    /// </code>
    /// </summary>
    /// <remarks>
    /// Использование в PHP:
    /// <code language="php">
    /// use Peachpie\Avalonia\Core\AppPhpBuilder;
    /// use Avalonia\Controls\ApplicationLifetimes\ClassicDesktopStyleApplicationLifetime;
    /// 
    /// $lifetime = new ClassicDesktopStyleApplicationLifetime();
    /// 
    /// AppPhpBuilder::Configure("App", "Application") // быстрый способ
    ///     ->LogToTrace()
    ///     ->SetupWithLifetime($lifetime);
    /// 
    /// $lifetime->Start(null);
    /// </code>
    /// </remarks>
    public sealed class AppPhpBuilder
    {
        /// <summary>
        /// Экземпляр <see cref="AppBuilder"/>, на котором выполняются операции конфигурации.
        /// </summary>
        public AppBuilder Builder { get; }

        private AppPhpBuilder(AppBuilder builder) =>
            Builder = builder ?? throw new ArgumentNullException(nameof(builder));

        /// <summary>
        /// Создаёт <see cref="AppPhpBuilder"/> для указанного типа приложения.
        /// </summary>
        /// <param name="applicationType">
        /// Имя класса приложения:
        /// <list type="bullet">
        /// <item>Полное с пространством имён, например: <c>\MyApp\App</c></item>
        /// <item>Или короткое имя, например: <c>App</c></item>
        /// </list>
        /// </param>
        /// <param name="assemblyName">
        /// Необязательно: имя сборки, содержащей этот класс. Если указано — поиск быстрее.
        /// </param>
        /// <exception cref="ArgumentException">
        /// Если тип не найден или не наследуется от <see cref="Application"/>.
        /// </exception>
        public static AppPhpBuilder Configure(string applicationType, string? assemblyName = null)
        {
            var type = ResolveAppType(applicationType, assemblyName);
            var builder = CreateAppBuilder(type);
            return new AppPhpBuilder(builder);
        }

        /// <summary>
        /// Настраивает приложение с указанным временем жизни (lifetime).
        /// </summary>
        public AppPhpBuilder SetupWithLifetime(IApplicationLifetime lifetime)
        {
            if (lifetime is null) throw new ArgumentNullException(nameof(lifetime));
            Builder.SetupWithLifetime(lifetime);
            return this;
        }

        /// <summary>
        /// Включает логирование в трассировку.
        /// </summary>
        public AppPhpBuilder LogToTrace()
        {
            Builder.LogToTrace();
            return this;
        }

        // Кэш метода Configure<T>
        private static readonly MethodInfo ConfigureGeneric = typeof(AppBuilder)
            .GetMethods(BindingFlags.Public | BindingFlags.Static)
            .First(m => m.Name == "Configure" && m.IsGenericMethodDefinition);

        private static AppBuilder CreateAppBuilder(Type appType) =>
            (AppBuilder)ConfigureGeneric.MakeGenericMethod(appType).Invoke(null, null)!;

        private static Type ResolveAppType(string typeName, string? assemblyName)
        {
            if (string.IsNullOrWhiteSpace(typeName))
                throw new ArgumentException("Application type must be provided.", nameof(typeName));

            // 1. Если указано полное имя с сборкой
            if (typeName.Contains(','))
            {
                var t = Type.GetType(typeName, false);
                if (t is not null) return RequireApplication(t);
            }

            // 2. Если есть имя сборки
            if (!string.IsNullOrWhiteSpace(assemblyName))
            {
                var asm = AppDomain.CurrentDomain.GetAssemblies()
                    .FirstOrDefault(a => a.GetName().Name == assemblyName);
                var t = asm?.GetType(typeName, false);
                if (t is not null) return RequireApplication(t);
            }

            // 3. Ищем в EntryAssembly
            var entry = Assembly.GetEntryAssembly();
            var tEntry = entry?.GetType(typeName, false);
            if (tEntry is not null) return RequireApplication(tEntry);

            // 4. Ищем во всех сборках
            foreach (var asm in AppDomain.CurrentDomain.GetAssemblies())
            {
                var t = asm.GetType(typeName, false);
                if (t is not null) return RequireApplication(t);
            }

            // 5. Если просто "App", ищем наследника Application
            var guess = AppDomain.CurrentDomain.GetAssemblies()
                .SelectMany(SafeGetTypes)
                .Where(t => typeof(Application).IsAssignableFrom(t))
                .FirstOrDefault(t => t.Name == typeName)
                ?? AppDomain.CurrentDomain.GetAssemblies()
                    .SelectMany(SafeGetTypes)
                    .SingleOrDefault(t => typeof(Application).IsAssignableFrom(t));

            if (guess is not null) return guess;

            throw new ArgumentException($"Cannot resolve application type '{typeName}'.");
        }

        private static Type RequireApplication(Type t) =>
            typeof(Application).IsAssignableFrom(t)
                ? t
                : throw new ArgumentException($"Type '{t.FullName}' is not Avalonia.Application.");

        private static Type[] SafeGetTypes(Assembly a)
        {
            try { return a.GetTypes(); }
            catch { return Array.Empty<Type>(); }
        }
    }
}
