<?php
namespace System\Threading\Tasks;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ThreadPoolBoundHandleOverlappedOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\Threading\Tasks\TaskScheduler $taskScheduler
	 */
	#[MethodOverride]public function __construct_2 ($taskScheduler){}
	/**
	 * @param \System\Threading\Tasks\TaskScheduler $taskScheduler
	 * @param \System\Int32|int $maxConcurrencyLevel
	 */
	#[MethodOverride]public function __construct_3 ($taskScheduler, $maxConcurrencyLevel){}
	/**
	 * @param \System\Threading\Tasks\TaskScheduler $taskScheduler
	 * @param \System\Int32|int $maxConcurrencyLevel
	 * @param \System\Int32|int $maxItemsPerTask
	 */
	#[MethodOverride]public function __construct_4 ($taskScheduler, $maxConcurrencyLevel, $maxItemsPerTask){}
}
class ConcurrentExclusiveSchedulerPair extends \System\Object
{
	use ThreadPoolBoundHandleOverlappedOverride;

	/**
	 * @property
	 * @var \System\Threading\Tasks\Task
	 * @since readonly
	 */
	public $Completion;
	/**
	 * @property
	 * @var \System\Threading\Tasks\TaskScheduler
	 * @since readonly
	 */
	public $ConcurrentScheduler;
	/**
	 * @property
	 * @var \System\Threading\Tasks\TaskScheduler
	 * @since readonly
	 */
	public $ExclusiveScheduler;
	/**
	 * @return \System\Void|void
	 */
	public function Complete(){}
	private function EnsureCompletionStateInitialized(){}
	private function RequestCompletion(){}
	private function CleanupStateIfCompletingAndQuiesced(){}
	private function CompleteTaskAsync(){}
	private function FaultWithTask($faultedTask){}
	private function ProcessAsyncIfNecessary($fairly){}
	private function TryQueueThreadPoolWorkItem($fairly){}
	private function ProcessExclusiveTasks(){}
	private function ProcessConcurrentTasks(){}
	/**
	 * @param \System\Boolean|bool $isReplacementReplica
	 * @return \System\Threading\Tasks\TaskCreationOptions
	 */
	protected static function GetCreationOptionsForTask($isReplacementReplica){}
	/**
	 * @uses ConcurrentExclusiveSchedulerPairOverride::__construct_1 <br>public , args: ()<br>
	 * @uses ConcurrentExclusiveSchedulerPairOverride::__construct_2 <br>public , args: ($taskScheduler)<br>
	 * @uses ConcurrentExclusiveSchedulerPairOverride::__construct_3 <br>public , args: ($taskScheduler, $maxConcurrencyLevel)<br>
	 * @uses ConcurrentExclusiveSchedulerPairOverride::__construct_4 <br>public , args: ($taskScheduler, $maxConcurrencyLevel, $maxItemsPerTask)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}