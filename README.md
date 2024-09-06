
![Build Status](https://github.com/FibonacciFox/Peachpie.Avalonia/blob/master/docs/logo/logo_ru.png?raw=true)

[![Build Status](https://img.shields.io/github/actions/workflow/status/FibonacciFox/Peachpie.Avalonia/.github/workflows/PackagePublish.yml?branch=master&event=push&logo=nuget)](https://github.com/FibonacciFox/Peachpie.Avalonia/actions/workflows/PackagePublish.yml) ![License](https://img.shields.io/github/license/FibonacciFox/Peachpie.Avalonia)
[![NuGet](https://img.shields.io/nuget/v/Peachpie.Avalonia.svg)](https://www.nuget.org/packages/Peachpie.Avalonia) [![downloads](https://img.shields.io/nuget/dt/Peachpie.Avalonia)](https://www.nuget.org/packages/Peachpie.Avalonia)  ![Size](https://img.shields.io/github/repo-size/FibonacciFox/Peachpie.Avalonia)

## 📖 About

The **Peachpie.Avalonia** library will allow developers to easily create cross-platform applications for Windows, macOS, Linux, iOS, Android and web browsers in PHP in the .NET runtime.

**Full .NET compatibility:** Compiled programs run in the redesigned [PeachPie](https://www.peachpie.io/) runtime, which is fully compatible with the PHP runtime.

**Two-way compatibility:** the project allows hybrid applications, some of which are written in C#, and some in PHP. The parts will be fully compatible and will be able to interact seamlessly, all within the .NET framework.

[**Avalonia**](https://avaloniaui.net/) is a powerful framework that enables developers to create cross-platform application using .NET

## 🚀 Getting Started

Install .NET 8.0 SDK

> [!NOTE]
>[ ](https://dotnet.microsoft.com/en-us/download/dotnet/8.0)[Download .NET 8.0]()

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
Go to the `MyApp` derictory `cd ./MyApp` and execute:

```
dotnet run
```

If you've done everything correctly, you should see a project template like this:

![TemplateApp](https://github.com/FibonacciFox/Peachpie.Avalonia/blob/master/docs/images/template_app.jpg)

# Unpacking PHP stubs into the project directory.

PHP stubs should be unpacked when creating a project from a template or performing `dotnet build`, `dotnet restore` tasks. If this does not happen, force the stubs to be restored by executing:

```
dotnet msbuild /t:PackageStubsRestore
```
* This is the kind of behavior I've noticed in Linux.

## How to create a Button control (good for any control) using code?
Unlike basic Avalonia UI components, Peachpie.Avalonia form components must start with «Ux». These components are child classes of Avalonia's base UI components, but with some changes to make development easier. (In the future I plan to avoid inheritance, but for now creating controls would look like this)
```php
<?php

namespace Views {

    use Avalonia\DevToolsExtensions;
    use Avalonia\Layout\HorizontalAlignment;
    use Avalonia\Layout\VerticalAlignment;
    use Peachpie\Avalonia\Controls\UxButton;
    use Peachpie\Avalonia\Controls\UxWindow;
    use Php\Output\Logger;
    use Views\Pages\HomePage;

    class MainWindow extends UxWindow
    {
        public function __construct()
        {
            $this->InitializeComponent();
			//Create a button
            $button = new UxButton();
            $button->Content = "I'm a super button, press me!";
            $button->HorizontalAlignment = HorizontalAlignment::Center;
            $button->VerticalAlignment = VerticalAlignment::Center;

            $this->Content = $button;

            Logger::Info("Hello Peachpie Avalonia!");
        }


        private function InitializeComponent(): void
        {
            Load();

            if ( defined('DEBUG') ) {
                Logger::Info("Debug Build!");
                //DevTools press F12 Debug build
                DevToolsExtensions::AttachDevTools($this);
            }
        }
    }

}
```

### **The library supports the following event syntax:**

```php
use Avalonia\Interactivity\RoutedEventArgs;

$this->button1->on('Click', function(UxButton $sender, $RoutedEventArgs $e) {
	Logger::Info("Hello Peachpie Avalonia!");
});

$handler = function(){
	/////////////////////
};

$this->button1->on('Click', $handler);


use Avalonia\Interactivity\RoutedEventArgs;

public function BurgerButton_onClickArgs(UxToggleButton $sender, RoutedEventArgs $e): void
{
	$this->Title = "BurgerButton_onClickArgs function";
}

public function BurgerButton_onClick($sender, $e): void
{
	$this->Title = "BurgerButton_onClick function";
}

$this->button1->on('Click', [$this, 'BurgerButton_onClickArgs']) ;

$this->button1->on('Click', [$this, 'BurgerButton_onClickArgs'], 'BurgerButton_onClickArgs') ;

$this->button1->on('Click', [$this, 'BurgerButton_onClick'], 'BurgerButton_onClick') ;
```

> [!IMPORTANT]
>
>PeachPie runtime allows working with .NET/CLR `event` class members in order to register and unregister callables. The following code depicts a sample C# class and a sample PHP program adding and removing an anonymous function (or any PHP callable) to it.
>
><https://docs.peachpie.io/net/type-system/#c-event>

```php
// add callable to the event handler:
$hook = $button1->Click->add(
    function ($sender, $arg) {
        Logger::Info("Click!");
    }
);

// remove callable from the event handler
$hook->close();
```
### Accessing a form component from xaml:

```xml
<UxTextBlock Name="textblock1" Foreground="#ECF0F1" HorizontalAlignment="Center" Text="Hello PeachPie Avalonia!"/>
```

```php
public UxTextBlock $textblock1;

$this->textblock1 = $this->FindByName("textblock1");
$this->Text = "Hello";


