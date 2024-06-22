<?php
namespace System\Threading\Tasks;
final class SystemThreadingTasks_FutureDebugView_1 extends \System\Object
{

	/**
	 * @property
	 * @var \TResult
	 * @since readonly
	 */
	public $Result;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $AsyncState;
	/**
	 * @property
	 * @var \System\Threading\Tasks\TaskCreationOptions
	 * @since readonly
	 */
	public $CreationOptions;
	/**
	 * @property
	 * @var \System\Exception
	 * @since readonly
	 */
	public $Exception;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Id;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $CancellationPending;
	/**
	 * @property
	 * @var \System\Threading\Tasks\TaskStatus
	 * @since readonly
	 */
	public $Status;
	/**
	 * @param \System\Threading\Tasks\Task_1 $task [generic: TResult]
	 */
	public function __construct($task){}
}