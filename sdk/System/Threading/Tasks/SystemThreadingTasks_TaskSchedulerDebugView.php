<?php
namespace System\Threading\Tasks;
/**
 */
class SystemThreadingTasks_TaskSchedulerDebugView extends \System\Object
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Id;
	/**
	 * @var \System\Collections\Generic\IEnumerable_1[System\Threading\Tasks\Task]
	 * @property
	 */
	public readonly $ScheduledTasks;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Id(){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public  function get_ScheduledTasks(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
