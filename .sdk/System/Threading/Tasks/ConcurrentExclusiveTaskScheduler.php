<?php
namespace System\Threading\Tasks;
final class ConcurrentExclusiveTaskScheduler extends \System\Threading\Tasks\TaskScheduler
{

	/**
	 * @field
	 * @since readonly
	 * @var \System\Threading\Tasks\IProducerConsumerQueue_1[System\Threading\Tasks\Task]
	 */
	protected $m_tasks;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $MaximumConcurrencyLevel;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Id;
	/**
	 * @param \System\Threading\Tasks\Task $task
	 * @return \System\Void|void
	 */
	protected function ExecuteTask($task){}
	private function TryExecuteTaskInlineOnTargetScheduler($task){}
}