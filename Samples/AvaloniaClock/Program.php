<?php

use Peachpie\Avalonia\Core\AppPhpBuilder;
use Peachpie\Avalonia\Desktop\AppPhpBuilderDesktop;
use Peachpie\Avalonia\Fonts\Inter\AppPhpBuilderFonts;
use Avalonia\Controls\ApplicationLifetimes\ClassicDesktopStyleApplicationLifetime;
use Avalonia\Controls\ShutdownMode;

// Создание объекта ClassicDesktopStyleApplicationLifetime
// Create a ClassicDesktopStyleApplicationLifetime object
$lifetime = new ClassicDesktopStyleApplicationLifetime();
$lifetime->Args = null;
$lifetime->ShutdownMode = ShutdownMode::OnMainWindowClose;

// Конфигурация AppPhpBuilder с указанием типа приложения и имени сборки
// Configure AppPhpBuilder with the specified application type and assembly name
$appPhpBuilder = AppPhpBuilder::Configure("App", "AvaloniaClock");
$appPhpBuilder = AppPhpBuilderDesktop::UsePlatformDetect($appPhpBuilder);    // Настройка платформенной детекции / Configure platform detection
$appPhpBuilder = AppPhpBuilderFonts::WithInterFont($appPhpBuilder);        // Использование шрифта Inter / Use the Inter font
$appPhpBuilder->LogToTrace();          // Логирование в Trace / Log to Trace
$appPhpBuilder->SetupWithLifetime($lifetime); // Настройка времени жизни приложения / Set up application lifetime

// Запуск приложения
// Start the application
$lifetime->Start(args: null);
