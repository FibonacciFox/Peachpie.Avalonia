<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class AsyncLocal_1 extends \System\Object implements 
	\System\Threading\IAsyncLocal
{
	/**
	 * @var \T
	 * @property
	 */
	public $Value;
	/**
	 * @return \System\Threading\T
	 */
	public  function get_Value(){}
	/**
	 * @param \System\Threading\T $value
	 * @return \System\Void|void
	 */
	public  function set_Value($value){}
	/**
	 * @param \System\Object|object $previousValueObj
	 * @param \System\Object|object $currentValueObj
	 * @param \System\Boolean $contextChanged
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnValueChanged($previousValueObj, $currentValueObj, $contextChanged){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
