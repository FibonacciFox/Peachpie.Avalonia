<?php
namespace System\Threading\Tasks;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait TaskExtensionsOverride {
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task_1 $task [generic: System\Threading\Tasks\Task]
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public static function Unwrap_1 ($task){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task_1 $task [generic: System\Threading\Tasks\Task_1[TResult]
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public static function Unwrap_2 ($task){}
}
class TaskExtensions extends \System\Object
{
	use TaskExtensionsOverride;


	/**
	 * @uses TaskExtensionsOverride::Unwrap_1 <br>public , args: ($task)<br>
	 * @uses TaskExtensionsOverride::Unwrap_2 <br>public , args: ($task)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Threading\Tasks\Task|\System\Threading\Tasks\Task_1|mixed|\override
	 */
	#[MethodOverridePublic]function Unwrap (\override ...$args){}
}