<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait MutexMethodsOverride
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
class Mutex extends \System\Threading\WaitHandle implements 
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
	 * @return \System\Threading\Mutex
	 */
	public static function OpenExisting($name){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Threading\Mutex& $result
	 * @return \System\Boolean
	 */
	public static function TryOpenExisting($name, $result){}
	/**
	 * @param \System\Boolean $initiallyOwned
	 * @param \System\String|string $name
	 * @param \System\Boolean& $createdNew
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CreateMutexCore($initiallyOwned, $name, $createdNew){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Threading\Mutex& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function OpenExistingWorker($name, $result){}
	/**
	 * @return \System\Void|void
	 */
	public  function ReleaseMutex(){}
	/**
	 * @uses MutexMethodsOverride::Dispose_1 ($explicitDisposing)
	 * @uses MutexMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @uses MutexMethodsOverride::WaitOne_1 ($millisecondsTimeout)
	 * @uses MutexMethodsOverride::WaitOne_2 ($timeout)
	 * @uses MutexMethodsOverride::WaitOne_3 ()
	 * @uses MutexMethodsOverride::WaitOne_4 ($millisecondsTimeout, $exitContext)
	 * @uses MutexMethodsOverride::WaitOne_5 ($timeout, $exitContext)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function WaitOne(mixed ...$args){}
	/**
	 * @uses MutexMethodsOverride::MemberwiseClone_1 ($cloneIdentity)
	 * @uses MutexMethodsOverride::MemberwiseClone_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MemberwiseClone(mixed ...$args){}
}
