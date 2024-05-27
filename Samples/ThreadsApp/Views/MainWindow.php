<?php

namespace Views {

    use Avalonia\Media\Imaging\Bitmap;
    use Avalonia\Threading\Dispatcher;
    use Peachpie\Avalonia\Controls\UxButton;
    use Peachpie\Avalonia\Controls\UxImage;
    use Peachpie\Avalonia\Controls\UxTextBlock;
    use Peachpie\Avalonia\Controls\UxWindow;
    use Php\Threading\Tasks\ManagedTask;
    use System\Net\Http\HttpClient;
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
        public UxImage $image1;

        public function __construct()
        {
            $this->InitializeComponent();

            $this->button_start = $this->FindByName("button_start");
            $this->button_pause_resume = $this->FindByName("button_pause_resume");
            $this->textblock1 = $this->FindByName("textblock1");
            $this->image1 = $this->FindByName("image1");

            $managedTask = new ManagedTask([$this, 'Load']);

            $managedTask->TaskCompleted->add(function ($sender, $e) {
                Logger::Info("Task $e->TaskId completed with result: " . $e->Result);

                Dispatcher::$UIThread->Post(function() use ($e) {
                    $this->image1->Source = $e->Result;
                });
            });

            $this->mutex = new Mutex(); // Required for task synchronization

            $this->button_start->on("Click", function () use ($managedTask) {
                if ($managedTask->IsStarted) {
                    $managedTask->Stop();
                    $this->button_start->Content = "Start ManagedTask";
                    Logger::Warn("ManagedTask Stopped");
                } else {
                    $managedTask->Start();
                    $this->button_start->Content = "Stop ManagedTask";
                    Logger::Warn("ManagedTask Started");
                    $this->x = 0;
                }
            });

            $this->button_pause_resume->on("Click", function () use ($managedTask) {
                if (!$managedTask->IsPaused) {
                    $managedTask->Pause();
                    $this->button_pause_resume->Content = "Resume ManagedTask";
                    Logger::Warn("ManagedTask Paused");
                } else {
                    $managedTask->Resume();
                    $this->button_pause_resume->Content = "Pause ManagedTask";
                    Logger::Warn("ManagedTask Resumed");
                }
            });
        }

        public function Run(CancellationToken $cancellationToken, AutoResetEvent $autoResetEvent)
        {
            while (!$cancellationToken->IsCancellationRequested) {
                $autoResetEvent->WaitOne();
                $this->mutex->WaitOne(); // Sync Task to access $this->x

                try {
                    $this->x++;
                    $btn = new UxButton();
                    // Start the job on the UI thread and return immediately.
                    Dispatcher::$UIThread->Post(function () {
                        $this->textblock1->Text = '$x value: ' . $this->x;
                    });
                }

                finally {
                    $this->mutex->ReleaseMutex();
                }

                $autoResetEvent->Set();
                Logger::Warn("%%%%%%%%%%%%%%");
                Thread::Sleep(500);
            }

        }

        public function Load(CancellationToken $cancellationToken, AutoResetEvent $autoResetEvent) : Bitmap
        {
            $httpClient = new HttpClient();

            $response = $httpClient->GetAsync("https://www.kindpng.com/picc/m/748-7482253_pixel-icon-hd-png-download.png")->Result;
            $response->EnsureSuccessStatusCode();

            $stream = $response->Content->ReadAsStreamAsync()->Result;
            return new Bitmap($stream);
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
