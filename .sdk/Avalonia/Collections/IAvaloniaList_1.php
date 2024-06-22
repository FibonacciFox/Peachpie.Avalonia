<?php
namespace Avalonia\Collections;
interface IAvaloniaList_1
{


	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $items [generic: T]
	 * @return \System\Void|void
	 */
	public function AddRange($items);
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Collections\Generic\IEnumerable_1 $items [generic: T]
	 * @return \System\Void|void
	 */
	public function InsertRange($index, $items);
	/**
	 * @param \System\Int32|int $oldIndex
	 * @param \System\Int32|int $newIndex
	 * @return \System\Void|void
	 */
	public function Move($oldIndex, $newIndex);
	/**
	 * @param \System\Int32|int $oldIndex
	 * @param \System\Int32|int $count
	 * @param \System\Int32|int $newIndex
	 * @return \System\Void|void
	 */
	public function MoveRange($oldIndex, $count, $newIndex);
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $items [generic: T]
	 * @return \System\Void|void
	 */
	public function RemoveAll($items);
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	public function RemoveRange($index, $count);
}