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
- ℹ️ `Peachpie\Avalonia\Ux\Ux` сохранён только для обратной совместимости со старым кодом и не рекомендуется для новых проектов.
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

## Recommended PHP API

Для нового PHP-кода используйте такой порядок:

1. `AvaloniaXamlLoader::Load(obj: $this)` для обязательной загрузки и компиляции `.axaml`.
2. `Xaml::bind($this)` для привязки публичных typed-свойств к `x:Name`/`Name`.
3. `Command::create(...)` для `ICommand` вместо ручной логики в code-behind там, где команда подходит лучше события.
4. `UI::post(...)` или `UI::invoke(...)` для возврата на UI thread.

Минимальный пример:

```php
use Avalonia\Controls\Button;
use Avalonia\Controls\TextBlock;
use Avalonia\Controls\Window;
use Avalonia\Markup\Xaml\AvaloniaXamlLoader;
use Peachpie\Avalonia\Mvvm\Command;
use Peachpie\Avalonia\Xaml\Xaml;

class MainWindow extends Window
{
    public TextBlock $DateView;
    public Button $RefreshButton;
    public object $RefreshTimeCommand;

    public function __construct()
    {
        AvaloniaXamlLoader::Load(obj: $this);
        Xaml::bind($this);

        $this->RefreshTimeCommand = Command::create(fn() => $this->refreshTime());
        $this->DataContext = $this;
        $this->refreshTime();
    }

    private function refreshTime(): void
    {
        $this->DateView->Text = date("Y-m-d H:i:s");
    }
}
```

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

## 🧩 Генератор заглушек

Генератор заглушек нужен не для выполнения приложения, а для **профессиональной работы с кодом в IDE**.
Он делает .NET API и API ваших подключённых пакетов понятными для PHP-инструментов: PhpStorm, Intelephense и других анализаторов.

### Что он решает

Без stubs PHP IDE видит только часть PeachPie/Avalonia API или не понимает его вовсе:
- не знает сигнатуры .NET методов и событий;
- не подсказывает типы аргументов у `->Click->add(...)`;
- не умеет нормально навигировать по свойствам, перегрузкам и типам из NuGet-пакетов;
- слабо понимает коллекции, generic-типы и документацию .NET API.

Генератор устраняет это ограничение и превращает подключённые .NET библиотеки в PHP-friendly слой для редактора.

### Что такое stubs

`stubs` — это PHP-файлы, которые:
- **не участвуют** в рантайме приложения;
- **не заменяют** реальные .NET типы;
- используются только для:
  - автодополнения;
  - перехода к определению;
  - подсказок по аргументам;
  - статического анализа;
  - отображения документации в IDE.

Идея простая: приложение по-прежнему работает на реальных .NET сборках, а IDE читает сгенерированное PHP-описание этих типов.

### Как работает генератор

Во время `PeachpieStubs` выполняется два независимых этапа.

1. Восстановление vendor-stubs из NuGet-пакетов.  
Если пакет уже поставляет свои PHP-заглушки в `vendor`, они копируются в проект.

2. Генерация stubs по публичной .NET API-поверхности.  
Генератор загружает найденные сборки, читает их публичные типы и XML documentation, затем строит PHP-файлы для IDE.

### Что именно генерируется

По публичным .NET типам создаются PHP-заглушки со следующими элементами:
- `namespace`, `class`, `interface`, `extends`, `implements`;
- публичные свойства и события;
- методы и конструкторы;
- PHPDoc для `summary`, `returns`, `params`;
- подсказки по перегрузкам .NET методов;
- сигнатуры обработчиков событий;
- типы generic-коллекций в PHPDoc, например `list<string>` и `array<string, int>`;
- `@method`-подсказки для перегруженных методов, чтобы IDE показывала сигнатуры лучше, чем через один `...$args`.

События описываются как:
```php
/** @var \Pchp\Core\ClrEvent */
public $Click;
```

При этом в PHPDoc дополнительно записывается ожидаемая сигнатура callback, чтобы IDE понимала параметры:
```php
function(object $sender, \Avalonia\Interactivity\RoutedEventArgs $e): void
```

### Откуда генератор берёт данные

