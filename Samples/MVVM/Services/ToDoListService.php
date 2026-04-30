<?php

namespace Services;

use Models\TodoItem;
use Peachpie\Community\Collections\ObservableCollection;

class ToDoListService
{
    private string $fileName;

    public function __construct()
    {
        $basePath = getenv("APPDATA");

        if ($basePath === false || $basePath === "") {
            $home = getenv("HOME");
            $basePath = ($home !== false && $home !== "") ? $home . "/.local/share" : sys_get_temp_dir();
        }

        $this->fileName = $basePath . "/Avalonia.SimpleToDoList/MyToDoList.json";
    }

    public function GetItems() : array {
        if (is_file($this->fileName)) {
            $json = file_get_contents($this->fileName);
            $items = json_decode($json, true);

            if (is_array($items)) {
                $result = [];

                foreach ($items as $item) {
                    if (!is_array($item)) {
                        continue;
                    }

                    $description = (string)($item["description"] ?? "");
                    $isChecked = (bool)($item["isChecked"] ?? false);

                    if ($description !== "") {
                        $result[] = new TodoItem($description, $isChecked);
                    }
                }

                return $result;
            }
        }

        return array(
            new TodoItem("Walk the dog"),
            new TodoItem("Buy some milk"),
            new TodoItem("Learn Avalonia", true),
            new TodoItem("Learn PeachPie", false)
        );
    }

    public function SaveItems(ObservableCollection $items): void {
        $directory = dirname($this->fileName);

        if (!is_dir($directory)) {
            mkdir($directory, 0777, true);
        }

        $payload = [];

        foreach ($items as $item) {
            if ($item instanceof TodoItem) {
                $payload[] = [
                    "description" => $item->get_Description(),
                    "isChecked" => $item->get_IsChecked()
                ];
            }
        }

        file_put_contents($this->fileName, json_encode($payload, JSON_PRETTY_PRINT));
    }
}
