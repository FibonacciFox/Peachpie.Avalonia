<?php
namespace System\Threading\Tasks;
/**
 */
class ThreadPoolTaskScheduler extends \System\Threading\Tasks\TaskScheduler
{
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
	 * @param \System\Collections\Generic\IEnumerable_1 $tpwItems
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function FilterTasksFromWorkItems($tpwItems){}
}
