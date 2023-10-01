<?php
namespace Avalonia\Controls\Primitives;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait CalendarBlackoutDatesCollectionMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Contains_1($date){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Contains_2($start, $end){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Contains_3($item){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function Contains_4($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function add_PropertyChanged_1($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function add_PropertyChanged_2($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function remove_PropertyChanged_1($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function remove_PropertyChanged_2($value){}
	/**
	 * @return \Avalonia\Controls\CalendarDateRange
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
	#[MethodOverride] public  function CopyTo_1($array, $index){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function CopyTo_2($array, $index){}
	/**
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride] public  function GetEnumerator_1(){}
	/**
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride] private  function GetEnumerator_2(){}
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
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function get_IsReadOnly_1(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function get_IsReadOnly_2(){}
}
/**
 */
class CalendarBlackoutDatesCollection extends \System\Collections\ObjectModel\ObservableCollection_1 implements 
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
	 * @return \System\Void|void
	 */
	public  function AddDatesInPast(){}
	/**
	 * @uses CalendarBlackoutDatesCollectionMethodsOverride::Contains_1 ($date)
	 * @uses CalendarBlackoutDatesCollectionMethodsOverride::Contains_2 ($start, $end)
	 * @uses CalendarBlackoutDatesCollectionMethodsOverride::Contains_3 ($item)
	 * @uses CalendarBlackoutDatesCollectionMethodsOverride::Contains_4 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Contains(mixed ...$args){}
	/**
	 * @param \Avalonia\Controls\CalendarDateRange $range
	 * @return \System\Boolean
	 */
	public  function ContainsAny($range){}
	/**
	 * @param \Avalonia\Controls\CalendarDateRange $item
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function IsValid($item){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function EnsureValidThread(){}
	/**
	 * @uses CalendarBlackoutDatesCollectionMethodsOverride::add_PropertyChanged_1 ($value)
	 * @uses CalendarBlackoutDatesCollectionMethodsOverride::add_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_PropertyChanged(mixed ...$args){}
	/**
	 * @uses CalendarBlackoutDatesCollectionMethodsOverride::remove_PropertyChanged_1 ($value)
	 * @uses CalendarBlackoutDatesCollectionMethodsOverride::remove_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_PropertyChanged(mixed ...$args){}
	/**
	 * @param \System\Collections\Specialized\NotifyCollectionChangedEventArgs $e
	 * @return \System\Void|void
	 */
	protected  function OnCollectionChanged($e){}
	/**
	 * @uses CalendarBlackoutDatesCollectionMethodsOverride::get_Item_1 ($index)
	 * @uses CalendarBlackoutDatesCollectionMethodsOverride::get_Item_2 ($index)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses CalendarBlackoutDatesCollectionMethodsOverride::set_Item_1 ($index, $value)
	 * @uses CalendarBlackoutDatesCollectionMethodsOverride::set_Item_2 ($index, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses CalendarBlackoutDatesCollectionMethodsOverride::Add_1 ($item)
	 * @uses CalendarBlackoutDatesCollectionMethodsOverride::Add_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Add(mixed ...$args){}
	/**
	 * @uses CalendarBlackoutDatesCollectionMethodsOverride::CopyTo_1 ($array, $index)
	 * @uses CalendarBlackoutDatesCollectionMethodsOverride::CopyTo_2 ($array, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyTo(mixed ...$args){}
	/**
	 * @uses CalendarBlackoutDatesCollectionMethodsOverride::GetEnumerator_1 ()
	 * @uses CalendarBlackoutDatesCollectionMethodsOverride::GetEnumerator_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @uses CalendarBlackoutDatesCollectionMethodsOverride::IndexOf_1 ($item)
	 * @uses CalendarBlackoutDatesCollectionMethodsOverride::IndexOf_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IndexOf(mixed ...$args){}
	/**
	 * @uses CalendarBlackoutDatesCollectionMethodsOverride::Insert_1 ($index, $item)
	 * @uses CalendarBlackoutDatesCollectionMethodsOverride::Insert_2 ($index, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Insert(mixed ...$args){}
	/**
	 * @uses CalendarBlackoutDatesCollectionMethodsOverride::Remove_1 ($item)
	 * @uses CalendarBlackoutDatesCollectionMethodsOverride::Remove_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Remove(mixed ...$args){}
	/**
	 * @uses CalendarBlackoutDatesCollectionMethodsOverride::get_IsReadOnly_1 ()
	 * @uses CalendarBlackoutDatesCollectionMethodsOverride::get_IsReadOnly_2 ()
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
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_IsFixedSize(){}
}
