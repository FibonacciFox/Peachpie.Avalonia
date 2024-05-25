<?php

namespace Views {

    use Avalonia\Threading\Dispatcher;
    use Peachpie\Avalonia\Controls\UxButton;
    use Peachpie\Avalonia\Controls\UxTextBlock;
    use Peachpie\Avalonia\Controls\UxWindow;

    use Php\Threading\Tasks\ManagedTask;
    use System\Threading\AutoResetEvent;
    use System\Threading\CancellationToken;
    use Php\Output\Logger;
    use System\Threading\Mutex;
    use System\Threading\Thread;


    class MainWindow extends UxWindow
    {
        public int $x = 1;
        private Mutex $mutex;

        public UxButton $button_start;
        public UxButton $button_pause_resume;
        public UxTextBlock $textblock1;


        public function __construct()
        {
            $this->InitializeComponent();

            $this->button_start = $this->FindByName("button_start");
            $this->button_pause_resume = $this->FindByName("button_pause_resume");
            $this->textblock1 = $this->FindByName("textblock1");

            $managedTask = new ManagedTask([$this, 'Run']);

            $this->mutex = new Mutex(); //Required for task synchronization

            $this->button_start->on("Click", function () use ($managedTask) {

                if ($managedTask->IsStarted) {
                    $managedTask->stop();
                    $this->button_start->Content = "Start ManagedTask";
                    Logger::Warn("ManagedTask Stoped");
                    $this->x = 0;
                } else {
                    $managedTask->start();
                    $this->button_start->Content = "Stop ManagedTask";
                    Logger::Warn("ManagedTask Started");
                }

            });


            $this->button_pause_resume->on("Click", function () use ($managedTask) {
                if (!$managedTask->IsPaused) {
                    $managedTask->pause();
                    $this->button_pause_resume->Content = "Resume ManagedTask";
                    Logger::Warn("ManagedTask Paused");
                } else {
                    $managedTask->resume();
                    $this->button_pause_resume->Content = "Pause ManagedTask";
                    Logger::Warn("ManagedTask Resumed");
                }

            });

        }

        public function Run(CancellationToken $cancellationToken, AutoResetEvent $autoResetEvent): void
        {
            while (!$cancellationToken->IsCancellationRequested) {
                $autoResetEvent->WaitOne();
                $this->mutex->WaitOne(); //sync Task to access $this->x

                try {
                    $this->x++;
                    // Start the job on the ui thread and return immediately.
                    Dispatcher::$UIThread->Post(function (){
                        $this->textblock1->Text = '$x value: ' . $this->x;
                    });
                } finally {
                    $this->mutex->ReleaseMutex();
                }

                $autoResetEvent->Set();

                Thread::sleep(100);
            }
        }

        private function InitializeComponent(): void
        {
            Load();
            if (defined('DEBUG')) {
                Logger::Info("Debug Build!");
            }
        }
    }

}