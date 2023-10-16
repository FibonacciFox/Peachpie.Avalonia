<?php
namespace System\Threading\Tasks;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ContinuationTaskFromTaskMethodsOverride
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
	#[MethodOverride] public  function ContinueWith_6($continuationAction, $state){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function ContinueWith_7($continuationAction, $state, $cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function ContinueWith_8($continuationAction, $state, $scheduler){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function ContinueWith_9($continuationAction, $state, $continuationOptions){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function ContinueWith_10($continuationAction, $state, $cancellationToken, $continuationOptions, $scheduler){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function ContinueWith_11($continuationFunction){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function ContinueWith_12($continuationFunction, $cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function ContinueWith_13($continuationFunction, $scheduler){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function ContinueWith_14($continuationFunction, $continuationOptions){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function ContinueWith_15($continuationFunction, $cancellationToken, $continuationOptions, $scheduler){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function ContinueWith_16($continuationFunction, $state){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function ContinueWith_17($continuationFunction, $state, $cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function ContinueWith_18($continuationFunction, $state, $scheduler){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function ContinueWith_19($continuationFunction, $state, $continuationOptions){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function ContinueWith_20($continuationFunction, $state, $cancellationToken, $continuationOptions, $scheduler){}
}
/**
 */
class ContinuationTaskFromTask extends \System\Threading\Tasks\Task implements 
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
	 * @uses ContinuationTaskFromTaskMethodsOverride::AtomicStateUpdate_1 ($newBits, $illegalBits)
	 * @uses ContinuationTaskFromTaskMethodsOverride::AtomicStateUpdate_2 ($newBits, $illegalBits, $oldFlags)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AtomicStateUpdate(mixed ...$args){}
	/**
	 * @uses ContinuationTaskFromTaskMethodsOverride::Start_1 ()
	 * @uses ContinuationTaskFromTaskMethodsOverride::Start_2 ($scheduler)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Start(mixed ...$args){}
	/**
	 * @uses ContinuationTaskFromTaskMethodsOverride::RunSynchronously_1 ()
	 * @uses ContinuationTaskFromTaskMethodsOverride::RunSynchronously_2 ($scheduler)
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
	 * @uses ContinuationTaskFromTaskMethodsOverride::Dispose_1 ()
	 * @uses ContinuationTaskFromTaskMethodsOverride::Dispose_2 ($disposing)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @uses ContinuationTaskFromTaskMethodsOverride::AddException_1 ($exceptionObject)
	 * @uses ContinuationTaskFromTaskMethodsOverride::AddException_2 ($exceptionObject, $representsCancellation)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddException(mixed ...$args){}
	/**
	 * @uses ContinuationTaskFromTaskMethodsOverride::Wait_1 ()
	 * @uses ContinuationTaskFromTaskMethodsOverride::Wait_2 ($timeout)
	 * @uses ContinuationTaskFromTaskMethodsOverride::Wait_3 ($timeout, $cancellationToken)
	 * @uses ContinuationTaskFromTaskMethodsOverride::Wait_4 ($cancellationToken)
	 * @uses ContinuationTaskFromTaskMethodsOverride::Wait_5 ($millisecondsTimeout)
	 * @uses ContinuationTaskFromTaskMethodsOverride::Wait_6 ($millisecondsTimeout, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Wait(mixed ...$args){}
	/**
	 * @uses ContinuationTaskFromTaskMethodsOverride::WaitAsync_1 ($cancellationToken)
	 * @uses ContinuationTaskFromTaskMethodsOverride::WaitAsync_2 ($timeout)
	 * @uses ContinuationTaskFromTaskMethodsOverride::WaitAsync_3 ($timeout, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function WaitAsync(mixed ...$args){}
	/**
	 * @uses ContinuationTaskFromTaskMethodsOverride::RecordInternalCancellationRequest_1 ()
	 * @uses ContinuationTaskFromTaskMethodsOverride::RecordInternalCancellationRequest_2 ($tokenToRecord, $cancellationException)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RecordInternalCancellationRequest(mixed ...$args){}
	/**
	 * @uses ContinuationTaskFromTaskMethodsOverride::TrySetCanceled_1 ($tokenToRecord)
	 * @uses ContinuationTaskFromTaskMethodsOverride::TrySetCanceled_2 ($tokenToRecord, $cancellationException)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function TrySetCanceled(mixed ...$args){}
	/**
	 * @uses ContinuationTaskFromTaskMethodsOverride::ContinueWith_1 ($continuationAction)
	 * @uses ContinuationTaskFromTaskMethodsOverride::ContinueWith_2 ($continuationAction, $cancellationToken)
	 * @uses ContinuationTaskFromTaskMethodsOverride::ContinueWith_3 ($continuationAction, $scheduler)
	 * @uses ContinuationTaskFromTaskMethodsOverride::ContinueWith_4 ($continuationAction, $continuationOptions)
	 * @uses ContinuationTaskFromTaskMethodsOverride::ContinueWith_5 ($continuationAction, $cancellationToken, $continuationOptions, $scheduler)
	 * @uses ContinuationTaskFromTaskMethodsOverride::ContinueWith_6 ($continuationAction, $state)
	 * @uses ContinuationTaskFromTaskMethodsOverride::ContinueWith_7 ($continuationAction, $state, $cancellationToken)
	 * @uses ContinuationTaskFromTaskMethodsOverride::ContinueWith_8 ($continuationAction, $state, $scheduler)
	 * @uses ContinuationTaskFromTaskMethodsOverride::ContinueWith_9 ($continuationAction, $state, $continuationOptions)
	 * @uses ContinuationTaskFromTaskMethodsOverride::ContinueWith_10 ($continuationAction, $state, $cancellationToken, $continuationOptions, $scheduler)
	 * @uses ContinuationTaskFromTaskMethodsOverride::ContinueWith_11 ($continuationFunction)
	 * @uses ContinuationTaskFromTaskMethodsOverride::ContinueWith_12 ($continuationFunction, $cancellationToken)
	 * @uses ContinuationTaskFromTaskMethodsOverride::ContinueWith_13 ($continuationFunction, $scheduler)
	 * @uses ContinuationTaskFromTaskMethodsOverride::ContinueWith_14 ($continuationFunction, $continuationOptions)
	 * @uses ContinuationTaskFromTaskMethodsOverride::ContinueWith_15 ($continuationFunction, $cancellationToken, $continuationOptions, $scheduler)
	 * @uses ContinuationTaskFromTaskMethodsOverride::ContinueWith_16 ($continuationFunction, $state)
	 * @uses ContinuationTaskFromTaskMethodsOverride::ContinueWith_17 ($continuationFunction, $state, $cancellationToken)
	 * @uses ContinuationTaskFromTaskMethodsOverride::ContinueWith_18 ($continuationFunction, $state, $scheduler)
	 * @uses ContinuationTaskFromTaskMethodsOverride::ContinueWith_19 ($continuationFunction, $state, $continuationOptions)
	 * @uses ContinuationTaskFromTaskMethodsOverride::ContinueWith_20 ($continuationFunction, $state, $cancellationToken, $continuationOptions, $scheduler)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ContinueWith(mixed ...$args){}
}
