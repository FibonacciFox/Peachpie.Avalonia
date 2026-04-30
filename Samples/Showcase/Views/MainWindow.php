<?php

namespace Views {

    use Avalonia\Controls\Button;
    use Avalonia\Controls\ListBox;
    use Avalonia\Controls\ProgressBar;
    use Avalonia\Controls\TextBlock;
    use Avalonia\Controls\Window;
    use Avalonia\Markup\Xaml\AvaloniaXamlLoader;
    use Avalonia\Threading\Dispatcher;
    use Avalonia\Threading\DispatcherTimer;
    use Models\TimelineEntry;
    use Peachpie\Avalonia\Ux\Ux;
    use Peachpie\Community\Collections\ObservableCollection;
    use Peachpie\Community\Output\Logger;
    use Peachpie\Community\Threading\Tasks\ManagedTask;
    use Peachpie\Community\Threading\Tasks\ManagedTaskEventArgs;
    use System\TimeSpan;
    use System\Threading\Thread;

    class MainWindow extends Window
    {
        private TextBlock $clockText;
        private TextBlock $statusText;
        private TextBlock $counterText;
        private TextBlock $taskStatusText;
        private ProgressBar $pulseProgress;
        private ProgressBar $taskProgress;
        private ListBox $timelineList;
        private Button $startTaskButton;
        private Button $cancelTaskButton;

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
            $this->clockText = Ux::find($this, "ClockText");
            $this->statusText = Ux::find($this, "StatusText");
            $this->counterText = Ux::find($this, "CounterText");
            $this->taskStatusText = Ux::find($this, "TaskStatusText");
            $this->pulseProgress = Ux::find($this, "PulseProgress");
            $this->taskProgress = Ux::find($this, "TaskProgress");
            $this->timelineList = Ux::find($this, "TimelineList");
            $this->startTaskButton = Ux::find($this, "StartTaskButton");
            $this->cancelTaskButton = Ux::find($this, "CancelTaskButton");

            $this->timeline = new ObservableCollection();
            $this->timelineList->ItemsSource = $this->timeline;
        }

        private function wireEvents(): void
        {
            $direct = Ux::find($this, "DirectEventButton");
            $ux = Ux::find($this, "UxEventButton");
            $once = Ux::find($this, "OnceEventButton");
            $clear = Ux::find($this, "ClearLogButton");

            $direct->Click->add(function (): void {
                $this->addLog("ClrEvent", "Direct .NET event subscription via ->Click->add().");
            });

            Ux::on($ux, "Click", function (): void {
                $this->addLog("Ux::on", "EventProxy subscribed this handler from PHP.");
            });

            Ux::once($once, "Click", function (): void {
                $this->addLog("Ux::once", "This handler runs once and then unsubscribes.");
            });

            $clear->Click->add(function (): void {
                $this->timeline->Clear();
                $this->addLog("log", "Timeline was cleared.");
            });

            $this->startTaskButton->Click->add(fn() => $this->startComputeTask());
            $this->cancelTaskButton->Click->add(fn() => $this->cancelComputeTask());
        }

        private function startClock(): void
        {
            $timer = new DispatcherTimer();
            $timer->Interval = TimeSpan::FromSeconds(1);
            $timer->Tick->add(function () {
                $this->ticks++;
                $this->clockText->Text = date('H:i:s');
                $this->counterText->Text = (string)$this->ticks;
                $this->pulseProgress->Value = ($this->ticks * 7) % 100;
                $this->statusText->Text = "UI alive, tick #" . $this->ticks;
            });
            $timer->Start();
        }

        private function startComputeTask(): void
        {
            if ($this->currentTask !== null && $this->currentTask->IsStarted && !$this->currentTask->IsCompleted) {
                $this->addLog("task", "A compute task is already running.");
                return;
            }

            $this->taskProgress->Value = 0;
            $this->taskStatusText->Text = "Computing prime numbers on a background task...";
            $this->startTaskButton->IsEnabled = false;
            $this->cancelTaskButton->IsEnabled = true;
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
                        Dispatcher::$UIThread->Post(function () use ($progress, $count, $lastPrime) {
                            $this->taskProgress->Value = $progress;
                            $this->taskStatusText->Text = "Progress $progress%, primes: $count, last: $lastPrime";
                        });
                        Thread::Sleep(8);
                    }
                }

                return "Found $count primes below 70000. Last prime: $lastPrime.";
            });

            $this->currentTask->Completed->add(function (ManagedTask $sender, ManagedTaskEventArgs $e): void {
                Dispatcher::$UIThread->Post(function () use ($e) {
                    $this->taskProgress->Value = 100;
                    $this->taskStatusText->Text = (string)$e->Result;
                    $this->startTaskButton->IsEnabled = true;
                    $this->cancelTaskButton->IsEnabled = false;
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
