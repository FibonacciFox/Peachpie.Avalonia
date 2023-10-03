<?php
namespace Avalonia\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait SendOrPostCallbackDispatcherOperationMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Wait_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Wait_2($timeout){}
}
/**
 */
class SendOrPostCallbackDispatcherOperation extends \Avalonia\Threading\DispatcherOperation
{
	/**
	 * @uses SendOrPostCallbackDispatcherOperationMethodsOverride::Wait_1 ()
	 * @uses SendOrPostCallbackDispatcherOperationMethodsOverride::Wait_2 ($timeout)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Wait(mixed ...$args){}
}
