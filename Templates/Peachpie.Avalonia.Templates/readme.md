[![downloads](https://img.shields.io/nuget/dt/peachpie.avalonia.templates)](https://www.nuget.org/packages/Peachpie.Avalonia.Templates/)
[![Current stable version](https://img.shields.io/nuget/v/Peachpie.Avalonia.Templates.svg)](https://www.nuget.org/packages/Peachpie.Avalonia.Templates/)

# Peachpie.Avalonia Templates for `dotnet new`

Шаблоны проектов для PeachPie + Avalonia (и не только) под `dotnet new`.

Подробнее о шаблонах `dotnet new` читайте [здесь](https://blogs.msdn.microsoft.com/dotnet/2017/04/02/how-to-create-your-own-templates-for-dotnet-new/).

## Installation

Требуется **.NET SDK 9+**.

```powershell
dotnet new install Peachpie.Avalonia.Templates
```

Проверить установку:

```powershell
dotnet new list
```

Ожидаемые строки в списке:

```
Template Name                        Short Name                 Language  Tags
-----------------------------------  -------------------------  --------  -----------------------------------------
Avalonia PHP App                     php.avalonia.app           PHP       Desktop/PeachPie/Xaml/Avalonia/Windows/Linux/macOS
Avalonia PHP Library                 php.avalonia.lib           PHP       Library/PeachPie/Xaml/Avalonia/Windows/Linux/macOS
Avalonia PHP Window                  php.avalonia.window        PHP       Desktop/PeachPie/Xaml/Avalonia/Windows/Linux/macOS
PHP Console App                      php.console                PHP       Console/PeachPie
PHP Library                          php.lib                    PHP       Library/PeachPie
```

## Quick start

### Create a new Avalonia PHP Application

```bash
dotnet new php.avalonia.app -o MyApp
cd MyApp
dotnet restore
dotnet msbuild -t:PeachpieStubs   # восстановит vendor-заглушки и сгенерирует PHP stubs в vendor/Stubs
dotnet run
```

**Parameters:**

- `--skip-restore` — пропустить автоматический `dotnet restore` после создания проекта
- `--ui-lang en|ru` — язык пост-инструкций в консоли после создания проекта (по умолчанию `en`)

### Create a new Avalonia PHP Library

```bash
dotnet new php.avalonia.lib -o MyLibrary
cd MyLibrary
dotnet restore
dotnet msbuild -t:PeachpieStubs
```

**Parameters:**

- `--skip-restore`
- `--ui-lang en|ru`

### Create a new Window (item template)

```bash
# внутри существующего проекта
dotnet new php.avalonia.window -n MyNewWindow
```

Это добавит `MyNewWindow.php` и `MyNewWindow.axaml`.

### Create a new PHP Console Application

```bash
dotnet new php.console -o MyConsoleApp
cd MyConsoleApp
dotnet restore
dotnet msbuild -t:PeachpieStubs
dotnet run
```

**Parameters:**

- `--skip-restore`
- `--ui-lang en|ru`

### Create a new PHP Library

```bash
dotnet new php.lib -o MyLibrary
cd MyLibrary
dotnet restore
dotnet msbuild -t:PeachpieStubs
```

**Parameters:**

- `--skip-restore`
- `--ui-lang en|ru`

## About stubs generation

Во всех проектных шаблонах подключён MSBuild-таргет **`PeachpieStubs`**, который:

1. Ищет подключённые NuGet-пакеты (`dotnet list package --include-transitive --format json`);
2. Копирует PHP-заглушки из их `/vendor` (если такие есть) в каталог проекта `vendor/Stubs`;
3. Рефлексией генерирует дополнительные IDE-заглушки по публичным API подключённых сборок;
4. Складывает всё в `vendor/Stubs` (не участвует в runtime-сборке; это только для автодополнения в IDE).

Запуск:

```bash
dotnet msbuild -t:PeachpieStubs
```

Пути формируются кроссплатформенно (`System.IO.Path.Combine`), поддерживается Windows, Linux и macOS.
