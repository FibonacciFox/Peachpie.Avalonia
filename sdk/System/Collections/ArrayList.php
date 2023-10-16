<?php
namespace System\Collections;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ArrayListMethodsOverride
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
	#[MethodOverride] public  function CopyTo_1($array){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function CopyTo_2($array, $arrayIndex){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function CopyTo_3($index, $array, $arrayIndex, $count){}
	/**
	 * @return \System\Collections\IList
	 */
	#[MethodOverride] public static function FixedSize_1($list){}
	/**
	 * @return \System\Collections\ArrayList
	 */
	#[MethodOverride] public static function FixedSize_2($list){}
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
	 * @return \System\Collections\IList
	 */
	#[MethodOverride] public static function ReadOnly_1($list){}
	/**
	 * @return \System\Collections\ArrayList
	 */
	#[MethodOverride] public static function ReadOnly_2($list){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Reverse_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Reverse_2($index, $count){}
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
	 * @return \System\Collections\IList
	 */
	#[MethodOverride] public static function Synchronized_1($list){}
	/**
	 * @return \System\Collections\ArrayList
	 */
	#[MethodOverride] public static function Synchronized_2($list){}
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
class ArrayList extends \System\Object implements 
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
	public readonly $IsFixedSize;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsReadOnly;
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
	 * @return \System\Int32|int
	 */
	public  function get_Capacity(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_Capacity($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Count(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsFixedSize(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsReadOnly(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsSynchronized(){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_SyncRoot(){}
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Object|object
	 */
	public  function get_Item($index){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public  function set_Item($index, $value){}
	/**
	 * @param \System\Collections\IList $list
	 * @return \System\Collections\ArrayList
	 */
	public static function Adapter($list){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Int32|int
	 */
	public  function Add($value){}
	/**
	 * @param \System\Collections\ICollection $c
	 * @return \System\Void|void
	 */
	public  function AddRange($c){}
	/**
	 * @uses ArrayListMethodsOverride::BinarySearch_1 ($index, $count, $value, $comparer)
	 * @uses ArrayListMethodsOverride::BinarySearch_2 ($value)
	 * @uses ArrayListMethodsOverride::BinarySearch_3 ($value, $comparer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function BinarySearch(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public  function Clear(){}
	/**
	 * @return \System\Object|object
	 */
	public  function Clone(){}
	/**
	 * @param \System\Object|object $item
	 * @return \System\Boolean
	 */
	public  function Contains($item){}
	/**
	 * @uses ArrayListMethodsOverride::CopyTo_1 ($array)
	 * @uses ArrayListMethodsOverride::CopyTo_2 ($array, $arrayIndex)
	 * @uses ArrayListMethodsOverride::CopyTo_3 ($index, $array, $arrayIndex, $count)
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
	 * @uses ArrayListMethodsOverride::FixedSize_1 ($list)
	 * @uses ArrayListMethodsOverride::FixedSize_2 ($list)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function FixedSize(mixed ...$args){}
	/**
	 * @uses ArrayListMethodsOverride::GetEnumerator_1 ()
	 * @uses ArrayListMethodsOverride::GetEnumerator_2 ($index, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @uses ArrayListMethodsOverride::IndexOf_1 ($value)
	 * @uses ArrayListMethodsOverride::IndexOf_2 ($value, $startIndex)
	 * @uses ArrayListMethodsOverride::IndexOf_3 ($value, $startIndex, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IndexOf(mixed ...$args){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public  function Insert($index, $value){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Collections\ICollection $c
	 * @return \System\Void|void
	 */
	public  function InsertRange($index, $c){}
	/**
	 * @uses ArrayListMethodsOverride::LastIndexOf_1 ($value)
	 * @uses ArrayListMethodsOverride::LastIndexOf_2 ($value, $startIndex)
	 * @uses ArrayListMethodsOverride::LastIndexOf_3 ($value, $startIndex, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function LastIndexOf(mixed ...$args){}
	/**
	 * @uses ArrayListMethodsOverride::ReadOnly_1 ($list)
	 * @uses ArrayListMethodsOverride::ReadOnly_2 ($list)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ReadOnly(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Void|void
	 */
	public  function Remove($obj){}
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	public  function RemoveAt($index){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	public  function RemoveRange($index, $count){}
	/**
	 * @param \System\Object|object $value
	 * @param \System\Int32|int $count
	 * @return \System\Collections\ArrayList
	 */
	public static function Repeat($value, $count){}
	/**
	 * @uses ArrayListMethodsOverride::Reverse_1 ()
	 * @uses ArrayListMethodsOverride::Reverse_2 ($index, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Reverse(mixed ...$args){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Collections\ICollection $c
	 * @return \System\Void|void
	 */
	public  function SetRange($index, $c){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $count
	 * @return \System\Collections\ArrayList
	 */
	public  function GetRange($index, $count){}
	/**
	 * @uses ArrayListMethodsOverride::Sort_1 ()
	 * @uses ArrayListMethodsOverride::Sort_2 ($comparer)
	 * @uses ArrayListMethodsOverride::Sort_3 ($index, $count, $comparer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Sort(mixed ...$args){}
	/**
	 * @uses ArrayListMethodsOverride::Synchronized_1 ($list)
	 * @uses ArrayListMethodsOverride::Synchronized_2 ($list)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Synchronized(mixed ...$args){}
	/**
	 * @uses ArrayListMethodsOverride::ToArray_1 ()
	 * @uses ArrayListMethodsOverride::ToArray_2 ($type)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToArray(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public  function TrimToSize(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
