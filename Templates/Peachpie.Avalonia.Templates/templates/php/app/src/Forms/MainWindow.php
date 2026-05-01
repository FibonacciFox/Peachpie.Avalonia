<?php

namespace PeachpieAvaloniaAppTemplate\Forms;

use Avalonia\Controls\Button;
use Avalonia\Controls\TextBlock;
use Avalonia\Controls\Window;
use Avalonia\Markup\Xaml\AvaloniaXamlLoader;
use Peachpie\Avalonia\Mvvm\Command;
use Peachpie\Avalonia\UI;
use Peachpie\Avalonia\Xaml\Xaml;
use Peachpie\Community\Threading\Timer;

class MainWindow extends Window
{
    public TextBlock $DateView;
    public Button $RefreshButton;
    public object $RefreshTimeCommand;

    public function __construct()
    {
        //Сначала всегда инициализируем axaml.
        $this->InitializeComponent();
        
        Xaml::bind($this);
        $this->RefreshTimeCommand = Command::create(fn() => $this->refreshTime());
        $this->DataContext = $this;
        $this->refreshTime();

        // Создание таймера с интервалом в 1 секунду / Create a timer with an interval of 1 second
        Timer::every('1s', function() {
            UI::post(function () {
                $this->refreshTime();
            });
        });

    }

    private function refreshTime(): void
    {
        $this->DateView->Text = "Hello PHP Avalonia! " . date("Y-m-d H:i:s");
    }

    //Не удаляйте метод, если используете разметку axaml
    public function InitializeComponent(): void
    {
        AvaloniaXamlLoader::Load(obj:$this);
    }
}

