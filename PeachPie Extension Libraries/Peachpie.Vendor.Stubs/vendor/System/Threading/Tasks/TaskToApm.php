<?php
namespace System\Threading\Tasks;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait TaskToApmOverride {
	/**
	 * @deprecated
	 * @param \System\IAsyncResult $asyncResult
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function End_1 ($asyncResult){}
	/**
	 * @deprecated
	 * @param \System\IAsyncResult $asyncResult
	 * @return \TResult
	 */
	#[MethodOverride]public static function End_2 ($asyncResult){}
}
class TaskToApm extends \System\Object
{
	use TaskToApmOverride;

	/**
	 * @param \System\Threading\Tasks\Task $task
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $state
	 * @return \System\IAsyncResult
	 */
	public static function Begin($task, $callback, $state){}
	/**
	 * @uses TaskToApmOverride::End_1 <br>public , args: ($asyncResult)<br>
	 * @uses TaskToApmOverride::End_2 <br>public , args: ($asyncResult)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|\TResult|mixed|\override
	 */
	#[MethodOverridePublic]function End (\override ...$args){}
	/**
	 * @param \System\IAsyncResult $asyncResult
	 * @return \System\Threading\Tasks\Task
	 */
	public static function GetTask($asyncResult){}
	private static function ThrowArgumentException($asyncResult){}
}