<?php

use Peachpie\Avalonia\Core\AppPhpBuilder;
use Avalonia\Controls\ApplicationLifetimes\ClassicDesktopStyleApplicationLifetime;
use Avalonia\Controls\ShutdownMode;

use Avalonia\AppBuilderDesktopExtensions;
use Avalonia\AppBuilderExtension;

$lifetime = new ClassicDesktopStyleApplicationLifetime();

$lifetime->Args = null;
$lifetime->ShutdownMode = ShutdownMode::OnMainWindowClose;

AppPhpBuilder::Configure("App, MVVM")
    ->UsePlatformDetect()
    ->WithInterFont()
    ->LogToTrace()
    ->SetupWithLifetime($lifetime);
    
 
$lifetime->Start(args: null);
