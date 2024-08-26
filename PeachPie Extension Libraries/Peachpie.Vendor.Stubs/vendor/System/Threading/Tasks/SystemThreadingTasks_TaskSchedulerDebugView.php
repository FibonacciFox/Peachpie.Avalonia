<?php
namespace System\Threading\Tasks;
final class SystemThreadingTasks_TaskSchedulerDebugView extends \System\Object
{
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Id;
	/**
	 * @property
	 * @var \System\Collections\Generic\IEnumerable_1[System\Threading\Tasks\Task]
	 * @since readonly
	 */
	public $ScheduledTasks;
	/**
	 * @param \System\Threading\Tasks\TaskScheduler $scheduler
	 */
	public function __construct($scheduler){}
}