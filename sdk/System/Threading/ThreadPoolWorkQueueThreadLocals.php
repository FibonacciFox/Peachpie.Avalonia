<?php
namespace System\Threading;
/**
 */
class ThreadPoolWorkQueueThreadLocals extends \System\Object
{
	/**
	 * @var \System\Boolean
	 * @field
	 */
	public $isProcessingHighPriorityWorkItems;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $queueIndex;
	/**
	 * @var \System\Collections\Concurrent\ConcurrentQueue_1[System\Object]
	 * @field
	 */
	public $assignedGlobalWorkItemQueue;
	/**
	 * @var \System\Threading\ThreadPoolWorkQueue
	 * @field
	 */
	public readonly $workQueue;
	/**
	 * @var \System\Threading\ThreadPoolWorkQueue+WorkStealingQueue
	 * @field
	 */
	public readonly $workStealingQueue;
	/**
	 * @var \System\Threading\Thread
	 * @field
	 */
	public readonly $currentThread;
	/**
	 * @var \System\Object
	 * @field
	 */
	public readonly $threadLocalCompletionCountObject;
	/**
	 * @var \System\Random+XoshiroImpl
	 * @field
	 */
	public readonly $random;
	/**
	 * @var \System\Threading\ThreadPoolWorkQueueThreadLocals
	 * @field
	 */
	public $threadLocals;
	/**
	 * @return \System\Void|void
	 */
	public  function TransferLocalWork(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
