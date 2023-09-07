<?php

use Peachpie\Avalonia\Core\AppPhpBuilder;
use Avalonia\Controls\ApplicationLifetimes\ClassicDesktopStyleApplicationLifetime;

$lifetime = new ClassicDesktopStyleApplicationLifetime();

$lifetime->Args = null;
$lifetime->ShutdownMode = \Avalonia\Controls\ShutdownMode::OnLastWindowClose;


AppPhpBuilder::Configure("Application.App, Application")->UsePlatformDetect()->SetupWithLifetime($lifetime);

$lifetime->Start(null);
