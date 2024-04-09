<?php
namespace Avalonia\Collections;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait AvaloniaList_1Override {
	/**
	 * @deprecated
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function get_Count_1 (){}
	/**
	 * @deprecated
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private function get_Count_2 (){}
	/**
	 * @deprecated
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private function get_IsReadOnly_1 (){}
	/**
	 * @deprecated
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private function get_IsReadOnly_2 (){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $index
	 * @return \T|object
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
	 * @param \System\Int32|int $index
	 * @param \T|object $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function set_Item_1 ($index, $value){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $index
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function set_Item_2 ($index, $value){}
	/**
	 * @deprecated
	 * @param \T|object $item
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Add_1 ($item){}
	/**
	 * @deprecated
	 * @param \System\Object|object $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private function Add_2 ($value){}
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Clear_1 (){}
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function Clear_2 (){}
	/**
	 * @deprecated
	 * @param \T|object $item
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function Contains_1 ($item){}
	/**
	 * @deprecated
	 * @param \System\Object|object $value
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private function Contains_2 ($value){}
	/**
	 * @deprecated
	 * @param \T $array
	 * @param \System\Int32|int $arrayIndex
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function CopyTo_1 ($array, $arrayIndex){}
	/**
	 * @deprecated
	 * @param \System\Array|array $array
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function CopyTo_2 ($array, $index){}
	/**
	 * @deprecated
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride]private function GetEnumerator_1 (){}
	/**
	 * @deprecated
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride]private function GetEnumerator_2 (){}
	/**
	 * @deprecated
	 * @return \Avalonia\Collections\AvaloniaList_1
	 */
	#[MethodOverride]public function GetEnumerator_3 (){}
	/**
	 * @deprecated
	 * @param \T|object $item
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function IndexOf_1 ($item){}
	/**
	 * @deprecated
	 * @param \System\Object|object $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private function IndexOf_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $index
	 * @param \T|object $item
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Insert_1 ($index, $item){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $index
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function Insert_2 ($index, $value){}
	/**
	 * @deprecated
	 * @param \T|object $item
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function Remove_1 ($item){}
	/**
	 * @deprecated
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function Remove_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function RemoveAt_1 ($index){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function RemoveAt_2 ($index){}
	/**
	 * @deprecated
	 * @param \System\Collections\IList $t
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function NotifyAdd_1 ($t, $index){}
	/**
	 * @deprecated
	 * @param \T|object $item
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function NotifyAdd_2 ($item, $index){}
	/**
	 * @deprecated
	 * @param \System\Collections\IList $t
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function NotifyRemove_1 ($t, $index){}
	/**
	 * @deprecated
	 * @param \T|object $item
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function NotifyRemove_2 ($item, $index){}
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\Int32|int $capacity
	 */
	#[MethodOverride]public function __construct_2 ($capacity){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $items [generic: T]
	 */
	#[MethodOverride]public function __construct_3 ($items){}
	/**
	 * @param \T ...$items
	 */
	#[MethodOverride]public function __construct_4 (...$items){}
}
class AvaloniaList_1 extends \System\Object implements
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
	use AvaloniaList_1Override;
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
	 * @param \System\ComponentModel\PropertyChangedEventHandler $value
	 * @return \System\Void|void
	 */
	public function add_PropertyChanged($value){}
	/**
	 * @param \System\ComponentModel\PropertyChangedEventHandler $value
	 * @return \System\Void|void
	 */
	public function remove_PropertyChanged($value){}
	/**
	 * @uses AvaloniaList_1Override::get_Count_1 <br>public , args: ()<br>
	 * @uses AvaloniaList_1Override::get_Count_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function get_Count (){}
	private function get_IsFixedSize(){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses AvaloniaList_1Override::get_IsReadOnly_1 <br>private , args: ()<br>
	 * @uses AvaloniaList_1Override::get_IsReadOnly_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePrivate]function get_IsReadOnly (){}
	private function get_IsSynchronized(){}
	private function get_SyncRoot(){}
	/**
	 * @uses AvaloniaList_1Override::get_Item_1 <br>public , args: ($index)<br>
	 * @uses AvaloniaList_1Override::get_Item_2 <br>private , args: ($index)<br>
	 * @var mixed|\override ...$args
	 * @return \T|object|\System\Object|object|mixed|\override
	 */
	#[MethodOverridePublic]function get_Item (\override ...$args){}
	/**
	 * @uses AvaloniaList_1Override::set_Item_1 <br>public , args: ($index, $value)<br>
	 * @uses AvaloniaList_1Override::set_Item_2 <br>private , args: ($index, $value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function set_Item (\override ...$args){}
	/**
	 * @uses AvaloniaList_1Override::Add_1 <br>public , args: ($item)<br>
	 * @uses AvaloniaList_1Override::Add_2 <br>private , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|\System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function Add (\override ...$args){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $items [generic: T]
	 * @return \System\Void|void
	 */
	public function AddRange($items){}
	/**
	 * @uses AvaloniaList_1Override::Clear_1 <br>public , args: ()<br>
	 * @uses AvaloniaList_1Override::Clear_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Clear (){}
	/**
	 * @uses AvaloniaList_1Override::Contains_1 <br>public , args: ($item)<br>
	 * @uses AvaloniaList_1Override::Contains_2 <br>private , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function Contains (\override ...$args){}
	/**
	 * @uses AvaloniaList_1Override::CopyTo_1 <br>public , args: ($array, $arrayIndex)<br>
	 * @uses AvaloniaList_1Override::CopyTo_2 <br>private , args: ($array, $index)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function CopyTo (\override ...$args){}
	/**
	 * @uses AvaloniaList_1Override::GetEnumerator_1 <br>private , args: ()<br>
	 * @uses AvaloniaList_1Override::GetEnumerator_2 <br>private , args: ()<br>
	 * @uses AvaloniaList_1Override::GetEnumerator_3 <br>public , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IEnumerator_1|\System\Collections\IEnumerator|\Avalonia\Collections\AvaloniaList_1|mixed|\override
	 */
	#[MethodOverridePublic]function GetEnumerator (){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $count
	 * @return \System\Collections\Generic\IEnumerable_1[T]
	 */
	public function GetRange($index, $count){}
	/**
	 * @uses AvaloniaList_1Override::IndexOf_1 <br>public , args: ($item)<br>
	 * @uses AvaloniaList_1Override::IndexOf_2 <br>private , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function IndexOf (\override ...$args){}
	/**
	 * @uses AvaloniaList_1Override::Insert_1 <br>public , args: ($index, $item)<br>
	 * @uses AvaloniaList_1Override::Insert_2 <br>private , args: ($index, $value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Insert (\override ...$args){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Collections\Generic\IEnumerable_1 $items [generic: T]
	 * @return \System\Void|void
	 */
	public function InsertRange($index, $items){}
	/**
	 * @param \System\Int32|int $oldIndex
	 * @param \System\Int32|int $newIndex
	 * @return \System\Void|void
	 */
	public function Move($oldIndex, $newIndex){}
	/**
	 * @param \System\Int32|int $oldIndex
	 * @param \System\Int32|int $count
	 * @param \System\Int32|int $newIndex
	 * @return \System\Void|void
	 */
	public function MoveRange($oldIndex, $count, $newIndex){}
	/**
	 * @param \System\Int32|int $capacity
	 * @return \System\Void|void
	 */
	public function EnsureCapacity($capacity){}
	/**
	 * @uses AvaloniaList_1Override::Remove_1 <br>public , args: ($item)<br>
	 * @uses AvaloniaList_1Override::Remove_2 <br>private , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|\System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Remove (\override ...$args){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $items [generic: T]
	 * @return \System\Void|void
	 */
	public function RemoveAll($items){}
	/**
	 * @uses AvaloniaList_1Override::RemoveAt_1 <br>public , args: ($index)<br>
	 * @uses AvaloniaList_1Override::RemoveAt_2 <br>private , args: ($index)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function RemoveAt (\override ...$args){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	public function RemoveRange($index, $count){}
	private function GetCollectionChangedSubscribers(){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses AvaloniaList_1Override::NotifyAdd_1 <br>private , args: ($t, $index)<br>
	 * @uses AvaloniaList_1Override::NotifyAdd_2 <br>private , args: ($item, $index)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePrivate]function NotifyAdd (\override ...$args){}
	private function NotifyCountChanged(){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses AvaloniaList_1Override::NotifyRemove_1 <br>private , args: ($t, $index)<br>
	 * @uses AvaloniaList_1Override::NotifyRemove_2 <br>private , args: ($item, $index)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePrivate]function NotifyRemove (\override ...$args){}
	/**
	 * @uses AvaloniaList_1Override::__construct_1 <br>public , args: ()<br>
	 * @uses AvaloniaList_1Override::__construct_2 <br>public , args: ($capacity)<br>
	 * @uses AvaloniaList_1Override::__construct_3 <br>public , args: ($items)<br>
	 * @uses AvaloniaList_1Override::__construct_4 <br>public , args: (...$items)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}