<?php
namespace System\Threading;
/**
 */
class ThreadPoolWorkQueue extends \System\Object
{
	/**
	 * @var \System\Collections\Concurrent\ConcurrentQueue_1[System\Object]
	 * @field
	 */
	protected readonly $workItems;
	/**
	 * @var \System\Collections\Concurrent\ConcurrentQueue_1[System\Object]
	 * @field
	 */
	protected readonly $highPriorityWorkItems;
	/**
	 * @var \System\Collections\Concurrent\ConcurrentQueue_1[System\Object][]
	 * @field
	 */
	protected readonly $_assignableWorkItemQueues;
	/**
	 * @var \System\Int64
	 * @property
	 */
	public readonly $LocalCount;
	/**
	 * @var \System\Int64
	 * @property
	 */
	public readonly $GlobalCount;
	/**
	 * @param \System\Threading\ThreadPoolWorkQueueThreadLocals $tl
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AssignWorkItemQueue($tl){}
	/**
	 * @param \System\Threading\ThreadPoolWorkQueueThreadLocals $tl
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryReassignWorkItemQueue($tl){}
	/**
	 * @param \System\Threading\ThreadPoolWorkQueueThreadLocals $tl
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function UnassignWorkItemQueue($tl){}
	/**
	 * @return \System\Threading\ThreadPoolWorkQueueThreadLocals
	 */
	public  function GetOrCreateThreadLocals(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CreateThreadLocals(){}
	/**
	 * @return \System\Void|void
	 */
	public  function RefreshLoggingEnabled(){}
	/**
	 * @return \System\Void|void
	 */
	public  function RefreshLoggingEnabledFull(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function EnsureThreadRequested(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function MarkThreadRequestSatisfied(){}
	/**
	 * @param \System\Object|object $callback
	 * @param \System\Boolean $forceGlobal
	 * @return \System\Void|void
	 */
	public  function Enqueue($callback, $forceGlobal){}
	/**
	 * @param \System\Object|object $workItem
	 * @return \System\Void|void
	 */
	public  function EnqueueAtHighPriority($workItem){}
	/**
	 * @param \System\Object|object $callback
	 * @return \System\Boolean
	 */
	protected static function LocalFindAndPop($callback){}
	/**
	 * @param \System\Threading\ThreadPoolWorkQueueThreadLocals $tl
	 * @param \System\Boolean& $missedSteal
	 * @return \System\Object|object
	 */
	public  function Dequeue($tl, $missedSteal){}
	/**
	 * @param \System\Threading\ThreadPoolWorkQueueThreadLocals $tl
	 * @param \System\Object& $workItem
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryStartProcessingHighPriorityWorkItemsAndDequeue($tl, $workItem){}
	/**
	 * @return \System\Int64|int
	 */
	public static function get_LocalCount(){}
	/**
	 * @return \System\Int64|int
	 */
	public  function get_GlobalCount(){}
	/**
	 * @return \System\Boolean
	 */
	protected static function Dispatch(){}
	/**
	 * @param \System\Object|object $workItem
	 * @param \System\Threading\Thread $currentThread
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function DispatchWorkItemWithWorkerTracking($workItem, $currentThread){}
	/**
	 * @param \System\Object|object $workItem
	 * @param \System\Threading\Thread $currentThread
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function DispatchWorkItem($workItem, $currentThread){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
