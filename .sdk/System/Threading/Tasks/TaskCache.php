<?php
namespace System\Threading\Tasks;
class TaskCache extends \System\Object
{

	/**
	 * @field
	 * @since readonly
	 * @var \System\Threading\Tasks\Task_1[System\Boolean]
	 */
	protected static $s_trueTask;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Threading\Tasks\Task_1[System\Boolean]
	 */
	protected static $s_falseTask;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Threading\Tasks\Task_1[System\Int32][]
	 */
	protected static $s_int32Tasks;
	/**
	 * @param \TResult $result
	 * @return \System\Threading\Tasks\Task_1[TResult]
	 */
	protected static function CreateCacheableTask($result){}
	private static function CreateInt32Tasks(){}
}