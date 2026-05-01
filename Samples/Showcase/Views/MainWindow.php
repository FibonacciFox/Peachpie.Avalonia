<?php

namespace Views {

    use Avalonia\Controls\Button;
    use Avalonia\Controls\ListBox;
    use Avalonia\Controls\ProgressBar;
    use Avalonia\Controls\TextBlock;
    use Avalonia\Controls\Window;
    use Avalonia\Markup\Xaml\AvaloniaXamlLoader;
    use Avalonia\Threading\DispatcherTimer;
    use Models\TimelineEntry;
    use Peachpie\Avalonia\UI;
    use Peachpie\Avalonia\Xaml\Xaml;
    use Peachpie\Avalonia\Ux\Ux;
    use Peachpie\Community\Collections\ObservableCollection;
    use Peachpie\Community\Output\Logger;
    use Peachpie\Community\Threading\Tasks\ManagedTask;
    use Peachpie\Community\Threading\Tasks\ManagedTaskEventArgs;
    use System\TimeSpan;
    use System\Threading\Thread;

    class MainWindow extends Window
    {
        public TextBlock $ClockText;
        public TextBlock $StatusText;
        public TextBlock $CounterText;
        public TextBlock $TaskStatusText;
        public ProgressBar $PulseProgress;
        public ProgressBar $TaskProgress;
        public ListBox $TimelineList;
        public Button $StartTaskButton;
        public Button $CancelTaskButton;
        public Button $DirectEventButton;
        public Button $UxEventButton;
        public Button $OnceEventButton;
        public Button $ClearLogButton;

        private ObservableCollection $timeline;
        private ?ManagedTask $currentTask = null;
        private int $ticks = 0;

        public function __construct()
        {
            $this->InitializeComponent();
            $this->wireControls();
            $this->wireEvents();
            $this->startClock();

            $this->addLog("startup", "Showcase initialized from PHP and XAML.");
        }

        private function wireControls(): void
        {
            Xaml::bind($this);

            $this->timeline = new ObservableCollection();
            $this->TimelineList->ItemsSource = $this->timeline;
        }

        private function wireEvents(): void
        {
            $this->DirectEventButton->Click->add(function (): void {
                $this->addLog("ClrEvent", "Direct .NET event subscription via ->Click->add().");
            });

            Ux::on($this->UxEventButton, "Click", function (): void {
                $this->addLog("Ux::on", "EventProxy subscribed this handler from PHP.");
            });

            Ux::once($this->OnceEventButton, "Click", function (): void {
                $this->addLog("Ux::once", "This handler runs once and then unsubscribes.");
            });

            $this->ClearLogButton->Click->add(function (): void {
                $this->timeline->Clear();
                $this->addLog("log", "Timeline was cleared.");
            });

            $this->StartTaskButton->Click->add(fn() => $this->startComputeTask());
            $this->CancelTaskButton->Click->add(fn() => $this->cancelComputeTask());
        }

        private function startClock(): void
        {
            $timer = new DispatcherTimer();
            $timer->Interval = TimeSpan::FromSeconds(1);
            $timer->Tick->add(function () {
                $this->ticks++;
                $this->ClockText->Text = date('H:i:s');
                $this->CounterText->Text = (string)$this->ticks;
                $this->PulseProgress->Value = ($this->ticks * 7) % 100;
                $this->StatusText->Text = "UI alive, tick #" . $this->ticks;
            });
            $timer->Start();
        }

        private function startComputeTask(): void
        {
            if ($this->currentTask !== null && $this->currentTask->IsStarted && !$this->currentTask->IsCompleted) {
                $this->addLog("task", "A compute task is already running.");
                return;
            }

            $this->TaskProgress->Value = 0;
            $this->TaskStatusText->Text = "Computing prime numbers on a background task...";
            $this->StartTaskButton->IsEnabled = false;
            $this->CancelTaskButton->IsEnabled = true;
            $this->addLog("task", "ManagedTask started.");

            $this->currentTask = new ManagedTask(function ($token, $pause): string {
                $count = 0;
                $lastPrime = 2;

                for ($candidate = 2; $candidate < 70000; $candidate++) {
                    if ($token->IsCancellationRequested) {
                        return "Cancelled after $count primes.";
                    }

                    if ($this->isPrime($candidate)) {
                        $count++;
                        $lastPrime = $candidate;
                    }

                    if ($candidate % 700 === 0) {
                        $progress = (int)(($candidate / 70000) * 100);
                        UI::post(function () use ($progress, $count, $lastPrime) {
                            $this->TaskProgress->Value = $progress;
                            $this->TaskStatusText->Text = "Progress $progress%, primes: $count, last: $lastPrime";
                        });
                        Thread::Sleep(8);
                    }
                }

                return "Found $count primes below 70000. Last prime: $lastPrime.";
            });

            $this->currentTask->Completed->add(function (ManagedTask $sender, ManagedTaskEventArgs $e): void {
                UI::post(function () use ($e) {
                    $this->TaskProgress->Value = 100;
                    $this->TaskStatusText->Text = (string)$e->Result;
                    $this->StartTaskButton->IsEnabled = true;
                    $this->CancelTaskButton->IsEnabled = false;
                    $this->addLog("task", "ManagedTask completed: " . $e->Result);
                });
            });

            $this->currentTask->Start();
        }

        private function cancelComputeTask(): void
        {
            if ($this->currentTask !== null && $this->currentTask->IsStarted && !$this->currentTask->IsCompleted) {
                $this->currentTask->Stop();
                $this->addLog("task", "Cancellation requested.");
            }
        }

        private function isPrime(int $value): bool
        {
            if ($value < 2) {
                return false;
            }

            for ($divisor = 2; $divisor * $divisor <= $value; $divisor++) {
                if ($value % $divisor === 0) {
                    return false;
                }
            }

            return true;
        }

        private function addLog(string $kind, string $message): void
        {
            Logger::Info("[$kind] $message");
            $this->timeline->Add(new TimelineEntry($kind, $message));

            if ($this->timeline->Count > 80) {
                $this->timeline->RemoveAt(0);
            }
        }

        private function InitializeComponent(): void
        {
            AvaloniaXamlLoader::Load(obj: $this);
        }
    }
}
