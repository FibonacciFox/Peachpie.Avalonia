<?php

namespace Views {

    use Avalonia\Controls\Window;
    use Peachpie\Community\Output\Logger;
    use Peachpie\Community\Threading\Timer;
    use Avalonia\Markup\Xaml\AvaloniaXamlLoader;

    class MainWindow extends Window
    {
        public function __construct()
        {
            $this->InitializeComponent();

            $clockPanel = new ClockPanel();
            $this->Content = $clockPanel;

            $intervalTimer = Timer::every('16', function() use ($clockPanel)  {

                uiLater(function() use ($clockPanel) {
                    $clockPanel->InvalidateVisual();
                });

            });
        }

        private function InitializeComponent()
        {
            AvaloniaXamlLoader::Load(obj:$this);

            if ( defined('DEBUG') ) {
                Logger::Info("Debug Build!");
            }
        }
    }

}