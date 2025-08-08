<?php

namespace Views {

    use Avalonia\Media\Imaging\Bitmap;
    use Avalonia\Threading\Dispatcher;
    use Exception;
    use Peachpie\Avalonia\Controls\UxButton;
    use Peachpie\Avalonia\Controls\UxImage;
    use Peachpie\Avalonia\Controls\UxTextBlock;
    use Peachpie\Avalonia\Controls\UxWindow;
    use Peachpie\Community\Threading\Tasks\ManagedTask;
    use Peachpie\Community\Threading\Tasks\ManagedTaskEventArgs;
    use Peachpie\Community\Threading\Tasks\ManagedTaskException;
    use System\Net\Http\HttpClient;
    use System\Threading\AutoResetEvent;
    use System\Threading\CancellationToken;
    use Peachpie\Community\Output\Logger;
    use System\Threading\Mutex;
    use System\Threading\Thread;
    // Тест унифицированной подписки
    use Peachpie\Avalonia\Ux\Ux;

    // Главный класс окна приложения, унаследованный от UxWindow
    class MainWindow extends UxWindow
    {
        public int $x = 1;  // Переменная для хранения состояния
        private Mutex $mutex;  // Мьютекс для синхронизации потоков

        public UxButton $button_start;  // Кнопка для запуска и остановки задачи
        public UxButton $button_pause_resume;  // Кнопка для паузы и возобновления задачи
        public UxTextBlock $textblock1;  // Текстовый блок для отображения результатов
        public UxImage $image1;  // Изображение для отображения результатов

        // Конструктор класса MainWindow
        /**
         * @throws Exception
         */
        public function __construct()
        {
            $this->InitializeComponent();

            // Находим элементы управления по их именам
            $this->button_start = $this->FindByName("button_start");
            $this->button_pause_resume = $this->FindByName("button_pause_resume");
            $this->textblock1 = $this->FindByName("textblock1");
            $this->image1 = $this->FindByName("image1");

            // Создаем и настраиваем ManagedTask для загрузки изображения
            $managedTask = new ManagedTask([$this, 'Load']);

            // Создаем задачу-продолжение для обработки результата первой задачи
            $continuedTask = $managedTask->ContinueWith([$this, 'RunContinuation']);

            // Обработчик завершения первой задачи
            $managedTask->Completed->add(function (ManagedTask $sender, ManagedTaskEventArgs $e) {
                Logger::Info("Task $e->TaskId completed with result: " . $e->Result);

                // Проверяем, является ли результат исключением
                if ($e->Result instanceof ManagedTaskException) {
                    Logger::Error("Task error: " . $e->Result->getMessage());
                    Dispatcher::$UIThread->Post(function() use ($e) {
                        $this->textblock1->Text = 'Task error: ' . $e->Result->getMessage();
                    });
                } else {
                    Dispatcher::$UIThread->Post(function() use ($e) {
                        $this->image1->Source = $e->Result;
                    });
                }
            });

            // Обработчик завершения задачи-продолжения
            $continuedTask->Completed->add(function (ManagedTask $sender, ManagedTaskEventArgs $e) {
                Logger::Info("Continuation task $e->TaskId completed with result: " . $e->Result);

                // Проверяем, является ли результат исключением
                if ($e->Result instanceof ManagedTaskException) {
                    Logger::Error("Continuation task error: " . $e->Result->getMessage());
                    Dispatcher::$UIThread->Post(function() use ($e) {
                        $this->textblock1->Text = 'Continuation task error: ' . $e->Result->getMessage();
                    });
                } else {
                    Dispatcher::$UIThread->Post(function() use ($e) {
                        $this->textblock1->Text = 'Continuation task result: ' . $e->Result;
                    });
                }
            });

            // Инициализация мьютекса
            $this->mutex = new Mutex(); // Необходим для синхронизации задач

            // Обработчик клика для кнопки "Start" используя новую систему подписки на события
            Ux::of($this->button_start)->once("Click", function () use ($managedTask) {
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

            // Обработчик клика для кнопки "Pause/Resume"
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

        // Метод для загрузки изображения
        public function Load(CancellationToken $cancellationToken, AutoResetEvent $autoResetEvent) : Bitmap
        {
            $httpClient = new HttpClient();

            try {
                // Загружаем изображение по URL
                $response = $httpClient->GetAsync("https://github.com/FibonacciFox/Peachpie.Avalonia/blob/master/Samples/Application/Assets/Logo.png?raw=true")->Result;
                $response->EnsureSuccessStatusCode();

                $stream = $response->Content->ReadAsStreamAsync()->Result;

                return new Bitmap($stream);
            } catch (Exception $ex) {
                // Обрабатываем исключения и выбрасываем ManagedTaskException
                throw new ManagedTaskException("Error in Load method: " . $ex->getMessage(), $ex->getCode());
            } finally {
                // Освобождаем ресурсы
                $httpClient->Dispose();
            }
        }

        // Метод-продолжение для обработки результата первой задачи
        public function RunContinuation(CancellationToken $cancellationToken, AutoResetEvent $autoResetEvent, $previousResult): string
        {
            try {
                // Пока задача не отменена
                while (!$cancellationToken->IsCancellationRequested) {
                    $autoResetEvent->WaitOne();
                    $this->mutex->WaitOne(); // Синхронизируем доступ к $this->x

                    try {
                        $this->x++;
                        // Обновляем UI из потока диспетчера
                        Dispatcher::$UIThread->Post(function () use ($previousResult) {
                            $this->textblock1->Text = 'Continuation with previous result: ' . $previousResult . ' and new $x value: ' . $this->x;
                        });
                    } finally {
                        // Освобождаем мьютекс
                        $this->mutex->ReleaseMutex();
                    }

                    $autoResetEvent->Set();
                    Logger::Warn("Continuation %%%%%%%%%%%%%%");
                    Thread::Sleep(500);
                }
            } catch (Exception $ex) {
                // Обрабатываем исключения и выбрасываем ManagedTaskException
                throw new ManagedTaskException("Error in RunContinuation method: " . $ex->getMessage(), $ex->getCode());
            }
            return 'Continuation result with $x value: ' . $this->x;
        }

        // Метод инициализации компонентов
        private function InitializeComponent(): void
        {
            Load();
            if (defined('DEBUG')) {
                Logger::Info("Debug Build!");
            }
        }
    }
}
