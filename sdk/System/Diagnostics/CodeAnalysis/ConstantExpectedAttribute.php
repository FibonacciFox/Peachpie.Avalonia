<?php
namespace System\Diagnostics\CodeAnalysis;
/**
 */
class ConstantExpectedAttribute extends \System\Attribute
{
	/**
	 * @var \System\Object
	 * @property
	 */
	public $Min;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $Max;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\Object|object
	 */
	public  function get_Min(){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public  function set_Min($value){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_Max(){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public  function set_Max($value){}
}
