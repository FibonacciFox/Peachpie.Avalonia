<?php
namespace System\Threading\Tasks;
/**
 */
class SynchronizationContextTaskScheduler extends \System\Threading\Tasks\TaskScheduler
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
}
