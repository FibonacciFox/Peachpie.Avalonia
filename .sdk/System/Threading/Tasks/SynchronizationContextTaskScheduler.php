<?php
namespace System\Threading\Tasks;
final class SynchronizationContextTaskScheduler extends \System\Threading\Tasks\TaskScheduler
{

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

}