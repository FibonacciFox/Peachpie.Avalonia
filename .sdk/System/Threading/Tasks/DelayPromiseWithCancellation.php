<?php
namespace System\Threading\Tasks;
final class DelayPromiseWithCancellation extends \System\Threading\Tasks\DelayPromise implements
	\System\IAsyncResult,
	\System\IDisposable
{
	/**
	 * @field
	 * @var \System\Delegate
	 */
	protected $m_action;
	/**
	 * @field
	 * @var \System\Object|object
	 */
	protected $m_stateObject;
	/**
	 * @field
	 * @var \System\Threading\Tasks\TaskScheduler
	 */
	protected $m_taskScheduler;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $m_stateFlags;
	/**
	 * @field
	 * @var \System\Threading\Tasks\Task+ContingentProperties
	 */
	protected $m_contingentProperties;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Id;
	/**
	 * @property
	 * @var \System\AggregateException
	 * @since readonly
	 */
	public $Exception;
	/**
	 * @property
	 * @var \System\Threading\Tasks\TaskStatus
	 * @since readonly
	 */
	public $Status;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsCanceled;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsCompleted;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsCompletedSuccessfully;
	/**
	 * @property
	 * @var \System\Threading\Tasks\TaskCreationOptions
	 * @since readonly
	 */
	public $CreationOptions;
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
	public $IsFaulted;
	private function get_AsyncWaitHandle(){}
	private function get_CompletedSynchronously(){}
}