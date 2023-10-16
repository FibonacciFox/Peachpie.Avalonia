<?php
namespace System\Collections\Generic;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class ArrayBuilder_1 extends \System\ValueType
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Capacity;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Count;
	/**
	 * @var \T
	 * @property
	 */
	public readonly $Item;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Capacity(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Count(){}
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Collections\Generic\T
	 */
	public  function get_Item($index){}
	/**
	 * @param \System\Collections\Generic\T $item
	 * @return \System\Void|void
	 */
	public  function Add($item){}
	/**
	 * @return \System\Collections\Generic\T
	 */
	public  function First(){}
	/**
	 * @return \System\Collections\Generic\T
	 */
	public  function Last(){}
	/**
	 * @param \System\Collections\Generic\T $item
	 * @return \System\Void|void
	 */
	public  function UncheckedAdd($item){}
	/**
	 * @param \System\Int32|int $minimum
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function EnsureCapacity($minimum){}
}
