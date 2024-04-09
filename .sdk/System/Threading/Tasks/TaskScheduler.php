<?php
namespace System\Threading\Tasks;
class TaskScheduler extends \System\Object
{
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected static $s_taskSchedulerIdCounter;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $MaximumConcurrencyLevel;
	/**
	 * @property
	 * @var \System\Threading\Tasks\TaskScheduler
	 * @since readonly
	 */
	public $Default;
	/**
	 * @property
	 * @var \System\Threading\Tasks\TaskScheduler
	 * @since readonly
	 */
	public $Current;
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
	abstract protected function QueueTask($task);
	/**
	 * @param \System\Threading\Tasks\Task $task
	 * @param \System\Boolean|bool $taskWasPreviouslyQueued
	 * @return \System\Boolean|bool
	 */
	abstract protected function TryExecuteTaskInline($task, $taskWasPreviouslyQueued);
	/**
	 * @return \System\Collections\Generic\IEnumerable_1[System\Threading\Tasks\Task]
	 */
	abstract protected function GetScheduledTasks();
	/**
	 * @param \System\Threading\Tasks\Task $task
	 * @param \System\Boolean|bool $taskWasPreviouslyQueued
	 * @return \System\Boolean|bool
	 */
	protected function TryRunInline($task, $taskWasPreviouslyQueued){}
	/**
	 * @param \System\Threading\Tasks\Task $task
	 * @return \System\Boolean|bool
	 */
	protected function TryDequeue($task){}
	/**
	 * @return \System\Void|void
	 */
	protected function NotifyWorkItemProgress(){}
	/**
	 * @param \System\Threading\Tasks\Task $task
	 * @return \System\Void|void
	 */
	protected function InternalQueueTask($task){}
	private function AddToActiveTaskSchedulers(){}
	/**
	 * @return \System\Threading\Tasks\TaskScheduler
	 */
	public static function FromCurrentSynchronizationContext(){}
	/**
	 * @param \System\Threading\Tasks\Task $task
	 * @return \System\Boolean|bool
	 */
	protected function TryExecuteTask($task){}
	/**
	 * @param \System\EventHandler_1 $value [generic: System\Threading\Tasks\UnobservedTaskExceptionEventArgs]
	 * @return \System\Void|void
	 */
	public static function add_UnobservedTaskException($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: System\Threading\Tasks\UnobservedTaskExceptionEventArgs]
	 * @return \System\Void|void
	 */
	public static function remove_UnobservedTaskException($value){}
	/**
	 * @param \System\Object|object $sender
	 * @param \System\Threading\Tasks\UnobservedTaskExceptionEventArgs $ueea
	 * @return \System\Void|void
	 */
	protected static function PublishUnobservedTaskException($sender, $ueea){}
	/**
	 * @return \System\Threading\Tasks\Task[]
	 */
	protected function GetScheduledTasksForDebugger(){}
	/**
	 * @return \System\Threading\Tasks\TaskScheduler[]
	 */
	protected static function GetTaskSchedulersForDebugger(){}
	/**
	 * @return \System\Threading\Tasks\TaskScheduler+TaskSchedulerAwaiter
	 */
	protected function GetAwaiter(){}
}