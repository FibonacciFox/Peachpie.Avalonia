<?php
namespace System\Collections;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait RangeMethodsOverride
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
class Range extends \System\Collections\ArrayList implements 
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
	public readonly $SyncRoot;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $Item;
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InternalUpdateRange(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InternalUpdateVersion(){}
	/**
	 * @uses RangeMethodsOverride::BinarySearch_1 ($index, $count, $value, $comparer)
	 * @uses RangeMethodsOverride::BinarySearch_2 ($value)
	 * @uses RangeMethodsOverride::BinarySearch_3 ($value, $comparer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function BinarySearch(mixed ...$args){}
	/**
	 * @uses RangeMethodsOverride::CopyTo_1 ($array, $index)
	 * @uses RangeMethodsOverride::CopyTo_2 ($index, $array, $arrayIndex, $count)
	 * @uses RangeMethodsOverride::CopyTo_3 ($array)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyTo(mixed ...$args){}
	/**
	 * @uses RangeMethodsOverride::GetEnumerator_1 ()
	 * @uses RangeMethodsOverride::GetEnumerator_2 ($index, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @uses RangeMethodsOverride::IndexOf_1 ($value)
	 * @uses RangeMethodsOverride::IndexOf_2 ($value, $startIndex)
	 * @uses RangeMethodsOverride::IndexOf_3 ($value, $startIndex, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IndexOf(mixed ...$args){}
	/**
	 * @uses RangeMethodsOverride::LastIndexOf_1 ($value)
	 * @uses RangeMethodsOverride::LastIndexOf_2 ($value, $startIndex)
	 * @uses RangeMethodsOverride::LastIndexOf_3 ($value, $startIndex, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function LastIndexOf(mixed ...$args){}
	/**
	 * @uses RangeMethodsOverride::Reverse_1 ($index, $count)
	 * @uses RangeMethodsOverride::Reverse_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Reverse(mixed ...$args){}
	/**
	 * @uses RangeMethodsOverride::Sort_1 ($index, $count, $comparer)
	 * @uses RangeMethodsOverride::Sort_2 ()
	 * @uses RangeMethodsOverride::Sort_3 ($comparer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Sort(mixed ...$args){}
	/**
	 * @uses RangeMethodsOverride::ToArray_1 ()
	 * @uses RangeMethodsOverride::ToArray_2 ($type)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToArray(mixed ...$args){}
}
