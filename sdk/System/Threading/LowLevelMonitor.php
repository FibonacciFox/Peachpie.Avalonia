<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait LowLevelMonitorMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function WaitCore_1(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function WaitCore_2($timeoutMilliseconds){}
}
/**
 */
class LowLevelMonitor extends \System\ValueType
{
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Acquire(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Release(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Wait(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Signal_Release(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Initialize(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function DisposeCore(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AcquireCore(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ReleaseCore(){}
	/**
	 * @uses LowLevelMonitorMethodsOverride::WaitCore_1 ()
	 * @uses LowLevelMonitorMethodsOverride::WaitCore_2 ($timeoutMilliseconds)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function WaitCore(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Signal_ReleaseCore(){}
}
