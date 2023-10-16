<?php
namespace System\Threading\Tasks;
/**
 */
class TaskCache extends \System\Object
{
	/**
	 * @var \System\Threading\Tasks\Task_1[System\Boolean]
	 * @field
	 */
	protected readonly $s_trueTask;
	/**
	 * @var \System\Threading\Tasks\Task_1[System\Boolean]
	 * @field
	 */
	protected readonly $s_falseTask;
	/**
	 * @var \System\Threading\Tasks\Task_1[System\Int32][]
	 * @field
	 */
	protected readonly $s_int32Tasks;
	/**
	 * @param \System\Threading\Tasks\TResult $result
	 * @return \System\Threading\Tasks\Task_1
	 */
	protected static function CreateCacheableTask($result){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateInt32Tasks(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
