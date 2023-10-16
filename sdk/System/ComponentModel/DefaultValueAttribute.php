<?php
namespace System\ComponentModel;
/**
 */
class DefaultValueAttribute extends \System\Attribute
{
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $Value;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\Object|object
	 */
	public  function get_Value(){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	protected  function SetValue($value){}
}
