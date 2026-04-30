# Peachpie.Avalonia

![Logo](https://github.com/FibonacciFox/Peachpie.Avalonia/blob/master/docs/logo/logo_ru.png?raw=true)

[![Build Status](https://img.shields.io/github/actions/workflow/status/FibonacciFox/Peachpie.Avalonia/.github/workflows/PackagePublish.yml?branch=master&event=push&logo=nuget)](https://github.com/FibonacciFox/Peachpie.Avalonia/actions/workflows/PackagePublish.yml)
![License](https://img.shields.io/github/license/FibonacciFox/Peachpie.Avalonia)
[![NuGet](https://img.shields.io/nuget/v/Peachpie.Avalonia.svg)](https://www.nuget.org/packages/Peachpie.Avalonia)
[![downloads](https://img.shields.io/nuget/dt/Peachpie.Avalonia)](https://www.nuget.org/packages/Peachpie.Avalonia)
![Size](https://img.shields.io/github/repo-size/FibonacciFox/Peachpie.Avalonia)

---

## ✨ Что нового в 1.0.4

- ✅ **.NET 10** — минимальная версия SDK.
- ✅ **Avalonia 12.0.0** — обновлена базовая версия Avalonia UI.
- ✅ **PeachPie 1.1.13** — обновлены PeachPie SDK/runtime зависимости.
- ✅ **Шаблоны `dotnet new`** теперь создают проекты под `net10.0` и ссылаются на пакеты `Peachpie.Avalonia` версии `1.0.4`.
- ✅ **XAML обновлён под Avalonia 12**: используется `PlaceholderText` / `UseFloatingPlaceholder` вместо устаревших `Watermark` / `UseFloatingWatermark`.
- ✅ **События**: основной способ подписки — `.NET-подобный` через `->add(callable)` / `Hook->close()`.
  Генератор заглушек добавляет понятные подсказки с сигнатурой обработчика.
- ✅ **UX-обёртки над контролами удалены** (`UxButton`, `UxWindow`, …) — используйте оригинальные `Avalonia\Controls\*`.
- 🧪 **Дополнительный (экспериментальный) способ** подписки через `Peachpie\Avalonia\Ux\Ux` сохранён как удобный синтаксический сахар.
- 🧩 **Генератор заглушек**: копирует stubs из NuGet-пакетов и генерирует PHP-заглушки по .NET-типам для автодополнения IDE.

---

## 📖 Описание

**Peachpie.Avalonia** — библиотека, позволяющая создавать кроссплатформенные приложения (Windows, macOS, Linux и др.) на PHP в среде .NET с использованием [Avalonia UI](https://avaloniaui.net/).

Особенности:
- **Полная совместимость с .NET** — PHP код компилируется в IL через [PeachPie](https://www.peachpie.io/).
- **Двустороннее взаимодействие** — свободно комбинируйте PHP и C#.
- **Кроссплатформенность** — всё, где работает .NET 10 и Avalonia 12.

Текущий стек:

| Компонент | Версия |
|-----------|--------|
| .NET SDK / Target Framework | 10 / `net10.0` |
| Avalonia | `12.0.0` |
| PeachPie | `1.1.13` |
| Peachpie.Avalonia | `1.0.4` |

---

## 🚀 Быстрый старт

1) Установите **.NET 10 SDK**
2) Поставьте шаблоны:
```powershell
dotnet new uninstall Peachpie.Avalonia.Templates # удалите принудительно устаревшую версию шаблонов.
dotnet new install Peachpie.Avalonia.Templates
```
3) Создайте приложение:
```powershell
dotnet new php.avalonia.app -o MyApp
cd MyApp
dotnet restore
dotnet msbuild -t:PeachpieStubs   # восстановит vendor-stubs и сгенерирует IDE-заглушки в vendor/Stubs
dotnet run
```

При успешном запуске откроется окно шаблонного приложения.

> PeachPie SDK 1.1.13 поставляет compiler tool под .NET 6. Проект автоматически включает roll-forward для этого tool во время сборки, поэтому отдельная установка .NET 6 runtime не требуется.

---

## 🔔 События в PeachPie + Avalonia

### Основной способ (рекомендуется)
Используйте `.NET`-подобную модель через `\Pchp\Core\ClrEvent`:
```php
use Avalonia\Controls\Button;

$button = new Button();

$hook = $button->Click->add(function (object $sender, \Avalonia\Interactivity\RoutedEventArgs $e): void {
    // обработчик
});

// Отписаться:
$hook->close(); // или ->dispose()
```
> Генератор заглушек прописывает в PHPDoc точную сигнатуру коллбэка (тип `EventArgs`, имена параметров), что даёт корректные подсказки IDE.

### Дополнительный способ (экспериментальный)
Синтаксический сахар через `Peachpie\Avalonia\Ux\Ux`:
```php
use Avalonia\Controls\Button;
use Peachpie\Avalonia\Ux\Ux;
use Php\Output\Logger;

$button = new Button();

Ux::of($button)->onClick(fn($s, $e) => Logger::Info("Клик!"));
Ux::of($button)->onceClick(fn() => Logger::Info("Только один раз"));
Ux::of($button)->offClick(); // снять все обработчики Click
Ux::on($button, ['Click', 'PointerPressed'], fn() => Logger::Info("Множественная подписка"));
```
> Этот способ удобен, но носит статус **дополнительного/тестируемого**. Базовым остаётся `->add(callable)`.

---

## 🧩 Зачем нужен генератор заглушек?

IDE-заглушки (stubs) не участвуют в компиляции/рантайме, а служат для **автодополнения, подсветки типов и навигации**.  
Механизм делает два шага:
1. **Копирует** готовые PHP-stubs из подключённых NuGet-пакетов (их папка `vendor`).
2. **Генерирует** stubs по публичным .NET типам (без generic-конструкций), включая:
    - классы/интерфейсы/свойства/методы;
    - события как `@var \Pchp\Core\ClrEvent $Name` с документированной сигнатурой `callback`;
    - перегрузки методов в PHPDoc (`.NET overloads`).

Все файлы складываются в `<проект>/vendor/Stubs` и используются IDE для подсказок.

Запуск вручную:
```bash
dotnet msbuild -t:PeachpieStubs
```

## 🛠️ Проверка разработки

Перед изменениями в пакетах, шаблонах или samples запускайте smoke-проверку:
```bash
bash scripts/smoke.sh
```

Скрипт выполняет `restore`, сборку solution без повторного restore и NuGet-аудит уязвимых зависимостей.

---

## 🧭 Миграция

- ✅ Начиная с `1.0.4`, проекты ориентированы на `.NET 10`, `Avalonia 12.0.0` и `PeachPie 1.1.13`.
- ✅ В XAML для Avalonia 12 используйте `PlaceholderText` и `UseFloatingPlaceholder`.
- ❌ Обёртки `Ux*` над контролами **удалены**.
- ✅ Используйте оригинальные `Avalonia\Controls\*` и подписку на события через `->add(callable)`.
- 🧪 Хелпер `Peachpie\Avalonia\Ux\Ux` можно применять как *дополнительный* синтаксический сахар.

| Было (устаревшее)                     | Стало (актуально)                               |
|--------------------------------------|--------------------------------------------------|
| `use Peachpie\Avalonia\Controls\UxButton;` | `use Avalonia\Controls\Button;`             |
| `$btn = new UxButton();`             | `$btn = new Button();`                          |
| `$btn->on('Click', fn()=>...);`      | `$hook = $btn->Click->add(fn()=>...);`          |

---

## 📚 Примеры

### 1) Простая кнопка с обработчиком
```php
use Avalonia\Controls\Button;

$button = new Button();
$button->Content = "Нажми меня";

$count = 0;
$hook = $button->Click->add(function(object $s, \Avalonia\Interactivity\RoutedEventArgs $e) use (&$count, $button) {
    $count++;
    $button->Content = "Нажато: $count";
});
```

### 2) Окно с вертикальным стеком
```php
use Avalonia\Controls\{Window, StackPanel, Button, TextBlock};

$window = new Window();
$panel  = new StackPanel();

$txt = new TextBlock();
$txt->Text = "Hello PeachPie Avalonia!";

$btn = new Button();
$btn->Content = "Click me";

$btn->Click->add(function() use ($txt) {
    $txt->Text = "Clicked!";
});

$panel->Children->Add($txt);
$panel->Children->Add($btn);
$window->Content = $panel;
$window->Show();
```

### 3) Загрузка из XAML и поиск по имени (через Ux::find)
**XAML (пример):**
```xml
<!-- MyView.axaml -->
<UserControl xmlns="https://github.com/avaloniaui"
             xmlns:x="http://schemas.microsoft.com/winfx/2006/xaml"
             x:Class="MyApp.Views.MyView"
             Name="PageView">
  <StackPanel>
    <TextBlock Name="text1" Text="Hello!" />
    <Button Name="btnOk" Content="OK" />
  </StackPanel>
</UserControl>
```

**PHP:**
```php
<?php
declare(strict_types=1);

namespace MyApp\Views;

use Avalonia\Markup\Xaml\AvaloniaXamlLoader;
use Avalonia\Controls\UserControl;
use Avalonia\Controls\TextBlock;
use Avalonia\Controls\Button;
use Peachpie\Avalonia\Ux\Ux;

class MyView extends UserControl
{
    /** @var TextBlock */
    public $text1;
    /** @var Button */
    public $btnOk;
    /** @var UserControl */
    public $PageView;

    public function __construct()
    {
        // Важно для PeachPie: именованный параметр, чтобы вызвать одноаргументную перегрузку
        AvaloniaXamlLoader::Load(obj: $this);

        // Поиск по имени из .axaml — через обёртку Ux::find():
        $this->PageView = Ux::find($this, "PageView");
        $this->text1    = Ux::find($this, "text1");
        $this->btnOk    = Ux::find($this, "btnOk");

        $this->btnOk->Click->add(fn() => $this->text1->Text = "OK clicked");
    }
}
```

### 4) Подписка на несколько событий (доп. способ)
```php
use Peachpie\Avalonia\Ux\Ux;
use Avalonia\Controls\Button;

$btn = new Button();
Ux::on($btn, ['Click', 'PointerPressed'], fn()=> /* … */ );
```

---

## 🔗 Полезные ссылки
- [PeachPie: C# Events из PHP](https://docs.peachpie.io/net/type-system/#c-event)
- [Avalonia Docs](https://docs.avaloniaui.net/)
- [PeachPie](https://www.peachpie.io/)

---
