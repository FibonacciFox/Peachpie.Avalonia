<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait AsyncFlowControlMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($obj){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($obj){}
}
/**
 */
class AsyncFlowControl extends \System\ValueType implements 
	\System\IEquatable_1,
	\System\IDisposable
{
	/**
	 * @param \System\Threading\Thread $currentThread
	 * @return \System\Void|void
	 */
	protected  function Initialize($currentThread){}
	/**
	 * @return \System\Void|void
	 */
	public  function Undo(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @uses AsyncFlowControlMethodsOverride::Equals_1 ($obj)
	 * @uses AsyncFlowControlMethodsOverride::Equals_2 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @param \System\Threading\AsyncFlowControl $a
	 * @param \System\Threading\AsyncFlowControl $b
	 * @return \System\Boolean
	 */
	public static function op_Equality($a, $b){}
	/**
	 * @param \System\Threading\AsyncFlowControl $a
	 * @param \System\Threading\AsyncFlowControl $b
	 * @return \System\Boolean
	 */
	public static function op_Inequality($a, $b){}
}
