# Peachpie.Avalonia

## Description

The **Peachpie.Avalonia** library will allow developers to easily create cross-platform applications for Windows, macOS, Linux, iOS, Android and web browsers in PHP in the .NET runtime.

**Full .NET compatibility:** Compiled programs run in the redesigned [PeachPie](https://www.peachpie.io/) runtime, which is fully compatible with the PHP runtime.

**Two-way compatibility:** the project allows hybrid applications, some of which are written in C#, and some in PHP. The parts will be fully compatible and will be able to interact seamlessly, all within the .NET framework.

[**Avalonia**](https://avaloniaui.net/) is a powerful framework that enables developers to create cross-platform application using .NET

## Get Started

Install .NET 8.0 SDK

> [!NOTE]
>[ ](https://dotnet.microsoft.com/en-us/download/dotnet/8.0)[Download .NET 8.0]()

Download the simple application archive:
[Application](https://drive.google.com/file/d/1bph02IFZy3c3CD87-1aa1kMg-lDyQbqs/view?usp=sharing)


Run the command from the project root directory:

```
dotnet run
```

If you did everything correctly, a simple application window will appear:

![загруженное](https://github.com/FibonacciFox/Peachpie.Avalonia/assets/61143434/1847556f-c33e-40cd-8714-8e746e5fe646)


> [!TIP]
>PHP stubs have been added to the example.
>You can open the project in any IDE convenient for you and see the code completion options.

![загруженное (1)](https://github.com/FibonacciFox/Peachpie.Avalonia/assets/61143434/519df094-2730-4298-936d-b3c5f3074ee2)

> [!IMPORTANT]
>*The library supports both dynamic creation of form components and the use of XAML markup is an XML-based mark-up language that is used by many UI frameworks...*
>


#### How to create a Button control (good for any control) using code?
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

## A demo application using the library Material.Avalonia
![image](https://github.com/FibonacciFox/Peachpie.Avalonia/assets/61143434/6631c6a1-ac50-4f6c-8c40-f224cecf7d6f)
![image](https://github.com/FibonacciFox/Peachpie.Avalonia/assets/61143434/da3395cf-4317-437a-abe0-808438aa6e24)
![image](https://github.com/FibonacciFox/Peachpie.Avalonia/assets/61143434/29a259c1-9657-4d6f-88f8-e5e7b21fc95f)
![image](https://github.com/FibonacciFox/Peachpie.Avalonia/assets/61143434/1f2f289f-f51c-48e4-bcac-220fec2f420a)
![image](https://github.com/FibonacciFox/Peachpie.Avalonia/assets/61143434/27591571-2b0a-456c-979a-b6745f759d58)
