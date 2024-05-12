<?php

namespace Php\Collections;

use ArrayAccess;
use Countable;
use Exception;
use Iterator;

class ObservableCollection implements Iterator, Countable, ArrayAccess
{

    function __construct(iterable $Items = null)
    {
    }
    
    /**
     * @readonly
     * @var int
     */
    public int $Count = 0;

    /**
     * @inheritDoc
     */
    public function current(): mixed
    {
        // TODO: Implement current() method.
    }

    /**
     * @inheritDoc
     */
    public function next(): void
    {
        // TODO: Implement next() method.
    }

    /**
     * @inheritDoc
     */
    public function key(): mixed
    {
        // TODO: Implement key() method.
    }

    /**
     * @inheritDoc
     */
    public function valid(): bool
    {
        // TODO: Implement valid() method.
    }

    /**
     * @inheritDoc
     */
    public function rewind(): void
    {
        // TODO: Implement rewind() method.
    }

    /**
     * @inheritDoc
     */
    public function count(): int
    {
        // TODO: Implement count() method.
    }

    /**
     * @inheritDoc
     */
    public function offsetExists(mixed $offset): bool
    {
        // TODO: Implement offsetExists() method.
    }

    /**
     * @inheritDoc
     */
    public function offsetGet(mixed $offset): mixed
    {
        // TODO: Implement offsetGet() method.
    }

    /**
     * @inheritDoc
     * @throws Exception
     */
    public function offsetSet(mixed $offset, mixed $value): void
    {
        if ($offset != null) {
            throw new Exception("Unable to modify the list");
        }
    }

    /**
     * @inheritDoc
     */
    public function offsetUnset(mixed $offset): void
    {
        // TODO: Implement offsetUnset() method.
    }

    /**
     * @param array $Items
     */
    public function setAll(iterable $Items)
    {
    }

    /**
     * @return void
     */
    public function clear()
    {
    }

    /**
     * @param mixed $object
     * @return void
     */
    public function add(mixed $object): void
    {
    }

    /**
     * @param mixed $object
     * @return bool
     */
    public function contains(mixed $object) : bool
    {
    }

    /**
     * @param mixed $object
     * @return int
     */
    public function indexOf(mixed $object) : int
    {
    }

    /**
     * @param int $index
     * @param mixed $object
     * @return int
     */
    public function insert(int $index, mixed $object): int
    {
    }

    /**
     * @param mixed $item
     * @return bool
     */
    public function remove(mixed $item) : bool
    {
    }

    /**
     * @param int $index
     * @return void
     */
    public function removeAt(int $index) : void
    {
    }

    /**
     * 
     * 
     * 
     * @param int $oldIndex
     * @param int $newIndex
     * @return void
     */
    public function move(int $oldIndex, int $newIndex) : void
    {
    }


}