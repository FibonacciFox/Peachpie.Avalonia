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
$appPhpBuilder = AppPhpBuilder::Configure("App", "PeachpieAvaloniaAppTemplate");
// Настройка платформенной детекции 
// Configure platform detection
$appPhpBuilder = AppPhpBuilderDesktop::UsePlatformDetect($appPhpBuilder);
// Использование шрифта Inter 
// Use the Inter font
$appPhpBuilder = AppPhpBuilderFonts::WithInterFont($appPhpBuilder);
// Логирование в Trace 
// Log to Trace
$appPhpBuilder->LogToTrace();
// Настройка времени жизни приложения 
// Set up application lifetime
$appPhpBuilder->SetupWithLifetime($lifetime);

// Запуск приложения
// Start the application
$lifetime->Start(args: null);
