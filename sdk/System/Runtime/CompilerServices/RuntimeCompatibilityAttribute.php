<?php
namespace System\Runtime\CompilerServices;
/**
 */
class RuntimeCompatibilityAttribute extends \System\Attribute
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $WrapNonExceptionThrows;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\Boolean
	 */
	public  function get_WrapNonExceptionThrows(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_WrapNonExceptionThrows($value){}
}
