<?php
namespace System\Threading\Tasks;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait TaskMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected  function AtomicStateUpdate_1($newBits, $illegalBits){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected  function AtomicStateUpdate_2($newBits, $illegalBits, $oldFlags){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Start_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Start_2($scheduler){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function RunSynchronously_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function RunSynchronously_2($scheduler){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Dispose_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Dispose_2($disposing){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function AddException_1($exceptionObject){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function AddException_2($exceptionObject, $representsCancellation){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Wait_1(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Wait_2($timeout){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Wait_3($timeout, $cancellationToken){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Wait_4($cancellationToken){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Wait_5($millisecondsTimeout){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Wait_6($millisecondsTimeout, $cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function WaitAsync_1($cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function WaitAsync_2($timeout){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function WaitAsync_3($timeout, $cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] private  function WaitAsync_4($millisecondsTimeout, $cancellationToken){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function RecordInternalCancellationRequest_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function RecordInternalCancellationRequest_2($tokenToRecord, $cancellationException){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected  function TrySetCanceled_1($tokenToRecord){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected  function TrySetCanceled_2($tokenToRecord, $cancellationException){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function ContinueWith_1($continuationAction){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function ContinueWith_2($continuationAction, $cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function ContinueWith_3($continuationAction, $scheduler){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function ContinueWith_4($continuationAction, $continuationOptions){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function ContinueWith_5($continuationAction, $cancellationToken, $continuationOptions, $scheduler){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] private  function ContinueWith_6($continuationAction, $scheduler, $cancellationToken, $continuationOptions){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function ContinueWith_7($continuationAction, $state){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function ContinueWith_8($continuationAction, $state, $cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function ContinueWith_9($continuationAction, $state, $scheduler){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function ContinueWith_10($continuationAction, $state, $continuationOptions){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function ContinueWith_11($continuationAction, $state, $cancellationToken, $continuationOptions, $scheduler){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] private  function ContinueWith_12($continuationAction, $state, $scheduler, $cancellationToken, $continuationOptions){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function ContinueWith_13($continuationFunction){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function ContinueWith_14($continuationFunction, $cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function ContinueWith_15($continuationFunction, $scheduler){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function ContinueWith_16($continuationFunction, $continuationOptions){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function ContinueWith_17($continuationFunction, $cancellationToken, $continuationOptions, $scheduler){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] private  function ContinueWith_18($continuationFunction, $scheduler, $cancellationToken, $continuationOptions){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function ContinueWith_19($continuationFunction, $state){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function ContinueWith_20($continuationFunction, $state, $cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function ContinueWith_21($continuationFunction, $state, $scheduler){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function ContinueWith_22($continuationFunction, $state, $continuationOptions){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function ContinueWith_23($continuationFunction, $state, $cancellationToken, $continuationOptions, $scheduler){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] private  function ContinueWith_24($continuationFunction, $state, $scheduler, $cancellationToken, $continuationOptions){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function WaitAll_1($tasks){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function WaitAll_2($tasks, $timeout){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function WaitAll_3($tasks, $millisecondsTimeout){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function WaitAll_4($tasks, $cancellationToken){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function WaitAll_5($tasks, $millisecondsTimeout, $cancellationToken){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function WaitAny_1($tasks){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function WaitAny_2($tasks, $timeout){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function WaitAny_3($tasks, $cancellationToken){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function WaitAny_4($tasks, $millisecondsTimeout){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function WaitAny_5($tasks, $millisecondsTimeout, $cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public static function FromException_1($exception){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public static function FromException_2($exception){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public static function FromCanceled_1($cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public static function FromCanceled_2($cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] protected static function FromCanceled_3($exception){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] protected static function FromCanceled_4($exception){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public static function Run_1($action){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public static function Run_2($action, $cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public static function Run_3($function){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public static function Run_4($function, $cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public static function Run_5($function){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public static function Run_6($function, $cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public static function Run_7($function){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public static function Run_8($function, $cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public static function Delay_1($delay){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public static function Delay_2($delay, $cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public static function Delay_3($millisecondsDelay){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public static function Delay_4($millisecondsDelay, $cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] private static function Delay_5($millisecondsDelay, $cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public static function WhenAll_1($tasks){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public static function WhenAll_2($tasks){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public static function WhenAll_3($tasks){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public static function WhenAll_4($tasks){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] private static function InternalWhenAll_1($tasks){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] private static function InternalWhenAll_2($tasks){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public static function WhenAny_1($tasks){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public static function WhenAny_2($task1, $task2){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public static function WhenAny_3($tasks){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public static function WhenAny_4($tasks){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public static function WhenAny_5($task1, $task2){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public static function WhenAny_6($tasks){}
}
/**
 */
class Task extends \System\Object implements 
	\System\IAsyncResult,
	\System\IDisposable
{
	/**
	 * @var \System\Delegate
	 * @field
	 */
	protected $m_action;
	/**
	 * @var \System\Object
	 * @field
	 */
	protected $m_stateObject;
	/**
	 * @var \System\Threading\Tasks\TaskScheduler
	 * @field
	 */
	protected $m_taskScheduler;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $m_stateFlags;
	/**
	 * @var \System\Threading\Tasks\Task+ContingentProperties
	 * @field
	 */
	protected $m_contingentProperties;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $s_taskIdCounter;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	protected $s_asyncDebuggingEnabled;
	/**
	 * @var \System\Threading\Tasks\Task_1[System\Threading\Tasks\VoidTaskResult]
	 * @field
	 */
	protected readonly $s_cachedCompleted;
	/**
	 * @var \System\Threading\Tasks\Task
	 * @field
	 */
	protected $t_currentTask;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Id;
	/**
	 * @var \System\Nullable_1[System\Int32]
	 * @property
	 */
	public readonly $CurrentId;
	/**
	 * @var \System\AggregateException
	 * @property
	 */
	public readonly $Exception;
	/**
	 * @var \System\Threading\Tasks\TaskStatus
	 * @property
	 */
	public readonly $Status;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsCanceled;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsCompleted;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsCompletedSuccessfully;
	/**
	 * @var \System\Threading\Tasks\TaskCreationOptions
	 * @property
	 */
	public readonly $CreationOptions;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $AsyncState;
	/**
	 * @var \System\Threading\Tasks\TaskFactory
	 * @property
	 */
	public readonly $Factory;
	/**
	 * @var \System\Threading\Tasks\Task
	 * @property
	 */
	public readonly $CompletedTask;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsFaulted;
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_ParentForDebugger(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_StateFlagsForDebugger(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_StateFlags(){}
	/**
	 * @param \System\Threading\Tasks\Task $task
	 * @return \System\Boolean
	 */
	protected static function AddToActiveTasks($task){}
	/**
	 * @param \System\Threading\Tasks\Task $task
	 * @return \System\Void|void
	 */
	protected static function RemoveFromActiveTasks($task){}
	/**
	 * @param \System\Delegate $action
	 * @param \System\Object|object $state
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @param \System\Threading\Tasks\TaskCreationOptions $creationOptions
	 * @param \System\Threading\Tasks\InternalTaskOptions $internalOptions
	 * @param \System\Threading\Tasks\TaskScheduler $scheduler
	 * @return \System\Void|void
	 */
	protected  function TaskConstructorCore($action, $state, $cancellationToken, $creationOptions, $internalOptions, $scheduler){}
	/**
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @param \System\Threading\Tasks\Task $antecedent
	 * @param \System\Threading\Tasks\TaskContinuation $continuation
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AssignCancellationToken($cancellationToken, $antecedent, $continuation){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_DebuggerDisplayMethodDescription(){}
	/**
	 * @return \System\Threading\Tasks\TaskCreationOptions
	 */
	protected  function get_Options(){}
	/**
	 * @param \System\Int32|int $flags
	 * @return \System\Threading\Tasks\TaskCreationOptions
	 */
	protected static function OptionsMethod($flags){}
	/**
	 * @uses TaskMethodsOverride::AtomicStateUpdate_1 ($newBits, $illegalBits)
	 * @uses TaskMethodsOverride::AtomicStateUpdate_2 ($newBits, $illegalBits, $oldFlags)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AtomicStateUpdate(mixed ...$args){}
	/**
	 * @param \System\Int32|int $newBits
	 * @param \System\Int32|int $illegalBits
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AtomicStateUpdateSlow($newBits, $illegalBits){}
	/**
	 * @param \System\Boolean $enabled
	 * @return \System\Void|void
	 */
	protected  function SetNotificationForWaitCompletion($enabled){}
	/**
	 * @return \System\Boolean
	 */
	protected  function NotifyDebuggerOfWaitCompletionIfNecessary(){}
	/**
	 * @param \System\Threading\Tasks\Task[] $tasks
	 * @return \System\Boolean
	 */
	protected static function AnyTaskRequiresNotifyDebuggerOfWaitCompletion($tasks){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_IsWaitNotificationEnabledOrNotRanToCompletion(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_ShouldNotifyDebuggerOfWaitCompletion(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_IsWaitNotificationEnabled(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function NotifyDebuggerOfWaitCompletion(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function MarkStarted(){}
	/**
	 * @param \System\Threading\Tasks\TaskScheduler $ts
	 * @return \System\Void|void
	 */
	protected  function FireTaskScheduledIfNeeded($ts){}
	/**
	 * @return \System\Void|void
	 */
	protected  function AddNewChild(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function DisregardChild(){}
	/**
	 * @uses TaskMethodsOverride::Start_1 ()
	 * @uses TaskMethodsOverride::Start_2 ($scheduler)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Start(mixed ...$args){}
	/**
	 * @uses TaskMethodsOverride::RunSynchronously_1 ()
	 * @uses TaskMethodsOverride::RunSynchronously_2 ($scheduler)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RunSynchronously(mixed ...$args){}
	/**
	 * @param \System\Threading\Tasks\TaskScheduler $scheduler
	 * @param \System\Boolean $waitForCompletion
	 * @return \System\Void|void
	 */
	protected  function InternalRunSynchronously($scheduler, $waitForCompletion){}
	/**
	 * @param \System\Threading\Tasks\Task $creatingTask
	 * @param \System\Delegate $action
	 * @param \System\Object|object $state
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @param \System\Threading\Tasks\TaskScheduler $scheduler
	 * @param \System\Threading\Tasks\TaskCreationOptions $options
	 * @param \System\Threading\Tasks\InternalTaskOptions $internalOptions
	 * @return \System\Threading\Tasks\Task
	 */
	protected static function InternalStartNew($creatingTask, $action, $state, $cancellationToken, $scheduler, $options, $internalOptions){}
	/**
	 * @return \System\Int32|int
	 */
	protected static function NewId(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Id(){}
	/**
	 * @return \System\Nullable_1
	 */
	public static function get_CurrentId(){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	protected static function get_InternalCurrent(){}
	/**
	 * @param \System\Threading\Tasks\TaskCreationOptions $creationOptions
	 * @return \System\Threading\Tasks\Task
	 */
	protected static function InternalCurrentIfAttached($creationOptions){}
	/**
	 * @return \System\AggregateException
	 */
	public  function get_Exception(){}
	/**
	 * @return \System\Threading\Tasks\TaskStatus
	 */
	public  function get_Status(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsCanceled(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_IsCancellationRequested(){}
	/**
	 * @return \System\Threading\Tasks\ContingentProperties
	 */
	protected  function EnsureContingentPropertiesInitialized(){}
	/**
	 * @return \System\Threading\Tasks\ContingentProperties
	 */
	protected  function EnsureContingentPropertiesInitializedUnsafe(){}
	/**
	 * @return \System\Threading\CancellationToken
	 */
	protected  function get_CancellationToken(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_IsCancellationAcknowledged(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsCompleted(){}
	/**
	 * @param \System\Int32|int $flags
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsCompletedMethod($flags){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsCompletedSuccessfully(){}
	/**
	 * @return \System\Threading\Tasks\TaskCreationOptions
	 */
	public  function get_CreationOptions(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function SpinUntilCompleted(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_AsyncWaitHandle(){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_AsyncState(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_CompletedSynchronously(){}
	/**
	 * @return \System\Threading\Tasks\TaskScheduler
	 */
	protected  function get_ExecutingTaskScheduler(){}
	/**
	 * @return \System\Threading\Tasks\TaskFactory
	 */
	public static function get_Factory(){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	public static function get_CompletedTask(){}
	/**
	 * @return \System\Threading\ManualResetEventSlim
	 */
	protected  function get_CompletedEvent(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_ExceptionRecorded(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsFaulted(){}
	/**
	 * @return \System\Threading\ExecutionContext
	 */
	protected  function get_CapturedContext(){}
	/**
	 * @param \System\Threading\ExecutionContext $value
	 * @return \System\Void|void
	 */
	protected  function set_CapturedContext($value){}
	/**
	 * @uses TaskMethodsOverride::Dispose_1 ()
	 * @uses TaskMethodsOverride::Dispose_2 ($disposing)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @param \System\Boolean $needsProtection
	 * @return \System\Void|void
	 */
	protected  function ScheduleAndStart($needsProtection){}
	/**
	 * @uses TaskMethodsOverride::AddException_1 ($exceptionObject)
	 * @uses TaskMethodsOverride::AddException_2 ($exceptionObject, $representsCancellation)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddException(mixed ...$args){}
	/**
	 * @param \System\Boolean $includeTaskCanceledExceptions
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetExceptions($includeTaskCanceledExceptions){}
	/**
	 * @return \System\Collections\Generic\List_1
	 */
	protected  function GetExceptionDispatchInfos(){}
	/**
	 * @return \System\Runtime\ExceptionServices\ExceptionDispatchInfo
	 */
	protected  function GetCancellationExceptionDispatchInfo(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function MarkExceptionsAsHandled(){}
	/**
	 * @param \System\Boolean $includeTaskCanceledExceptions
	 * @return \System\Void|void
	 */
	protected  function ThrowIfExceptional($includeTaskCanceledExceptions){}
	/**
	 * @param \System\Exception $exception
	 * @param \System\Threading\SynchronizationContext $targetContext
	 * @return \System\Void|void
	 */
	protected static function ThrowAsync($exception, $targetContext){}
	/**
	 * @return \System\Void|void
	 */
	protected  function UpdateExceptionObservedStatus(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_IsExceptionObservedByParent(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_IsDelegateInvoked(){}
	/**
	 * @param \System\Boolean $userDelegateExecute
	 * @return \System\Void|void
	 */
	protected  function Finish($userDelegateExecute){}
	/**
	 * @param \System\Boolean $userDelegateExecute
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function FinishSlow($userDelegateExecute){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function FinishStageTwo(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function FinishStageThree(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function NotifyParentIfPotentiallyAttachedTask(){}
	/**
	 * @param \System\Threading\Tasks\Task $childTask
	 * @return \System\Void|void
	 */
	protected  function ProcessChildCompletion($childTask){}
	/**
	 * @param \System\Threading\Tasks\ContingentProperties $props
	 * @return \System\Void|void
	 */
	protected  function AddExceptionsFromChildren($props){}
	/**
	 * @return \System\Boolean
	 */
	protected  function ExecuteEntry(){}
	/**
	 * @param \System\Threading\Thread $threadPoolThread
	 * @return \System\Void|void
	 */
	protected  function ExecuteFromThreadPool($threadPoolThread){}
	/**
	 * @param \System\Threading\Thread $threadPoolThread
	 * @return \System\Void|void
	 */
	protected  function ExecuteEntryUnsafe($threadPoolThread){}
	/**
	 * @return \System\Void|void
	 */
	protected  function ExecuteEntryCancellationRequestedOrCanceled(){}
	/**
	 * @param \System\Threading\Tasks\Task& $currentTaskSlot
	 * @param \System\Threading\Thread $threadPoolThread
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ExecuteWithThreadLocal($currentTaskSlot, $threadPoolThread){}
	/**
	 * @return \System\Void|void
	 */
	protected  function InnerInvoke(){}
	/**
	 * @param \System\Exception $unhandledException
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function HandleException($unhandledException){}
	/**
	 * @return \System\Runtime\CompilerServices\TaskAwaiter
	 */
	public  function GetAwaiter(){}
	/**
	 * @param \System\Boolean $continueOnCapturedContext
	 * @return \System\Runtime\CompilerServices\ConfiguredTaskAwaitable
	 */
	public  function ConfigureAwait($continueOnCapturedContext){}
	/**
	 * @param \System\Action $continuationAction
	 * @param \System\Boolean $continueOnCapturedContext
	 * @param \System\Boolean $flowExecutionContext
	 * @return \System\Void|void
	 */
	protected  function SetContinuationForAwait($continuationAction, $continueOnCapturedContext, $flowExecutionContext){}
	/**
	 * @param \System\Runtime\CompilerServices\IAsyncStateMachineBox $stateMachineBox
	 * @param \System\Boolean $continueOnCapturedContext
	 * @return \System\Void|void
	 */
	protected  function UnsafeSetContinuationForAwait($stateMachineBox, $continueOnCapturedContext){}
	/**
	 * @return \System\Runtime\CompilerServices\YieldAwaitable
	 */
	public static function Yield(){}
	/**
	 * @uses TaskMethodsOverride::Wait_1 ()
	 * @uses TaskMethodsOverride::Wait_2 ($timeout)
	 * @uses TaskMethodsOverride::Wait_3 ($timeout, $cancellationToken)
	 * @uses TaskMethodsOverride::Wait_4 ($cancellationToken)
	 * @uses TaskMethodsOverride::Wait_5 ($millisecondsTimeout)
	 * @uses TaskMethodsOverride::Wait_6 ($millisecondsTimeout, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Wait(mixed ...$args){}
	/**
	 * @uses TaskMethodsOverride::WaitAsync_1 ($cancellationToken)
	 * @uses TaskMethodsOverride::WaitAsync_2 ($timeout)
	 * @uses TaskMethodsOverride::WaitAsync_3 ($timeout, $cancellationToken)
	 * @uses TaskMethodsOverride::WaitAsync_4 ($millisecondsTimeout, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function WaitAsync(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function WrappedTryRunInline(){}
	/**
	 * @param \System\Int32|int $millisecondsTimeout
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Boolean
	 */
	protected  function InternalWait($millisecondsTimeout, $cancellationToken){}
	/**
	 * @param \System\Int32|int $millisecondsTimeout
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InternalWaitCore($millisecondsTimeout, $cancellationToken){}
	/**
	 * @param \System\Int32|int $millisecondsTimeout
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SpinThenBlockingWait($millisecondsTimeout, $cancellationToken){}
	/**
	 * @param \System\Int32|int $millisecondsTimeout
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SpinWait($millisecondsTimeout){}
	/**
	 * @return \System\Void|void
	 */
	protected  function InternalCancel(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function InternalCancelContinueWithInitialState(){}
	/**
	 * @uses TaskMethodsOverride::RecordInternalCancellationRequest_1 ()
	 * @uses TaskMethodsOverride::RecordInternalCancellationRequest_2 ($tokenToRecord, $cancellationException)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RecordInternalCancellationRequest(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	protected  function CancellationCleanupLogic(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetCancellationAcknowledged(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function TrySetResult(){}
	/**
	 * @param \System\Object|object $exceptionObject
	 * @return \System\Boolean
	 */
	protected  function TrySetException($exceptionObject){}
	/**
	 * @uses TaskMethodsOverride::TrySetCanceled_1 ($tokenToRecord)
	 * @uses TaskMethodsOverride::TrySetCanceled_2 ($tokenToRecord, $cancellationException)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function TrySetCanceled(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	protected  function FinishContinuations(){}
	/**
	 * @param \System\Object|object $continuationObject
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function RunContinuations($continuationObject){}
	/**
	 * @param \System\Threading\Tasks\ITaskCompletionAction $completionAction
	 * @param \System\Boolean $allowInlining
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function RunOrQueueCompletionAction($completionAction, $allowInlining){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function LogFinishCompletionNotification(){}
	/**
	 * @uses TaskMethodsOverride::ContinueWith_1 ($continuationAction)
	 * @uses TaskMethodsOverride::ContinueWith_2 ($continuationAction, $cancellationToken)
	 * @uses TaskMethodsOverride::ContinueWith_3 ($continuationAction, $scheduler)
	 * @uses TaskMethodsOverride::ContinueWith_4 ($continuationAction, $continuationOptions)
	 * @uses TaskMethodsOverride::ContinueWith_5 ($continuationAction, $cancellationToken, $continuationOptions, $scheduler)
	 * @uses TaskMethodsOverride::ContinueWith_6 ($continuationAction, $scheduler, $cancellationToken, $continuationOptions)
	 * @uses TaskMethodsOverride::ContinueWith_7 ($continuationAction, $state)
	 * @uses TaskMethodsOverride::ContinueWith_8 ($continuationAction, $state, $cancellationToken)
	 * @uses TaskMethodsOverride::ContinueWith_9 ($continuationAction, $state, $scheduler)
	 * @uses TaskMethodsOverride::ContinueWith_10 ($continuationAction, $state, $continuationOptions)
	 * @uses TaskMethodsOverride::ContinueWith_11 ($continuationAction, $state, $cancellationToken, $continuationOptions, $scheduler)
	 * @uses TaskMethodsOverride::ContinueWith_12 ($continuationAction, $state, $scheduler, $cancellationToken, $continuationOptions)
	 * @uses TaskMethodsOverride::ContinueWith_13 ($continuationFunction)
	 * @uses TaskMethodsOverride::ContinueWith_14 ($continuationFunction, $cancellationToken)
	 * @uses TaskMethodsOverride::ContinueWith_15 ($continuationFunction, $scheduler)
	 * @uses TaskMethodsOverride::ContinueWith_16 ($continuationFunction, $continuationOptions)
	 * @uses TaskMethodsOverride::ContinueWith_17 ($continuationFunction, $cancellationToken, $continuationOptions, $scheduler)
	 * @uses TaskMethodsOverride::ContinueWith_18 ($continuationFunction, $scheduler, $cancellationToken, $continuationOptions)
	 * @uses TaskMethodsOverride::ContinueWith_19 ($continuationFunction, $state)
	 * @uses TaskMethodsOverride::ContinueWith_20 ($continuationFunction, $state, $cancellationToken)
	 * @uses TaskMethodsOverride::ContinueWith_21 ($continuationFunction, $state, $scheduler)
	 * @uses TaskMethodsOverride::ContinueWith_22 ($continuationFunction, $state, $continuationOptions)
	 * @uses TaskMethodsOverride::ContinueWith_23 ($continuationFunction, $state, $cancellationToken, $continuationOptions, $scheduler)
	 * @uses TaskMethodsOverride::ContinueWith_24 ($continuationFunction, $state, $scheduler, $cancellationToken, $continuationOptions)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ContinueWith(mixed ...$args){}
	/**
	 * @param \System\Threading\Tasks\TaskContinuationOptions $continuationOptions
	 * @param \System\Threading\Tasks\TaskCreationOptions& $creationOptions
	 * @param \System\Threading\Tasks\InternalTaskOptions& $internalOptions
	 * @return \System\Void|void
	 */
	protected static function CreationOptionsFromContinuationOptions($continuationOptions, $creationOptions, $internalOptions){}
	/**
	 * @param \System\Threading\Tasks\Task $continuationTask
	 * @param \System\Threading\Tasks\TaskScheduler $scheduler
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @param \System\Threading\Tasks\TaskContinuationOptions $options
	 * @return \System\Void|void
	 */
	protected  function ContinueWithCore($continuationTask, $scheduler, $cancellationToken, $options){}
	/**
	 * @param \System\Threading\Tasks\ITaskCompletionAction $action
	 * @param \System\Boolean $addBeforeOthers
	 * @return \System\Void|void
	 */
	protected  function AddCompletionAction($action, $addBeforeOthers){}
	/**
	 * @param \System\Object|object $tc
	 * @param \System\Boolean $addBeforeOthers
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AddTaskContinuationComplex($tc, $addBeforeOthers){}
	/**
	 * @param \System\Object|object $tc
	 * @param \System\Boolean $addBeforeOthers
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AddTaskContinuation($tc, $addBeforeOthers){}
	/**
	 * @param \System\Object|object $continuationObject
	 * @return \System\Void|void
	 */
	protected  function RemoveContinuation($continuationObject){}
	/**
	 * @uses TaskMethodsOverride::WaitAll_1 ($tasks)
	 * @uses TaskMethodsOverride::WaitAll_2 ($tasks, $timeout)
	 * @uses TaskMethodsOverride::WaitAll_3 ($tasks, $millisecondsTimeout)
	 * @uses TaskMethodsOverride::WaitAll_4 ($tasks, $cancellationToken)
	 * @uses TaskMethodsOverride::WaitAll_5 ($tasks, $millisecondsTimeout, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function WaitAll(mixed ...$args){}
	/**
	 * @param \System\Threading\Tasks\Task[] $tasks
	 * @param \System\Int32|int $millisecondsTimeout
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function WaitAllCore($tasks, $millisecondsTimeout, $cancellationToken){}
	/**
	 * @param \System\Threading\Tasks\T $item
	 * @param \System\Collections\Generic\List_1& $list
	 * @param \System\Int32|int $initSize
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function AddToList($item, $list, $initSize){}
	/**
	 * @param \System\Collections\Generic\List_1 $tasks
	 * @param \System\Int32|int $millisecondsTimeout
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function WaitAllBlockingCore($tasks, $millisecondsTimeout, $cancellationToken){}
	/**
	 * @param \System\Collections\Generic\List_1& $exceptions
	 * @param \System\Threading\Tasks\Task $t
	 * @return \System\Void|void
	 */
	protected static function AddExceptionsForCompletedTask($exceptions, $t){}
	/**
	 * @uses TaskMethodsOverride::WaitAny_1 ($tasks)
	 * @uses TaskMethodsOverride::WaitAny_2 ($tasks, $timeout)
	 * @uses TaskMethodsOverride::WaitAny_3 ($tasks, $cancellationToken)
	 * @uses TaskMethodsOverride::WaitAny_4 ($tasks, $millisecondsTimeout)
	 * @uses TaskMethodsOverride::WaitAny_5 ($tasks, $millisecondsTimeout, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function WaitAny(mixed ...$args){}
	/**
	 * @param \System\Threading\Tasks\Task[] $tasks
	 * @param \System\Int32|int $millisecondsTimeout
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function WaitAnyCore($tasks, $millisecondsTimeout, $cancellationToken){}
	/**
	 * @param \System\Threading\Tasks\TResult $result
	 * @return \System\Threading\Tasks\Task_1
	 */
	public static function FromResult($result){}
	/**
	 * @uses TaskMethodsOverride::FromException_1 ($exception)
	 * @uses TaskMethodsOverride::FromException_2 ($exception)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function FromException(mixed ...$args){}
	/**
	 * @uses TaskMethodsOverride::FromCanceled_1 ($cancellationToken)
	 * @uses TaskMethodsOverride::FromCanceled_2 ($cancellationToken)
	 * @uses TaskMethodsOverride::FromCanceled_3 ($exception)
	 * @uses TaskMethodsOverride::FromCanceled_4 ($exception)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function FromCanceled(mixed ...$args){}
	/**
	 * @uses TaskMethodsOverride::Run_1 ($action)
	 * @uses TaskMethodsOverride::Run_2 ($action, $cancellationToken)
	 * @uses TaskMethodsOverride::Run_3 ($function)
	 * @uses TaskMethodsOverride::Run_4 ($function, $cancellationToken)
	 * @uses TaskMethodsOverride::Run_5 ($function)
	 * @uses TaskMethodsOverride::Run_6 ($function, $cancellationToken)
	 * @uses TaskMethodsOverride::Run_7 ($function)
	 * @uses TaskMethodsOverride::Run_8 ($function, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Run(mixed ...$args){}
	/**
	 * @uses TaskMethodsOverride::Delay_1 ($delay)
	 * @uses TaskMethodsOverride::Delay_2 ($delay, $cancellationToken)
	 * @uses TaskMethodsOverride::Delay_3 ($millisecondsDelay)
	 * @uses TaskMethodsOverride::Delay_4 ($millisecondsDelay, $cancellationToken)
	 * @uses TaskMethodsOverride::Delay_5 ($millisecondsDelay, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Delay(mixed ...$args){}
	/**
	 * @param \System\TimeSpan $timeout
	 * @param \System\ExceptionArgument $argument
	 * @return \System\UInt32
	 */
	protected static function ValidateTimeout($timeout, $argument){}
	/**
	 * @uses TaskMethodsOverride::WhenAll_1 ($tasks)
	 * @uses TaskMethodsOverride::WhenAll_2 ($tasks)
	 * @uses TaskMethodsOverride::WhenAll_3 ($tasks)
	 * @uses TaskMethodsOverride::WhenAll_4 ($tasks)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function WhenAll(mixed ...$args){}
	/**
	 * @uses TaskMethodsOverride::InternalWhenAll_1 ($tasks)
	 * @uses TaskMethodsOverride::InternalWhenAll_2 ($tasks)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function InternalWhenAll(mixed ...$args){}
	/**
	 * @uses TaskMethodsOverride::WhenAny_1 ($tasks)
	 * @uses TaskMethodsOverride::WhenAny_2 ($task1, $task2)
	 * @uses TaskMethodsOverride::WhenAny_3 ($tasks)
	 * @uses TaskMethodsOverride::WhenAny_4 ($tasks)
	 * @uses TaskMethodsOverride::WhenAny_5 ($task1, $task2)
	 * @uses TaskMethodsOverride::WhenAny_6 ($tasks)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function WhenAny(mixed ...$args){}
	/**
	 * @param \System\Threading\Tasks\Task $outerTask
	 * @param \System\Boolean $lookForOce
	 * @return \System\Threading\Tasks\Task_1
	 */
	protected static function CreateUnwrapPromise($outerTask, $lookForOce){}
	/**
	 * @return \System\Delegate[]
	 */
	protected  function GetDelegateContinuationsForDebugger(){}
	/**
	 * @param \System\Object|object $continuationObject
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetDelegatesFromContinuationObject($continuationObject){}
	/**
	 * @param \System\Int32|int $taskId
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetActiveTaskFromId($taskId){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
