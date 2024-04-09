<?php
namespace System\Threading\Tasks;
final class DebugView extends \System\Object
{
	/**
	 * @property
	 * @var \System\Threading\Tasks\ConcurrentExclusiveSchedulerPair+ProcessingMode
	 * @since readonly
	 */
	public $Mode;
	/**
	 * @property
	 * @var \System\Collections\Generic\IEnumerable_1[System\Threading\Tasks\Task]
	 * @since readonly
	 */
	public $ScheduledExclusive;
	/**
	 * @property
	 * @var \System\Collections\Generic\IEnumerable_1[System\Threading\Tasks\Task]
	 * @since readonly
	 */
	public $ScheduledConcurrent;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $CurrentlyExecutingTaskCount;
	/**
	 * @property
	 * @var \System\Threading\Tasks\TaskScheduler
	 * @since readonly
	 */
	public $TargetScheduler;
	/**
	 * @param \System\Threading\Tasks\ConcurrentExclusiveSchedulerPair $pair
	 */
	public function __construct($pair){}
}