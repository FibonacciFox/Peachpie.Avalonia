<?php
namespace System\Threading\Tasks;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait TaskExtensionsMethodsOverride
{
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public static function Unwrap_1($task){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public static function Unwrap_2($task){}
}
/**
 */
class TaskExtensions extends \System\Object
{
	/**
	 * @uses TaskExtensionsMethodsOverride::Unwrap_1 ($task)
	 * @uses TaskExtensionsMethodsOverride::Unwrap_2 ($task)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Unwrap(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
