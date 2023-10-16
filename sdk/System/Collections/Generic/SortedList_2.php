<?php
namespace System\Collections\Generic;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait SortedList_2MethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Add_1($key, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Add_2($keyValuePair){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Add_3($key, $value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function Contains_1($keyValuePair){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function Contains_2($key){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function Remove_1($keyValuePair){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Remove_2($key){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Remove_3($key){}
	/**
	 * @return \System\Collections\Generic\IList_1
	 */
	#[MethodOverride] public  function get_Keys_1(){}
	/**
	 * @return \System\Collections\Generic\ICollection_1
	 */
	#[MethodOverride] private  function get_Keys_2(){}
	/**
	 * @return \System\Collections\ICollection
	 */
	#[MethodOverride] private  function get_Keys_3(){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] private  function get_Keys_4(){}
	/**
	 * @return \System\Collections\Generic\IList_1
	 */
	#[MethodOverride] public  function get_Values_1(){}
	/**
	 * @return \System\Collections\Generic\ICollection_1
	 */
	#[MethodOverride] private  function get_Values_2(){}
	/**
	 * @return \System\Collections\ICollection
	 */
	#[MethodOverride] private  function get_Values_3(){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] private  function get_Values_4(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function get_IsReadOnly_1(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function get_IsReadOnly_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function CopyTo_1($array, $arrayIndex){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function CopyTo_2($array, $index){}
	/**
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride] public  function GetEnumerator_1(){}
	/**
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride] private  function GetEnumerator_2(){}
	/**
	 * @return \System\Collections\IDictionaryEnumerator
	 */
	#[MethodOverride] private  function GetEnumerator_3(){}
	/**
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride] private  function GetEnumerator_4(){}
	/**
	 * @return \System\Collections\Generic\TValue
	 */
	#[MethodOverride] public  function get_Item_1($key){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] private  function get_Item_2($key){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function set_Item_1($key, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function set_Item_2($key, $value){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class SortedList_2 extends \System\Object implements 
	\System\Collections\Generic\IDictionary_2,
	\System\Collections\Generic\ICollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\Collections\IDictionary,
	\System\Collections\ICollection,
	\System\Collections\Generic\IReadOnlyDictionary_2,
	\System\Collections\Generic\IReadOnlyCollection_1
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $Capacity;
	/**
	 * @var \System\Collections\Generic\IComparer_1[TKey]
	 * @property
	 */
	public readonly $Comparer;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Count;
	/**
	 * @var \System\Collections\Generic\IList_1[TKey]
	 * @property
	 */
	public readonly $Keys;
	/**
	 * @var \System\Collections\Generic\IList_1[TValue]
	 * @property
	 */
	public readonly $Values;
	/**
	 * @var \TValue
	 * @property
	 */
	public $Item;
	/**
	 * @uses SortedList_2MethodsOverride::Add_1 ($key, $value)
	 * @uses SortedList_2MethodsOverride::Add_2 ($keyValuePair)
	 * @uses SortedList_2MethodsOverride::Add_3 ($key, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Add(mixed ...$args){}
	/**
	 * @uses SortedList_2MethodsOverride::Contains_1 ($keyValuePair)
	 * @uses SortedList_2MethodsOverride::Contains_2 ($key)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Contains(mixed ...$args){}
	/**
	 * @uses SortedList_2MethodsOverride::Remove_1 ($keyValuePair)
	 * @uses SortedList_2MethodsOverride::Remove_2 ($key)
	 * @uses SortedList_2MethodsOverride::Remove_3 ($key)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Remove(mixed ...$args){}
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
	 * @return \System\Collections\Generic\IComparer_1
	 */
	public  function get_Comparer(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Count(){}
	/**
	 * @uses SortedList_2MethodsOverride::get_Keys_1 ()
	 * @uses SortedList_2MethodsOverride::get_Keys_2 ()
	 * @uses SortedList_2MethodsOverride::get_Keys_3 ()
	 * @uses SortedList_2MethodsOverride::get_Keys_4 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Keys(mixed ...$args){}
	/**
	 * @uses SortedList_2MethodsOverride::get_Values_1 ()
	 * @uses SortedList_2MethodsOverride::get_Values_2 ()
	 * @uses SortedList_2MethodsOverride::get_Values_3 ()
	 * @uses SortedList_2MethodsOverride::get_Values_4 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Values(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetKeyListHelper(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetValueListHelper(){}
	/**
	 * @uses SortedList_2MethodsOverride::get_IsReadOnly_1 ()
	 * @uses SortedList_2MethodsOverride::get_IsReadOnly_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_IsReadOnly(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_IsFixedSize(){}
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
	 * @return \System\Void|void
	 */
	public  function Clear(){}
	/**
	 * @param \System\Collections\Generic\TKey $key
	 * @return \System\Boolean
	 */
	public  function ContainsKey($key){}
	/**
	 * @param \System\Collections\Generic\TValue $value
	 * @return \System\Boolean
	 */
	public  function ContainsValue($value){}
	/**
	 * @uses SortedList_2MethodsOverride::CopyTo_1 ($array, $arrayIndex)
	 * @uses SortedList_2MethodsOverride::CopyTo_2 ($array, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyTo(mixed ...$args){}
	/**
	 * @param \System\Int32|int $min
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function EnsureCapacity($min){}
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Collections\Generic\TValue
	 */
	public  function GetValueAtIndex($index){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Collections\Generic\TValue $value
	 * @return \System\Void|void
	 */
	public  function SetValueAtIndex($index, $value){}
	/**
	 * @uses SortedList_2MethodsOverride::GetEnumerator_1 ()
	 * @uses SortedList_2MethodsOverride::GetEnumerator_2 ()
	 * @uses SortedList_2MethodsOverride::GetEnumerator_3 ()
	 * @uses SortedList_2MethodsOverride::GetEnumerator_4 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Collections\Generic\TKey
	 */
	public  function GetKeyAtIndex($index){}
	/**
	 * @uses SortedList_2MethodsOverride::get_Item_1 ($key)
	 * @uses SortedList_2MethodsOverride::get_Item_2 ($key)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses SortedList_2MethodsOverride::set_Item_1 ($key, $value)
	 * @uses SortedList_2MethodsOverride::set_Item_2 ($key, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @param \System\Collections\Generic\TKey $key
	 * @return \System\Int32|int
	 */
	public  function IndexOfKey($key){}
	/**
	 * @param \System\Collections\Generic\TValue $value
	 * @return \System\Int32|int
	 */
	public  function IndexOfValue($value){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Collections\Generic\TKey $key
	 * @param \System\Collections\Generic\TValue $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Insert($index, $key, $value){}
	/**
	 * @param \System\Collections\Generic\TKey $key
	 * @param \System\Collections\Generic\TValue& $value
	 * @return \System\Boolean
	 */
	public  function TryGetValue($key, $value){}
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	public  function RemoveAt($index){}
	/**
	 * @return \System\Void|void
	 */
	public  function TrimExcess(){}
	/**
	 * @param \System\Object|object $key
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsCompatibleKey($key){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
