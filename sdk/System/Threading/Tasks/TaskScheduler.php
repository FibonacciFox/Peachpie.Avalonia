<?php
namespace System\Threading\Tasks;
/**
 */
class TaskScheduler extends \System\Object
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $s_taskSchedulerIdCounter;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $MaximumConcurrencyLevel;
	/**
	 * @var \System\Threading\Tasks\TaskScheduler
	 * @property
	 */
	public readonly $Default;
	/**
	 * @var \System\Threading\Tasks\TaskScheduler
	 * @property
	 */
	public readonly $Current;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Id;
	/**
	 * @param \System\Threading\Tasks\Task $task
	 * @return \System\Void|void
	 */
	protected  function QueueTask($task){}
	/**
	 * @param \System\Threading\Tasks\Task $task
	 * @param \System\Boolean $taskWasPreviouslyQueued
	 * @return \System\Boolean
	 */
	protected  function TryExecuteTaskInline($task, $taskWasPreviouslyQueued){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	protected  function GetScheduledTasks(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_MaximumConcurrencyLevel(){}
	/**
	 * @param \System\Threading\Tasks\Task $task
	 * @param \System\Boolean $taskWasPreviouslyQueued
	 * @return \System\Boolean
	 */
	protected  function TryRunInline($task, $taskWasPreviouslyQueued){}
	/**
	 * @param \System\Threading\Tasks\Task $task
	 * @return \System\Boolean
	 */
	protected  function TryDequeue($task){}
	/**
	 * @return \System\Void|void
	 */
	protected  function NotifyWorkItemProgress(){}
	/**
	 * @param \System\Threading\Tasks\Task $task
	 * @return \System\Void|void
	 */
	protected  function InternalQueueTask($task){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AddToActiveTaskSchedulers(){}
	/**
	 * @return \System\Threading\Tasks\TaskScheduler
	 */
	public static function get_Default(){}
	/**
	 * @return \System\Threading\Tasks\TaskScheduler
	 */
	public static function get_Current(){}
	/**
	 * @return \System\Threading\Tasks\TaskScheduler
	 */
	protected static function get_InternalCurrent(){}
	/**
	 * @return \System\Threading\Tasks\TaskScheduler
	 */
	public static function FromCurrentSynchronizationContext(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Id(){}
	/**
	 * @param \System\Threading\Tasks\Task $task
	 * @return \System\Boolean
	 */
	protected  function TryExecuteTask($task){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public static function add_UnobservedTaskException($value){}
	/**
	 * @param \System\EventHandler_1 $value
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
	protected  function GetScheduledTasksForDebugger(){}
	/**
	 * @return \System\Threading\Tasks\TaskScheduler[]
	 */
	protected static function GetTaskSchedulersForDebugger(){}
	/**
	 * @return \System\Threading\Tasks\TaskSchedulerAwaiter
	 */
	protected  function GetAwaiter(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
