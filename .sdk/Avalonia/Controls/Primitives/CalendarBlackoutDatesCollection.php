<?php
namespace Avalonia\Controls\Primitives;
final class CalendarBlackoutDatesCollection extends \System\Collections\ObjectModel\ObservableCollection_1 implements
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
	 * @var \Avalonia\Controls\CalendarDateRange
	 */
	public $Item;
	/**
	 * @return \System\Void|void
	 */
	public function AddDatesInPast(){}
	/**
	 * @param \Avalonia\Controls\CalendarDateRange $range
	 * @return \System\Boolean|bool
	 */
	public function ContainsAny($range){}
	private function IsValid($item){}
	private static function EnsureValidThread(){}
	private function get_IsSynchronized(){}
	private function get_SyncRoot(){}
	private function get_IsFixedSize(){}
	/**
	 * @param \Avalonia\Controls\Calendar $owner
	 */
	public function __construct($owner){}
}