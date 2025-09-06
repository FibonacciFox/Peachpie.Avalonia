<?php

namespace Peachpie\Avalonia\Core;

use Avalonia\AppBuilder;
use Avalonia\Controls\ApplicationLifetimes\IApplicationLifetime;

/**
 * Минималистичный адаптер для инициализации Avalonia-приложения из PHP.
 *
 * Аналог C#-кода:
 *  AppBuilder.Configure<App>()
 *      .LogToTrace()
 *      .SetupWithLifetime(lifetime);
 *
 * Пример использования в PHP:
 *  use Peachpie\Avalonia\Core\AppPhpBuilder;
 *  use Avalonia\Controls\ApplicationLifetimes\ClassicDesktopStyleApplicationLifetime;
 *  use Avalonia\Controls\ShutdownMode;
 *
 *  $lifetime = new ClassicDesktopStyleApplicationLifetime();
 *  $lifetime->ShutdownMode = ShutdownMode::OnMainWindowClose;
 *
 *  AppPhpBuilder::Configure("App", "Application") // быстрее и надёжнее, если известна сборка
 *      ->LogToTrace()
 *      ->SetupWithLifetime($lifetime);
 *
 *  $lifetime->Start(null);
 */
class AppPhpBuilder
{
    /**
     * Внутренний экземпляр Avalonia\AppBuilder, на котором выполняется конфигурация.
     *
     * @var AppBuilder
     */
    public AppBuilder $Builder;

    /**
     * Закрытый конструктор. Используйте {@see AppPhpBuilder::Configure()}.
     *
     * @param AppBuilder $appBuilder Экземпляр AppBuilder.
     */
    protected function __construct(AppBuilder $appBuilder)
    {
    }

    /**
     * Создаёт AppPhpBuilder, разрешая тип приложения и вызывая AppBuilder::Configure<TApp>().
     *
     * Можно передать:
     *  - только имя типа: "App";
     *  - полное имя типа с пространством имён: "\My\Namespace\App";
     *  - полностью квалифицированное имя с именем сборки: "My.Namespace.App, Application".
     *
     * Если $assemblyName не указан, поиск идёт в EntryAssembly, затем по всем загруженным сборкам.
     *
     * @param string      $applicationType Имя класса приложения (наследника Avalonia\Application).
     * @param string|null $assemblyName    (Необязательно) Имя сборки, где расположен класс приложения.
     *
     * @return AppPhpBuilder Инициализированный билдёр.
     *
     * @throws \ArgumentException Если тип не найден или не наследуется от Avalonia\Application.
     */
    public static function Configure(string $applicationType, ?string $assemblyName = null): AppPhpBuilder
    {
    }

    /**
     * Подключает реализацию времени жизни приложения (Desktop/SingleView и т.п.).
     *
     * Обычно после вызова этого метода приложение запускают: $lifetime->Start(...).
     *
     * @param IApplicationLifetime $lifetime Экземпляр lifetime.
     *
     * @return AppPhpBuilder Текущий билдёр (для чейнинга).
     */
    public function SetupWithLifetime(IApplicationLifetime $lifetime): AppPhpBuilder
    {
    }

    /**
     * Включает логирование в системную трассировку (Diagnostic Trace).
     * Полезно в отладке; в продакшене настраивайте логирование под свои нужды.
     *
     * @return AppPhpBuilder Текущий билдёр (для чейнинга).
     */
    public function LogToTrace(): AppPhpBuilder
    {
    }
}
