<?php
namespace System\Threading;
final class ThreadPoolWorkQueue extends \System\Object
{

	/**
	 * @field
	 * @since readonly
	 * @var \System\Collections\Concurrent\ConcurrentQueue_1[System\Object]
	 */
	protected $workItems;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Collections\Concurrent\ConcurrentQueue_1[System\Object]
	 */
	protected $highPriorityWorkItems;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Collections\Concurrent\ConcurrentQueue_1[System\Object][]
	 */
	protected $_assignableWorkItemQueues;
	/**
	 * @property
	 * @var \System\Int64|int
	 * @since readonly
	 */
	public $LocalCount;
	/**
	 * @property
	 * @var \System\Int64|int
	 * @since readonly
	 */
	public $GlobalCount;
	private function AssignWorkItemQueue($tl){}
	private function TryReassignWorkItemQueue($tl){}
	private function UnassignWorkItemQueue($tl){}
	/**
	 * @return \System\Threading\ThreadPoolWorkQueueThreadLocals
	 */
	public function GetOrCreateThreadLocals(){}
	private function CreateThreadLocals(){}
	/**
	 * @return \System\Void|void
	 */
	public function RefreshLoggingEnabled(){}
	/**
	 * @return \System\Void|void
	 */
	public function RefreshLoggingEnabledFull(){}
	/**
	 * @return \System\Void|void
	 */
	protected function EnsureThreadRequested(){}
	/**
	 * @return \System\Void|void
	 */
	protected function MarkThreadRequestSatisfied(){}
	/**
	 * @param \System\Object|object $callback
	 * @param \System\Boolean|bool $forceGlobal
	 * @return \System\Void|void
	 */
	public function Enqueue($callback, $forceGlobal){}
	/**
	 * @param \System\Object|object $workItem
	 * @return \System\Void|void
	 */
	public function EnqueueAtHighPriority($workItem){}
	/**
	 * @param \System\Object|object $callback
	 * @return \System\Boolean|bool
	 */
	protected static function LocalFindAndPop($callback){}
	/**
	 * @param \System\Threading\ThreadPoolWorkQueueThreadLocals $tl
	 * @param \System\Boolean& $missedSteal
	 * @return \System\Object|object
	 */
	public function Dequeue($tl, $missedSteal){}
	private function TryStartProcessingHighPriorityWorkItemsAndDequeue($tl, &$workItem){}
	/**
	 * @return \System\Boolean|bool
	 */
	protected static function Dispatch(){}
	private static function DispatchWorkItemWithWorkerTracking($workItem, $currentThread){}
	private static function DispatchWorkItem($workItem, $currentThread){}
	/**
	 */
	public function __construct(){}
}