<?php

namespace ViewModels;

use Models\Album;
use Peachpie\Community\Collections\ObservableCollection;
use Services\AlbumCache;

class MainViewModel extends ViewModelBase
{
    private AlbumCache $cache;
    private ObservableCollection $albums;
    private ObservableCollection $searchResults;
    private string $searchText = "";
    private string $status = "Ready";
    private bool $isBusy = false;

    public function __construct()
    {
        $this->cache = new AlbumCache();
        $this->albums = new ObservableCollection($this->cache->Load());
        $this->searchResults = new ObservableCollection();
    }

    public function get_Albums(): ObservableCollection
    {
        return $this->albums;
    }

    public function get_SearchResults(): ObservableCollection
    {
        return $this->searchResults;
    }

    public function get_SearchText(): string
    {
        return $this->searchText;
    }

    public function set_SearchText(string $value): void
    {
        $this->searchText = $value;
        $this->OnPropertyChanged("SearchText");
    }

    public function get_Status(): string
    {
        return $this->status;
    }

    public function set_Status(string $value): void
    {
        $this->status = $value;
        $this->OnPropertyChanged("Status");
    }

    public function get_IsBusy(): bool
    {
        return $this->isBusy;
    }

    public function set_IsBusy(bool $value): void
    {
        $this->isBusy = $value;
        $this->OnPropertyChanged("IsBusy");
    }

    public function ReplaceSearchResults(array $albums): void
    {
        $this->searchResults->Clear();
        $this->AppendSearchResults($albums);
    }

    public function AppendSearchResults(array $albums): void
    {
        foreach ($albums as $album) {
            if ($album instanceof Album) {
                $this->searchResults->Add($album);
            }
        }

        $this->set_Status($this->searchResults->Count . " albums loaded");
        $this->OnPropertyChanged("SearchResults");
    }

    public function RefreshSearchResults(): void
    {
        $items = [];

        foreach ($this->searchResults as $album) {
            if ($album instanceof Album) {
                $items[] = $album;
            }
        }

        $this->searchResults->Clear();

        foreach ($items as $album) {
            $this->searchResults->Add($album);
        }

        $this->OnPropertyChanged("SearchResults");
    }

    public function AddAlbum(Album $album): bool
    {
        if ($this->ContainsAlbum($album)) {
            $this->set_Status("This album is already in your library");
            return false;
        }

        $this->albums->Add($album);
        $this->Save();
        $this->OnPropertyChanged("Albums");
        $this->set_Status("Added: " . $album->get_Title());

        return true;
    }

    public function RemoveAlbum(Album $album): void
    {
        $this->albums->Remove($album);
        $this->Save();
        $this->OnPropertyChanged("Albums");
        $this->set_Status("Removed: " . $album->get_Title());
    }

    public function Save(): void
    {
        $this->cache->Save($this->albums);
    }

    private function ContainsAlbum(Album $album): bool
    {
        foreach ($this->albums as $existing) {
            if ($existing instanceof Album && $existing->Equals($album)) {
                return true;
            }
        }

        return false;
    }
}
