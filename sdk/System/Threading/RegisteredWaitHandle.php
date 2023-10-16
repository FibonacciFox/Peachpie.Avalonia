<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait RegisteredWaitHandleMethodsOverride
{
	/**
	 * @return \System\MarshalByRefObject
	 */
	#[MethodOverride] protected  function MemberwiseClone_1($cloneIdentity){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] protected  function MemberwiseClone_2(){}
}
/**
 */
class RegisteredWaitHandle extends \System\MarshalByRefObject
{
	/**
	 * @param \System\IntPtr $handle
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsValidHandle($handle){}
	/**
	 * @param \System\IntPtr $nativeRegisteredWaitHandle
	 * @return \System\Void|void
	 */
	protected  function SetNativeRegisteredWaitHandle($nativeRegisteredWaitHandle){}
	/**
	 * @return \System\Void|void
	 */
	protected  function OnBeforeRegister(){}
	/**
	 * @param \System\Threading\WaitHandle $waitObject
	 * @return \System\Boolean
	 */
	public  function Unregister($waitObject){}
	/**
	 * @param \System\IntPtr $handle
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function WaitHandleCleanupNative($handle){}
	/**
	 * @param \System\IntPtr $handle
	 * @param \System\Runtime\InteropServices\SafeHandle $waitObject
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function UnregisterWaitNative($handle, $waitObject){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function RentEvent(){}
	/**
	 * @param \System\Threading\AutoResetEvent $resetEvent
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ReturnEvent($resetEvent){}
	/**
	 * @return \System\Threading\_ThreadPoolWaitOrTimerCallback
	 */
	protected  function get_Callback(){}
	/**
	 * @return \Microsoft\Win32\SafeHandles\SafeWaitHandle
	 */
	protected  function get_Handle(){}
	/**
	 * @return \System\Int32|int
	 */
	protected  function get_TimeoutTimeMs(){}
	/**
	 * @param \System\Int32|int $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_TimeoutTimeMs($value){}
	/**
	 * @return \System\Int32|int
	 */
	protected  function get_TimeoutDurationMs(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_IsInfiniteTimeout(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function RestartTimeout(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_Repeating(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_UserUnregisterWaitHandle(){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeWaitHandle $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_UserUnregisterWaitHandle($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_UserUnregisterWaitHandleValue(){}
	/**
	 * @param \System\IntPtr $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_UserUnregisterWaitHandleValue($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_InvalidHandleValue(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_IsBlocking(){}
	/**
	 * @return \System\Threading\WaitThread
	 */
	protected  function get_WaitThread(){}
	/**
	 * @param \System\Threading\WaitThread $value
	 * @return \System\Void|void
	 */
	protected  function set_WaitThread($value){}
	/**
	 * @param \System\Threading\WaitHandle $waitObject
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function UnregisterPortable($waitObject){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SignalUserWaitHandle(){}
	/**
	 * @param \System\Boolean $timedOut
	 * @return \System\Void|void
	 */
	protected  function PerformCallback($timedOut){}
	/**
	 * @return \System\Void|void
	 */
	protected  function RequestCallback(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function OnRemoveWait(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CompleteCallbackRequest(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function WaitForCallbacks(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function WaitForRemoval(){}
	/**
	 * @uses RegisteredWaitHandleMethodsOverride::MemberwiseClone_1 ($cloneIdentity)
	 * @uses RegisteredWaitHandleMethodsOverride::MemberwiseClone_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MemberwiseClone(mixed ...$args){}
}
