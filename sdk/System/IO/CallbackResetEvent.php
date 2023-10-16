<?php
namespace System\IO;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait CallbackResetEventMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Dispose_1($explicitDisposing){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Dispose_2(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function WaitOne_1($millisecondsTimeout){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function WaitOne_2($timeout){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function WaitOne_3(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function WaitOne_4($millisecondsTimeout, $exitContext){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function WaitOne_5($timeout, $exitContext){}
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
class CallbackResetEvent extends \System\Threading\EventWaitHandle implements 
	\System\IDisposable
{
	/**
	 * @var \System\IntPtr
	 * @property
	 */
	public $Handle;
	/**
	 * @var \Microsoft\Win32\SafeHandles\SafeWaitHandle
	 * @property
	 */
	public $SafeWaitHandle;
	/**
	 * @param \System\Threading\NativeOverlapped* $pOverlapped
	 * @return \System\Void|void
	 */
	protected  function ReleaseRefCount($pOverlapped){}
	/**
	 * @return \System\Boolean
	 */
	public  function Set(){}
	/**
	 * @uses CallbackResetEventMethodsOverride::Dispose_1 ($explicitDisposing)
	 * @uses CallbackResetEventMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @uses CallbackResetEventMethodsOverride::WaitOne_1 ($millisecondsTimeout)
	 * @uses CallbackResetEventMethodsOverride::WaitOne_2 ($timeout)
	 * @uses CallbackResetEventMethodsOverride::WaitOne_3 ()
	 * @uses CallbackResetEventMethodsOverride::WaitOne_4 ($millisecondsTimeout, $exitContext)
	 * @uses CallbackResetEventMethodsOverride::WaitOne_5 ($timeout, $exitContext)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function WaitOne(mixed ...$args){}
	/**
	 * @uses CallbackResetEventMethodsOverride::MemberwiseClone_1 ($cloneIdentity)
	 * @uses CallbackResetEventMethodsOverride::MemberwiseClone_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MemberwiseClone(mixed ...$args){}
}
