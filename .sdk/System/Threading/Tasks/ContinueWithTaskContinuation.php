<?php
namespace System\Threading\Tasks;
final class ContinueWithTaskContinuation extends \System\Threading\Tasks\TaskContinuation
{

	/**
	 * @field
	 * @var \System\Threading\Tasks\Task
	 */
	protected $m_task;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Threading\Tasks\TaskContinuationOptions
	 */
	protected $m_options;

}