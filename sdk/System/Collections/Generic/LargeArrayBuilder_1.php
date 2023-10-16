<?php
namespace System\Collections\Generic;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait LargeArrayBuilder_1MethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function AddWithBufferAllocation_1($item){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function AddWithBufferAllocation_2($item, $destination, $index){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function CopyTo_1($array, $arrayIndex, $count){}
	/**
	 * @return \System\Collections\Generic\CopyPosition
	 */
	#[MethodOverride] public  function CopyTo_2($position, $array, $arrayIndex, $count){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class LargeArrayBuilder_1 extends \System\ValueType
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Count;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Count(){}
	/**
	 * @param \System\Collections\Generic\T $item
	 * @return \System\Void|void
	 */
	public  function Add($item){}
	/**
	 * @uses LargeArrayBuilder_1MethodsOverride::AddWithBufferAllocation_1 ($item)
	 * @uses LargeArrayBuilder_1MethodsOverride::AddWithBufferAllocation_2 ($item, $destination, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddWithBufferAllocation(mixed ...$args){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $items
	 * @return \System\Void|void
	 */
	public  function AddRange($items){}
	/**
	 * @uses LargeArrayBuilder_1MethodsOverride::CopyTo_1 ($array, $arrayIndex, $count)
	 * @uses LargeArrayBuilder_1MethodsOverride::CopyTo_2 ($position, $array, $arrayIndex, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyTo(mixed ...$args){}
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Collections\Generic\T[]
	 */
	public  function GetBuffer($index){}
	/**
	 * @param \System\Collections\Generic\T $item
	 * @return \System\Void|void
	 */
	public  function SlowAdd($item){}
	/**
	 * @return \System\Collections\Generic\T[]
	 */
	public  function ToArray(){}
	/**
	 * @param \System\Collections\Generic\T[]& $array
	 * @return \System\Boolean
	 */
	public  function TryMove($array){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AllocateBuffer(){}
}
