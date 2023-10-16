<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class ListBuilder_1 extends \System\ValueType
{
	/**
	 * @var \T
	 * @property
	 */
	public readonly $Item;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Count;
	/**
	 * @param \System\Int32|int $index
	 * @return \System\T
	 */
	public  function get_Item($index){}
	/**
	 * @return \System\T[]
	 */
	public  function ToArray(){}
	/**
	 * @param \System\Object[] $array
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	public  function CopyTo($array, $index){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Count(){}
	/**
	 * @param \System\T $item
	 * @return \System\Void|void
	 */
	public  function Add($item){}
}
