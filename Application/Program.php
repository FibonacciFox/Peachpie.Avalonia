<?php

use Avalonia\Controls\ShutdownMode;
use Peachpie\Avalonia\Core\AppPhpBuilder;
use Avalonia\Controls\ApplicationLifetimes\ClassicDesktopStyleApplicationLifetime;

$lifetime = new ClassicDesktopStyleApplicationLifetime();

$lifetime->Args = null;
$lifetime->ShutdownMode = ShutdownMode::OnMainWindowClose;

AppPhpBuilder::Configure("Application.App, Application")
    ->UsePlatformDetect()
    ->WithInterFont()
    ->SetupWithLifetime($lifetime);

$lifetime->Start(args: null);
