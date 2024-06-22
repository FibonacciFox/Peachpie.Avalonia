<?php
namespace Avalonia\Controls\Selection;
class SelectionNodeBase_1 extends \System\Object
{

	/**
	 * @property
	 * @var \System\Collections\IEnumerable
	 */
	protected $Source;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	protected $RangesEnabled;
	/**
	 * @return \System\Void|void
	 */
	protected function OnSourceCollectionChangeStarted(){}
	/**
	 * @param \System\Collections\Specialized\NotifyCollectionChangedEventArgs $e
	 * @return \System\Void|void
	 */
	protected function OnSourceCollectionChanged($e){}
	/**
	 * @return \System\Void|void
	 */
	protected function OnSourceCollectionChangeFinished(){}
	/**
	 * @param \System\Int32|int $shiftIndex
	 * @param \System\Int32|int $shiftDelta
	 * @return \System\Void|void
	 */
	protected function OnIndexesChanged($shiftIndex, $shiftDelta){}
	/**
	 * @return \System\Void|void
	 */
	abstract protected function OnSourceReset();
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $count
	 * @param \System\Collections\Generic\IReadOnlyList_1 $deselectedItems [generic: T]
	 * @return \System\Void|void
	 */
	protected function OnSelectionRemoved($index, $count, $deselectedItems){}
	/**
	 * @param \System\Int32|int $begin
	 * @param \System\Int32|int $end
	 * @return \System\Int32|int
	 */
	protected function CommitSelect($begin, $end){}
	/**
	 * @param \System\Int32|int $begin
	 * @param \System\Int32|int $end
	 * @return \System\Int32|int
	 */
	protected function CommitDeselect($begin, $end){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Collections\IList $items
	 * @return \Avalonia\Controls\Selection\SelectionNodeBase_1+CollectionChangeState[T]
	 */
	protected function OnItemsAdded($index, $items){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Collections\IList $items
	 * @return \Avalonia\Controls\Selection\SelectionNodeBase_1+CollectionChangeState[T]
	 */
	protected function OnItemsRemoved($index, $items){}
	/**
	 * @param \System\Collections\Specialized\NotifyCollectionChangedEventArgs $e
	 * @return \System\Boolean|bool
	 */
	protected function IsValidCollectionChange($e){}
}