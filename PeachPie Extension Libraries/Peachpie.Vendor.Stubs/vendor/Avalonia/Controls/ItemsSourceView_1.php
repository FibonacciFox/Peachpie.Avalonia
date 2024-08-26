<?php
namespace Avalonia\Controls;
final class ItemsSourceView_1 extends \Avalonia\Controls\ItemsSourceView implements
	\System\Collections\Generic\IReadOnlyList_1,
	\System\Collections\Generic\IReadOnlyCollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\Collections\IList,
	\System\Collections\ICollection,
	\System\Collections\Specialized\INotifyCollectionChanged,
	\Avalonia\Controls\Utils\ICollectionChangedListener
{
	/**
	 * @property
	 * @var \Avalonia\Controls\ItemsSourceView_1[T]
	 * @since readonly
	 */
	public $Empty;
	/**
	 * @property dublicate
	 * @var \T|object|\System\Object|object
	 */
	public $Item;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Count;
	/**
	 * @property
	 * @var \System\Collections\IList
	 * @since readonly
	 */
	public $Source;
	private function get_IsFixedSize(){}
	private function get_IsReadOnly(){}
	private function get_IsSynchronized(){}
	private function get_SyncRoot(){}
	private function set_Item($index, $value){}
	private function PreChanged($sender, $e){}
	private function Changed($sender, $e){}
	private function PostChanged($sender, $e){}
	private function Add($value){}
	private function Clear(){}
	private function Insert($index, $value){}
	private function Remove($value){}
	private function RemoveAt($index){}
	private function CopyTo($array, $index){}
}