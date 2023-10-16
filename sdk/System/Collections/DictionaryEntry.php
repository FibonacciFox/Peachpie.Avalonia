<?php
namespace System\Collections;
/**
 */
class DictionaryEntry extends \System\ValueType
{
	/**
	 * @var \System\Object
	 * @property
	 */
	public $Key;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $Value;
	/**
	 * @return \System\Object|object
	 */
	public  function get_Key(){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public  function set_Key($value){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_Value(){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public  function set_Value($value){}
	/**
	 * @param \System\Object& $key
	 * @param \System\Object& $value
	 * @return \System\Void|void
	 */
	public  function Deconstruct($key, $value){}
}
