<?php

namespace Peachpie\Avalonia\Collections;


use Peachpie\Avalonia\Core\Collections\AvaloniaObjectList;
use Peachpie\Avalonia\Traits\EventsTrait;

class UxList extends AvaloniaObjectList
{
    use EventsTrait;

    /**
     * Adds an item to the collection.
     * @param mixed $item The item.
     * @return void
     */
    public function Add(mixed $item): void  {
        AvaloniaObjectList::Add($item);
    }

    /**
     * Inserts multiple items at the specified index.
     * @param int $index
     * @param UxList $items
     * @return void
     */
    public function InsertRange(int $index , UxList $items): void  {
        AvaloniaObjectList::InsertRange($index, $items);
    }

    /**
     * Removes all items from the collection.
     * @return void
     */
    public function Clear(): void  {
        AvaloniaObjectList::Clear();
    }


    /**
     * Tests if the collection contains the specified item.
     * @param mixed $item The item.
     * @return void True if the collection contains the item; otherwise false.
     */
    public function Contains(mixed $item): void  {
        AvaloniaObjectList::Contains($item);
    }
}
