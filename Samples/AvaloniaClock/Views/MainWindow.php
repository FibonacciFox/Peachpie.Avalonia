<?php

namespace Views {

    use Avalonia\DevToolsExtensions;
    use Avalonia\Threading\DispatcherTimer;
    use Peachpie\Avalonia\Controls\UxWindow;
    use Php\Output\Logger;
    use System\TimeSpan;

    class MainWindow extends UxWindow
    {
        public function __construct()
        {
            $this->InitializeComponent();

            $clockPanel = new ClockPanel();
            $this->Content = $clockPanel;

            $timer = new DispatcherTimer();
            $timer->Interval = TimeSpan::FromMilliseconds(16);

            $timer->add_Tick(value: function ($sender, $e) use ($clockPanel) {
                $clockPanel->InvalidateVisual();
            });

            $timer->Start();
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