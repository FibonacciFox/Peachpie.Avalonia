<?php
namespace System\Threading\Tasks;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait TaskToApmMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function End_1($asyncResult){}
	/**
	 * @return \System\Threading\Tasks\TResult
	 */
	#[MethodOverride] public static function End_2($asyncResult){}
}
/**
 */
class TaskToApm extends \System\Object
{
	/**
	 * @param \System\Threading\Tasks\Task $task
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $state
	 * @return \System\IAsyncResult
	 */
	public static function Begin($task, $callback, $state){}
	/**
	 * @uses TaskToApmMethodsOverride::End_1 ($asyncResult)
	 * @uses TaskToApmMethodsOverride::End_2 ($asyncResult)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function End(mixed ...$args){}
	/**
	 * @param \System\IAsyncResult $asyncResult
	 * @return \System\Threading\Tasks\Task
	 */
	public static function GetTask($asyncResult){}
	/**
	 * @param \System\IAsyncResult $asyncResult
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ThrowArgumentException($asyncResult){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
