<?php
namespace System\Collections\Generic;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class ValueListBuilder_1 extends \System\ValueType
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $Length;
	/**
	 * @var \T&
	 * @property
	 */
	public readonly $Item;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Length(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_Length($value){}
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Collections\Generic\T&
	 */
	public  function get_Item($index){}
	/**
	 * @param \System\Collections\Generic\T $item
	 * @return \System\Void|void
	 */
	public  function Append($item){}
	/**
	 * @return \System\ReadOnlySpan_1
	 */
	public  function AsSpan(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @return \System\Collections\Generic\T
	 */
	public  function Pop(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Grow(){}
}
