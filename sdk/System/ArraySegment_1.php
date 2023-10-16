<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ArraySegment_1MethodsOverride
{
	/**
	 * @return \System\T
	 */
	#[MethodOverride] public  function get_Item_1($index){}
	/**
	 * @return \System\T
	 */
	#[MethodOverride] private  function get_Item_2($index){}
	/**
	 * @return \System\T
	 */
	#[MethodOverride] private  function get_Item_3($index){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function set_Item_1($index, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function set_Item_2($index, $value){}
	/**
	 * @return \System\Enumerator
	 */
	#[MethodOverride] public  function GetEnumerator_1(){}
	/**
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride] private  function GetEnumerator_2(){}
	/**
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride] private  function GetEnumerator_3(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function CopyTo_1($destination){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function CopyTo_2($destination, $destinationIndex){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function CopyTo_3($destination){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($obj){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($obj){}
	/**
	 * @return \System\ArraySegment_1
	 */
	#[MethodOverride] public  function Slice_1($index){}
	/**
	 * @return \System\ArraySegment_1
	 */
	#[MethodOverride] public  function Slice_2($index, $count){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class ArraySegment_1 extends \System\ValueType implements 
	\System\Collections\Generic\IList_1,
	\System\Collections\Generic\ICollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\Collections\Generic\IReadOnlyList_1,
	\System\Collections\Generic\IReadOnlyCollection_1
{
	/**
	 * @var \System\ArraySegment_1[T]
	 * @property
	 */
	public readonly $Empty;
	/**
	 * @var \T[]
	 * @property
	 */
	public readonly $Array;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Offset;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Count;
	/**
	 * @var \T
	 * @property
	 */
	public $Item;
	/**
	 * @return \System\ArraySegment_1
	 */
	public static function get_Empty(){}
	/**
	 * @return \System\T[]
	 */
	public  function get_Array(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Offset(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Count(){}
	/**
	 * @uses ArraySegment_1MethodsOverride::get_Item_1 ($index)
	 * @uses ArraySegment_1MethodsOverride::get_Item_2 ($index)
	 * @uses ArraySegment_1MethodsOverride::get_Item_3 ($index)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses ArraySegment_1MethodsOverride::set_Item_1 ($index, $value)
	 * @uses ArraySegment_1MethodsOverride::set_Item_2 ($index, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses ArraySegment_1MethodsOverride::GetEnumerator_1 ()
	 * @uses ArraySegment_1MethodsOverride::GetEnumerator_2 ()
	 * @uses ArraySegment_1MethodsOverride::GetEnumerator_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @uses ArraySegment_1MethodsOverride::CopyTo_1 ($destination)
	 * @uses ArraySegment_1MethodsOverride::CopyTo_2 ($destination, $destinationIndex)
	 * @uses ArraySegment_1MethodsOverride::CopyTo_3 ($destination)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyTo(mixed ...$args){}
	/**
	 * @uses ArraySegment_1MethodsOverride::Equals_1 ($obj)
	 * @uses ArraySegment_1MethodsOverride::Equals_2 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @uses ArraySegment_1MethodsOverride::Slice_1 ($index)
	 * @uses ArraySegment_1MethodsOverride::Slice_2 ($index, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Slice(mixed ...$args){}
	/**
	 * @return \System\T[]
	 */
	public  function ToArray(){}
	/**
	 * @param \System\ArraySegment_1 $a
	 * @param \System\ArraySegment_1 $b
	 * @return \System\Boolean
	 */
	public static function op_Equality($a, $b){}
	/**
	 * @param \System\ArraySegment_1 $a
	 * @param \System\ArraySegment_1 $b
	 * @return \System\Boolean
	 */
	public static function op_Inequality($a, $b){}
	/**
	 * @param \System\T[] $array
	 * @return \System\ArraySegment_1
	 */
	public static function op_Implicit($array){}
	/**
	 * @param \System\T $item
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function IndexOf($item){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\T $item
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Insert($index, $item){}
	/**
	 * @param \System\Int32|int $index
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function RemoveAt($index){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_IsReadOnly(){}
	/**
	 * @param \System\T $item
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Add($item){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Clear(){}
	/**
	 * @param \System\T $item
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Contains($item){}
	/**
	 * @param \System\T $item
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Remove($item){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ThrowInvalidOperationIfDefault(){}
}
