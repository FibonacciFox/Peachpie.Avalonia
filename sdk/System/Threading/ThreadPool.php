<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ThreadPoolMethodsOverride
{
	/**
	 * @return \System\Threading\RegisteredWaitHandle
	 */
	#[MethodOverride] private static function RegisterWaitForSingleObject_1($waitObject, $callBack, $state, $millisecondsTimeOutInterval, $executeOnlyOnce, $flowExecutionContext){}
	/**
	 * @return \System\Threading\RegisteredWaitHandle
	 */
	#[MethodOverride] public static function RegisterWaitForSingleObject_2($waitObject, $callBack, $state, $millisecondsTimeOutInterval, $executeOnlyOnce){}
	/**
	 * @return \System\Threading\RegisteredWaitHandle
	 */
	#[MethodOverride] public static function RegisterWaitForSingleObject_3($waitObject, $callBack, $state, $millisecondsTimeOutInterval, $executeOnlyOnce){}
	/**
	 * @return \System\Threading\RegisteredWaitHandle
	 */
	#[MethodOverride] public static function RegisterWaitForSingleObject_4($waitObject, $callBack, $state, $millisecondsTimeOutInterval, $executeOnlyOnce){}
	/**
	 * @return \System\Threading\RegisteredWaitHandle
	 */
	#[MethodOverride] public static function RegisterWaitForSingleObject_5($waitObject, $callBack, $state, $timeout, $executeOnlyOnce){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function BindHandle_1($osHandle){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function BindHandle_2($osHandle){}
	/**
	 * @return \System\Threading\RegisteredWaitHandle
	 */
	#[MethodOverride] public static function UnsafeRegisterWaitForSingleObject_1($waitObject, $callBack, $state, $millisecondsTimeOutInterval, $executeOnlyOnce){}
	/**
	 * @return \System\Threading\RegisteredWaitHandle
	 */
	#[MethodOverride] public static function UnsafeRegisterWaitForSingleObject_2($waitObject, $callBack, $state, $millisecondsTimeOutInterval, $executeOnlyOnce){}
	/**
	 * @return \System\Threading\RegisteredWaitHandle
	 */
	#[MethodOverride] public static function UnsafeRegisterWaitForSingleObject_3($waitObject, $callBack, $state, $millisecondsTimeOutInterval, $executeOnlyOnce){}
	/**
	 * @return \System\Threading\RegisteredWaitHandle
	 */
	#[MethodOverride] public static function UnsafeRegisterWaitForSingleObject_4($waitObject, $callBack, $state, $timeout, $executeOnlyOnce){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function QueueUserWorkItem_1($callBack){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function QueueUserWorkItem_2($callBack, $state){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function QueueUserWorkItem_3($callBack, $state, $preferLocal){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function UnsafeQueueUserWorkItem_1($callBack, $state, $preferLocal){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function UnsafeQueueUserWorkItem_2($callBack, $state){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function UnsafeQueueUserWorkItem_3($callBack, $preferLocal){}
}
/**
 */
