<?php
namespace System\Threading;
/**
 */
class LowLevelLock extends \System\Object implements 
	\System\IDisposable
{
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @return \System\Boolean
	 */
	public  function TryAcquire(){}
	/**
	 * @param \System\Int32|int $state
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryAcquire_NoFastPath($state){}
	/**
	 * @param \System\Object|object $state
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SpinWaitTryAcquireCallback($state){}
	/**
	 * @return \System\Void|void
	 */
	public  function Acquire(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function WaitAndAcquire(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Release(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SignalWaiter(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
