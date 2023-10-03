<?php
namespace Avalonia\Collections;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
interface IAvaloniaList_1
{
	/**
	 */
	public function get_Count();
	/**
	 * @param \System\Int32|int $index
	 */
	public function get_Item($index);
	/**
	 * @param \System\Int32|int $index
	 * @param \Avalonia\Collections\T $value
	 */
	public function set_Item($index, $value);
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $items
	 */
	public function AddRange($items);
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Collections\Generic\IEnumerable_1 $items
	 */
	public function InsertRange($index, $items);
	/**
	 * @param \System\Int32|int $oldIndex
	 * @param \System\Int32|int $newIndex
	 */
	public function Move($oldIndex, $newIndex);
	/**
	 * @param \System\Int32|int $oldIndex
	 * @param \System\Int32|int $count
	 * @param \System\Int32|int $newIndex
	 */
	public function MoveRange($oldIndex, $count, $newIndex);
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $items
	 */
	public function RemoveAll($items);
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $count
	 */
	public function RemoveRange($index, $count);
}
