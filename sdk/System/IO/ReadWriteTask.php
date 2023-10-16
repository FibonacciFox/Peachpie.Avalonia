<?php
namespace System\IO;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ReadWriteTaskMethodsOverride
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
class ReadWriteTask extends \System\Threading\Tasks\Task_1 implements 
	\System\IAsyncResult,
	\System\IDisposable,
	\System\Threading\Tasks\ITaskCompletionAction
{
	/**
	 * @var \System\Boolean
	 * @field
	 */
	protected readonly $_isRead;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	protected readonly $_apm;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	protected $_endCalled;
	/**
	 * @var \System\IO\Stream
	 * @field
	 */
	protected $_stream;
	/**
	 * @var \System\Byte[]
	 * @field
	 */
	protected $_buffer;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected readonly $_offset;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected readonly $_count;
	/**
	 * @var \System\Int32
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
	 * @var \System\Int32
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
	 * @return \System\Void|void
	 */
	protected  function ClearBeginState(){}
	/**
	 * @param \System\Object|object $completedTask
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InvokeAsyncCallback($completedTask){}
	/**
	 * @param \System\Threading\Tasks\Task $completingTask
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Invoke($completingTask){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_InvokeMayRunArbitraryCode(){}
	/**
	 * @uses ReadWriteTaskMethodsOverride::TrySetResult_1 ($result)
	 * @uses ReadWriteTaskMethodsOverride::TrySetResult_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function TrySetResult(mixed ...$args){}
	/**
	 * @uses ReadWriteTaskMethodsOverride::GetAwaiter_1 ()
	 * @uses ReadWriteTaskMethodsOverride::GetAwaiter_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetAwaiter(mixed ...$args){}
	/**
	 * @uses ReadWriteTaskMethodsOverride::ConfigureAwait_1 ($continueOnCapturedContext)
	 * @uses ReadWriteTaskMethodsOverride::ConfigureAwait_2 ($continueOnCapturedContext)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ConfigureAwait(mixed ...$args){}
	/**
	 * @uses ReadWriteTaskMethodsOverride::WaitAsync_1 ($cancellationToken)
	 * @uses ReadWriteTaskMethodsOverride::WaitAsync_2 ($timeout)
	 * @uses ReadWriteTaskMethodsOverride::WaitAsync_3 ($timeout, $cancellationToken)
	 * @uses ReadWriteTaskMethodsOverride::WaitAsync_4 ($cancellationToken)
	 * @uses ReadWriteTaskMethodsOverride::WaitAsync_5 ($timeout)
	 * @uses ReadWriteTaskMethodsOverride::WaitAsync_6 ($timeout, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function WaitAsync(mixed ...$args){}
	/**
	 * @uses ReadWriteTaskMethodsOverride::ContinueWith_1 ($continuationAction)
	 * @uses ReadWriteTaskMethodsOverride::ContinueWith_2 ($continuationAction, $cancellationToken)
	 * @uses ReadWriteTaskMethodsOverride::ContinueWith_3 ($continuationAction, $scheduler)
	 * @uses ReadWriteTaskMethodsOverride::ContinueWith_4 ($continuationAction, $continuationOptions)
	 * @uses ReadWriteTaskMethodsOverride::ContinueWith_5 ($continuationAction, $cancellationToken, $continuationOptions, $scheduler)
	 * @uses ReadWriteTaskMethodsOverride::ContinueWith_6 ($continuationAction, $scheduler, $cancellationToken, $continuationOptions)
	 * @uses ReadWriteTaskMethodsOverride::ContinueWith_7 ($continuationAction, $state)
	 * @uses ReadWriteTaskMethodsOverride::ContinueWith_8 ($continuationAction, $state, $cancellationToken)
	 * @uses ReadWriteTaskMethodsOverride::ContinueWith_9 ($continuationAction, $state, $scheduler)
	 * @uses ReadWriteTaskMethodsOverride::ContinueWith_10 ($continuationAction, $state, $continuationOptions)
	 * @uses ReadWriteTaskMethodsOverride::ContinueWith_11 ($continuationAction, $state, $cancellationToken, $continuationOptions, $scheduler)
	 * @uses ReadWriteTaskMethodsOverride::ContinueWith_12 ($continuationAction, $state, $scheduler, $cancellationToken, $continuationOptions)
	 * @uses ReadWriteTaskMethodsOverride::ContinueWith_13 ($continuationFunction)
	 * @uses ReadWriteTaskMethodsOverride::ContinueWith_14 ($continuationFunction, $cancellationToken)
	 * @uses ReadWriteTaskMethodsOverride::ContinueWith_15 ($continuationFunction, $scheduler)
	 * @uses ReadWriteTaskMethodsOverride::ContinueWith_16 ($continuationFunction, $continuationOptions)
	 * @uses ReadWriteTaskMethodsOverride::ContinueWith_17 ($continuationFunction, $cancellationToken, $continuationOptions, $scheduler)
	 * @uses ReadWriteTaskMethodsOverride::ContinueWith_18 ($continuationFunction, $scheduler, $cancellationToken, $continuationOptions)
	 * @uses ReadWriteTaskMethodsOverride::ContinueWith_19 ($continuationFunction, $state)
	 * @uses ReadWriteTaskMethodsOverride::ContinueWith_20 ($continuationFunction, $state, $cancellationToken)
	 * @uses ReadWriteTaskMethodsOverride::ContinueWith_21 ($continuationFunction, $state, $scheduler)
	 * @uses ReadWriteTaskMethodsOverride::ContinueWith_22 ($continuationFunction, $state, $continuationOptions)
	 * @uses ReadWriteTaskMethodsOverride::ContinueWith_23 ($continuationFunction, $state, $cancellationToken, $continuationOptions, $scheduler)
	 * @uses ReadWriteTaskMethodsOverride::ContinueWith_24 ($continuationFunction, $state, $scheduler, $cancellationToken, $continuationOptions)
	 * @uses ReadWriteTaskMethodsOverride::ContinueWith_25 ($continuationAction)
	 * @uses ReadWriteTaskMethodsOverride::ContinueWith_26 ($continuationAction, $cancellationToken)
	 * @uses ReadWriteTaskMethodsOverride::ContinueWith_27 ($continuationAction, $scheduler)
	 * @uses ReadWriteTaskMethodsOverride::ContinueWith_28 ($continuationAction, $continuationOptions)
	 * @uses ReadWriteTaskMethodsOverride::ContinueWith_29 ($continuationAction, $cancellationToken, $continuationOptions, $scheduler)
	 * @uses ReadWriteTaskMethodsOverride::ContinueWith_30 ($continuationAction, $state)
	 * @uses ReadWriteTaskMethodsOverride::ContinueWith_31 ($continuationAction, $state, $cancellationToken)
	 * @uses ReadWriteTaskMethodsOverride::ContinueWith_32 ($continuationAction, $state, $scheduler)
	 * @uses ReadWriteTaskMethodsOverride::ContinueWith_33 ($continuationAction, $state, $continuationOptions)
	 * @uses ReadWriteTaskMethodsOverride::ContinueWith_34 ($continuationAction, $state, $cancellationToken, $continuationOptions, $scheduler)
	 * @uses ReadWriteTaskMethodsOverride::ContinueWith_35 ($continuationFunction)
	 * @uses ReadWriteTaskMethodsOverride::ContinueWith_36 ($continuationFunction, $cancellationToken)
	 * @uses ReadWriteTaskMethodsOverride::ContinueWith_37 ($continuationFunction, $scheduler)
	 * @uses ReadWriteTaskMethodsOverride::ContinueWith_38 ($continuationFunction, $continuationOptions)
	 * @uses ReadWriteTaskMethodsOverride::ContinueWith_39 ($continuationFunction, $cancellationToken, $continuationOptions, $scheduler)
	 * @uses ReadWriteTaskMethodsOverride::ContinueWith_40 ($continuationFunction, $state)
	 * @uses ReadWriteTaskMethodsOverride::ContinueWith_41 ($continuationFunction, $state, $cancellationToken)
	 * @uses ReadWriteTaskMethodsOverride::ContinueWith_42 ($continuationFunction, $state, $scheduler)
	 * @uses ReadWriteTaskMethodsOverride::ContinueWith_43 ($continuationFunction, $state, $continuationOptions)
	 * @uses ReadWriteTaskMethodsOverride::ContinueWith_44 ($continuationFunction, $state, $cancellationToken, $continuationOptions, $scheduler)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ContinueWith(mixed ...$args){}
	/**
	 * @uses ReadWriteTaskMethodsOverride::AtomicStateUpdate_1 ($newBits, $illegalBits)
	 * @uses ReadWriteTaskMethodsOverride::AtomicStateUpdate_2 ($newBits, $illegalBits, $oldFlags)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AtomicStateUpdate(mixed ...$args){}
	/**
	 * @uses ReadWriteTaskMethodsOverride::Start_1 ()
	 * @uses ReadWriteTaskMethodsOverride::Start_2 ($scheduler)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Start(mixed ...$args){}
	/**
	 * @uses ReadWriteTaskMethodsOverride::RunSynchronously_1 ()
	 * @uses ReadWriteTaskMethodsOverride::RunSynchronously_2 ($scheduler)
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
	 * @uses ReadWriteTaskMethodsOverride::Dispose_1 ()
	 * @uses ReadWriteTaskMethodsOverride::Dispose_2 ($disposing)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @uses ReadWriteTaskMethodsOverride::AddException_1 ($exceptionObject)
	 * @uses ReadWriteTaskMethodsOverride::AddException_2 ($exceptionObject, $representsCancellation)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddException(mixed ...$args){}
	/**
	 * @uses ReadWriteTaskMethodsOverride::Wait_1 ()
	 * @uses ReadWriteTaskMethodsOverride::Wait_2 ($timeout)
	 * @uses ReadWriteTaskMethodsOverride::Wait_3 ($timeout, $cancellationToken)
	 * @uses ReadWriteTaskMethodsOverride::Wait_4 ($cancellationToken)
	 * @uses ReadWriteTaskMethodsOverride::Wait_5 ($millisecondsTimeout)
	 * @uses ReadWriteTaskMethodsOverride::Wait_6 ($millisecondsTimeout, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Wait(mixed ...$args){}
	/**
	 * @uses ReadWriteTaskMethodsOverride::RecordInternalCancellationRequest_1 ()
	 * @uses ReadWriteTaskMethodsOverride::RecordInternalCancellationRequest_2 ($tokenToRecord, $cancellationException)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RecordInternalCancellationRequest(mixed ...$args){}
	/**
	 * @uses ReadWriteTaskMethodsOverride::TrySetCanceled_1 ($tokenToRecord)
	 * @uses ReadWriteTaskMethodsOverride::TrySetCanceled_2 ($tokenToRecord, $cancellationException)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function TrySetCanceled(mixed ...$args){}
}
