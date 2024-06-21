<?php

use Peachpie\Avalonia\Core\AppPhpBuilder;
use Avalonia\Controls\ApplicationLifetimes\ClassicDesktopStyleApplicationLifetime;
use Avalonia\Controls\ShutdownMode;

use Avalonia\AppBuilderDesktopExtensions;
use Avalonia\AppBuilderExtension;

/**
 * Initializes the application lifetime.
 * Инициализирует время жизни приложения.
 */
$lifetime = new ClassicDesktopStyleApplicationLifetime();
$lifetime->Args = null;
$lifetime->ShutdownMode = ShutdownMode::OnMainWindowClose;

/**
 * Configures and starts the application.
 * Конфигурирует и запускает приложение.
 */
AppPhpBuilder::Configure("App, Application")
    ->UsePlatformDetect()
    ->WithInterFont()
    ->LogToTrace()
    ->SetupWithLifetime($lifetime);

/**
 * Starts the application.
 * Запускает приложение.
 */
$lifetime->Start(args: null);
