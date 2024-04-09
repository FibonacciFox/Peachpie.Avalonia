<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait SpinLockOverride {
	/**
	 * @deprecated
	 * @param \System\Boolean& $lockTaken
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function TryEnter_1 ($lockTaken){}
	/**
	 * @deprecated
	 * @param \System\TimeSpan $timeout
	 * @param \System\Boolean& $lockTaken
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function TryEnter_2 ($timeout, $lockTaken){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $millisecondsTimeout
	 * @param \System\Boolean& $lockTaken
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function TryEnter_3 ($millisecondsTimeout, $lockTaken){}
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Exit_1 (){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $useMemoryBarrier
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Exit_2 ($useMemoryBarrier){}
}
final class SpinLock extends \System\ValueType
{
	use SpinLockOverride;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsHeld;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsHeldByCurrentThread;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsThreadOwnerTrackingEnabled;
	private static function CompareExchange($location, $value, $comparand, $success){}
	/**
	 * @param \System\Boolean& $lockTaken
	 * @return \System\Void|void
	 */
	public function Enter($lockTaken){}
	/**
	 * @uses SpinLockOverride::TryEnter_1 <br>public , args: ($lockTaken)<br>
	 * @uses SpinLockOverride::TryEnter_2 <br>public , args: ($timeout, $lockTaken)<br>
	 * @uses SpinLockOverride::TryEnter_3 <br>public , args: ($millisecondsTimeout, $lockTaken)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function TryEnter (\override ...$args){}
	private function ContinueTryEnter($millisecondsTimeout, $lockTaken){}
	private function DecrementWaiters(){}
	private function ContinueTryEnterWithThreadTracking($millisecondsTimeout, $startTime, $lockTaken){}
	/**
	 * @uses SpinLockOverride::Exit_1 <br>public , args: ()<br>
	 * @uses SpinLockOverride::Exit_2 <br>public , args: ($useMemoryBarrier)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Exit (\override ...$args){}
	private function ExitSlowPath($useMemoryBarrier){}
	/**
	 * @param \System\Boolean|bool $enableThreadOwnerTracking
	 */
	public function __construct($enableThreadOwnerTracking){}
}