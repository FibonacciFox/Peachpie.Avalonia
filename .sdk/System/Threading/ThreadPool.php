<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ThreadPoolOverride {
	/**
	 * @deprecated
	 * @param \System\Threading\WaitHandle $waitObject
	 * @param \System\Threading\WaitOrTimerCallback $callBack
	 * @param \System\Object|object $state
	 * @param \System\UInt32 $millisecondsTimeOutInterval
	 * @param \System\Boolean|bool $executeOnlyOnce
	 * @param \System\Boolean|bool $flowExecutionContext
	 * @return \System\Threading\RegisteredWaitHandle
	 */
	#[MethodOverride]private static function RegisterWaitForSingleObject_1 ($waitObject, $callBack, $state, $millisecondsTimeOutInterval, $executeOnlyOnce, $flowExecutionContext){}
	/**
	 * @deprecated
	 * @param \System\Threading\WaitHandle $waitObject
	 * @param \System\Threading\WaitOrTimerCallback $callBack
	 * @param \System\Object|object $state
	 * @param \System\UInt32 $millisecondsTimeOutInterval
	 * @param \System\Boolean|bool $executeOnlyOnce
	 * @return \System\Threading\RegisteredWaitHandle
	 */
	#[MethodOverride]public static function RegisterWaitForSingleObject_2 ($waitObject, $callBack, $state, $millisecondsTimeOutInterval, $executeOnlyOnce){}
	/**
	 * @deprecated
	 * @param \System\Threading\WaitHandle $waitObject
	 * @param \System\Threading\WaitOrTimerCallback $callBack
	 * @param \System\Object|object $state
	 * @param \System\Int32|int $millisecondsTimeOutInterval
	 * @param \System\Boolean|bool $executeOnlyOnce
	 * @return \System\Threading\RegisteredWaitHandle
	 */
	#[MethodOverride]public static function RegisterWaitForSingleObject_3 ($waitObject, $callBack, $state, $millisecondsTimeOutInterval, $executeOnlyOnce){}
	/**
	 * @deprecated
	 * @param \System\Threading\WaitHandle $waitObject
	 * @param \System\Threading\WaitOrTimerCallback $callBack
	 * @param \System\Object|object $state
	 * @param \System\Int64|int $millisecondsTimeOutInterval
	 * @param \System\Boolean|bool $executeOnlyOnce
	 * @return \System\Threading\RegisteredWaitHandle
	 */
	#[MethodOverride]public static function RegisterWaitForSingleObject_4 ($waitObject, $callBack, $state, $millisecondsTimeOutInterval, $executeOnlyOnce){}
	/**
	 * @deprecated
	 * @param \System\Threading\WaitHandle $waitObject
	 * @param \System\Threading\WaitOrTimerCallback $callBack
	 * @param \System\Object|object $state
	 * @param \System\TimeSpan $timeout
	 * @param \System\Boolean|bool $executeOnlyOnce
	 * @return \System\Threading\RegisteredWaitHandle
	 */
	#[MethodOverride]public static function RegisterWaitForSingleObject_5 ($waitObject, $callBack, $state, $timeout, $executeOnlyOnce){}
	/**
	 * @deprecated
	 * @param \System\Threading\WaitHandle $waitObject
	 * @param \System\Threading\WaitOrTimerCallback $callBack
	 * @param \System\Object|object $state
	 * @param \System\UInt32 $millisecondsTimeOutInterval
	 * @param \System\Boolean|bool $executeOnlyOnce
	 * @return \System\Threading\RegisteredWaitHandle
	 */
	#[MethodOverride]public static function UnsafeRegisterWaitForSingleObject_1 ($waitObject, $callBack, $state, $millisecondsTimeOutInterval, $executeOnlyOnce){}
	/**
	 * @deprecated
	 * @param \System\Threading\WaitHandle $waitObject
	 * @param \System\Threading\WaitOrTimerCallback $callBack
	 * @param \System\Object|object $state
	 * @param \System\Int32|int $millisecondsTimeOutInterval
	 * @param \System\Boolean|bool $executeOnlyOnce
	 * @return \System\Threading\RegisteredWaitHandle
	 */
	#[MethodOverride]public static function UnsafeRegisterWaitForSingleObject_2 ($waitObject, $callBack, $state, $millisecondsTimeOutInterval, $executeOnlyOnce){}
	/**
	 * @deprecated
	 * @param \System\Threading\WaitHandle $waitObject
	 * @param \System\Threading\WaitOrTimerCallback $callBack
	 * @param \System\Object|object $state
	 * @param \System\Int64|int $millisecondsTimeOutInterval
	 * @param \System\Boolean|bool $executeOnlyOnce
	 * @return \System\Threading\RegisteredWaitHandle
	 */
	#[MethodOverride]public static function UnsafeRegisterWaitForSingleObject_3 ($waitObject, $callBack, $state, $millisecondsTimeOutInterval, $executeOnlyOnce){}
	/**
	 * @deprecated
	 * @param \System\Threading\WaitHandle $waitObject
	 * @param \System\Threading\WaitOrTimerCallback $callBack
	 * @param \System\Object|object $state
	 * @param \System\TimeSpan $timeout
	 * @param \System\Boolean|bool $executeOnlyOnce
	 * @return \System\Threading\RegisteredWaitHandle
	 */
	#[MethodOverride]public static function UnsafeRegisterWaitForSingleObject_4 ($waitObject, $callBack, $state, $timeout, $executeOnlyOnce){}
	/**
	 * @deprecated
	 * @param \System\Threading\WaitCallback $callBack
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function QueueUserWorkItem_1 ($callBack){}
	/**
	 * @deprecated
	 * @param \System\Threading\WaitCallback $callBack
	 * @param \System\Object|object $state
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function QueueUserWorkItem_2 ($callBack, $state){}
	/**
	 * @deprecated
	 * @param \System\Action_1 $callBack [generic: TState]
	 * @param \TState $state
	 * @param \System\Boolean|bool $preferLocal
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function QueueUserWorkItem_3 ($callBack, $state, $preferLocal){}
	/**
	 * @deprecated
	 * @param \System\Action_1 $callBack [generic: TState]
	 * @param \TState $state
	 * @param \System\Boolean|bool $preferLocal
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function UnsafeQueueUserWorkItem_1 ($callBack, $state, $preferLocal){}
	/**
	 * @deprecated
	 * @param \System\Threading\WaitCallback $callBack
	 * @param \System\Object|object $state
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function UnsafeQueueUserWorkItem_2 ($callBack, $state){}
	/**
	 * @deprecated
	 * @param \System\Threading\IThreadPoolWorkItem $callBack
	 * @param \System\Boolean|bool $preferLocal
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function UnsafeQueueUserWorkItem_3 ($callBack, $preferLocal){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $osHandle
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function BindHandle_1 ($osHandle){}
	/**
	 * @deprecated
	 * @param \System\Runtime\InteropServices\SafeHandle $osHandle
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function BindHandle_2 ($osHandle){}
}
class ThreadPool extends \System\Object
{
	use ThreadPoolOverride;

	/**
	 * @field
	 * @since readonly
	 * @var \System\Boolean|bool
	 */
	protected static $UsePortableThreadPool;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Boolean|bool
	 */
	protected static $UsePortableThreadPoolForIO;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Threading\ThreadPoolWorkQueue
	 */
	protected static $s_workQueue;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Action_1[System\Object]
	 */
	protected static $s_invokeAsyncStateMachineBox;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $ThreadCount;
	/**
	 * @property
	 * @var \System\Int64|int
	 * @since readonly
	 */
	public $CompletedWorkItemCount;
	/**
	 * @property
	 * @var \System\Int64|int
	 * @since readonly
	 */
	public $PendingWorkItemCount;
	private static function InitializeConfigAndDetermineUsePortableThreadPool(){}
	private static function GetNextConfigUInt32Value($configVariableIndex, &$configValue, &$isBoolean, &$appContextConfigName){}
	private static function GetEnableWorkerTracking(){}
	/**
	 * @param \System\Int32|int $ioCompletionThreads
	 * @return \System\Boolean|bool
	 */
	protected static function CanSetMinIOCompletionThreads($ioCompletionThreads){}
	/**
	 * @param \System\Int32|int $ioCompletionThreads
	 * @return \System\Void|void
	 */
	protected static function SetMinIOCompletionThreads($ioCompletionThreads){}
	/**
	 * @param \System\Int32|int $ioCompletionThreads
	 * @return \System\Boolean|bool
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
	 * @return \System\Boolean|bool
	 */
	public static function SetMaxThreads($workerThreads, $completionPortThreads){}
	/**
	 * @param \System\Int32& &$workerThreads
	 * @param \System\Int32& &$completionPortThreads
	 * @return \System\Void|void
	 */
	public static function GetMaxThreads(&$workerThreads, &$completionPortThreads){}
	/**
	 * @param \System\Int32|int $workerThreads
	 * @param \System\Int32|int $completionPortThreads
	 * @return \System\Boolean|bool
	 */
	public static function SetMinThreads($workerThreads, $completionPortThreads){}
	/**
	 * @param \System\Int32& &$workerThreads
	 * @param \System\Int32& &$completionPortThreads
	 * @return \System\Void|void
	 */
	public static function GetMinThreads(&$workerThreads, &$completionPortThreads){}
	/**
	 * @param \System\Int32& &$workerThreads
	 * @param \System\Int32& &$completionPortThreads
	 * @return \System\Void|void
	 */
	public static function GetAvailableThreads(&$workerThreads, &$completionPortThreads){}
	private static function GetThreadCount(){}
	private static function GetCompletedWorkItemCount(){}
	private static function GetPendingUnmanagedWorkItemCount(){}
	/**
	 * @uses ThreadPoolOverride::RegisterWaitForSingleObject_1 <br>private , args: ($waitObject, $callBack, $state, $millisecondsTimeOutInterval, $executeOnlyOnce, $flowExecutionContext)<br>
	 * @uses ThreadPoolOverride::RegisterWaitForSingleObject_2 <br>public , args: ($waitObject, $callBack, $state, $millisecondsTimeOutInterval, $executeOnlyOnce)<br>
	 * @uses ThreadPoolOverride::RegisterWaitForSingleObject_3 <br>public , args: ($waitObject, $callBack, $state, $millisecondsTimeOutInterval, $executeOnlyOnce)<br>
	 * @uses ThreadPoolOverride::RegisterWaitForSingleObject_4 <br>public , args: ($waitObject, $callBack, $state, $millisecondsTimeOutInterval, $executeOnlyOnce)<br>
	 * @uses ThreadPoolOverride::RegisterWaitForSingleObject_5 <br>public , args: ($waitObject, $callBack, $state, $timeout, $executeOnlyOnce)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Threading\RegisteredWaitHandle|mixed|\override
	 */
	#[MethodOverridePublic]function RegisterWaitForSingleObject (\override ...$args){}
	/**
	 * @return \System\Void|void
	 */
	protected static function RequestWorkerThread(){}
	private static function RequestWorkerThreadNative(){}
	private static function EnsureGateThreadRunning(){}
	/**
	 * @param \System\Int32|int $cpuUtilization
	 * @return \System\Boolean|bool
	 */
	protected static function PerformRuntimeSpecificGateActivities($cpuUtilization){}
	private static function PerformRuntimeSpecificGateActivitiesNative($cpuUtilization){}
	private static function UnsafeQueueUnmanagedWorkItem($callback, $state){}
	private static function SetMinThreadsNative($workerThreads, $completionPortThreads){}
	private static function SetMaxThreadsNative($workerThreads, $completionPortThreads){}
	private static function GetMinThreadsNative(&$workerThreads, &$completionPortThreads){}
	private static function GetMaxThreadsNative(&$workerThreads, &$completionPortThreads){}
	private static function GetAvailableThreadsNative(&$workerThreads, &$completionPortThreads){}
	/**
	 * @param \System\Object|object $threadLocalCompletionCountObject
	 * @param \System\Int32|int $currentTimeMs
	 * @return \System\Boolean|bool
	 */
	protected static function NotifyWorkItemComplete($threadLocalCompletionCountObject, $currentTimeMs){}
	private static function NotifyWorkItemCompleteNative(){}
	/**
	 * @param \System\Boolean|bool $isWorking
	 * @return \System\Void|void
	 */
	protected static function ReportThreadStatus($isWorking){}
	private static function ReportThreadStatusNative($isWorking){}
	/**
	 * @return \System\Void|void
	 */
	protected static function NotifyWorkItemProgress(){}
	private static function NotifyWorkItemProgressNative(){}
	/**
	 * @return \System\Boolean|bool
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
	private static function GetEnableWorkerTrackingNative(){}
	private static function RegisterWaitForSingleObjectNative($waitHandle, $state, $timeOutInterval, $executeOnlyOnce, $registeredWaitHandle){}
	/**
	 * @uses ThreadPoolOverride::UnsafeRegisterWaitForSingleObject_1 <br>public , args: ($waitObject, $callBack, $state, $millisecondsTimeOutInterval, $executeOnlyOnce)<br>
	 * @uses ThreadPoolOverride::UnsafeRegisterWaitForSingleObject_2 <br>public , args: ($waitObject, $callBack, $state, $millisecondsTimeOutInterval, $executeOnlyOnce)<br>
	 * @uses ThreadPoolOverride::UnsafeRegisterWaitForSingleObject_3 <br>public , args: ($waitObject, $callBack, $state, $millisecondsTimeOutInterval, $executeOnlyOnce)<br>
	 * @uses ThreadPoolOverride::UnsafeRegisterWaitForSingleObject_4 <br>public , args: ($waitObject, $callBack, $state, $timeout, $executeOnlyOnce)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Threading\RegisteredWaitHandle|mixed|\override
	 */
	#[MethodOverridePublic]function UnsafeRegisterWaitForSingleObject (\override ...$args){}
	/**
	 * @uses ThreadPoolOverride::QueueUserWorkItem_1 <br>public , args: ($callBack)<br>
	 * @uses ThreadPoolOverride::QueueUserWorkItem_2 <br>public , args: ($callBack, $state)<br>
	 * @uses ThreadPoolOverride::QueueUserWorkItem_3 <br>public , args: ($callBack, $state, $preferLocal)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function QueueUserWorkItem (\override ...$args){}
	/**
	 * @uses ThreadPoolOverride::UnsafeQueueUserWorkItem_1 <br>public , args: ($callBack, $state, $preferLocal)<br>
	 * @uses ThreadPoolOverride::UnsafeQueueUserWorkItem_2 <br>public , args: ($callBack, $state)<br>
	 * @uses ThreadPoolOverride::UnsafeQueueUserWorkItem_3 <br>public , args: ($callBack, $preferLocal)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function UnsafeQueueUserWorkItem (\override ...$args){}
	/**
	 * @param \System\Object|object $callBack
	 * @param \System\Boolean|bool $preferLocal
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
	 * @return \System\Boolean|bool
	 */
	protected static function TryPopCustomWorkItem($workItem){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1[System\Object]
	 */
	protected static function GetQueuedWorkItems(){}
	/**
	 * @param \System\Threading\NativeOverlapped* $overlapped
	 * @return \System\Boolean|bool
	 */
	public static function UnsafeQueueNativeOverlapped($overlapped){}
	/**
	 * @uses ThreadPoolOverride::BindHandle_1 <br>public , args: ($osHandle)<br>
	 * @uses ThreadPoolOverride::BindHandle_2 <br>public , args: ($osHandle)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function BindHandle (\override ...$args){}
}