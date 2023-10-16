<?php
namespace System\Reflection;
/**
 */
class ParameterModifier extends \System\ValueType
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $Item;
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Boolean
	 */
	public  function get_Item($index){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_Item($index, $value){}
	/**
	 * @return \System\Boolean[]
	 */
	protected  function get_IsByRefArray(){}
}
