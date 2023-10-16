<?php
namespace System\Threading\Tasks;
/**
 */
class ContinueWithTaskContinuation extends \System\Threading\Tasks\TaskContinuation
{
	/**
	 * @var \System\Threading\Tasks\Task
	 * @field
	 */
	protected $m_task;
	/**
	 * @var \System\Threading\Tasks\TaskContinuationOptions
	 * @field
	 */
	protected readonly $m_options;
}
