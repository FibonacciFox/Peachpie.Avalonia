<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ReaderWriterLockSlimMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function TryEnterReadLock_1($timeout){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function TryEnterReadLock_2($millisecondsTimeout){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function TryEnterReadLock_3($timeout){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function TryEnterWriteLock_1($timeout){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function TryEnterWriteLock_2($millisecondsTimeout){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function TryEnterWriteLock_3($timeout){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function TryEnterUpgradeableReadLock_1($timeout){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function TryEnterUpgradeableReadLock_2($millisecondsTimeout){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function TryEnterUpgradeableReadLock_3($timeout){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Dispose_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Dispose_2($disposing){}
}
/**
 */
class ReaderWriterLockSlim extends \System\Object implements 
	\System\IDisposable
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsReadLockHeld;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsUpgradeableReadLockHeld;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsWriteLockHeld;
	/**
	 * @var \System\Threading\LockRecursionPolicy
	 * @property
	 */
	public readonly $RecursionPolicy;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $CurrentReadCount;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $RecursiveReadCount;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $RecursiveUpgradeCount;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $RecursiveWriteCount;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $WaitingReadCount;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $WaitingUpgradeCount;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $WaitingWriteCount;
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InitializeThreadCounts(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_HasNoWaiters(){}
	/**
	 * @param \System\Boolean $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_HasNoWaiters($value){}
	/**
	 * @param \System\Threading\ReaderWriterCount $rwc
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsRWEntryEmpty($rwc){}
	/**
	 * @param \System\Threading\ReaderWriterCount $lrwc
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function IsRwHashEntryChanged($lrwc){}
	/**
	 * @param \System\Boolean $dontAllocate
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetThreadRWCount($dontAllocate){}
	/**
	 * @return \System\Void|void
	 */
	public  function EnterReadLock(){}
	/**
	 * @uses ReaderWriterLockSlimMethodsOverride::TryEnterReadLock_1 ($timeout)
	 * @uses ReaderWriterLockSlimMethodsOverride::TryEnterReadLock_2 ($millisecondsTimeout)
	 * @uses ReaderWriterLockSlimMethodsOverride::TryEnterReadLock_3 ($timeout)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function TryEnterReadLock(mixed ...$args){}
	/**
	 * @param \System\Threading\TimeoutTracker $timeout
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryEnterReadLockCore($timeout){}
	/**
	 * @return \System\Void|void
	 */
	public  function EnterWriteLock(){}
	/**
	 * @uses ReaderWriterLockSlimMethodsOverride::TryEnterWriteLock_1 ($timeout)
	 * @uses ReaderWriterLockSlimMethodsOverride::TryEnterWriteLock_2 ($millisecondsTimeout)
	 * @uses ReaderWriterLockSlimMethodsOverride::TryEnterWriteLock_3 ($timeout)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function TryEnterWriteLock(mixed ...$args){}
	/**
	 * @param \System\Threading\TimeoutTracker $timeout
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryEnterWriteLockCore($timeout){}
	/**
	 * @return \System\Void|void
	 */
	public  function EnterUpgradeableReadLock(){}
	/**
	 * @uses ReaderWriterLockSlimMethodsOverride::TryEnterUpgradeableReadLock_1 ($timeout)
	 * @uses ReaderWriterLockSlimMethodsOverride::TryEnterUpgradeableReadLock_2 ($millisecondsTimeout)
	 * @uses ReaderWriterLockSlimMethodsOverride::TryEnterUpgradeableReadLock_3 ($timeout)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function TryEnterUpgradeableReadLock(mixed ...$args){}
	/**
	 * @param \System\Threading\TimeoutTracker $timeout
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryEnterUpgradeableReadLockCore($timeout){}
	/**
	 * @return \System\Void|void
	 */
	public  function ExitReadLock(){}
	/**
	 * @return \System\Void|void
	 */
	public  function ExitWriteLock(){}
	/**
	 * @return \System\Void|void
	 */
	public  function ExitUpgradeableReadLock(){}
	/**
	 * @param \System\Threading\EventWaitHandle& $waitEvent
	 * @param \System\Threading\EnterLockType $enterLockType
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function LazyCreateEvent($waitEvent, $enterLockType){}
	/**
	 * @param \System\Threading\EventWaitHandle $waitEvent
	 * @param \System\UInt32& $numWaiters
	 * @param \System\Threading\TimeoutTracker $timeout
	 * @param \System\Threading\EnterLockType $enterLockType
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function WaitOnEvent($waitEvent, $numWaiters, $timeout, $enterLockType){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ExitAndWakeUpAppropriateWaiters(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ExitAndWakeUpAppropriateWaitersPreferringWriters(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ExitAndWakeUpAppropriateReadWaiters(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function IsWriterAcquired(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetWriterAcquired(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ClearWriterAcquired(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetWritersWaiting(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ClearWritersWaiting(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetUpgraderWaiting(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ClearUpgraderWaiting(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetNumReaders(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ShouldSpinForEnterAnyRead(){}
	/**
	 * @param \System\Boolean $isUpgradeToWrite
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ShouldSpinForEnterAnyWrite($isUpgradeToWrite){}
	/**
	 * @param \System\Int32|int $spinCount
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SpinWait($spinCount){}
	/**
	 * @uses ReaderWriterLockSlimMethodsOverride::Dispose_1 ()
	 * @uses ReaderWriterLockSlimMethodsOverride::Dispose_2 ($disposing)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsReadLockHeld(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsUpgradeableReadLockHeld(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsWriteLockHeld(){}
	/**
	 * @return \System\Threading\LockRecursionPolicy
	 */
	public  function get_RecursionPolicy(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_CurrentReadCount(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_RecursiveReadCount(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_RecursiveUpgradeCount(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_RecursiveWriteCount(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_WaitingReadCount(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_WaitingUpgradeCount(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_WaitingWriteCount(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
