<?php
namespace Avalonia\Collections;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait AvaloniaList_1MethodsOverride
{
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function get_Count_1(){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private  function get_Count_2(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function get_IsReadOnly_1(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function get_IsReadOnly_2(){}
	/**
	 * @return \Avalonia\Collections\T
	 */
	#[MethodOverride] public  function get_Item_1($index){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] private  function get_Item_2($index){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function set_Item_1($index, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function set_Item_2($index, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Add_1($item){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private  function Add_2($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Clear_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Clear_2(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Contains_1($item){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function Contains_2($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function CopyTo_1($array, $arrayIndex){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function CopyTo_2($array, $index){}
	/**
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride] private  function GetEnumerator_1(){}
	/**
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride] private  function GetEnumerator_2(){}
	/**
	 * @return \Avalonia\Collections\Enumerator
	 */
	#[MethodOverride] public  function GetEnumerator_3(){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function IndexOf_1($item){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private  function IndexOf_2($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Insert_1($index, $item){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Insert_2($index, $value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Remove_1($item){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Remove_2($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function RemoveAt_1($index){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function RemoveAt_2($index){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function NotifyAdd_1($t, $index){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function NotifyAdd_2($item, $index){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function NotifyRemove_1($t, $index){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function NotifyRemove_2($item, $index){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
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
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Count;
	/**
	 * @var \Avalonia\Collections\ResetBehavior
	 * @property
	 */
	public $ResetBehavior;
	/**
	 * @var \System\Action_1[T]
	 * @property
	 */
	public $Validate;
	/**
	 * @var \T
	 * @property
	 */
	public $Item;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $Capacity;
	/**
	 * @param \System\Collections\Specialized\NotifyCollectionChangedEventHandler $value
	 * @return \System\Void|void
	 */
	public  function add_CollectionChanged($value){}
	/**
	 * @param \System\Collections\Specialized\NotifyCollectionChangedEventHandler $value
	 * @return \System\Void|void
	 */
	public  function remove_CollectionChanged($value){}
	/**
	 * @param \System\ComponentModel\PropertyChangedEventHandler $value
	 * @return \System\Void|void
	 */
	public  function add_PropertyChanged($value){}
	/**
	 * @param \System\ComponentModel\PropertyChangedEventHandler $value
	 * @return \System\Void|void
	 */
	public  function remove_PropertyChanged($value){}
	/**
	 * @uses AvaloniaList_1MethodsOverride::get_Count_1 ()
	 * @uses AvaloniaList_1MethodsOverride::get_Count_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Count(mixed ...$args){}
	/**
	 * @return \Avalonia\Collections\ResetBehavior
	 */
	public  function get_ResetBehavior(){}
	/**
	 * @param \Avalonia\Collections\ResetBehavior $value
	 * @return \System\Void|void
	 */
	public  function set_ResetBehavior($value){}
	/**
	 * @return \System\Action_1
	 */
	public  function get_Validate(){}
	/**
	 * @param \System\Action_1 $value
	 * @return \System\Void|void
	 */
	public  function set_Validate($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_IsFixedSize(){}
	/**
	 * @uses AvaloniaList_1MethodsOverride::get_IsReadOnly_1 ()
	 * @uses AvaloniaList_1MethodsOverride::get_IsReadOnly_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_IsReadOnly(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_IsSynchronized(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_SyncRoot(){}
	/**
	 * @uses AvaloniaList_1MethodsOverride::get_Item_1 ($index)
	 * @uses AvaloniaList_1MethodsOverride::get_Item_2 ($index)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses AvaloniaList_1MethodsOverride::set_Item_1 ($index, $value)
	 * @uses AvaloniaList_1MethodsOverride::set_Item_2 ($index, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Capacity(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_Capacity($value){}
	/**
	 * @uses AvaloniaList_1MethodsOverride::Add_1 ($item)
	 * @uses AvaloniaList_1MethodsOverride::Add_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Add(mixed ...$args){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $items
	 * @return \System\Void|void
	 */
	public  function AddRange($items){}
	/**
	 * @uses AvaloniaList_1MethodsOverride::Clear_1 ()
	 * @uses AvaloniaList_1MethodsOverride::Clear_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Clear(mixed ...$args){}
	/**
	 * @uses AvaloniaList_1MethodsOverride::Contains_1 ($item)
	 * @uses AvaloniaList_1MethodsOverride::Contains_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Contains(mixed ...$args){}
	/**
	 * @uses AvaloniaList_1MethodsOverride::CopyTo_1 ($array, $arrayIndex)
	 * @uses AvaloniaList_1MethodsOverride::CopyTo_2 ($array, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyTo(mixed ...$args){}
	/**
	 * @uses AvaloniaList_1MethodsOverride::GetEnumerator_1 ()
	 * @uses AvaloniaList_1MethodsOverride::GetEnumerator_2 ()
	 * @uses AvaloniaList_1MethodsOverride::GetEnumerator_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $count
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public  function GetRange($index, $count){}
	/**
	 * @uses AvaloniaList_1MethodsOverride::IndexOf_1 ($item)
	 * @uses AvaloniaList_1MethodsOverride::IndexOf_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IndexOf(mixed ...$args){}
	/**
	 * @uses AvaloniaList_1MethodsOverride::Insert_1 ($index, $item)
	 * @uses AvaloniaList_1MethodsOverride::Insert_2 ($index, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Insert(mixed ...$args){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Collections\Generic\IEnumerable_1 $items
	 * @return \System\Void|void
	 */
	public  function InsertRange($index, $items){}
	/**
	 * @param \System\Int32|int $oldIndex
	 * @param \System\Int32|int $newIndex
	 * @return \System\Void|void
	 */
	public  function Move($oldIndex, $newIndex){}
	/**
	 * @param \System\Int32|int $oldIndex
	 * @param \System\Int32|int $count
	 * @param \System\Int32|int $newIndex
	 * @return \System\Void|void
	 */
	public  function MoveRange($oldIndex, $count, $newIndex){}
	/**
	 * @param \System\Int32|int $capacity
	 * @return \System\Void|void
	 */
	public  function EnsureCapacity($capacity){}
	/**
	 * @uses AvaloniaList_1MethodsOverride::Remove_1 ($item)
	 * @uses AvaloniaList_1MethodsOverride::Remove_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Remove(mixed ...$args){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $items
	 * @return \System\Void|void
	 */
	public  function RemoveAll($items){}
	/**
	 * @uses AvaloniaList_1MethodsOverride::RemoveAt_1 ($index)
	 * @uses AvaloniaList_1MethodsOverride::RemoveAt_2 ($index)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RemoveAt(mixed ...$args){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	public  function RemoveRange($index, $count){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetCollectionChangedSubscribers(){}
	/**
	 * @uses AvaloniaList_1MethodsOverride::NotifyAdd_1 ($t, $index)
	 * @uses AvaloniaList_1MethodsOverride::NotifyAdd_2 ($item, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function NotifyAdd(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function NotifyCountChanged(){}
	/**
	 * @uses AvaloniaList_1MethodsOverride::NotifyRemove_1 ($t, $index)
	 * @uses AvaloniaList_1MethodsOverride::NotifyRemove_2 ($item, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function NotifyRemove(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
