<?php

namespace Models;

use Avalonia\Media\Imaging\Bitmap;
use Throwable;

class Album
{
    private string $artist;
    private string $title;
    private string $coverUrl;
    private string $genre;
    private string $price;
    private mixed $cover = null;
    private bool $coverLoadAttempted = false;

    public function __construct(
        string $artist,
        string $title,
        string $coverUrl = "",
        string $genre = "Album",
        string $price = ""
    ) {
        $this->artist = $artist;
        $this->title = $title;
        $this->coverUrl = $coverUrl;
        $this->genre = $genre;
        $this->price = $price;
    }

    public function get_Artist(): string
    {
        return $this->artist;
    }

    public function get_Title(): string
    {
        return $this->title;
    }

    public function get_CoverUrl(): string
    {
        return $this->coverUrl;
    }

    public function get_Cover(): mixed
    {
        return $this->cover;
    }

    public function get_Genre(): string
    {
        return $this->genre;
    }

    public function get_Price(): string
    {
        return $this->price;
    }

    public function get_Subtitle(): string
    {
        $parts = array_filter([$this->artist, $this->genre]);
        return implode(" / ", $parts);
    }

    public function get_SearchLine(): string
    {
        $price = $this->price !== "" ? " - " . $this->price : "";
        return $this->artist . " - " . $this->title . $price;
    }

    public function Equals(Album $other): bool
    {
        return strtolower($this->artist) === strtolower($other->get_Artist())
            && strtolower($this->title) === strtolower($other->get_Title());
    }

    public function ToArray(): array
    {
        return [
            "artist" => $this->artist,
            "title" => $this->title,
            "coverUrl" => $this->coverUrl,
            "genre" => $this->genre,
            "price" => $this->price
        ];
    }

    public static function FromArray(array $data): Album
    {
        return new Album(
            (string)($data["artist"] ?? "Unknown artist"),
            (string)($data["title"] ?? "Untitled album"),
            (string)($data["coverUrl"] ?? ""),
            (string)($data["genre"] ?? "Album"),
            (string)($data["price"] ?? "")
        );
    }

    public function LoadCover(): bool
    {
        if ($this->coverLoadAttempted) {
            return $this->cover !== null;
        }

        $this->coverLoadAttempted = true;

        if ($this->coverUrl === "") {
            return false;
        }

        try {
            $path = $this->GetCoverCachePath();

            if (!is_file($path)) {
                $context = stream_context_create([
                    "http" => [
                        "timeout" => 8,
                        "header" => "User-Agent: Peachpie.Avalonia.MusicStore/1.0\r\n"
                    ]
                ]);

                $bytes = @file_get_contents($this->coverUrl, false, $context);

                if ($bytes === false || $bytes === "") {
                    return false;
                }

                $directory = dirname($path);

                if (!is_dir($directory)) {
                    mkdir($directory, 0777, true);
                }

                file_put_contents($path, $bytes);
            }

            $this->cover = new Bitmap($path);
            return true;
        } catch (Throwable $e) {
            $this->cover = null;
            return false;
        }
    }

    private function GetCoverCachePath(): string
    {
        $basePath = getenv("APPDATA");

        if ($basePath === false || $basePath === "") {
            $home = getenv("HOME");
            $basePath = ($home !== false && $home !== "") ? $home . "/.local/share" : sys_get_temp_dir();
        }

        return $basePath . "/Avalonia.MusicStore/Covers/" . md5($this->coverUrl) . ".jpg";
    }

    public static function Search(string $term): array
    {
        return self::SearchPage($term, 0, 20);
    }

    public static function SearchPage(string $term, int $offset, int $limit): array
    {
        $term = trim($term);

        if ($term === "") {
            return [];
        }

        $albums = self::SearchWithHttp($term, $offset, $limit);

        if (count($albums) === 0 && $offset === 0) {
            return self::FallbackSearch($term);
        }

        return $albums;
    }

    private static function SearchWithHttp(string $term, int $offset, int $limit): array
    {
        $term = trim($term);

        $url = "https://itunes.apple.com/search?media=music&entity=album"
            . "&limit=" . max(1, min(50, $limit))
            . "&offset=" . max(0, $offset)
            . "&term=" . urlencode($term);
        $context = stream_context_create([
            "http" => [
                "timeout" => 12,
                "header" => "User-Agent: Peachpie.Avalonia.MusicStore/1.0\r\n"
            ]
        ]);

        $json = @file_get_contents($url, false, $context);

        if ($json === false) {
            return [];
        }

        $payload = json_decode($json, true);

        if (!is_array($payload) || !isset($payload["results"]) || !is_array($payload["results"])) {
            return [];
        }

        $albums = [];

        foreach ($payload["results"] as $item) {
            if (!is_array($item)) {
                continue;
            }

            $artist = (string)($item["artistName"] ?? "");
            $title = (string)($item["collectionName"] ?? "");

            if ($artist === "" || $title === "") {
                continue;
            }

            $cover = (string)($item["artworkUrl100"] ?? "");
            $cover = str_replace("100x100bb", "600x600bb", $cover);
            $genre = (string)($item["primaryGenreName"] ?? "Album");
            $price = isset($item["collectionPrice"]) ? "$" . number_format((float)$item["collectionPrice"], 2) : "";

            $albums[] = new Album($artist, $title, $cover, $genre, $price);
        }

        return $albums;
    }

    private static function FallbackSearch(string $term): array
    {
        return [
            new Album("The Avalonians", "$term Sessions", "", "Indie", "$9.99"),
            new Album("PeachPie Orchestra", "Runtime Signals", "", "Electronic", "$7.99"),
            new Album("Compiled Bindings", "Live at XAML Hall", "", "Alternative", "$8.99")
        ];
    }
}
