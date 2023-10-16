<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait WaitThreadMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function UnregisterWait_1($handle){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function UnregisterWait_2($handle, $blocking){}
}
/**
 */
class WaitThread extends \System\Object
{
	/**
	 * @return \System\Boolean
	 */
	protected  function get_AnyUserWaits(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function WaitThreadStart(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ProcessRemovals(){}
	/**
	 * @param \System\Threading\RegisteredWaitHandle $registeredHandle
	 * @param \System\Boolean $timedOut
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function QueueWaitCompletion($registeredHandle, $timedOut){}
	/**
	 * @param \System\Threading\RegisteredWaitHandle $handle
	 * @return \System\Boolean
	 */
	public  function RegisterWaitHandle($handle){}
	/**
	 * @uses WaitThreadMethodsOverride::UnregisterWait_1 ($handle)
	 * @uses WaitThreadMethodsOverride::UnregisterWait_2 ($handle, $blocking)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function UnregisterWait(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
