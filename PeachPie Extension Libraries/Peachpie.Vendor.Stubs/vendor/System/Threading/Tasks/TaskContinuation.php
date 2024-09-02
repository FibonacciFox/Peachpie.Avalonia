<?php
namespace System\Threading\Tasks;
class TaskContinuation extends \System\Object
{

	/**
	 * @param \System\Threading\Tasks\Task $completedTask
	 * @param \System\Boolean|bool $canInlineContinuationTask
	 * @return \System\Void|void
	 */
	abstract protected function Run($completedTask, $canInlineContinuationTask);
	/**
	 * @param \System\Threading\Tasks\Task $task
	 * @param \System\Boolean|bool $needsProtection
	 * @return \System\Void|void
	 */
	protected static function InlineIfPossibleOrElseQueue($task, $needsProtection){}
	/**
	 * @return \System\Delegate[]
	 */
	abstract protected function GetDelegateContinuationsForDebugger();
}