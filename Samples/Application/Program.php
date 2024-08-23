<?php

use Peachpie\Avalonia\Core\AppPhpBuilder;
use Avalonia\Controls\ApplicationLifetimes\ClassicDesktopStyleApplicationLifetime;
use Avalonia\Controls\ShutdownMode;

// Создание объекта ClassicDesktopStyleApplicationLifetime
// Create a ClassicDesktopStyleApplicationLifetime object
$lifetime = new ClassicDesktopStyleApplicationLifetime();
$lifetime->Args = null;
$lifetime->ShutdownMode = ShutdownMode::OnMainWindowClose;

// Конфигурация AppPhpBuilder с указанием типа приложения и имени сборки
// Configure AppPhpBuilder with the specified application type and assembly name
AppPhpBuilder::Configure("App", "Application")
    ->UsePlatformDetect()    // Настройка платформенной детекции / Configure platform detection
    ->WithInterFont()        // Использование шрифта Inter / Use the Inter font
    ->LogToTrace()           // Логирование в Trace / Log to Trace
    ->SetupWithLifetime($lifetime); // Настройка времени жизни приложения / Set up application lifetime

// Запуск приложения
// Start the application
$lifetime->Start(args: null);
