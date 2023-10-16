<?php
namespace System\IO\Pipelines;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait PipeCompletionCallbacksMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Execute_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Execute_2($callback, $exceptions){}
}
/**
 */
class PipeCompletionCallbacks extends \System\Object
{
	/**
	 * @uses PipeCompletionCallbacksMethodsOverride::Execute_1 ()
	 * @uses PipeCompletionCallbacksMethodsOverride::Execute_2 ($callback, $exceptions)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Execute(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