Источник информации для stubs:
- метаданные публичных типов из `.dll`;
- XML documentation рядом со сборками;
- уже существующие PHP stubs из `vendor` папок NuGet-пакетов;
- список пакетов проекта и их transitives.

То есть генератор не “угадывает” API, а строит описание на основе реальных сборок и их документации.

### Куда складываются файлы

Сгенерированные IDE-файлы помещаются в:

```text
<проект>/vendor/Stubs
```

Обычно там оказываются:
- stubs, скопированные из NuGet-пакетов;
- stubs, сгенерированные по .NET API;
- вспомогательные PeachPie stubs, например для `\Pchp\Core\ClrEvent`.

### Как это выглядит в ежедневной разработке

Обычный цикл такой:

1. Подключаете или обновляете NuGet-пакет.
2. Запускаете:
```bash
dotnet msbuild -t:PeachpieStubs
```
3. IDE индексирует обновлённый `vendor/Stubs`.
4. В PHP-коде появляются:
   - нормальные типовые подсказки;
   - события с сигнатурами;
   - навигация по Avalonia/PeachPie/.NET API;
   - документация методов и свойств прямо в редакторе.

### Почему это особенно важно для PeachPie + Avalonia

Проект работает на стыке PHP и .NET. Для рантайма этого достаточно, но для качественной разработки нужен ещё и слой IDE-описаний.

Именно stubs делают возможными:
- удобную работу с `Avalonia\Controls\*`;
- подсказки по `ClrEvent` и `->add(callable)`;
- понимание `Command`, `ReactiveObject`, `ManagedTask`, dispatcher helpers и других bridge-типов;
- полноценную работу с API сторонних .NET библиотек из PHP.

Без этого писать серьёзное приложение можно, но это уже будет работа “вслепую”.

### Ограничения

Важно понимать границы генератора:
- он не меняет поведение рантайма;
- он не делает generic .NET API “нативным PHP”, а лишь максимально точно описывает его для IDE;
- часть сложных .NET конструкций всё равно будет представлена приближённо;
- после изменения зависимостей stubs нужно регенерировать.

### Когда запускать

Запускайте генерацию:
- после `dotnet restore` в новом проекте;
- после добавления/обновления NuGet-пакетов;
- после обновления версий Avalonia/PeachPie/внутренних bridge-библиотек;
- если IDE перестала корректно подсказывать типы.

Команда ручного запуска:
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
- ✅ Для доступа к named controls после `AvaloniaXamlLoader::Load(obj: $this)` используйте `Xaml::bind($this)` или `Xaml::require($this, "Name")`.
- ✅ Для `ICommand` используйте `Peachpie\Avalonia\Mvvm\Command::create(...)`.
- ✅ Используйте оригинальные `Avalonia\Controls\*` и подписку на события через `->add(callable)`.
- ℹ️ `Peachpie\Avalonia\Ux\Ux` оставлен как legacy helper для совместимости, но не считается рекомендуемым API.

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

### 3) Загрузка из XAML и привязка named controls (рекомендуется)
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
use Peachpie\Avalonia\Xaml\Xaml;

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
        Xaml::bind($this);

        $this->btnOk->Click->add(fn() => $this->text1->Text = "OK clicked");
    }
}
```

### 4) Команда через Command::create(...)
```php
use Avalonia\Controls\Button;
use Avalonia\Controls\TextBlock;
use Avalonia\Controls\Window;
use Avalonia\Markup\Xaml\AvaloniaXamlLoader;
use Peachpie\Avalonia\Mvvm\Command;
use Peachpie\Avalonia\Xaml\Xaml;

class MainWindow extends Window
{
    public TextBlock $StatusText;
    public Button $RefreshButton;
    public object $RefreshCommand;

    public function __construct()
    {
        AvaloniaXamlLoader::Load(obj: $this);
        Xaml::bind($this);

        $this->RefreshCommand = Command::create(fn() => $this->refresh());
        $this->DataContext = $this;
    }

    private function refresh(): void
    {
        $this->StatusText->Text = "Updated at " . date("H:i:s");
    }
}
```

## 🔗 Полезные ссылки
- [PeachPie: C# Events из PHP](https://docs.peachpie.io/net/type-system/#c-event)
- [Avalonia Docs](https://docs.avaloniaui.net/)
- [PeachPie](https://www.peachpie.io/)

---
