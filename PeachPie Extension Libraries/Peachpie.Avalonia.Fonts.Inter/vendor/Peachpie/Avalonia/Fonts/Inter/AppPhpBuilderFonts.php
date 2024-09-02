<?php

namespace Peachpie\Avalonia\Fonts\Inter;

use Peachpie\Avalonia\Core\AppPhpBuilder;

class AppPhpBuilderFonts
{
    /**
     * Настраивает приложение для использования шрифта Inter.
     *
     * Configures the application to use the Inter font.
     *
     * @param AppPhpBuilder $appPhpBuilder Текущий экземпляр AppPhpBuilder / The current instance of AppPhpBuilder.
     * @return AppPhpBuilder Текущий экземпляр AppPhpBuilder / The current instance of AppPhpBuilder.
     */
    public static function withInterFont(AppPhpBuilder $appPhpBuilder): AppPhpBuilder
    {
        // Здесь происходит настройка шрифта Inter для приложения
        return $appPhpBuilder;
    }
}
