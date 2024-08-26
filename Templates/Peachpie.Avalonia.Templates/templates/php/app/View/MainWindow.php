<?php

namespace View;

use Peachpie\Avalonia\Controls\UxTextBlock;
use Peachpie\Avalonia\Controls\UxWindow;
use Peachpie\Community\Threading\Timer;

class MainWindow extends UxWindow
{
    public UxTextBlock $DateView;

    public function __construct()
    {
        //Сначала всегда инициализируем axaml.
        $this->InitializeComponent();

        $this->DateView = $this->FindByName("DateView");

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
        Load();
    }
}

