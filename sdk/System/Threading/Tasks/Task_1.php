<?php
namespace System\Threading\Tasks;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait Task_1MethodsOverride
{
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] protected static function StartNew_1($parent, $function, $cancellationToken, $creationOptions, $internalOptions, $scheduler){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] protected static function StartNew_2($parent, $function, $state, $cancellationToken, $creationOptions, $internalOptions, $scheduler){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected  function TrySetResult_1($result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected  function TrySetResult_2(){}
	/**
	 * @return \System\Runtime\CompilerServices\TaskAwaiter_1
	 */
	#[MethodOverride] public  function GetAwaiter_1(){}
	/**
	 * @return \System\Runtime\CompilerServices\TaskAwaiter
	 */
	#[MethodOverride] public  function GetAwaiter_2(){}
	/**
	 * @return \System\Runtime\CompilerServices\ConfiguredTaskAwaitable_1
	 */
	#[MethodOverride] public  function ConfigureAwait_1($continueOnCapturedContext){}
	/**
	 * @return \System\Runtime\CompilerServices\ConfiguredTaskAwaitable
	 */
	#[MethodOverride] public  function ConfigureAwait_2($continueOnCapturedContext){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function WaitAsync_1($cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function WaitAsync_2($timeout){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function WaitAsync_3($timeout, $cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] private  function WaitAsync_4($millisecondsTimeout, $cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function WaitAsync_5($cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function WaitAsync_6($timeout){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function WaitAsync_7($timeout, $cancellationToken){}
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
	#[MethodOverride] protected  function ContinueWith_6($continuationAction, $scheduler, $cancellationToken, $continuationOptions){}
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
	#[MethodOverride] protected  function ContinueWith_12($continuationAction, $state, $scheduler, $cancellationToken, $continuationOptions){}
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
	#[MethodOverride] protected  function ContinueWith_18($continuationFunction, $scheduler, $cancellationToken, $continuationOptions){}
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
	#[MethodOverride] protected  function ContinueWith_24($continuationFunction, $state, $scheduler, $cancellationToken, $continuationOptions){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function ContinueWith_25($continuationAction){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function ContinueWith_26($continuationAction, $cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function ContinueWith_27($continuationAction, $scheduler){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function ContinueWith_28($continuationAction, $continuationOptions){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function ContinueWith_29($continuationAction, $cancellationToken, $continuationOptions, $scheduler){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function ContinueWith_30($continuationAction, $state){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function ContinueWith_31($continuationAction, $state, $cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function ContinueWith_32($continuationAction, $state, $scheduler){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function ContinueWith_33($continuationAction, $state, $continuationOptions){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function ContinueWith_34($continuationAction, $state, $cancellationToken, $continuationOptions, $scheduler){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function ContinueWith_35($continuationFunction){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function ContinueWith_36($continuationFunction, $cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function ContinueWith_37($continuationFunction, $scheduler){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function ContinueWith_38($continuationFunction, $continuationOptions){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function ContinueWith_39($continuationFunction, $cancellationToken, $continuationOptions, $scheduler){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function ContinueWith_40($continuationFunction, $state){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function ContinueWith_41($continuationFunction, $state, $cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function ContinueWith_42($continuationFunction, $state, $scheduler){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function ContinueWith_43($continuationFunction, $state, $continuationOptions){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function ContinueWith_44($continuationFunction, $state, $cancellationToken, $continuationOptions, $scheduler){}
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
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class Task_1 extends \System\Threading\Tasks\Task implements 
	\System\IAsyncResult,
	\System\IDisposable
{
	/**
	 * @var \TResult
	 * @field
	 */
	protected $m_result;
	/**
	 * @var \System\Threading\Tasks\Task_1[TResult]
	 * @field
	 */
	protected readonly $s_defaultResultTask;
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
	 * @var \TResult
	 * @property
	 */
	public readonly $Result;
	/**
	 * @var \System\Threading\Tasks\TaskFactory_1[TResult]
	 * @property
	 */
	public readonly $Factory;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Id;
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
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsFaulted;
	/**
	 * @uses Task_1MethodsOverride::StartNew_1 ($parent, $function, $cancellationToken, $creationOptions, $internalOptions, $scheduler)
	 * @uses Task_1MethodsOverride::StartNew_2 ($parent, $function, $state, $cancellationToken, $creationOptions, $internalOptions, $scheduler)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function StartNew(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_DebuggerDisplayResultDescription(){}
	/**
	 * @uses Task_1MethodsOverride::TrySetResult_1 ($result)
	 * @uses Task_1MethodsOverride::TrySetResult_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function TrySetResult(mixed ...$args){}
	/**
	 * @param \System\Threading\Tasks\TResult $result
	 * @return \System\Void|void
	 */
	protected  function DangerousSetResult($result){}
	/**
	 * @return \System\Threading\Tasks\TResult
	 */
	public  function get_Result(){}
	/**
	 * @return \System\Threading\Tasks\TResult
	 */
	protected  function get_ResultOnSuccess(){}
	/**
	 * @param \System\Boolean $waitCompletionNotification
	 * @return \System\Threading\Tasks\TResult
	 */
	protected  function GetResultCore($waitCompletionNotification){}
	/**
	 * @return \System\Threading\Tasks\TaskFactory_1
	 */
	public static function get_Factory(){}
	/**
	 * @uses Task_1MethodsOverride::GetAwaiter_1 ()
	 * @uses Task_1MethodsOverride::GetAwaiter_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetAwaiter(mixed ...$args){}
	/**
	 * @uses Task_1MethodsOverride::ConfigureAwait_1 ($continueOnCapturedContext)
	 * @uses Task_1MethodsOverride::ConfigureAwait_2 ($continueOnCapturedContext)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ConfigureAwait(mixed ...$args){}
	/**
	 * @uses Task_1MethodsOverride::WaitAsync_1 ($cancellationToken)
	 * @uses Task_1MethodsOverride::WaitAsync_2 ($timeout)
	 * @uses Task_1MethodsOverride::WaitAsync_3 ($timeout, $cancellationToken)
	 * @uses Task_1MethodsOverride::WaitAsync_4 ($millisecondsTimeout, $cancellationToken)
	 * @uses Task_1MethodsOverride::WaitAsync_5 ($cancellationToken)
	 * @uses Task_1MethodsOverride::WaitAsync_6 ($timeout)
	 * @uses Task_1MethodsOverride::WaitAsync_7 ($timeout, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function WaitAsync(mixed ...$args){}
	/**
	 * @uses Task_1MethodsOverride::ContinueWith_1 ($continuationAction)
	 * @uses Task_1MethodsOverride::ContinueWith_2 ($continuationAction, $cancellationToken)
	 * @uses Task_1MethodsOverride::ContinueWith_3 ($continuationAction, $scheduler)
	 * @uses Task_1MethodsOverride::ContinueWith_4 ($continuationAction, $continuationOptions)
	 * @uses Task_1MethodsOverride::ContinueWith_5 ($continuationAction, $cancellationToken, $continuationOptions, $scheduler)
	 * @uses Task_1MethodsOverride::ContinueWith_6 ($continuationAction, $scheduler, $cancellationToken, $continuationOptions)
	 * @uses Task_1MethodsOverride::ContinueWith_7 ($continuationAction, $state)
	 * @uses Task_1MethodsOverride::ContinueWith_8 ($continuationAction, $state, $cancellationToken)
	 * @uses Task_1MethodsOverride::ContinueWith_9 ($continuationAction, $state, $scheduler)
	 * @uses Task_1MethodsOverride::ContinueWith_10 ($continuationAction, $state, $continuationOptions)
	 * @uses Task_1MethodsOverride::ContinueWith_11 ($continuationAction, $state, $cancellationToken, $continuationOptions, $scheduler)
	 * @uses Task_1MethodsOverride::ContinueWith_12 ($continuationAction, $state, $scheduler, $cancellationToken, $continuationOptions)
	 * @uses Task_1MethodsOverride::ContinueWith_13 ($continuationFunction)
	 * @uses Task_1MethodsOverride::ContinueWith_14 ($continuationFunction, $cancellationToken)
	 * @uses Task_1MethodsOverride::ContinueWith_15 ($continuationFunction, $scheduler)
	 * @uses Task_1MethodsOverride::ContinueWith_16 ($continuationFunction, $continuationOptions)
	 * @uses Task_1MethodsOverride::ContinueWith_17 ($continuationFunction, $cancellationToken, $continuationOptions, $scheduler)
	 * @uses Task_1MethodsOverride::ContinueWith_18 ($continuationFunction, $scheduler, $cancellationToken, $continuationOptions)
	 * @uses Task_1MethodsOverride::ContinueWith_19 ($continuationFunction, $state)
	 * @uses Task_1MethodsOverride::ContinueWith_20 ($continuationFunction, $state, $cancellationToken)
	 * @uses Task_1MethodsOverride::ContinueWith_21 ($continuationFunction, $state, $scheduler)
	 * @uses Task_1MethodsOverride::ContinueWith_22 ($continuationFunction, $state, $continuationOptions)
	 * @uses Task_1MethodsOverride::ContinueWith_23 ($continuationFunction, $state, $cancellationToken, $continuationOptions, $scheduler)
	 * @uses Task_1MethodsOverride::ContinueWith_24 ($continuationFunction, $state, $scheduler, $cancellationToken, $continuationOptions)
	 * @uses Task_1MethodsOverride::ContinueWith_25 ($continuationAction)
	 * @uses Task_1MethodsOverride::ContinueWith_26 ($continuationAction, $cancellationToken)
	 * @uses Task_1MethodsOverride::ContinueWith_27 ($continuationAction, $scheduler)
	 * @uses Task_1MethodsOverride::ContinueWith_28 ($continuationAction, $continuationOptions)
	 * @uses Task_1MethodsOverride::ContinueWith_29 ($continuationAction, $cancellationToken, $continuationOptions, $scheduler)
	 * @uses Task_1MethodsOverride::ContinueWith_30 ($continuationAction, $state)
	 * @uses Task_1MethodsOverride::ContinueWith_31 ($continuationAction, $state, $cancellationToken)
	 * @uses Task_1MethodsOverride::ContinueWith_32 ($continuationAction, $state, $scheduler)
	 * @uses Task_1MethodsOverride::ContinueWith_33 ($continuationAction, $state, $continuationOptions)
	 * @uses Task_1MethodsOverride::ContinueWith_34 ($continuationAction, $state, $cancellationToken, $continuationOptions, $scheduler)
	 * @uses Task_1MethodsOverride::ContinueWith_35 ($continuationFunction)
	 * @uses Task_1MethodsOverride::ContinueWith_36 ($continuationFunction, $cancellationToken)
	 * @uses Task_1MethodsOverride::ContinueWith_37 ($continuationFunction, $scheduler)
	 * @uses Task_1MethodsOverride::ContinueWith_38 ($continuationFunction, $continuationOptions)
	 * @uses Task_1MethodsOverride::ContinueWith_39 ($continuationFunction, $cancellationToken, $continuationOptions, $scheduler)
	 * @uses Task_1MethodsOverride::ContinueWith_40 ($continuationFunction, $state)
	 * @uses Task_1MethodsOverride::ContinueWith_41 ($continuationFunction, $state, $cancellationToken)
	 * @uses Task_1MethodsOverride::ContinueWith_42 ($continuationFunction, $state, $scheduler)
	 * @uses Task_1MethodsOverride::ContinueWith_43 ($continuationFunction, $state, $continuationOptions)
	 * @uses Task_1MethodsOverride::ContinueWith_44 ($continuationFunction, $state, $cancellationToken, $continuationOptions, $scheduler)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ContinueWith(mixed ...$args){}
	/**
	 * @uses Task_1MethodsOverride::AtomicStateUpdate_1 ($newBits, $illegalBits)
	 * @uses Task_1MethodsOverride::AtomicStateUpdate_2 ($newBits, $illegalBits, $oldFlags)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AtomicStateUpdate(mixed ...$args){}
	/**
	 * @uses Task_1MethodsOverride::Start_1 ()
	 * @uses Task_1MethodsOverride::Start_2 ($scheduler)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Start(mixed ...$args){}
	/**
	 * @uses Task_1MethodsOverride::RunSynchronously_1 ()
	 * @uses Task_1MethodsOverride::RunSynchronously_2 ($scheduler)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RunSynchronously(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_AsyncWaitHandle(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_CompletedSynchronously(){}
	/**
	 * @uses Task_1MethodsOverride::Dispose_1 ()
	 * @uses Task_1MethodsOverride::Dispose_2 ($disposing)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @uses Task_1MethodsOverride::AddException_1 ($exceptionObject)
	 * @uses Task_1MethodsOverride::AddException_2 ($exceptionObject, $representsCancellation)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddException(mixed ...$args){}
	/**
	 * @uses Task_1MethodsOverride::Wait_1 ()
	 * @uses Task_1MethodsOverride::Wait_2 ($timeout)
	 * @uses Task_1MethodsOverride::Wait_3 ($timeout, $cancellationToken)
	 * @uses Task_1MethodsOverride::Wait_4 ($cancellationToken)
	 * @uses Task_1MethodsOverride::Wait_5 ($millisecondsTimeout)
	 * @uses Task_1MethodsOverride::Wait_6 ($millisecondsTimeout, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Wait(mixed ...$args){}
	/**
	 * @uses Task_1MethodsOverride::RecordInternalCancellationRequest_1 ()
	 * @uses Task_1MethodsOverride::RecordInternalCancellationRequest_2 ($tokenToRecord, $cancellationException)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RecordInternalCancellationRequest(mixed ...$args){}
	/**
	 * @uses Task_1MethodsOverride::TrySetCanceled_1 ($tokenToRecord)
	 * @uses Task_1MethodsOverride::TrySetCanceled_2 ($tokenToRecord, $cancellationException)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function TrySetCanceled(mixed ...$args){}
}
