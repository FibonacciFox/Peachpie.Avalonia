<?php
namespace System\Collections;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait IListWrapperMethodsOverride
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
class IListWrapper extends \System\Collections\ArrayList implements 
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
	 * @uses IListWrapperMethodsOverride::BinarySearch_1 ($index, $count, $value, $comparer)
	 * @uses IListWrapperMethodsOverride::BinarySearch_2 ($value)
	 * @uses IListWrapperMethodsOverride::BinarySearch_3 ($value, $comparer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function BinarySearch(mixed ...$args){}
	/**
	 * @uses IListWrapperMethodsOverride::CopyTo_1 ($array, $index)
	 * @uses IListWrapperMethodsOverride::CopyTo_2 ($index, $array, $arrayIndex, $count)
	 * @uses IListWrapperMethodsOverride::CopyTo_3 ($array)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyTo(mixed ...$args){}
	/**
	 * @uses IListWrapperMethodsOverride::GetEnumerator_1 ()
	 * @uses IListWrapperMethodsOverride::GetEnumerator_2 ($index, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @uses IListWrapperMethodsOverride::IndexOf_1 ($value)
	 * @uses IListWrapperMethodsOverride::IndexOf_2 ($value, $startIndex)
	 * @uses IListWrapperMethodsOverride::IndexOf_3 ($value, $startIndex, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IndexOf(mixed ...$args){}
	/**
	 * @uses IListWrapperMethodsOverride::LastIndexOf_1 ($value)
	 * @uses IListWrapperMethodsOverride::LastIndexOf_2 ($value, $startIndex)
	 * @uses IListWrapperMethodsOverride::LastIndexOf_3 ($value, $startIndex, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function LastIndexOf(mixed ...$args){}
	/**
	 * @uses IListWrapperMethodsOverride::Reverse_1 ($index, $count)
	 * @uses IListWrapperMethodsOverride::Reverse_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Reverse(mixed ...$args){}
	/**
	 * @uses IListWrapperMethodsOverride::Sort_1 ($index, $count, $comparer)
	 * @uses IListWrapperMethodsOverride::Sort_2 ()
	 * @uses IListWrapperMethodsOverride::Sort_3 ($comparer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Sort(mixed ...$args){}
	/**
	 * @uses IListWrapperMethodsOverride::ToArray_1 ()
	 * @uses IListWrapperMethodsOverride::ToArray_2 ($type)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToArray(mixed ...$args){}
}
