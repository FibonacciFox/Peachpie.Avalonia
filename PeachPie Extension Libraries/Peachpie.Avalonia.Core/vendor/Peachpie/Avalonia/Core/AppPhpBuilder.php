<?php

namespace Peachpie\Avalonia\Core;

use Avalonia\AppBuilder;
use Avalonia\Controls\ApplicationLifetimes\IApplicationLifetime;

class AppPhpBuilder
{
    /**
     * Возвращает экземпляр AppBuilder.
     *
     * Returns an instance of AppBuilder.
     *
     * @var AppBuilder
     */
    public AppBuilder $Builder;

    /**
     * Конструктор AppPhpBuilder.
     *
     * Initializes a new instance of the AppPhpBuilder class.
     *
     * @param AppBuilder $appBuilder Экземпляр AppBuilder / An instance of AppBuilder.
     */
    protected function __construct(AppBuilder $appBuilder)
    {
        $this->Builder = $appBuilder;
    }

    /**
     * Настраивает приложения с указанным типом приложения и именем сборки.
     *
     * Configures the application builder with the specified application type and assembly name.
     *
     * @param string $applicationType Тип класса приложения / The type of the application class.
     * @param string|null $assemblyName Имя сборки, содержащей класс приложения / The name of the assembly containing the application class.
     * @return AppPhpBuilder Экземпляр AppPhpBuilder / An instance of AppPhpBuilder.
     */
    public static function Configure(string $applicationType, string $assemblyName = null): AppPhpBuilder
    {
    }

    /**
     * Настраивает приложение с указанным временем жизни.
     *
     * Sets up the application with the specified lifetime.
     *
     * @param IApplicationLifetime $lifetime Время жизни приложения / The application lifetime.
     * @return AppPhpBuilder Текущий экземпляр AppPhpBuilder / The current instance of AppPhpBuilder.
     */
    public function SetupWithLifetime(IApplicationLifetime $lifetime): AppPhpBuilder
    {
    }

    /**
     * Настраивает приложение для логирования в трассировку.
     *
     * Configures the application to log to trace.
     *
     * @return AppPhpBuilder Текущий экземпляр AppPhpBuilder / The current instance of AppPhpBuilder.
     */
    public function LogToTrace(): AppPhpBuilder
    {
    }
}
