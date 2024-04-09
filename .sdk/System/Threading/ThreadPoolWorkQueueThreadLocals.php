<?php
namespace System\Threading;
final class ThreadPoolWorkQueueThreadLocals extends \System\Object
{
	/**
	 * @field
	 * @var \System\Boolean|bool
	 */
	public $isProcessingHighPriorityWorkItems;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	public $queueIndex;
	/**
	 * @field
	 * @var \System\Collections\Concurrent\ConcurrentQueue_1[System\Object]
	 */
	public $assignedGlobalWorkItemQueue;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Threading\ThreadPoolWorkQueue
	 */
	public $workQueue;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Threading\ThreadPoolWorkQueue+WorkStealingQueue
	 */
	public $workStealingQueue;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Threading\Thread
	 */
	public $currentThread;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Object|object
	 */
	public $threadLocalCompletionCountObject;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Random+XoshiroImpl
	 */
	public $random;
	/**
	 * @field
	 * @var \System\Threading\ThreadPoolWorkQueueThreadLocals
	 */
	public static $threadLocals;
	/**
	 * @return \System\Void|void
	 */
	public function TransferLocalWork(){}
	/**
	 * @param \System\Threading\ThreadPoolWorkQueue $tpq
	 */
	public function __construct($tpq){}
}