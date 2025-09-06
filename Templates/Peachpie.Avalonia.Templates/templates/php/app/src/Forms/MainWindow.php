<?php

namespace PeachpieAvaloniaAppTemplate\Forms;

use Avalonia\Controls\TextBlock;
use Avalonia\Controls\Window;
use Avalonia\Markup\Xaml\AvaloniaXamlLoader;
use Peachpie\Avalonia\Ux\Ux;
use Peachpie\Community\Threading\Timer;

class MainWindow extends Window
{
    public TextBlock $DateView;

    public function __construct()
    {
        //Сначала всегда инициализируем axaml.
        $this->InitializeComponent();
        
        $this->DateView->Text = "Hello PHP Avalonia!";
        $this->DateView = Ux::find($this,"DateView");

        // Создание таймера с интервалом в 1 секунду / Create a timer with an interval of 1 second
        Timer::every('1s', function() {
            uiLater(function (){
                $this->DateView->Text = date("Y-m-d H:i:s");
            });
        });

    }

    //Не удаляйте метод, если используете разметку axaml
    public function InitializeComponent(): void
    {
        AvaloniaXamlLoader::Load(obj:$this);
    }
}