class ThreadPool extends \System\Object
{
	/**
	 * @var \System\Boolean
	 * @field
	 */
	protected readonly $UsePortableThreadPool;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	protected readonly $UsePortableThreadPoolForIO;
	/**
	 * @var \System\Threading\ThreadPoolWorkQueue
	 * @field
	 */
	protected readonly $s_workQueue;
	/**
	 * @var \System\Action_1[System\Object]
	 * @field
	 */
	protected readonly $s_invokeAsyncStateMachineBox;
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
	 * @var \System\Int64
	 * @property
	 */
	public readonly $PendingWorkItemCount;
	/**
	 * @return \System\Boolean
	 */
	protected static function get_YieldFromDispatchLoop(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InitializeConfigAndDetermineUsePortableThreadPool(){}
	/**
	 * @param \System\Int32|int $configVariableIndex
	 * @param \System\UInt32& $configValue
	 * @param \System\Boolean& $isBoolean
	 * @param \System\Char*& $appContextConfigName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetNextConfigUInt32Value($configVariableIndex, $configValue, $isBoolean, $appContextConfigName){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetEnableWorkerTracking(){}
	/**
	 * @param \System\Int32|int $ioCompletionThreads
	 * @return \System\Boolean
	 */
	protected static function CanSetMinIOCompletionThreads($ioCompletionThreads){}
	/**
	 * @param \System\Int32|int $ioCompletionThreads
	 * @return \System\Void|void
	 */
	protected static function SetMinIOCompletionThreads($ioCompletionThreads){}
	/**
	 * @param \System\Int32|int $ioCompletionThreads
	 * @return \System\Boolean
	 */
	protected static function CanSetMaxIOCompletionThreads($ioCompletionThreads){}
	/**
	 * @param \System\Int32|int $ioCompletionThreads
	 * @return \System\Void|void
	 */
	protected static function SetMaxIOCompletionThreads($ioCompletionThreads){}
	/**
	 * @param \System\Int32|int $workerThreads
	 * @param \System\Int32|int $completionPortThreads
	 * @return \System\Boolean
	 */
	public static function SetMaxThreads($workerThreads, $completionPortThreads){}
	/**
	 * @param \System\Int32& $workerThreads
	 * @param \System\Int32& $completionPortThreads
	 * @return \System\Void|void
	 */
	public static function GetMaxThreads($workerThreads, $completionPortThreads){}
	/**
	 * @param \System\Int32|int $workerThreads
	 * @param \System\Int32|int $completionPortThreads
	 * @return \System\Boolean
	 */
	public static function SetMinThreads($workerThreads, $completionPortThreads){}
	/**
	 * @param \System\Int32& $workerThreads
	 * @param \System\Int32& $completionPortThreads
	 * @return \System\Void|void
	 */
	public static function GetMinThreads($workerThreads, $completionPortThreads){}
	/**
	 * @param \System\Int32& $workerThreads
	 * @param \System\Int32& $completionPortThreads
	 * @return \System\Void|void
	 */
	public static function GetAvailableThreads($workerThreads, $completionPortThreads){}
	/**
	 * @return \System\Int32|int
	 */
	public static function get_ThreadCount(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetThreadCount(){}
	/**
	 * @return \System\Int64|int
	 */
	public static function get_CompletedWorkItemCount(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetCompletedWorkItemCount(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_PendingUnmanagedWorkItemCount(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetPendingUnmanagedWorkItemCount(){}
	/**
	 * @uses ThreadPoolMethodsOverride::RegisterWaitForSingleObject_1 ($waitObject, $callBack, $state, $millisecondsTimeOutInterval, $executeOnlyOnce, $flowExecutionContext)
	 * @uses ThreadPoolMethodsOverride::RegisterWaitForSingleObject_2 ($waitObject, $callBack, $state, $millisecondsTimeOutInterval, $executeOnlyOnce)
	 * @uses ThreadPoolMethodsOverride::RegisterWaitForSingleObject_3 ($waitObject, $callBack, $state, $millisecondsTimeOutInterval, $executeOnlyOnce)
	 * @uses ThreadPoolMethodsOverride::RegisterWaitForSingleObject_4 ($waitObject, $callBack, $state, $millisecondsTimeOutInterval, $executeOnlyOnce)
	 * @uses ThreadPoolMethodsOverride::RegisterWaitForSingleObject_5 ($waitObject, $callBack, $state, $timeout, $executeOnlyOnce)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function RegisterWaitForSingleObject(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	protected static function RequestWorkerThread(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function RequestWorkerThreadNative(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function EnsureGateThreadRunning(){}
	/**
	 * @param \System\Int32|int $cpuUtilization
	 * @return \System\Boolean
	 */
	protected static function PerformRuntimeSpecificGateActivities($cpuUtilization){}
	/**
	 * @param \System\Int32|int $cpuUtilization
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function PerformRuntimeSpecificGateActivitiesNative($cpuUtilization){}
	/**
	 * @param \System\IntPtr $callback
	 * @param \System\IntPtr $state
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function UnsafeQueueUnmanagedWorkItem($callback, $state){}
	/**
	 * @param \System\Int32|int $workerThreads
	 * @param \System\Int32|int $completionPortThreads
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetMinThreadsNative($workerThreads, $completionPortThreads){}
	/**
	 * @param \System\Int32|int $workerThreads
	 * @param \System\Int32|int $completionPortThreads
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetMaxThreadsNative($workerThreads, $completionPortThreads){}
	/**
	 * @param \System\Int32& $workerThreads
	 * @param \System\Int32& $completionPortThreads
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetMinThreadsNative($workerThreads, $completionPortThreads){}
	/**
	 * @param \System\Int32& $workerThreads
	 * @param \System\Int32& $completionPortThreads
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetMaxThreadsNative($workerThreads, $completionPortThreads){}
	/**
	 * @param \System\Int32& $workerThreads
	 * @param \System\Int32& $completionPortThreads
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetAvailableThreadsNative($workerThreads, $completionPortThreads){}
	/**
	 * @param \System\Object|object $threadLocalCompletionCountObject
	 * @param \System\Int32|int $currentTimeMs
	 * @return \System\Boolean
	 */
	protected static function NotifyWorkItemComplete($threadLocalCompletionCountObject, $currentTimeMs){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function NotifyWorkItemCompleteNative(){}
	/**
	 * @param \System\Boolean $isWorking
	 * @return \System\Void|void
	 */
	protected static function ReportThreadStatus($isWorking){}
	/**
	 * @param \System\Boolean $isWorking
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ReportThreadStatusNative($isWorking){}
	/**
	 * @return \System\Void|void
	 */
	protected static function NotifyWorkItemProgress(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function NotifyWorkItemProgressNative(){}
	/**
	 * @return \System\Boolean
	 */
	protected static function NotifyThreadBlocked(){}
	/**
	 * @return \System\Void|void
	 */
	protected static function NotifyThreadUnblocked(){}
	/**
	 * @return \System\Object|object
	 */
	protected static function GetOrCreateThreadLocalCompletionCountObject(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetEnableWorkerTrackingNative(){}
	/**
	 * @param \System\Threading\WaitHandle $waitHandle
	 * @param \System\Object|object $state
	 * @param \System\UInt32 $timeOutInterval
	 * @param \System\Boolean $executeOnlyOnce
	 * @param \System\Threading\RegisteredWaitHandle $registeredWaitHandle
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function RegisterWaitForSingleObjectNative($waitHandle, $state, $timeOutInterval, $executeOnlyOnce, $registeredWaitHandle){}
	/**
	 * @param \System\Threading\NativeOverlapped* $overlapped
	 * @return \System\Boolean
	 */
	public static function UnsafeQueueNativeOverlapped($overlapped){}
	/**
	 * @param \System\Threading\NativeOverlapped* $overlapped
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function PostQueuedCompletionStatus($overlapped){}
	/**
	 * @uses ThreadPoolMethodsOverride::BindHandle_1 ($osHandle)
	 * @uses ThreadPoolMethodsOverride::BindHandle_2 ($osHandle)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function BindHandle(mixed ...$args){}
	/**
	 * @param \System\IntPtr $fileHandle
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function BindIOCompletionCallbackNative($fileHandle){}
	/**
	 * @return \System\Boolean
	 */
	protected static function get_EnableWorkerTracking(){}
	/**
	 * @uses ThreadPoolMethodsOverride::UnsafeRegisterWaitForSingleObject_1 ($waitObject, $callBack, $state, $millisecondsTimeOutInterval, $executeOnlyOnce)
	 * @uses ThreadPoolMethodsOverride::UnsafeRegisterWaitForSingleObject_2 ($waitObject, $callBack, $state, $millisecondsTimeOutInterval, $executeOnlyOnce)
	 * @uses ThreadPoolMethodsOverride::UnsafeRegisterWaitForSingleObject_3 ($waitObject, $callBack, $state, $millisecondsTimeOutInterval, $executeOnlyOnce)
	 * @uses ThreadPoolMethodsOverride::UnsafeRegisterWaitForSingleObject_4 ($waitObject, $callBack, $state, $timeout, $executeOnlyOnce)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function UnsafeRegisterWaitForSingleObject(mixed ...$args){}
	/**
	 * @uses ThreadPoolMethodsOverride::QueueUserWorkItem_1 ($callBack)
	 * @uses ThreadPoolMethodsOverride::QueueUserWorkItem_2 ($callBack, $state)
	 * @uses ThreadPoolMethodsOverride::QueueUserWorkItem_3 ($callBack, $state, $preferLocal)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function QueueUserWorkItem(mixed ...$args){}
	/**
	 * @uses ThreadPoolMethodsOverride::UnsafeQueueUserWorkItem_1 ($callBack, $state, $preferLocal)
	 * @uses ThreadPoolMethodsOverride::UnsafeQueueUserWorkItem_2 ($callBack, $state)
	 * @uses ThreadPoolMethodsOverride::UnsafeQueueUserWorkItem_3 ($callBack, $preferLocal)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function UnsafeQueueUserWorkItem(mixed ...$args){}
	/**
	 * @param \System\Object|object $callBack
	 * @param \System\Boolean $preferLocal
	 * @return \System\Void|void
	 */
	protected static function UnsafeQueueUserWorkItemInternal($callBack, $preferLocal){}
	/**
	 * @param \System\Threading\IThreadPoolWorkItem $callBack
	 * @return \System\Void|void
	 */
	protected static function UnsafeQueueHighPriorityWorkItemInternal($callBack){}
	/**
	 * @param \System\Object|object $workItem
	 * @return \System\Boolean
	 */
	protected static function TryPopCustomWorkItem($workItem){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	protected static function GetQueuedWorkItems(){}
	/**
	 * @return \System\Int64|int
	 */
	public static function get_PendingWorkItemCount(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
