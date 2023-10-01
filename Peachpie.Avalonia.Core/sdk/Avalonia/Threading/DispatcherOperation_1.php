<?php
namespace Avalonia\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait DispatcherOperation_1MethodsOverride
{
	/**
	 * @return \System\Runtime\CompilerServices\TaskAwaiter_1
	 */
	#[MethodOverride] public  function GetAwaiter_1(){}
	/**
	 * @return \System\Runtime\CompilerServices\TaskAwaiter
	 */
	#[MethodOverride] public  function GetAwaiter_2(){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function GetTask_1(){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function GetTask_2(){}
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
 * @deprecated this element should not be used by you because it will break your program
 */
class DispatcherOperation_1 extends \Avalonia\Threading\DispatcherOperation
{
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_TaskCompletionSource(){}
	/**
	 * @uses DispatcherOperation_1MethodsOverride::GetAwaiter_1 ()
	 * @uses DispatcherOperation_1MethodsOverride::GetAwaiter_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetAwaiter(mixed ...$args){}
	/**
	 * @uses DispatcherOperation_1MethodsOverride::GetTask_1 ()
	 * @uses DispatcherOperation_1MethodsOverride::GetTask_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetTask(mixed ...$args){}
	/**
	 * @return \Avalonia\Threading\T
	 */
	public  function get_Result(){}
	/**
	 * @uses DispatcherOperation_1MethodsOverride::Wait_1 ()
	 * @uses DispatcherOperation_1MethodsOverride::Wait_2 ($timeout)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Wait(mixed ...$args){}
}
