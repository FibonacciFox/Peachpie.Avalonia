<?php
namespace System\Threading\Tasks;
/**
 */
class TaskContinuation extends \System\Object
{
	/**
	 * @param \System\Threading\Tasks\Task $completedTask
	 * @param \System\Boolean $canInlineContinuationTask
	 * @return \System\Void|void
	 */
	protected  function Run($completedTask, $canInlineContinuationTask){}
	/**
	 * @param \System\Threading\Tasks\Task $task
	 * @param \System\Boolean $needsProtection
	 * @return \System\Void|void
	 */
	protected static function InlineIfPossibleOrElseQueue($task, $needsProtection){}
	/**
	 * @return \System\Delegate[]
	 */
	protected  function GetDelegateContinuationsForDebugger(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
