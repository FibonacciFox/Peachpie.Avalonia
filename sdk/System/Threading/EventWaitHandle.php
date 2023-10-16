<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait EventWaitHandleMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Set_1(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected static function Set_2($waitHandle){}
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
class EventWaitHandle extends \System\Threading\WaitHandle implements 
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
	 * @param \System\String|string $name
	 * @return \System\Threading\EventWaitHandle
	 */
	public static function OpenExisting($name){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Threading\EventWaitHandle& $result
	 * @return \System\Boolean
	 */
	public static function TryOpenExisting($name, $result){}
	/**
	 * @param \System\Boolean $initialState
	 * @param \System\Threading\EventResetMode $mode
	 * @param \System\String|string $name
	 * @param \System\Boolean& $createdNew
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CreateEventCore($initialState, $mode, $name, $createdNew){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Threading\EventWaitHandle& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function OpenExistingWorker($name, $result){}
	/**
	 * @return \System\Boolean
	 */
	public  function Reset(){}
	/**
	 * @uses EventWaitHandleMethodsOverride::Set_1 ()
	 * @uses EventWaitHandleMethodsOverride::Set_2 ($waitHandle)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Set(mixed ...$args){}
	/**
	 * @uses EventWaitHandleMethodsOverride::Dispose_1 ($explicitDisposing)
	 * @uses EventWaitHandleMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @uses EventWaitHandleMethodsOverride::WaitOne_1 ($millisecondsTimeout)
	 * @uses EventWaitHandleMethodsOverride::WaitOne_2 ($timeout)
	 * @uses EventWaitHandleMethodsOverride::WaitOne_3 ()
	 * @uses EventWaitHandleMethodsOverride::WaitOne_4 ($millisecondsTimeout, $exitContext)
	 * @uses EventWaitHandleMethodsOverride::WaitOne_5 ($timeout, $exitContext)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function WaitOne(mixed ...$args){}
	/**
	 * @uses EventWaitHandleMethodsOverride::MemberwiseClone_1 ($cloneIdentity)
	 * @uses EventWaitHandleMethodsOverride::MemberwiseClone_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MemberwiseClone(mixed ...$args){}
}
