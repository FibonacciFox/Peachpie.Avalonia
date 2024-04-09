<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait PortableThreadPoolOverride {
	/**
	 * @deprecated
	 * @param \System\Object|object $threadLocalCompletionCountObject
	 * @param \System\Int32|int $currentTimeMs
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function NotifyWorkItemProgress_1 ($threadLocalCompletionCountObject, $currentTimeMs){}
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function NotifyWorkItemProgress_2 (){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $previousDelayElapsed
	 * @return \System\UInt32
	 */
	#[MethodOverride]private function PerformBlockingAdjustment_1 ($previousDelayElapsed){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $previousDelayElapsed
	 * @param \System\Boolean& &$addWorker
	 * @return \System\UInt32
	 */
	#[MethodOverride]private function PerformBlockingAdjustment_2 ($previousDelayElapsed, &$addWorker){}
}
final class PortableThreadPool extends \System\Object
{
	use PortableThreadPoolOverride;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Threading\PortableThreadPool
	 */
	public static $ThreadPoolInstance;
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
	 * @var \System\Int16
	 * @since readonly
	 */
	public $MinThreadsGoal;
	private static function DetermineThreadPoolThreadTimeoutMs(){}
	/**
	 * @param \System\Int32|int $workerThreads
	 * @param \System\Int32|int $ioCompletionThreads
	 * @return \System\Boolean|bool
	 */
	public function SetMinThreads($workerThreads, $ioCompletionThreads){}
	/**
	 * @param \System\Int32& &$workerThreads
	 * @param \System\Int32& &$ioCompletionThreads
	 * @return \System\Void|void
	 */
	public function GetMinThreads(&$workerThreads, &$ioCompletionThreads){}
	/**
	 * @param \System\Int32|int $workerThreads
	 * @param \System\Int32|int $ioCompletionThreads
	 * @return \System\Boolean|bool
	 */
	public function SetMaxThreads($workerThreads, $ioCompletionThreads){}
	/**
	 * @param \System\Int32& &$workerThreads
	 * @param \System\Int32& &$ioCompletionThreads
	 * @return \System\Void|void
	 */
	public function GetMaxThreads(&$workerThreads, &$ioCompletionThreads){}
	/**
	 * @param \System\Int32& &$workerThreads
	 * @param \System\Int32& &$ioCompletionThreads
	 * @return \System\Void|void
	 */
	public function GetAvailableThreads(&$workerThreads, &$ioCompletionThreads){}
	/**
	 * @return \System\Object|object
	 */
	public function GetOrCreateThreadLocalCompletionCountObject(){}
	private function CreateThreadLocalCompletionCountObject(){}
	/**
	 * @uses PortableThreadPoolOverride::NotifyWorkItemProgress_1 <br>private , args: ($threadLocalCompletionCountObject, $currentTimeMs)<br>
	 * @uses PortableThreadPoolOverride::NotifyWorkItemProgress_2 <br>protected , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function NotifyWorkItemProgress (\override ...$args){}
	/**
	 * @param \System\Object|object $threadLocalCompletionCountObject
	 * @param \System\Int32|int $currentTimeMs
	 * @return \System\Boolean|bool
	 */
	protected function NotifyWorkItemComplete($threadLocalCompletionCountObject, $currentTimeMs){}
	private function AdjustMaxWorkersActive(){}
	private function ShouldAdjustMaxWorkersActive($currentTimeMs){}
	/**
	 * @return \System\Void|void
	 */
	protected function RequestWorker(){}
	private function OnGen2GCCallback(){}
	/**
	 * @return \System\Boolean|bool
	 */
	public function NotifyThreadBlocked(){}
	/**
	 * @return \System\Void|void
	 */
	public function NotifyThreadUnblocked(){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses PortableThreadPoolOverride::PerformBlockingAdjustment_1 <br>private , args: ($previousDelayElapsed)<br>
	 * @uses PortableThreadPoolOverride::PerformBlockingAdjustment_2 <br>private , args: ($previousDelayElapsed, &$addWorker)<br>
	 * @var mixed|\override ...$args
	 * @return \System\UInt32|mixed|\override
	 */
	#[MethodOverridePrivate]function PerformBlockingAdjustment (\override ...$args){}
	/**
	 * @return \System\Void|void
	 */
	protected static function EnsureGateThreadRunning(){}
	/**
	 * @param \System\Threading\RegisteredWaitHandle $handle
	 * @return \System\Void|void
	 */
	protected function RegisterWaitHandle($handle){}
	/**
	 * @param \System\Threading\RegisteredWaitHandle $handle
	 * @param \System\Boolean|bool $timedOut
	 * @return \System\Void|void
	 */
	protected static function CompleteWait($handle, $timedOut){}
	private function TryRemoveWaitThread($thread){}
	private function RemoveWaitThread($thread){}
	/**
	 * @param \System\Boolean|bool $isProcessingUserCallback
	 * @return \System\Void|void
	 */
	public function ReportThreadStatus($isProcessingUserCallback){}
	private function GetAndResetHighWatermarkCountOfThreadsProcessingUserCallbacks(){}
}