<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ReaderWriterLockMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function AcquireReaderLock_1($millisecondsTimeout){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function AcquireReaderLock_2($timeout){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function AcquireWriterLock_1($millisecondsTimeout){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function AcquireWriterLock_2($timeout){}
	/**
	 * @return \System\Threading\LockCookie
	 */
	#[MethodOverride] public  function UpgradeToWriterLock_1($millisecondsTimeout){}
	/**
	 * @return \System\Threading\LockCookie
	 */
	#[MethodOverride] public  function UpgradeToWriterLock_2($timeout){}
}
/**
 */
class ReaderWriterLock extends \System\Runtime\ConstrainedExecution\CriticalFinalizerObject
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsReaderLockHeld;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsWriterLockHeld;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $WriterSeqNum;
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsReaderLockHeld(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsWriterLockHeld(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_WriterSeqNum(){}
	/**
	 * @param \System\Int32|int $seqNum
	 * @return \System\Boolean
	 */
	public  function AnyWritersSince($seqNum){}
	/**
	 * @uses ReaderWriterLockMethodsOverride::AcquireReaderLock_1 ($millisecondsTimeout)
	 * @uses ReaderWriterLockMethodsOverride::AcquireReaderLock_2 ($timeout)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AcquireReaderLock(mixed ...$args){}
	/**
	 * @uses ReaderWriterLockMethodsOverride::AcquireWriterLock_1 ($millisecondsTimeout)
	 * @uses ReaderWriterLockMethodsOverride::AcquireWriterLock_2 ($timeout)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AcquireWriterLock(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public  function ReleaseReaderLock(){}
	/**
	 * @return \System\Void|void
	 */
	public  function ReleaseWriterLock(){}
	/**
	 * @uses ReaderWriterLockMethodsOverride::UpgradeToWriterLock_1 ($millisecondsTimeout)
	 * @uses ReaderWriterLockMethodsOverride::UpgradeToWriterLock_2 ($timeout)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function UpgradeToWriterLock(mixed ...$args){}
	/**
	 * @param \System\Threading\LockCookie& $lockCookie
	 * @return \System\Void|void
	 */
	public  function DowngradeFromWriterLock($lockCookie){}
	/**
	 * @return \System\Threading\LockCookie
	 */
	public  function ReleaseLock(){}
	/**
	 * @param \System\Threading\LockCookie& $lockCookie
	 * @return \System\Void|void
	 */
	public  function RestoreLock($lockCookie){}
	/**
	 * @param \System\Threading\LockCookie& $lockCookie
	 * @param \System\Threading\LockCookieFlags $flags
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function RecoverLock($lockCookie, $flags){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetCurrentThreadID(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function YieldProcessor(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetOrCreateReaderEvent(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetOrCreateWriterEvent(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryGetOrCreateReaderEvent(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryGetOrCreateWriterEvent(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ReleaseEvents(){}
	/**
	 * @param \System\String|string $parameterName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetInvalidTimeoutException($parameterName){}
	/**
	 * @param \System\TimeSpan $timeout
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ToTimeoutMilliseconds($timeout){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetTimeoutException(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetNotOwnerException(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetInvalidLockCookieException(){}
}
