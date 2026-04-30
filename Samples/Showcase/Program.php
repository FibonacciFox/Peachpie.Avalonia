<?php

use Avalonia\Controls\ApplicationLifetimes\ClassicDesktopStyleApplicationLifetime;
use Avalonia\Controls\ShutdownMode;
use Peachpie\Avalonia\Core\AppPhpBuilder;
use Peachpie\Avalonia\Desktop\AppPhpBuilderDesktop;
use Peachpie\Avalonia\Fonts\Inter\AppPhpBuilderFonts;

$lifetime = new ClassicDesktopStyleApplicationLifetime();
$lifetime->Args = null;
$lifetime->ShutdownMode = ShutdownMode::OnMainWindowClose;

$builder = AppPhpBuilder::Configure("App", "Showcase");
$builder = AppPhpBuilderDesktop::UsePlatformDetect($builder);
$builder = AppPhpBuilderFonts::WithInterFont($builder);
$builder->LogToTrace();
$builder->SetupWithLifetime($lifetime);

$lifetime->Start(args: null);
