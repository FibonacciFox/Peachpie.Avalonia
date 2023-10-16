<?php
namespace System\Threading\Tasks;
/**
 */
class ConcurrentExclusiveSchedulerPair extends \System\Object
{
	/**
	 * @var \System\Threading\Tasks\Task
	 * @property
	 */
	public readonly $Completion;
	/**
	 * @var \System\Threading\Tasks\TaskScheduler
	 * @property
	 */
	public readonly $ConcurrentScheduler;
	/**
	 * @var \System\Threading\Tasks\TaskScheduler
	 * @property
	 */
	public readonly $ExclusiveScheduler;
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_DefaultMaxConcurrencyLevel(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_ValueLock(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Complete(){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	public  function get_Completion(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function EnsureCompletionStateInitialized(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_CompletionRequested(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function RequestCompletion(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CleanupStateIfCompletingAndQuiesced(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_ReadyToComplete(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CompleteTaskAsync(){}
	/**
	 * @param \System\Threading\Tasks\Task $faultedTask
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function FaultWithTask($faultedTask){}
	/**
	 * @return \System\Threading\Tasks\TaskScheduler
	 */
	public  function get_ConcurrentScheduler(){}
	/**
	 * @return \System\Threading\Tasks\TaskScheduler
	 */
	public  function get_ExclusiveScheduler(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_ConcurrentTaskCountForDebugger(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_ExclusiveTaskCountForDebugger(){}
	/**
	 * @param \System\Boolean $fairly
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ProcessAsyncIfNecessary($fairly){}
	/**
	 * @param \System\Boolean $fairly
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryQueueThreadPoolWorkItem($fairly){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ProcessExclusiveTasks(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ProcessConcurrentTasks(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_ModeForDebugger(){}
	/**
	 * @param \System\Boolean $isReplacementReplica
	 * @return \System\Threading\Tasks\TaskCreationOptions
	 */
	protected static function GetCreationOptionsForTask($isReplacementReplica){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
