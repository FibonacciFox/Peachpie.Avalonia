<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ManualResetEventMethodsOverride
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
class ManualResetEvent extends \System\Threading\EventWaitHandle implements 
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
	 * @return \System\Boolean
	 */
	public  function Set(){}
	/**
	 * @uses ManualResetEventMethodsOverride::Dispose_1 ($explicitDisposing)
	 * @uses ManualResetEventMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @uses ManualResetEventMethodsOverride::WaitOne_1 ($millisecondsTimeout)
	 * @uses ManualResetEventMethodsOverride::WaitOne_2 ($timeout)
	 * @uses ManualResetEventMethodsOverride::WaitOne_3 ()
	 * @uses ManualResetEventMethodsOverride::WaitOne_4 ($millisecondsTimeout, $exitContext)
	 * @uses ManualResetEventMethodsOverride::WaitOne_5 ($timeout, $exitContext)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function WaitOne(mixed ...$args){}
	/**
	 * @uses ManualResetEventMethodsOverride::MemberwiseClone_1 ($cloneIdentity)
	 * @uses ManualResetEventMethodsOverride::MemberwiseClone_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MemberwiseClone(mixed ...$args){}
}
