<?php
namespace Avalonia\Controls;
class DefinitionList_1 extends \Avalonia\Collections\AvaloniaList_1 implements
	\Avalonia\Collections\IAvaloniaList_1,
	\System\Collections\Generic\IList_1,
	\System\Collections\Generic\ICollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\Avalonia\Collections\IAvaloniaReadOnlyList_1,
	\System\Collections\Generic\IReadOnlyList_1,
	\System\Collections\Generic\IReadOnlyCollection_1,
	\System\Collections\Specialized\INotifyCollectionChanged,
	\System\ComponentModel\INotifyPropertyChanged,
	\System\Collections\IList,
	\System\Collections\ICollection,
	\Avalonia\Diagnostics\INotifyCollectionChangedDebug
{

	/**
	 * @field
	 * @var \System\Boolean|bool
	 */
	protected $IsDirty;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Count;
	/**
	 * @property
	 * @var \Avalonia\Collections\ResetBehavior
	 */
	public $ResetBehavior;
	/**
	 * @property
	 * @var \System\Action_1[T]
	 */
	public $Validate;
	/**
	 * @property
	 * @var \T|object
	 */
	public $Item;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $Capacity;
	private function SetParent($value){}
	/**
	 * @param \System\Object|object $sender
	 * @param \System\Collections\Specialized\NotifyCollectionChangedEventArgs $e
	 * @return \System\Void|void
	 */
	protected function OnCollectionChanged($sender, $e){}
	private function UpdateDefinitionParent($items, $wasRemoved){}
	private function get_IsFixedSize(){}
	private function get_IsSynchronized(){}
	private function get_SyncRoot(){}
	private function GetCollectionChangedSubscribers(){}
	/**
	 */
	public function __construct(){}
}