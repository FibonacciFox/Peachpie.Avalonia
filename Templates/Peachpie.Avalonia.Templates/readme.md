[![downloads](https://img.shields.io/nuget/dt/peachpie.avalonia.templates)](https://www.nuget.org/packages/Avalonia.Templates/)
[![Current stable version](https://img.shields.io/nuget/v/Peachpie.Avalonia.Templates.svg)](https://www.nuget.org/packages/Avalonia.Templates/)
# Peachpie.Avalonia Templates for `dotnet new`

For more information about `dotnet new` templates see [here](https://blogs.msdn.microsoft.com/dotnet/2017/04/02/how-to-create-your-own-templates-for-dotnet-new/).

## Installing the templates

Run from a command line (`.NET 8+`):

```powershell
dotnet new install Peachpie.Avalonia.Templates
```

The templates should now be available in `dotnet new list`:

```
Template Name                        Short Name                 Language  Tags
-----------------------------------  -------------------------  --------  -----------------------------------------
Avalonia PHP App                     php.avalonia.app           PHP       Desktop/PeachPie/Xaml/Avalonia/Windows/Linux/macOS
Avalonia PHP Library                 php.avalonia.lib           PHP       Library/PeachPie/Xaml/Avalonia/Windows/Linux/macOS
Avalonia PHP Window                  php.avalonia.window        PHP       Desktop/PeachPie/Xaml/Avalonia/Windows/Linux/macOS
PHP Console App                      php.console                PHP       Console/PeachPie
PHP Library                          php.lib                    PHP       Library/PeachPie

```

# Creating a new Avalonia PHP Application

To create a new barebones php application called `MyApp` in its own subdirectory, run:

```
dotnet new php.avalonia.app -o MyApp
```

Available parameters:

``--no-restore``

*Description*: If specified, skips automatic project recovery and php stubs when created.

# Creating a new Avalonia PHP Library

To create a new barebones avalonia php library called `MyLibrary` in its own subdirectory, run:

```
dotnet new php.avalonia.lib -o MyLibrary
```

Available parameters:

``--no-restore``

*Description*: If specified, skips automatic project recovery and php stubs when created.

# Creating a new Window

To create a new `Window` called `MyNewWindow`

```
dotnet new php.avalonia.window -n MyNewWindow
```

# Creating a new PHP Console Application

To create a new barebones php console application called `MyConsoleApp` in its own subdirectory, run:

```
dotnet new php.console -o MyConsoleApp
```

Available parameters:

``--no-restore``

*Description*: If specified, skips automatic project recovery and php stubs when created.

# Creating a new  PHP Library

To create a new barebones php library called `MyLibrary` in its own subdirectory, run:

```
dotnet new php.lib -o MyLibrary
```

Available parameters:

``--no-restore``

*Description*: If specified, skips automatic project recovery and php stubs when created.