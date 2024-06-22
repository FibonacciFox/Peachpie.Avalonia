<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ReaderWriterLockSlimOverride {
	/**
	 * @deprecated
	 * @param \System\TimeSpan $timeout
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function TryEnterReadLock_1 ($timeout){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $millisecondsTimeout
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function TryEnterReadLock_2 ($millisecondsTimeout){}
	/**
	 * @deprecated
	 * @param \System\Threading\ReaderWriterLockSlim+TimeoutTracker $timeout
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private function TryEnterReadLock_3 ($timeout){}
	/**
	 * @deprecated
	 * @param \System\TimeSpan $timeout
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function TryEnterWriteLock_1 ($timeout){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $millisecondsTimeout
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function TryEnterWriteLock_2 ($millisecondsTimeout){}
	/**
	 * @deprecated
	 * @param \System\Threading\ReaderWriterLockSlim+TimeoutTracker $timeout
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private function TryEnterWriteLock_3 ($timeout){}
	/**
	 * @deprecated
	 * @param \System\TimeSpan $timeout
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function TryEnterUpgradeableReadLock_1 ($timeout){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $millisecondsTimeout
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function TryEnterUpgradeableReadLock_2 ($millisecondsTimeout){}
	/**
	 * @deprecated
	 * @param \System\Threading\ReaderWriterLockSlim+TimeoutTracker $timeout
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private function TryEnterUpgradeableReadLock_3 ($timeout){}
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Dispose_1 (){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $disposing
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function Dispose_2 ($disposing){}
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\Threading\LockRecursionPolicy $recursionPolicy
	 */
	#[MethodOverride]public function __construct_2 ($recursionPolicy){}
}
class ReaderWriterLockSlim extends \System\Object implements
	\System\IDisposable
{
	use ReaderWriterLockSlimOverride;

	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsReadLockHeld;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsUpgradeableReadLockHeld;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsWriteLockHeld;
	/**
	 * @property
	 * @var \System\Threading\LockRecursionPolicy
	 * @since readonly
	 */
	public $RecursionPolicy;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $CurrentReadCount;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $RecursiveReadCount;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $RecursiveUpgradeCount;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $RecursiveWriteCount;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $WaitingReadCount;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $WaitingUpgradeCount;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $WaitingWriteCount;
	private function InitializeThreadCounts(){}
	private static function IsRWEntryEmpty($rwc){}
	private function IsRwHashEntryChanged($lrwc){}
	private function GetThreadRWCount($dontAllocate){}
	/**
	 * @return \System\Void|void
	 */
	public function EnterReadLock(){}
	/**
	 * @uses ReaderWriterLockSlimOverride::TryEnterReadLock_1 <br>public , args: ($timeout)<br>
	 * @uses ReaderWriterLockSlimOverride::TryEnterReadLock_2 <br>public , args: ($millisecondsTimeout)<br>
	 * @uses ReaderWriterLockSlimOverride::TryEnterReadLock_3 <br>private , args: ($timeout)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function TryEnterReadLock (\override ...$args){}
	private function TryEnterReadLockCore($timeout){}
	/**
	 * @return \System\Void|void
	 */
	public function EnterWriteLock(){}
	/**
	 * @uses ReaderWriterLockSlimOverride::TryEnterWriteLock_1 <br>public , args: ($timeout)<br>
	 * @uses ReaderWriterLockSlimOverride::TryEnterWriteLock_2 <br>public , args: ($millisecondsTimeout)<br>
	 * @uses ReaderWriterLockSlimOverride::TryEnterWriteLock_3 <br>private , args: ($timeout)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function TryEnterWriteLock (\override ...$args){}
	private function TryEnterWriteLockCore($timeout){}
	/**
	 * @return \System\Void|void
	 */
	public function EnterUpgradeableReadLock(){}
	/**
	 * @uses ReaderWriterLockSlimOverride::TryEnterUpgradeableReadLock_1 <br>public , args: ($timeout)<br>
	 * @uses ReaderWriterLockSlimOverride::TryEnterUpgradeableReadLock_2 <br>public , args: ($millisecondsTimeout)<br>
	 * @uses ReaderWriterLockSlimOverride::TryEnterUpgradeableReadLock_3 <br>private , args: ($timeout)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function TryEnterUpgradeableReadLock (\override ...$args){}
	private function TryEnterUpgradeableReadLockCore($timeout){}
	/**
	 * @return \System\Void|void
	 */
	public function ExitReadLock(){}
	/**
	 * @return \System\Void|void
	 */
	public function ExitWriteLock(){}
	/**
	 * @return \System\Void|void
	 */
	public function ExitUpgradeableReadLock(){}
	private function LazyCreateEvent($waitEvent, $enterLockType){}
	private function WaitOnEvent($waitEvent, $numWaiters, $timeout, $enterLockType){}
	private function ExitAndWakeUpAppropriateWaiters(){}
	private function ExitAndWakeUpAppropriateWaitersPreferringWriters(){}
	private function ExitAndWakeUpAppropriateReadWaiters(){}
	private function IsWriterAcquired(){}
	private function SetWriterAcquired(){}
	private function ClearWriterAcquired(){}
	private function SetWritersWaiting(){}
	private function ClearWritersWaiting(){}
	private function SetUpgraderWaiting(){}
	private function ClearUpgraderWaiting(){}
	private function GetNumReaders(){}
	private function ShouldSpinForEnterAnyRead(){}
	private function ShouldSpinForEnterAnyWrite($isUpgradeToWrite){}
	private static function SpinWait($spinCount){}
	/**
	 * @uses ReaderWriterLockSlimOverride::Dispose_1 <br>public , args: ()<br>
	 * @uses ReaderWriterLockSlimOverride::Dispose_2 <br>private , args: ($disposing)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Dispose (\override ...$args){}
	/**
	 * @uses ReaderWriterLockSlimOverride::__construct_1 <br>public , args: ()<br>
	 * @uses ReaderWriterLockSlimOverride::__construct_2 <br>public , args: ($recursionPolicy)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}