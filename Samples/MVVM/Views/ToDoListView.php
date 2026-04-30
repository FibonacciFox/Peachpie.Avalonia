<?php

namespace Views {

    use Avalonia\Controls\Button;
    use Avalonia\Controls\UserControl;
    use Avalonia\Input\TappedEventArgs;
    use Avalonia\Markup\Xaml\AvaloniaXamlLoader;
    use Models\TodoItem;
    use ViewModels\ToDoListViewModel;

    class ToDoListView extends UserControl
    {
        public function __construct()
        {
            $this->InitializeComponent();
        }

        //Не удаляйте метод, если используете разметку axaml
        public function InitializeComponent(): void
        {
            AvaloniaXamlLoader::Load(obj:$this);
        }

        public function DeleteButton_OnTapped(object $sender, TappedEventArgs $eventArgs): void
        {
            if (!$sender instanceof Button) {
                return;
            }

            $item = $sender->DataContext;
            $viewModel = $this->DataContext;

            if ($item instanceof TodoItem && $viewModel instanceof ToDoListViewModel) {
                $viewModel->RemoveItem($item);
            }
        }
    }

}
