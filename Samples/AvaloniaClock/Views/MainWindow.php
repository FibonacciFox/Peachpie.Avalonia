<?php

namespace Views {

    use Avalonia\Controls\Window;
    use Avalonia\Markup\Xaml\AvaloniaXamlLoader;
    use Peachpie\Community\Output\Logger;
    use Peachpie\Community\Threading\Timer;

    class MainWindow extends Window
    {
        public function __construct()
        {
            $this->InitializeComponent();

            $clockPanel = new ClockPanel();
            $this->Content = $clockPanel;
        }

        private function InitializeComponent(): void
        {
            AvaloniaXamlLoader::Load(obj:$this);

            if ( defined('DEBUG') ) {
                Logger::Info("Debug Build!");
            }
        }
    }

}