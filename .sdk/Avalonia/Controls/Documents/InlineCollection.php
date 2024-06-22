<?php
namespace Avalonia\Controls\Documents;
class InlineCollection extends \Avalonia\Collections\AvaloniaList_1 implements
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
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Text;
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
	 * @var \System\Action_1[Avalonia\Controls\Documents\Inline]
	 */
	public $Validate;
	/**
	 * @property
	 * @var \Avalonia\Controls\Documents\Inline
	 */
	public $Item;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $Capacity;
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function add_Invalidated($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function remove_Invalidated($value){}
	/**
	 * @return \System\Void|void
	 */
	protected function Invalidate(){}
	private function OnParentChanged($oldValue, $newValue){}
	private function OnInlineHostChanged($oldValue, $newValue){}
	private function OnAdd($inline){}
	private function OnRemove($inline){}
	private function get_IsFixedSize(){}
	private function get_IsSynchronized(){}
	private function get_SyncRoot(){}
	private function GetCollectionChangedSubscribers(){}
	/**
	 */
	public function __construct(){}
}