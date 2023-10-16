<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait SpinLockMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function TryEnter_1($lockTaken){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function TryEnter_2($timeout, $lockTaken){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function TryEnter_3($millisecondsTimeout, $lockTaken){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Exit_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Exit_2($useMemoryBarrier){}
}
/**
 */
class SpinLock extends \System\ValueType
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsHeld;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsHeldByCurrentThread;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsThreadOwnerTrackingEnabled;
	/**
	 * @param \System\Int32& $location
	 * @param \System\Int32|int $value
	 * @param \System\Int32|int $comparand
	 * @param \System\Boolean& $success
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CompareExchange($location, $value, $comparand, $success){}
	/**
	 * @param \System\Boolean& $lockTaken
	 * @return \System\Void|void
	 */
	public  function Enter($lockTaken){}
	/**
	 * @uses SpinLockMethodsOverride::TryEnter_1 ($lockTaken)
	 * @uses SpinLockMethodsOverride::TryEnter_2 ($timeout, $lockTaken)
	 * @uses SpinLockMethodsOverride::TryEnter_3 ($millisecondsTimeout, $lockTaken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function TryEnter(mixed ...$args){}
	/**
	 * @param \System\Int32|int $millisecondsTimeout
	 * @param \System\Boolean& $lockTaken
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ContinueTryEnter($millisecondsTimeout, $lockTaken){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function DecrementWaiters(){}
	/**
	 * @param \System\Int32|int $millisecondsTimeout
	 * @param \System\UInt32 $startTime
	 * @param \System\Boolean& $lockTaken
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ContinueTryEnterWithThreadTracking($millisecondsTimeout, $startTime, $lockTaken){}
	/**
	 * @uses SpinLockMethodsOverride::Exit_1 ()
	 * @uses SpinLockMethodsOverride::Exit_2 ($useMemoryBarrier)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Exit(mixed ...$args){}
	/**
	 * @param \System\Boolean $useMemoryBarrier
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ExitSlowPath($useMemoryBarrier){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsHeld(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsHeldByCurrentThread(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsThreadOwnerTrackingEnabled(){}
}
