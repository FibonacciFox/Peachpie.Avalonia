<?php

namespace Views\Pages {

    use Avalonia\Controls\ProgressBar;
    use Avalonia\Controls\UserControl;
    use Avalonia\Markup\Xaml\AvaloniaXamlLoader;

    use Avalonia\Threading\DispatcherTimer;
    use Peachpie\Avalonia\Xaml\Xaml;
    use System\TimeSpan;

    class ProgressIndicatorsPage extends UserControl
    {

        public ProgressBar $Bar1;
        public ProgressBar $Bar2;
        public ProgressBar $Bar3;
        public ProgressBar $Bar4;
        public ProgressBar $Bar5;
        public ProgressBar $Bar6;
        public ProgressBar $Bar7;
        public ProgressBar $Bar8;

        private float $valueBar = 0;

        public function __construct()
        {
            $this->InitializeComponent();

            Xaml::bind($this);

            DispatcherTimer::Run( action: function(): bool {

                if($this->valueBar > 100){
                    $this->valueBar = 0;
                }
                
                $this->Bar1->Value = $this->valueBar;
                $this->Bar2->Value = $this->valueBar;
                $this->Bar3->Value = $this->valueBar;
                $this->Bar4->Value = $this->valueBar;
                $this->Bar5->Value = $this->valueBar;
                $this->Bar6->Value = $this->valueBar;
                $this->Bar7->Value = $this->valueBar;
                $this->Bar8->Value = $this->valueBar;
                $this->valueBar += 25;
               
            return true;
            }, interval: TimeSpan::FromSeconds(0.5), priority: null);
        }

        private function InitializeComponent(): void
        {
            AvaloniaXamlLoader::Load(obj:$this);
        }
    }

}
