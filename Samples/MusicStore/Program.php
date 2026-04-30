<?php

use Avalonia\Controls\ApplicationLifetimes\ClassicDesktopStyleApplicationLifetime;
use Avalonia\Controls\ShutdownMode;
use Peachpie\Avalonia\Core\AppPhpBuilder;
use Peachpie\Avalonia\Desktop\AppPhpBuilderDesktop;
use Peachpie\Avalonia\Fonts\Inter\AppPhpBuilderFonts;

$lifetime = new ClassicDesktopStyleApplicationLifetime();
$lifetime->Args = null;
$lifetime->ShutdownMode = ShutdownMode::OnMainWindowClose;

$appPhpBuilder = AppPhpBuilder::Configure("App", "MusicStore");
$appPhpBuilder = AppPhpBuilderDesktop::UsePlatformDetect($appPhpBuilder);
$appPhpBuilder = AppPhpBuilderFonts::WithInterFont($appPhpBuilder);
$appPhpBuilder->LogToTrace();
$appPhpBuilder->SetupWithLifetime($lifetime);

$lifetime->Start(args: null);
