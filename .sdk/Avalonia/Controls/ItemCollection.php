<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ItemCollectionOverride {
	/**
	 * @deprecated
	 * @param \System\Int32|int $index
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function set_Item_1 ($index, $value){}
	/**
	 * @deprecated
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function get_IsReadOnly_1 (){}
	/**
	 * @deprecated
	 * @param \System\Object|object $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function Add_1 ($value){}
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Clear_1 (){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $index
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Insert_1 ($index, $value){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function RemoveAt_1 ($index){}
	/**
	 * @deprecated
	 * @param \System\Object|object $value
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function Remove_1 ($value){}
}
class ItemCollection extends \Avalonia\Controls\ItemsSourceView implements
	\System\Collections\Generic\IReadOnlyList_1,
	\System\Collections\Generic\IReadOnlyCollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\Collections\IList,
	\System\Collections\ICollection,
	\System\Collections\Specialized\INotifyCollectionChanged,
	\Avalonia\Controls\Utils\ICollectionChangedListener
{
	use ItemCollectionOverride;

	/**
	 * @property
	 * @var \System\Object|object
	 */
	public $Item;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsReadOnly;
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
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	protected function add_SourceChanged($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	protected function remove_SourceChanged($value){}
	/**
	 * @param \System\Collections\IEnumerable $value
	 * @return \System\Void|void
	 */
	protected function SetItemsSource($value){}
	private static function CreateDefaultCollection(){}
	private static function ThrowIsItemsSource(){}
	private function get_IsFixedSize(){}
	private function get_IsSynchronized(){}
	private function get_SyncRoot(){}
	private function PreChanged($sender, $e){}
	private function Changed($sender, $e){}
	private function PostChanged($sender, $e){}
	private function CopyTo($array, $index){}
}