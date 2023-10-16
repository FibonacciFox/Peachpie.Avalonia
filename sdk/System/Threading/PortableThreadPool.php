<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait PortableThreadPoolMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function NotifyWorkItemProgress_1($threadLocalCompletionCountObject, $currentTimeMs){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function NotifyWorkItemProgress_2(){}
	/**
	 * @return \System\UInt32
	 */
	#[MethodOverride] private  function PerformBlockingAdjustment_1($previousDelayElapsed){}
	/**
	 * @return \System\UInt32
	 */
	#[MethodOverride] private  function PerformBlockingAdjustment_2($previousDelayElapsed, $addWorker){}
}
/**
 */
class PortableThreadPool extends \System\Object
{
	/**
	 * @var \System\Threading\PortableThreadPool
	 * @field
	 */
	public readonly $ThreadPoolInstance;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $ThreadCount;
	/**
	 * @var \System\Int64
	 * @property
	 */
	public readonly $CompletedWorkItemCount;
	/**
	 * @var \System\Int16
	 * @property
	 */
	public readonly $MinThreadsGoal;
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_HasForcedMinThreads(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_HasForcedMaxThreads(){}
	/**
	 * @param \System\Int32|int $workerThreads
	 * @param \System\Int32|int $ioCompletionThreads
	 * @return \System\Boolean
	 */
	public  function SetMinThreads($workerThreads, $ioCompletionThreads){}
	/**
	 * @param \System\Int32& $workerThreads
	 * @param \System\Int32& $ioCompletionThreads
	 * @return \System\Void|void
	 */
	public  function GetMinThreads($workerThreads, $ioCompletionThreads){}
	/**
	 * @param \System\Int32|int $workerThreads
	 * @param \System\Int32|int $ioCompletionThreads
	 * @return \System\Boolean
	 */
	public  function SetMaxThreads($workerThreads, $ioCompletionThreads){}
	/**
	 * @param \System\Int32& $workerThreads
	 * @param \System\Int32& $ioCompletionThreads
	 * @return \System\Void|void
	 */
	public  function GetMaxThreads($workerThreads, $ioCompletionThreads){}
	/**
	 * @param \System\Int32& $workerThreads
	 * @param \System\Int32& $ioCompletionThreads
	 * @return \System\Void|void
	 */
	public  function GetAvailableThreads($workerThreads, $ioCompletionThreads){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_ThreadCount(){}
	/**
	 * @return \System\Int64|int
	 */
	public  function get_CompletedWorkItemCount(){}
	/**
	 * @return \System\Object|object
	 */
	public  function GetOrCreateThreadLocalCompletionCountObject(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CreateThreadLocalCompletionCountObject(){}
	/**
	 * @uses PortableThreadPoolMethodsOverride::NotifyWorkItemProgress_1 ($threadLocalCompletionCountObject, $currentTimeMs)
	 * @uses PortableThreadPoolMethodsOverride::NotifyWorkItemProgress_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function NotifyWorkItemProgress(mixed ...$args){}
	/**
	 * @param \System\Object|object $threadLocalCompletionCountObject
	 * @param \System\Int32|int $currentTimeMs
	 * @return \System\Boolean
	 */
	protected  function NotifyWorkItemComplete($threadLocalCompletionCountObject, $currentTimeMs){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AdjustMaxWorkersActive(){}
	/**
	 * @param \System\Int32|int $currentTimeMs
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ShouldAdjustMaxWorkersActive($currentTimeMs){}
	/**
	 * @return \System\Void|void
	 */
	protected  function RequestWorker(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnGen2GCCallback(){}
	/**
	 * @return \System\Int16
	 */
	public  function get_MinThreadsGoal(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_TargetThreadsGoalForBlockingAdjustment(){}
	/**
	 * @return \System\Boolean
	 */
	public  function NotifyThreadBlocked(){}
	/**
	 * @return \System\Void|void
	 */
	public  function NotifyThreadUnblocked(){}
	/**
	 * @uses PortableThreadPoolMethodsOverride::PerformBlockingAdjustment_1 ($previousDelayElapsed)
	 * @uses PortableThreadPoolMethodsOverride::PerformBlockingAdjustment_2 ($previousDelayElapsed, $addWorker)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function PerformBlockingAdjustment(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	protected static function EnsureGateThreadRunning(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetIOCompletionPollerCount(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateIOCompletionPort(){}
	/**
	 * @param \System\IntPtr $handle
	 * @return \System\Void|void
	 */
	public  function RegisterForIOCompletionNotifications($handle){}
	/**
	 * @param \System\Threading\NativeOverlapped* $nativeOverlapped
	 * @return \System\Void|void
	 */
	public  function QueueNativeOverlapped($nativeOverlapped){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function EnsureIOCompletionPollers(){}
	/**
	 * @param \System\Threading\RegisteredWaitHandle $handle
	 * @return \System\Void|void
	 */
	protected  function RegisterWaitHandle($handle){}
	/**
	 * @param \System\Threading\RegisteredWaitHandle $handle
	 * @param \System\Boolean $timedOut
	 * @return \System\Void|void
	 */
	protected static function CompleteWait($handle, $timedOut){}
	/**
	 * @param \System\Threading\WaitThread $thread
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryRemoveWaitThread($thread){}
	/**
	 * @param \System\Threading\WaitThread $thread
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function RemoveWaitThread($thread){}
	/**
	 * @param \System\Boolean $isProcessingUserCallback
	 * @return \System\Void|void
	 */
	public  function ReportThreadStatus($isProcessingUserCallback){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetAndResetHighWatermarkCountOfThreadsProcessingUserCallbacks(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
