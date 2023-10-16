<?php
namespace System\Collections;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ReadOnlyArrayListMethodsOverride
{
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function BinarySearch_1($index, $count, $value, $comparer){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function BinarySearch_2($value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function BinarySearch_3($value, $comparer){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function CopyTo_1($array, $index){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function CopyTo_2($index, $array, $arrayIndex, $count){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function CopyTo_3($array){}
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
	#[MethodOverride] public  function Sort_1($index, $count, $comparer){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Sort_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Sort_3($comparer){}
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
class ReadOnlyArrayList extends \System\Collections\ArrayList implements 
	\System\Collections\IList,
	\System\Collections\ICollection,
	\System\Collections\IEnumerable,
	\System\ICloneable
{
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
	 * @var \System\Int32
	 * @property
	 */
	public $Capacity;
	/**
	 * @uses ReadOnlyArrayListMethodsOverride::BinarySearch_1 ($index, $count, $value, $comparer)
	 * @uses ReadOnlyArrayListMethodsOverride::BinarySearch_2 ($value)
	 * @uses ReadOnlyArrayListMethodsOverride::BinarySearch_3 ($value, $comparer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function BinarySearch(mixed ...$args){}
	/**
	 * @uses ReadOnlyArrayListMethodsOverride::CopyTo_1 ($array, $index)
	 * @uses ReadOnlyArrayListMethodsOverride::CopyTo_2 ($index, $array, $arrayIndex, $count)
	 * @uses ReadOnlyArrayListMethodsOverride::CopyTo_3 ($array)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyTo(mixed ...$args){}
	/**
	 * @uses ReadOnlyArrayListMethodsOverride::GetEnumerator_1 ()
	 * @uses ReadOnlyArrayListMethodsOverride::GetEnumerator_2 ($index, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @uses ReadOnlyArrayListMethodsOverride::IndexOf_1 ($value)
	 * @uses ReadOnlyArrayListMethodsOverride::IndexOf_2 ($value, $startIndex)
	 * @uses ReadOnlyArrayListMethodsOverride::IndexOf_3 ($value, $startIndex, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IndexOf(mixed ...$args){}
	/**
	 * @uses ReadOnlyArrayListMethodsOverride::LastIndexOf_1 ($value)
	 * @uses ReadOnlyArrayListMethodsOverride::LastIndexOf_2 ($value, $startIndex)
	 * @uses ReadOnlyArrayListMethodsOverride::LastIndexOf_3 ($value, $startIndex, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function LastIndexOf(mixed ...$args){}
	/**
	 * @uses ReadOnlyArrayListMethodsOverride::Reverse_1 ($index, $count)
	 * @uses ReadOnlyArrayListMethodsOverride::Reverse_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Reverse(mixed ...$args){}
	/**
	 * @uses ReadOnlyArrayListMethodsOverride::Sort_1 ($index, $count, $comparer)
	 * @uses ReadOnlyArrayListMethodsOverride::Sort_2 ()
	 * @uses ReadOnlyArrayListMethodsOverride::Sort_3 ($comparer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Sort(mixed ...$args){}
	/**
	 * @uses ReadOnlyArrayListMethodsOverride::ToArray_1 ()
	 * @uses ReadOnlyArrayListMethodsOverride::ToArray_2 ($type)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToArray(mixed ...$args){}
}
