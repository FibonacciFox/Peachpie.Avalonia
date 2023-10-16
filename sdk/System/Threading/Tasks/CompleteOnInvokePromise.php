<?php
namespace System\Threading\Tasks;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait CompleteOnInvokePromiseMethodsOverride
{
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
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function WaitAsync_4($cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function WaitAsync_5($timeout){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function WaitAsync_6($timeout, $cancellationToken){}
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
 */
class CompleteOnInvokePromise extends \System\Threading\Tasks\Task_1 implements 
	\System\IAsyncResult,
	\System\IDisposable,
	\System\Threading\Tasks\ITaskCompletionAction
{
	/**
	 * @var \System\Threading\Tasks\Task
	 * @field
	 */
	protected $m_result;
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
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $InvokeMayRunArbitraryCode;
	/**
	 * @var \System\Threading\Tasks\Task
	 * @property
	 */
	public readonly $Result;
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
	 * @param \System\Threading\Tasks\Task $completingTask
	 * @return \System\Void|void
	 */
	public  function Invoke($completingTask){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_InvokeMayRunArbitraryCode(){}
	/**
	 * @uses CompleteOnInvokePromiseMethodsOverride::TrySetResult_1 ($result)
	 * @uses CompleteOnInvokePromiseMethodsOverride::TrySetResult_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function TrySetResult(mixed ...$args){}
	/**
	 * @uses CompleteOnInvokePromiseMethodsOverride::GetAwaiter_1 ()
	 * @uses CompleteOnInvokePromiseMethodsOverride::GetAwaiter_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetAwaiter(mixed ...$args){}
	/**
	 * @uses CompleteOnInvokePromiseMethodsOverride::ConfigureAwait_1 ($continueOnCapturedContext)
	 * @uses CompleteOnInvokePromiseMethodsOverride::ConfigureAwait_2 ($continueOnCapturedContext)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ConfigureAwait(mixed ...$args){}
	/**
	 * @uses CompleteOnInvokePromiseMethodsOverride::WaitAsync_1 ($cancellationToken)
	 * @uses CompleteOnInvokePromiseMethodsOverride::WaitAsync_2 ($timeout)
	 * @uses CompleteOnInvokePromiseMethodsOverride::WaitAsync_3 ($timeout, $cancellationToken)
	 * @uses CompleteOnInvokePromiseMethodsOverride::WaitAsync_4 ($cancellationToken)
	 * @uses CompleteOnInvokePromiseMethodsOverride::WaitAsync_5 ($timeout)
	 * @uses CompleteOnInvokePromiseMethodsOverride::WaitAsync_6 ($timeout, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function WaitAsync(mixed ...$args){}
	/**
	 * @uses CompleteOnInvokePromiseMethodsOverride::ContinueWith_1 ($continuationAction)
	 * @uses CompleteOnInvokePromiseMethodsOverride::ContinueWith_2 ($continuationAction, $cancellationToken)
	 * @uses CompleteOnInvokePromiseMethodsOverride::ContinueWith_3 ($continuationAction, $scheduler)
	 * @uses CompleteOnInvokePromiseMethodsOverride::ContinueWith_4 ($continuationAction, $continuationOptions)
	 * @uses CompleteOnInvokePromiseMethodsOverride::ContinueWith_5 ($continuationAction, $cancellationToken, $continuationOptions, $scheduler)
	 * @uses CompleteOnInvokePromiseMethodsOverride::ContinueWith_6 ($continuationAction, $scheduler, $cancellationToken, $continuationOptions)
	 * @uses CompleteOnInvokePromiseMethodsOverride::ContinueWith_7 ($continuationAction, $state)
	 * @uses CompleteOnInvokePromiseMethodsOverride::ContinueWith_8 ($continuationAction, $state, $cancellationToken)
	 * @uses CompleteOnInvokePromiseMethodsOverride::ContinueWith_9 ($continuationAction, $state, $scheduler)
	 * @uses CompleteOnInvokePromiseMethodsOverride::ContinueWith_10 ($continuationAction, $state, $continuationOptions)
	 * @uses CompleteOnInvokePromiseMethodsOverride::ContinueWith_11 ($continuationAction, $state, $cancellationToken, $continuationOptions, $scheduler)
	 * @uses CompleteOnInvokePromiseMethodsOverride::ContinueWith_12 ($continuationAction, $state, $scheduler, $cancellationToken, $continuationOptions)
	 * @uses CompleteOnInvokePromiseMethodsOverride::ContinueWith_13 ($continuationFunction)
	 * @uses CompleteOnInvokePromiseMethodsOverride::ContinueWith_14 ($continuationFunction, $cancellationToken)
	 * @uses CompleteOnInvokePromiseMethodsOverride::ContinueWith_15 ($continuationFunction, $scheduler)
	 * @uses CompleteOnInvokePromiseMethodsOverride::ContinueWith_16 ($continuationFunction, $continuationOptions)
	 * @uses CompleteOnInvokePromiseMethodsOverride::ContinueWith_17 ($continuationFunction, $cancellationToken, $continuationOptions, $scheduler)
	 * @uses CompleteOnInvokePromiseMethodsOverride::ContinueWith_18 ($continuationFunction, $scheduler, $cancellationToken, $continuationOptions)
	 * @uses CompleteOnInvokePromiseMethodsOverride::ContinueWith_19 ($continuationFunction, $state)
	 * @uses CompleteOnInvokePromiseMethodsOverride::ContinueWith_20 ($continuationFunction, $state, $cancellationToken)
	 * @uses CompleteOnInvokePromiseMethodsOverride::ContinueWith_21 ($continuationFunction, $state, $scheduler)
	 * @uses CompleteOnInvokePromiseMethodsOverride::ContinueWith_22 ($continuationFunction, $state, $continuationOptions)
	 * @uses CompleteOnInvokePromiseMethodsOverride::ContinueWith_23 ($continuationFunction, $state, $cancellationToken, $continuationOptions, $scheduler)
	 * @uses CompleteOnInvokePromiseMethodsOverride::ContinueWith_24 ($continuationFunction, $state, $scheduler, $cancellationToken, $continuationOptions)
	 * @uses CompleteOnInvokePromiseMethodsOverride::ContinueWith_25 ($continuationAction)
	 * @uses CompleteOnInvokePromiseMethodsOverride::ContinueWith_26 ($continuationAction, $cancellationToken)
	 * @uses CompleteOnInvokePromiseMethodsOverride::ContinueWith_27 ($continuationAction, $scheduler)
	 * @uses CompleteOnInvokePromiseMethodsOverride::ContinueWith_28 ($continuationAction, $continuationOptions)
	 * @uses CompleteOnInvokePromiseMethodsOverride::ContinueWith_29 ($continuationAction, $cancellationToken, $continuationOptions, $scheduler)
	 * @uses CompleteOnInvokePromiseMethodsOverride::ContinueWith_30 ($continuationAction, $state)
	 * @uses CompleteOnInvokePromiseMethodsOverride::ContinueWith_31 ($continuationAction, $state, $cancellationToken)
	 * @uses CompleteOnInvokePromiseMethodsOverride::ContinueWith_32 ($continuationAction, $state, $scheduler)
	 * @uses CompleteOnInvokePromiseMethodsOverride::ContinueWith_33 ($continuationAction, $state, $continuationOptions)
	 * @uses CompleteOnInvokePromiseMethodsOverride::ContinueWith_34 ($continuationAction, $state, $cancellationToken, $continuationOptions, $scheduler)
	 * @uses CompleteOnInvokePromiseMethodsOverride::ContinueWith_35 ($continuationFunction)
	 * @uses CompleteOnInvokePromiseMethodsOverride::ContinueWith_36 ($continuationFunction, $cancellationToken)
	 * @uses CompleteOnInvokePromiseMethodsOverride::ContinueWith_37 ($continuationFunction, $scheduler)
	 * @uses CompleteOnInvokePromiseMethodsOverride::ContinueWith_38 ($continuationFunction, $continuationOptions)
	 * @uses CompleteOnInvokePromiseMethodsOverride::ContinueWith_39 ($continuationFunction, $cancellationToken, $continuationOptions, $scheduler)
	 * @uses CompleteOnInvokePromiseMethodsOverride::ContinueWith_40 ($continuationFunction, $state)
	 * @uses CompleteOnInvokePromiseMethodsOverride::ContinueWith_41 ($continuationFunction, $state, $cancellationToken)
	 * @uses CompleteOnInvokePromiseMethodsOverride::ContinueWith_42 ($continuationFunction, $state, $scheduler)
	 * @uses CompleteOnInvokePromiseMethodsOverride::ContinueWith_43 ($continuationFunction, $state, $continuationOptions)
	 * @uses CompleteOnInvokePromiseMethodsOverride::ContinueWith_44 ($continuationFunction, $state, $cancellationToken, $continuationOptions, $scheduler)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ContinueWith(mixed ...$args){}
	/**
	 * @uses CompleteOnInvokePromiseMethodsOverride::AtomicStateUpdate_1 ($newBits, $illegalBits)
	 * @uses CompleteOnInvokePromiseMethodsOverride::AtomicStateUpdate_2 ($newBits, $illegalBits, $oldFlags)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AtomicStateUpdate(mixed ...$args){}
	/**
	 * @uses CompleteOnInvokePromiseMethodsOverride::Start_1 ()
	 * @uses CompleteOnInvokePromiseMethodsOverride::Start_2 ($scheduler)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Start(mixed ...$args){}
	/**
	 * @uses CompleteOnInvokePromiseMethodsOverride::RunSynchronously_1 ()
	 * @uses CompleteOnInvokePromiseMethodsOverride::RunSynchronously_2 ($scheduler)
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
	 * @uses CompleteOnInvokePromiseMethodsOverride::Dispose_1 ()
	 * @uses CompleteOnInvokePromiseMethodsOverride::Dispose_2 ($disposing)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @uses CompleteOnInvokePromiseMethodsOverride::AddException_1 ($exceptionObject)
	 * @uses CompleteOnInvokePromiseMethodsOverride::AddException_2 ($exceptionObject, $representsCancellation)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddException(mixed ...$args){}
	/**
	 * @uses CompleteOnInvokePromiseMethodsOverride::Wait_1 ()
	 * @uses CompleteOnInvokePromiseMethodsOverride::Wait_2 ($timeout)
	 * @uses CompleteOnInvokePromiseMethodsOverride::Wait_3 ($timeout, $cancellationToken)
	 * @uses CompleteOnInvokePromiseMethodsOverride::Wait_4 ($cancellationToken)
	 * @uses CompleteOnInvokePromiseMethodsOverride::Wait_5 ($millisecondsTimeout)
	 * @uses CompleteOnInvokePromiseMethodsOverride::Wait_6 ($millisecondsTimeout, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Wait(mixed ...$args){}
	/**
	 * @uses CompleteOnInvokePromiseMethodsOverride::RecordInternalCancellationRequest_1 ()
	 * @uses CompleteOnInvokePromiseMethodsOverride::RecordInternalCancellationRequest_2 ($tokenToRecord, $cancellationException)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RecordInternalCancellationRequest(mixed ...$args){}
	/**
	 * @uses CompleteOnInvokePromiseMethodsOverride::TrySetCanceled_1 ($tokenToRecord)
	 * @uses CompleteOnInvokePromiseMethodsOverride::TrySetCanceled_2 ($tokenToRecord, $cancellationException)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function TrySetCanceled(mixed ...$args){}
}
