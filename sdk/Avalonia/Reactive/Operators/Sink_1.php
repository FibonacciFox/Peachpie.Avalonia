<?php
namespace Avalonia\Reactive\Operators;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait Sink_1MethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Dispose_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Dispose_2($disposing){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class Sink_1 extends \System\Object implements 
	\System\IDisposable
{
	/**
	 * @uses Sink_1MethodsOverride::Dispose_1 ()
	 * @uses Sink_1MethodsOverride::Dispose_2 ($disposing)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @param \Avalonia\Reactive\Operators\TTarget $value
	 * @return \System\Void|void
	 */
	public  function ForwardOnNext($value){}
	/**
	 * @return \System\Void|void
	 */
	public  function ForwardOnCompleted(){}
	/**
	 * @param \System\Exception $error
	 * @return \System\Void|void
	 */
	public  function ForwardOnError($error){}
	/**
	 * @param \System\IDisposable $upstream
	 * @return \System\Void|void
	 */
	protected  function SetUpstream($upstream){}
	/**
	 * @return \System\Void|void
	 */
	protected  function DisposeUpstream(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
