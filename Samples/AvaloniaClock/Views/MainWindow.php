<?php

namespace Views {

    use Avalonia\DevToolsExtensions;
    use Peachpie\Avalonia\Controls\UxWindow;
    use Php\Output\Logger;
    use Php\Threading\Timer;

    class MainWindow extends UxWindow
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