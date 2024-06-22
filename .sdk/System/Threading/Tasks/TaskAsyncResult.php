<?php
namespace System\Threading\Tasks;
final class TaskAsyncResult extends \System\Object implements
	\System\IAsyncResult
{

	/**
	 * @field
	 * @since readonly
	 * @var \System\Threading\Tasks\Task
	 */
	protected $_task;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $AsyncState;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $CompletedSynchronously;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsCompleted;
	/**
	 * @property
	 * @var \System\Threading\WaitHandle
	 * @since readonly
	 */
	public $AsyncWaitHandle;
	private function InvokeCallback(){}
}