# Peachpie.Avalonia

![Logo](https://github.com/FibonacciFox/Peachpie.Avalonia/blob/master/docs/logo/logo_ru.png?raw=true)

[![Build Status](https://img.shields.io/github/actions/workflow/status/FibonacciFox/Peachpie.Avalonia/.github/workflows/PackagePublish.yml?branch=master&event=push&logo=nuget)](https://github.com/FibonacciFox/Peachpie.Avalonia/actions/workflows/PackagePublish.yml) ![License](https://img.shields.io/github/license/FibonacciFox/Peachpie.Avalonia)
[![NuGet](https://img.shields.io/nuget/v/Peachpie.Avalonia.svg)](https://www.nuget.org/packages/Peachpie.Avalonia) [![downloads](https://img.shields.io/nuget/dt/Peachpie.Avalonia)](https://www.nuget.org/packages/Peachpie.Avalonia) ![Size](https://img.shields.io/github/repo-size/FibonacciFox/Peachpie.Avalonia)

---

## 📖 Описание

**Peachpie.Avalonia** — библиотека, позволяющая создавать кроссплатформенные приложения (Windows, macOS, Linux, iOS, Android, WebAssembly) на PHP в среде .NET с использованием [Avalonia UI](https://avaloniaui.net/).

Особенности:
- **Полная совместимость с .NET** — PHP код компилируется в IL через [PeachPie](https://www.peachpie.io/).
- **Двустороннее взаимодействие** — можно свободно комбинировать PHP и C# в одном проекте.
- **Кроссплатформенность** — поддержка всех платформ, где работает .NET 8+ и Avalonia.

---

## 🚀 Установка и запуск

1. **Установите .NET 8 SDK**  
   [Скачать .NET 8](https://dotnet.microsoft.com/en-us/download/dotnet/8.0)

2. **Установите шаблоны**:
   ```powershell
   dotnet new install Peachpie.Avalonia.Templates
   ```

3. **Создайте проект**:
   ```powershell
   dotnet new php.avalonia.app -o MyApp
   cd MyApp
   dotnet run
   ```

При успешном запуске откроется окно шаблонного приложения:

![TemplateApp](https://github.com/FibonacciFox/Peachpie.Avalonia/blob/master/docs/images/template_app.jpg)

---

## 📦 Восстановление PHP stubs

Stubs автоматически разворачиваются при создании проекта или сборке.  
Если этого не произошло:
```powershell
dotnet msbuild /t:PackageStubsRestore
```

---

## 🆕 Новый способ подписки на события

Начиная с версии **X.X.X**, рекомендуется использовать **универсальный прокси** `Ux::of(...)`:

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

### Почему именно так?
- **Без наследования** — теперь можно использовать оригинальные `Avalonia\\Controls\\*` без `Ux*`.
- **Без проблем со стилями** — `StyleKeyOverride` больше не нужен.
- **Один API для всех контролов** — кнопки, окна, текстовые поля и т.д.
- **Чистый PeachPie** — под капотом используется стандартный способ `$control->Event->add($callable)` / `$hook->close()`.

> ⚠ Старый синтаксис `$button->on('Click', ...)` и `UxButton` будет **устаревшим** и удалён в будущих версиях.

---

## 📚 Пример для новичков

Создадим кнопку, по клику увеличивающую счётчик:

```php
use Avalonia\Controls\Button;
use Peachpie\Avalonia\Ux\Ux;
use Php\Output\Logger;

$button = new Button();
$button->Content = "Нажми меня (0)";
$counter = 0;

Ux::of($button)->onClick(function($sender, $e) use (&$counter, $button) {
    $counter++;
    $button->Content = "Нажми меня ($counter)";
    Logger::Info("Кнопка нажата $counter раз(а)");
});
```

---

## 🔄 Миграция со старого синтаксиса

| Было (устаревшее) | Стало (новое) |
|---|---|
| `use Peachpie\\Avalonia\\Controls\\UxButton;` | `use Avalonia\\Controls\\Button;` |
| `$btn = new UxButton();` | `$btn = new Button();` |
| `$btn->on('Click', fn()=>...);` | `Ux::of($btn)->onClick(fn()=>...);` |
| `$sub = $btn->on('Click', $h); $sub->dispose();` | `$sub = Ux::of($btn)->onClick($h); Ux::of($btn)->offClick($h);` |

---

## 📜 Доступ к контролам из XAML

**XAML:**
```xml
<TextBlock Name="textblock1" Text="Hello PeachPie Avalonia!" />
```

**PHP:**
```php
use Avalonia\Controls\TextBlock;

public TextBlock $textblock1;

$this->textblock1 = $this->FindByName("textblock1");
$this->textblock1->Text = "Hello";
```

---

## ❓ FAQ

**Q:** Как подписаться на несколько событий сразу?  
**A:**
```php
Ux::on($button, ['Click', 'PointerPressed'], fn() => Logger::Info('Событие!'));
```

**Q:** Как сделать обработчик, который сработает только один раз?  
**A:**
```php
Ux::of($button)->onceClick(fn() => Logger::Info('Один раз'));
```

**Q:** Как отписаться от конкретного обработчика?  
**A:**
```php
$handler = fn() => Logger::Info('Click!');
Ux::of($button)->onClick($handler);
Ux::of($button)->offClick($handler);
```

**Q:** Можно ли использовать старые `Ux*` контролы?  
**A:** Пока да, но они будут удалены в будущих релизах. Переходите на `Ux::of(...)`.

---

## 🔗 Полезные ссылки
- [Документация PeachPie: Работа с событиями](https://docs.peachpie.io/net/type-system/#c-event)
- [Документация Avalonia](https://docs.avaloniaui.net/)

---
