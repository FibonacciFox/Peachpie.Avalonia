<?php

namespace Services;

use Models\Album;
use Peachpie\Community\Collections\ObservableCollection;

class AlbumCache
{
    private string $fileName;

    public function __construct()
    {
        $basePath = getenv("APPDATA");

        if ($basePath === false || $basePath === "") {
            $home = getenv("HOME");
            $basePath = ($home !== false && $home !== "") ? $home . "/.local/share" : sys_get_temp_dir();
        }

        $this->fileName = $basePath . "/Avalonia.MusicStore/Albums.json";
    }

    public function Load(): array
    {
        if (!is_file($this->fileName)) {
            return [];
        }

        $json = file_get_contents($this->fileName);
        $payload = json_decode($json, true);

        if (!is_array($payload)) {
            return [];
        }

        $albums = [];

        foreach ($payload as $item) {
            if (is_array($item)) {
                $album = Album::FromArray($item);
                $album->LoadCover();
                $albums[] = $album;
            }
        }

        return $albums;
    }

    public function Save(ObservableCollection $albums): void
    {
        $directory = dirname($this->fileName);

        if (!is_dir($directory)) {
            mkdir($directory, 0777, true);
        }

        $payload = [];

        foreach ($albums as $album) {
            if ($album instanceof Album) {
                $payload[] = $album->ToArray();
            }
        }

        file_put_contents($this->fileName, json_encode($payload, JSON_PRETTY_PRINT));
    }
}
