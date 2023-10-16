<?php
namespace System\Collections\Generic;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class KeyValuePair_2 extends \System\ValueType
{
	/**
	 * @var \TKey
	 * @property
	 */
	public readonly $Key;
	/**
	 * @var \TValue
	 * @property
	 */
	public readonly $Value;
	/**
	 * @return \System\Collections\Generic\TKey
	 */
	public  function get_Key(){}
	/**
	 * @return \System\Collections\Generic\TValue
	 */
	public  function get_Value(){}
	/**
	 * @param \System\Collections\Generic\TKey& $key
	 * @param \System\Collections\Generic\TValue& $value
	 * @return \System\Void|void
	 */
	public  function Deconstruct($key, $value){}
}
