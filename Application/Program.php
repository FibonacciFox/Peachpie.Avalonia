<?php

use Peachpie\Avalonia\Core\AppPhpBuilder;
use Avalonia\Controls\ApplicationLifetimes\ClassicDesktopStyleApplicationLifetime;
use Avalonia\Controls\ShutdownMode;

$lifetime = new ClassicDesktopStyleApplicationLifetime();

$lifetime->Args = null;
$lifetime->ShutdownMode = ShutdownMode::OnMainWindowClose;

AppPhpBuilder::Configure("App, Application")
    ->UsePlatformDetect()
    ->WithInterFont()
    ->LogToTrace()
    ->SetupWithLifetime($lifetime);

$lifetime->Start(args: null);
