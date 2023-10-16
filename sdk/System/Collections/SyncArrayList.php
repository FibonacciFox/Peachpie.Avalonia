<?php
namespace System\Collections;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait SyncArrayListMethodsOverride
{
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function BinarySearch_1($value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function BinarySearch_2($value, $comparer){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function BinarySearch_3($index, $count, $value, $comparer){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function CopyTo_1($array){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function CopyTo_2($array, $index){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function CopyTo_3($index, $array, $arrayIndex, $count){}
	/**
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride] public  function GetEnumerator_1(){}
	/**
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride] public  function GetEnumerator_2($index, $count){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function IndexOf_1($value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function IndexOf_2($value, $startIndex){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function IndexOf_3($value, $startIndex, $count){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function LastIndexOf_1($value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function LastIndexOf_2($value, $startIndex){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function LastIndexOf_3($value, $startIndex, $count){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Reverse_1($index, $count){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Reverse_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Sort_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Sort_2($comparer){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Sort_3($index, $count, $comparer){}
	/**
	 * @return \System\Object[]
	 */
	#[MethodOverride] public  function ToArray_1(){}
	/**
	 * @return \System\Array|array
	 */
	#[MethodOverride] public  function ToArray_2($type){}
}
/**
 */
class SyncArrayList extends \System\Collections\ArrayList implements 
	\System\Collections\IList,
	\System\Collections\ICollection,
	\System\Collections\IEnumerable,
	\System\ICloneable
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $Capacity;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Count;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsReadOnly;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsFixedSize;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSynchronized;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $Item;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $SyncRoot;
	/**
	 * @uses SyncArrayListMethodsOverride::BinarySearch_1 ($value)
	 * @uses SyncArrayListMethodsOverride::BinarySearch_2 ($value, $comparer)
	 * @uses SyncArrayListMethodsOverride::BinarySearch_3 ($index, $count, $value, $comparer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function BinarySearch(mixed ...$args){}
	/**
	 * @uses SyncArrayListMethodsOverride::CopyTo_1 ($array)
	 * @uses SyncArrayListMethodsOverride::CopyTo_2 ($array, $index)
	 * @uses SyncArrayListMethodsOverride::CopyTo_3 ($index, $array, $arrayIndex, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyTo(mixed ...$args){}
	/**
	 * @uses SyncArrayListMethodsOverride::GetEnumerator_1 ()
	 * @uses SyncArrayListMethodsOverride::GetEnumerator_2 ($index, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @uses SyncArrayListMethodsOverride::IndexOf_1 ($value)
	 * @uses SyncArrayListMethodsOverride::IndexOf_2 ($value, $startIndex)
	 * @uses SyncArrayListMethodsOverride::IndexOf_3 ($value, $startIndex, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IndexOf(mixed ...$args){}
	/**
	 * @uses SyncArrayListMethodsOverride::LastIndexOf_1 ($value)
	 * @uses SyncArrayListMethodsOverride::LastIndexOf_2 ($value, $startIndex)
	 * @uses SyncArrayListMethodsOverride::LastIndexOf_3 ($value, $startIndex, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function LastIndexOf(mixed ...$args){}
	/**
	 * @uses SyncArrayListMethodsOverride::Reverse_1 ($index, $count)
	 * @uses SyncArrayListMethodsOverride::Reverse_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Reverse(mixed ...$args){}
	/**
	 * @uses SyncArrayListMethodsOverride::Sort_1 ()
	 * @uses SyncArrayListMethodsOverride::Sort_2 ($comparer)
	 * @uses SyncArrayListMethodsOverride::Sort_3 ($index, $count, $comparer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Sort(mixed ...$args){}
	/**
	 * @uses SyncArrayListMethodsOverride::ToArray_1 ()
	 * @uses SyncArrayListMethodsOverride::ToArray_2 ($type)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToArray(mixed ...$args){}
}
