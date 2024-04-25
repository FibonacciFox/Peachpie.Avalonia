<?php

namespace Views\Pages {

    use Peachpie\Avalonia\Controls\UxProgressBar;
    use Peachpie\Avalonia\Controls\UxUserControl;
    
    use Avalonia\Threading\DispatcherTimer;
    use System\TimeSpan;

    class ProgressIndicatorsPage extends UxUserControl
    {

        public UxProgressBar $Bar1;
        public UxProgressBar $Bar2;
        public UxProgressBar $Bar3;
        public UxProgressBar $Bar4;
        public UxProgressBar $Bar5;
        public UxProgressBar $Bar6;
        public UxProgressBar $Bar7;
        public UxProgressBar $Bar8;

        private float $valueBar = 0;

        public function __construct()
        {
            $this->InitializeComponent();

            $this->Bar1 = $this->FindByName("Bar1");
            $this->Bar2 = $this->FindByName("Bar2");
            $this->Bar3= $this->FindByName("Bar3");
            $this->Bar4 = $this->FindByName("Bar4");
            $this->Bar5 = $this->FindByName("Bar5");
            $this->Bar6 = $this->FindByName("Bar6");
            $this->Bar7 = $this->FindByName("Bar7");
            $this->Bar8 = $this->FindByName("Bar8");

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
            Load();
        }
    }

}