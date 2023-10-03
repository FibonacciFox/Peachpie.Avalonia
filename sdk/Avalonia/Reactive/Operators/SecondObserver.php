<?php
namespace Avalonia\Reactive\Operators;
/**
 */
class SecondObserver extends \System\Object implements 
	\System\IObserver_1
{
	/**
	 * @param \Avalonia\Reactive\Operators\FirstObserver $other
	 * @return \System\Void|void
	 */
	public  function SetOther($other){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_HasValue(){}
	/**
	 * @param \System\Boolean $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_HasValue($value){}
	/**
	 * @return \Avalonia\Reactive\Operators\TSecond
	 */
	public  function get_Value(){}
	/**
	 * @param \Avalonia\Reactive\Operators\TSecond $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Value($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_Done(){}
	/**
	 * @param \System\Boolean $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Done($value){}
	/**
	 * @param \Avalonia\Reactive\Operators\TSecond $value
	 * @return \System\Void|void
	 */
	public  function OnNext($value){}
	/**
	 * @param \System\Exception $error
	 * @return \System\Void|void
	 */
	public  function OnError($error){}
	/**
	 * @return \System\Void|void
	 */
	public  function OnCompleted(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
