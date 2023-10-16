<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait SemaphoreMethodsOverride
{
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function Release_1(){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function Release_2($releaseCount){}
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
class Semaphore extends \System\Threading\WaitHandle implements 
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
	 * @return \System\Threading\Semaphore
	 */
	public static function OpenExisting($name){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Threading\Semaphore& $result
	 * @return \System\Boolean
	 */
	public static function TryOpenExisting($name, $result){}
	/**
	 * @uses SemaphoreMethodsOverride::Release_1 ()
	 * @uses SemaphoreMethodsOverride::Release_2 ($releaseCount)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Release(mixed ...$args){}
	/**
	 * @param \System\Int32|int $initialCount
	 * @param \System\Int32|int $maximumCount
	 * @param \System\String|string $name
	 * @param \System\Boolean& $createdNew
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CreateSemaphoreCore($initialCount, $maximumCount, $name, $createdNew){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Threading\Semaphore& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function OpenExistingWorker($name, $result){}
	/**
	 * @param \System\Int32|int $releaseCount
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ReleaseCore($releaseCount){}
	/**
	 * @uses SemaphoreMethodsOverride::Dispose_1 ($explicitDisposing)
	 * @uses SemaphoreMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @uses SemaphoreMethodsOverride::WaitOne_1 ($millisecondsTimeout)
	 * @uses SemaphoreMethodsOverride::WaitOne_2 ($timeout)
	 * @uses SemaphoreMethodsOverride::WaitOne_3 ()
	 * @uses SemaphoreMethodsOverride::WaitOne_4 ($millisecondsTimeout, $exitContext)
	 * @uses SemaphoreMethodsOverride::WaitOne_5 ($timeout, $exitContext)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function WaitOne(mixed ...$args){}
	/**
	 * @uses SemaphoreMethodsOverride::MemberwiseClone_1 ($cloneIdentity)
	 * @uses SemaphoreMethodsOverride::MemberwiseClone_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MemberwiseClone(mixed ...$args){}
}
