<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ItemsSourceViewOverride {
	/**
	 * @deprecated
	 * @param \System\Int32|int $index
	 * @return \System\Object|object
	 */
	#[MethodOverride]public function get_Item_1 ($index){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $index
	 * @return \System\Object|object
	 */
	#[MethodOverride]private function get_Item_2 ($index){}
	/**
	 * @deprecated
	 * @param \System\Collections\IEnumerable $items
	 * @return \Avalonia\Controls\ItemsSourceView
	 */
	#[MethodOverride]public static function GetOrCreate_1 ($items){}
	/**
	 * @deprecated
	 * @param \System\Collections\IEnumerable $items
	 * @return \Avalonia\Controls\ItemsSourceView_1
	 */
	#[MethodOverride]public static function GetOrCreate_2 ($items){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $items [generic: T]
	 * @return \Avalonia\Controls\ItemsSourceView_1
	 */
	#[MethodOverride]public static function GetOrCreate_3 ($items){}
	/**
	 * @deprecated
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride]public function GetEnumerator_1 (){}
	/**
	 * @deprecated
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride]private function GetEnumerator_2 (){}
}
class ItemsSourceView extends \System\Object implements
	\System\Collections\Generic\IReadOnlyList_1,
	\System\Collections\Generic\IReadOnlyCollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\Collections\IList,
	\System\Collections\ICollection,
	\System\Collections\Specialized\INotifyCollectionChanged,
	\Avalonia\Controls\Utils\ICollectionChangedListener
{
	use ItemsSourceViewOverride;

	/**
	 * @property
	 * @var \Avalonia\Controls\ItemsSourceView
	 * @since readonly
	 */
	public $Empty;
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
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $Item;
	/**
	 * @uses ItemsSourceViewOverride::get_Item_1 <br>public , args: ($index)<br>
	 * @uses ItemsSourceViewOverride::get_Item_2 <br>private , args: ($index)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Object|object|mixed|\override
	 */
	#[MethodOverridePublic]function get_Item (\override ...$args){}
	private function get_IsFixedSize(){}
	private function get_IsReadOnly(){}
	private function get_IsSynchronized(){}
	private function get_SyncRoot(){}
	private function set_Item($index, $value){}
	/**
	 * @param \System\Collections\Specialized\NotifyCollectionChangedEventHandler $value
	 * @return \System\Void|void
	 */
	public function add_CollectionChanged($value){}
	/**
	 * @param \System\Collections\Specialized\NotifyCollectionChangedEventHandler $value
	 * @return \System\Void|void
	 */
	public function remove_CollectionChanged($value){}
	/**
	 * @param \System\Collections\Specialized\NotifyCollectionChangedEventHandler $value
	 * @return \System\Void|void
	 */
	protected function add_PreCollectionChanged($value){}
	/**
	 * @param \System\Collections\Specialized\NotifyCollectionChangedEventHandler $value
	 * @return \System\Void|void
	 */
	protected function remove_PreCollectionChanged($value){}
	/**
	 * @param \System\Collections\Specialized\NotifyCollectionChangedEventHandler $value
	 * @return \System\Void|void
	 */
	protected function add_PostCollectionChanged($value){}
	/**
	 * @param \System\Collections\Specialized\NotifyCollectionChangedEventHandler $value
	 * @return \System\Void|void
	 */
	protected function remove_PostCollectionChanged($value){}
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Object|object
	 */
	public function GetAt($index){}
	/**
	 * @param \System\Object|object $item
	 * @return \System\Boolean|bool
	 */
	public function Contains($item){}
	/**
	 * @param \System\Object|object $item
	 * @return \System\Int32|int
	 */
	public function IndexOf($item){}
	/**
	 * @uses ItemsSourceViewOverride::GetOrCreate_1 <br>public , args: ($items)<br>
	 * @uses ItemsSourceViewOverride::GetOrCreate_2 <br>public , args: ($items)<br>
	 * @uses ItemsSourceViewOverride::GetOrCreate_3 <br>public , args: ($items)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Controls\ItemsSourceView|\Avalonia\Controls\ItemsSourceView_1|mixed|\override
	 */
	#[MethodOverridePublic]function GetOrCreate (\override ...$args){}
	/**
	 * @uses ItemsSourceViewOverride::GetEnumerator_1 <br>public , args: ()<br>
	 * @uses ItemsSourceViewOverride::GetEnumerator_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IEnumerator_1|\System\Collections\IEnumerator|mixed|\override
	 */
	#[MethodOverridePublic]function GetEnumerator (){}
	private function PreChanged($sender, $e){}
	private function Changed($sender, $e){}
	private function PostChanged($sender, $e){}
	private function Add($value){}
	private function Clear(){}
	private function Insert($index, $value){}
	private function Remove($value){}
	private function RemoveAt($index){}
	private function CopyTo($array, $index){}
	/**
	 * @param \System\Int32|int $index
	 * @return \System\String|string
	 */
	protected function KeyFromIndex($index){}
	/**
	 * @param \System\Collections\Specialized\NotifyCollectionChangedEventArgs $e
	 * @return \System\Void|void
	 */
	protected function RaiseCollectionChanged($e){}
	/**
	 * @param \System\Collections\IEnumerable $source
	 * @return \System\Void|void
	 */
	protected function SetSource($source){}
	private function AddListenerIfNecessary(){}
	private function RemoveListenerIfNecessary(){}
	private static function ThrowReadOnly(){}
}