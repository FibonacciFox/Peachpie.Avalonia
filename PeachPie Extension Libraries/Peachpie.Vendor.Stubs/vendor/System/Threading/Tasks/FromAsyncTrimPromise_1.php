<?php
namespace System\Threading\Tasks;
final class FromAsyncTrimPromise_1 extends \System\Threading\Tasks\Task_1 implements
	\System\IAsyncResult,
	\System\IDisposable
{
	/**
	 * @field
	 * @since readonly
	 * @var \System\AsyncCallback
	 */
	protected static $s_completeFromAsyncResult;
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
	 * @param \System\IAsyncResult $asyncResult
	 * @return \System\Void|void
	 */
	protected static function CompleteFromAsyncResult($asyncResult){}
	/**
	 * @param \TInstance $thisRef
	 * @param \System\Func_3 $endMethod [generic: TInstance,System\IAsyncResult,TResult]
	 * @param \System\IAsyncResult $asyncResult
	 * @param \System\Boolean|bool $requiresSynchronization
	 * @return \System\Void|void
	 */
	protected function Complete($thisRef, $endMethod, $asyncResult, $requiresSynchronization){}
	private function get_AsyncWaitHandle(){}
	private function get_CompletedSynchronously(){}
}