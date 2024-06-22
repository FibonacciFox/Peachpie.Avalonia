<?php
namespace System\Threading\Tasks;
final class TaskSchedulerAwaitTaskContinuation extends \System\Threading\Tasks\AwaitTaskContinuation implements
	\System\Threading\IThreadPoolWorkItem
{

	/**
	 * @field
	 * @since readonly
	 * @var \System\Action
	 */
	protected $m_action;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $m_continuationId;
	private function Execute(){}
}