<?php

namespace Peachpie\Avalonia\Desktop;

use Peachpie\Avalonia\Core\AppPhpBuilder;

class AppPhpBuilderDesktop
{
    /**
     * Настраивает приложение относительно платформы.
     *
     * Configures the application to use platform detection.
     *
     * @param AppPhpBuilder $appPhpBuilder Текущий экземпляр AppPhpBuilder / The current instance of AppPhpBuilder.
     * @return AppPhpBuilder Текущий экземпляр AppPhpBuilder / The current instance of AppPhpBuilder.
     */
    public static function UsePlatformDetect(AppPhpBuilder $appPhpBuilder): AppPhpBuilder
    {
        // Здесь происходит настройка платформы для приложения
        return $appPhpBuilder;
    }
}
