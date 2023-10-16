<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait HostExecutionContextMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Dispose_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Dispose_2($disposing){}
}
/**
 */
class HostExecutionContext extends \System\Object implements 
	\System\IDisposable
{
	/**
	 * @return \System\Object|object
	 */
	protected  function get_State(){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	protected  function set_State($value){}
	/**
	 * @return \System\Threading\HostExecutionContext
	 */
	public  function CreateCopy(){}
	/**
	 * @uses HostExecutionContextMethodsOverride::Dispose_1 ()
	 * @uses HostExecutionContextMethodsOverride::Dispose_2 ($disposing)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
