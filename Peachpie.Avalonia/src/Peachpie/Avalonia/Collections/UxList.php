<?php

namespace Peachpie\Avalonia\Collections;


use Closure;
use Peachpie\Avalonia\Core\Collections\AvaloniaObjectList;
use Peachpie\Avalonia\Core\EventsTraitExtension;


/**
 * @property int $Count Gets the number of items in the collection.
 * @property int $Capacity Gets or sets the total number of elements the internal data structure can hold without resizing.
 */
class UxList extends AvaloniaObjectList
{

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

    /**
     * Removes an item from the collection.
     * @param mixed $item The item.
     * @return bool True if the item was found and removed, otherwise false.
     */
    public function Remove(mixed $item): bool  {
       return AvaloniaObjectList::Contains($item);
    }

    /**
     * Removes the item at the specified index.
     * @param int $index The index.
     * @return void
     */
    public function RemoveAt(int $index): void  {
        AvaloniaObjectList::RemoveAt($index);
    }

    /**
     * Removes multiple items from the collection.
     * @param UxList $items The items.
     * @return bool True if the item was found and removed, otherwise false.
     */
    public function RemoveAll(UxList $items): bool  {
        return AvaloniaObjectList::RemoveAll($items);
    }


    /**
     * Raised when a change is made to the collection's items.
     * @param Closure $callback
     * @return void
     */
    public function onCollectionChanged(Closure $callback) : void {
        EventsTraitExtension::on($this, "CollectionChanged", $callback);
    }
}
