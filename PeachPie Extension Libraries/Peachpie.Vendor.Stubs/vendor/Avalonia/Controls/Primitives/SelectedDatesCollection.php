<?php
namespace Avalonia\Controls\Primitives;
final class SelectedDatesCollection extends \System\Collections\ObjectModel\ObservableCollection_1 implements
	\System\Collections\Generic\IList_1,
	\System\Collections\Generic\ICollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\Collections\IList,
	\System\Collections\ICollection,
	\System\Collections\Generic\IReadOnlyList_1,
	\System\Collections\Generic\IReadOnlyCollection_1,
	\System\Collections\Specialized\INotifyCollectionChanged,
	\System\ComponentModel\INotifyPropertyChanged
{
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Count;
	/**
	 * @property
	 * @var \System\DateTime
	 */
	public $Item;
	private function InvokeCollectionChanged($removedItems, $addedItems){}
	/**
	 * @param \System\DateTime $start
	 * @param \System\DateTime $end
	 * @return \System\Void|void
	 */
	public function AddRange($start, $end){}
	/**
	 * @return \System\Void|void
	 */
	protected function ClearInternal(){}
	private function CheckSelectionMode(){}
	private static function EnsureValidThread(){}
	private function get_IsSynchronized(){}
	private function get_SyncRoot(){}
	private function get_IsFixedSize(){}
	/**
	 * @param \Avalonia\Controls\Calendar $owner
	 */
	public function __construct($owner){}
}