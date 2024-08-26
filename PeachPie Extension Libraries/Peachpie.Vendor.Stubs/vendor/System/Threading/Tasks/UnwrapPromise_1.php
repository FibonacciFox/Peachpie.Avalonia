<?php
namespace System\Threading\Tasks;
final class UnwrapPromise_1 extends \System\Threading\Tasks\Task_1 implements
	\System\IAsyncResult,
	\System\IDisposable,
	\System\Threading\Tasks\ITaskCompletionAction
{
	/**
	 * @field
	 * @var \TResult
	 */
	protected $m_result;
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
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $InvokeMayRunArbitraryCode;
	/**
	 * @property
	 * @var \TResult
	 * @since readonly
	 */
	public $Result;
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
	/**
	 * @param \System\Threading\Tasks\Task $completingTask
	 * @return \System\Void|void
	 */
	public function Invoke($completingTask){}
	private function InvokeCore($completingTask){}
	private function InvokeCoreAsync($completingTask){}
	private function ProcessCompletedOuterTask($task){}
	private function TrySetFromTask($task, $lookForOce){}
	private function ProcessInnerTask($task){}
	private function get_AsyncWaitHandle(){}
	private function get_CompletedSynchronously(){}
	/**
	 * @param \System\Threading\Tasks\Task $outerTask
	 * @param \System\Boolean|bool $lookForOce
	 */
	public function __construct($outerTask, $lookForOce){}
}