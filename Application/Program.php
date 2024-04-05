<?php

use Peachpie\Avalonia\Core\AppPhpBuilder;
use Avalonia\Controls\ApplicationLifetimes\ClassicDesktopStyleApplicationLifetime;
use Avalonia\Controls\ShutdownMode;

use Avalonia\AppBuilderDesktopExtensions;
use Avalonia\AppBuilderExtension;
use Avalonia\LoggingExtensions;
use Avalonia\PhpBuilder;

$lifetime = new ClassicDesktopStyleApplicationLifetime();

$lifetime->Args = null;
$lifetime->ShutdownMode = ShutdownMode::OnMainWindowClose;

AppPhpBuilder::Configure("App, Application")
    ->UsePlatformDetect()
    ->LogToTrace()
    ->SetupWithLifetime($lifetime);
    
    
    //$Builder = Avalonia\PhpBuilder::Configure<App>();
    //$Builder = AppBuilderDesktopExtensions::UsePlatformDetect($Builder);
    //$Builder = AppBuilderExtension::WithInterFont($Builder);
    //$Builder = LoggingExtensions::LogToTrace($Builder);
    //$Builder = PhpBuilder::SetupWithLifetime($lifetime);

$lifetime->Start(args: null);
