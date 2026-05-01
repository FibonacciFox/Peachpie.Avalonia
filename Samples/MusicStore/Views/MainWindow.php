<?php

namespace Views {

    use Avalonia\Controls\Border;
    use Avalonia\Controls\Button;
    use Avalonia\Controls\ListBox;
    use Avalonia\Controls\ProgressBar;
    use Avalonia\Controls\TextBlock;
    use Avalonia\Controls\TextBox;
    use Avalonia\Controls\Window;
    use Avalonia\Controls\Image;
    use Avalonia\Markup\Xaml\AvaloniaXamlLoader;
    use Peachpie\Avalonia\UI;
    use Peachpie\Avalonia\Xaml\Xaml;
    use Avalonia\VisualTree\VisualExtensions;
    use Models\Album;
    use Peachpie\Community\Threading\Tasks\ManagedTask;
    use Peachpie\Community\Threading\Tasks\ManagedTaskEventArgs;
    use ViewModels\MainViewModel;

    class MainWindow extends Window
    {
        private MainViewModel $viewModel;
        public ListBox $LibraryList;
        public ListBox $ResultsList;
        public TextBox $SearchBox;
        public TextBlock $EmptyText;
        public Border $StorePanel;
        public ProgressBar $BusyBar;
        public Button $SearchButton;
        public Button $BuyAlbumButton;
        public Button $RemoveAlbumButton;
        public Button $LoadMoreButton;
        public Button $OpenStoreButton;
        public Button $CloseStoreButton;
        private ?ManagedTask $searchTask = null;
        private ?ManagedTask $coverTask = null;
        private string $currentSearchTerm = "";
        private int $searchOffset = 0;
        private int $pageSize = 12;

        public function __construct()
        {
            $this->InitializeComponent();
            $this->viewModel = new MainViewModel();
            $this->DataContext = $this->viewModel;

            $this->wireControls();
            $this->wireEvents();
            $this->showStore(false);
            $this->updateEmptyState();
        }

        private function wireControls(): void
        {
            Xaml::bind($this);
        }

        private function wireEvents(): void
        {
            $this->OpenStoreButton->Click->add(fn() => $this->showStore(true));
            $this->CloseStoreButton->Click->add(fn() => $this->showStore(false));
            $this->SearchButton->Click->add(fn() => $this->startSearch());
            $this->LoadMoreButton->Click->add(fn() => $this->loadMore());
            $this->BuyAlbumButton->Click->add(fn() => $this->buySelectedAlbum());
            $this->RemoveAlbumButton->Click->add(fn() => $this->removeSelectedAlbum());
        }

        private function showStore(bool $visible): void
        {
            $this->StorePanel->IsVisible = $visible;
        }

        private function startSearch(): void
        {
            $term = trim((string)$this->SearchBox->Text);
            $this->viewModel->set_SearchText($term);
            $this->currentSearchTerm = $term;
            $this->searchOffset = 0;

            if ($term === "") {
                $this->viewModel->ReplaceSearchResults([]);
                $this->viewModel->set_Status("Type an album or artist name to search");
                return;
            }

            if ($this->searchTask !== null && $this->searchTask->IsStarted && !$this->searchTask->IsCompleted) {
                $this->searchTask->Stop();
            }

            $this->viewModel->ReplaceSearchResults([]);
            $this->runSearchPage(false);
        }

        private function loadMore(): void
        {
            if ($this->currentSearchTerm === "") {
                $this->startSearch();
                return;
            }

            $this->runSearchPage(true);
        }

        private function runSearchPage(bool $append): void
        {
            $term = $this->currentSearchTerm;
            $offset = $this->searchOffset;

            $this->searchTask = new ManagedTask(function ($token, $pause) use ($term, $offset): array {
                if ($token->IsCancellationRequested) {
                    return [];
                }

                return Album::SearchPage($term, $offset, $this->pageSize);
            });

            $this->viewModel->set_IsBusy(true);
            $this->viewModel->set_Status("Loading albums " . ($offset + 1) . "-" . ($offset + $this->pageSize) . "...");
            $this->SearchButton->IsEnabled = false;
            $this->LoadMoreButton->IsEnabled = false;

            $this->searchTask->Completed->add(function (ManagedTask $sender, ManagedTaskEventArgs $e) use ($append): void {
                UI::post(function () use ($e, $append): void {
                    $albums = is_array($e->Result) ? $e->Result : [];

                    if ($append) {
                        $this->viewModel->AppendSearchResults($albums);
                    } else {
                        $this->viewModel->ReplaceSearchResults($albums);
                    }

                    $this->searchOffset += count($albums);
                    $this->viewModel->set_IsBusy(false);
                    $this->SearchButton->IsEnabled = true;
                    $this->LoadMoreButton->IsEnabled = count($albums) === $this->pageSize;

                    if (count($albums) > 0) {
                        $this->startCoverLoading($albums);
                    } else {
                        $this->viewModel->set_Status("No albums found");
                    }
                });
            });

            $this->searchTask->Start();
        }

        private function startCoverLoading(array $albums): void
        {
            if ($this->coverTask !== null && $this->coverTask->IsStarted && !$this->coverTask->IsCompleted) {
                $this->coverTask->Stop();
            }

            $this->viewModel->set_Status("Found " . count($albums) . " albums. Loading covers...");

            $this->coverTask = new ManagedTask(function ($token, $pause) use ($albums): array {
                $loaded = 0;

                foreach ($albums as $album) {
                    if ($token->IsCancellationRequested) {
                        break;
                    }

                    if ($album instanceof Album) {
                        if ($album->LoadCover()) {
                            $loaded++;
                        }
                    }
                }

                return ["albums" => $albums, "loaded" => $loaded];
            });

            $this->coverTask->Completed->add(function (ManagedTask $sender, ManagedTaskEventArgs $e): void {
                UI::post(function () use ($e): void {
                    $result = is_array($e->Result) ? $e->Result : [];
                    $loaded = (int)($result["loaded"] ?? 0);

                    $this->applyCovers($this->ResultsList);
                    $this->applyCovers($this->LibraryList);
                    $this->viewModel->set_Status($loaded . " covers loaded");
                });
            });

            $this->coverTask->Start();
        }

        private function applyCovers(ListBox $listBox): void
        {
            foreach (VisualExtensions::GetVisualDescendants($listBox) as $visual) {
                if (!$visual instanceof Image) {
                    continue;
                }

                $album = $visual->DataContext;

                if ($album instanceof Album && $album->get_Cover() !== null) {
                    $visual->Source = $album->get_Cover();
                }
            }
        }

        private function buySelectedAlbum(): void
        {
            $album = $this->ResultsList->SelectedItem;

            if (!$album instanceof Album) {
                $this->viewModel->set_Status("Select an album in the store first");
                return;
            }

            if ($this->viewModel->AddAlbum($album)) {
                $this->showStore(false);
                $this->updateEmptyState();
            }
        }

        private function removeSelectedAlbum(): void
        {
            $album = $this->LibraryList->SelectedItem;

            if (!$album instanceof Album) {
                $this->viewModel->set_Status("Select an album in the library first");
                return;
            }

            $this->viewModel->RemoveAlbum($album);
            $this->updateEmptyState();
        }

        private function updateEmptyState(): void
        {
            $this->EmptyText->IsVisible = $this->viewModel->get_Albums()->Count === 0;
        }

        private function InitializeComponent(): void
        {
            AvaloniaXamlLoader::Load(obj: $this);
        }
    }
}
