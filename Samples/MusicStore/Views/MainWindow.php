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
    use Avalonia\Threading\Dispatcher;
    use Avalonia\VisualTree\VisualExtensions;
    use Models\Album;
    use Peachpie\Avalonia\Ux\Ux;
    use Peachpie\Community\Threading\Tasks\ManagedTask;
    use Peachpie\Community\Threading\Tasks\ManagedTaskEventArgs;
    use ViewModels\MainViewModel;

    class MainWindow extends Window
    {
        private MainViewModel $viewModel;
        private ListBox $libraryList;
        private ListBox $resultsList;
        private TextBox $searchBox;
        private TextBlock $emptyText;
        private Border $storePanel;
        private ProgressBar $busyBar;
        private Button $searchButton;
        private Button $buyAlbumButton;
        private Button $removeAlbumButton;
        private Button $loadMoreButton;
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
            $this->libraryList = Ux::find($this, "LibraryList");
            $this->resultsList = Ux::find($this, "ResultsList");
            $this->searchBox = Ux::find($this, "SearchBox");
            $this->emptyText = Ux::find($this, "EmptyText");
            $this->storePanel = Ux::find($this, "StorePanel");
            $this->busyBar = Ux::find($this, "BusyBar");
            $this->searchButton = Ux::find($this, "SearchButton");
            $this->buyAlbumButton = Ux::find($this, "BuyAlbumButton");
            $this->removeAlbumButton = Ux::find($this, "RemoveAlbumButton");
            $this->loadMoreButton = Ux::find($this, "LoadMoreButton");
        }

        private function wireEvents(): void
        {
            Ux::find($this, "OpenStoreButton")->Click->add(fn() => $this->showStore(true));
            Ux::find($this, "CloseStoreButton")->Click->add(fn() => $this->showStore(false));
            $this->searchButton->Click->add(fn() => $this->startSearch());
            $this->loadMoreButton->Click->add(fn() => $this->loadMore());
            $this->buyAlbumButton->Click->add(fn() => $this->buySelectedAlbum());
            $this->removeAlbumButton->Click->add(fn() => $this->removeSelectedAlbum());
        }

        private function showStore(bool $visible): void
        {
            $this->storePanel->IsVisible = $visible;
        }

        private function startSearch(): void
        {
            $term = trim((string)$this->searchBox->Text);
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
            $this->searchButton->IsEnabled = false;
            $this->loadMoreButton->IsEnabled = false;

            $this->searchTask->Completed->add(function (ManagedTask $sender, ManagedTaskEventArgs $e) use ($append): void {
                Dispatcher::$UIThread->Post(function () use ($e, $append): void {
                    $albums = is_array($e->Result) ? $e->Result : [];

                    if ($append) {
                        $this->viewModel->AppendSearchResults($albums);
                    } else {
                        $this->viewModel->ReplaceSearchResults($albums);
                    }

                    $this->searchOffset += count($albums);
                    $this->viewModel->set_IsBusy(false);
                    $this->searchButton->IsEnabled = true;
                    $this->loadMoreButton->IsEnabled = count($albums) === $this->pageSize;

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
                Dispatcher::$UIThread->Post(function () use ($e): void {
                    $result = is_array($e->Result) ? $e->Result : [];
                    $loaded = (int)($result["loaded"] ?? 0);

                    $this->applyCovers($this->resultsList);
                    $this->applyCovers($this->libraryList);
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
            $album = $this->resultsList->SelectedItem;

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
            $album = $this->libraryList->SelectedItem;

            if (!$album instanceof Album) {
                $this->viewModel->set_Status("Select an album in the library first");
                return;
            }

            $this->viewModel->RemoveAlbum($album);
            $this->updateEmptyState();
        }

        private function updateEmptyState(): void
        {
            $this->emptyText->IsVisible = $this->viewModel->get_Albums()->Count === 0;
        }

        private function InitializeComponent(): void
        {
            AvaloniaXamlLoader::Load(obj: $this);
        }
    }
}
