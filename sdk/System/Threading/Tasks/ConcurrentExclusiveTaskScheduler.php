<?php
namespace System\Threading\Tasks;
/**
 */
class ConcurrentExclusiveTaskScheduler extends \System\Threading\Tasks\TaskScheduler
{
	/**
	 * @var \System\Threading\Tasks\IProducerConsumerQueue_1[System\Threading\Tasks\Task]
	 * @field
	 */
	protected readonly $m_tasks;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $MaximumConcurrencyLevel;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Id;
	/**
	 * @param \System\Threading\Tasks\Task $task
	 * @return \System\Void|void
	 */
	protected  function ExecuteTask($task){}
	/**
	 * @param \System\Threading\Tasks\Task $task
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryExecuteTaskInlineOnTargetScheduler($task){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_CountForDebugger(){}
}
