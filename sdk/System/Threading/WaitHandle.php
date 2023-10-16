<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait WaitHandleMethodsOverride
{
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected static function WaitMultipleIgnoringSyncContext_1($waitHandles, $waitAll, $millisecondsTimeout){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private static function WaitMultipleIgnoringSyncContext_2($waitHandles, $numHandles, $waitAll, $millisecondsTimeout){}
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
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private static function WaitMultiple_1($waitHandles, $waitAll, $millisecondsTimeout){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private static function WaitMultiple_2($waitHandles, $waitAll, $millisecondsTimeout){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private static function SignalAndWait_1($toSignal, $toWaitOn, $millisecondsTimeout){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function SignalAndWait_2($toSignal, $toWaitOn){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function SignalAndWait_3($toSignal, $toWaitOn, $timeout, $exitContext){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function SignalAndWait_4($toSignal, $toWaitOn, $millisecondsTimeout, $exitContext){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function WaitAll_1($waitHandles, $millisecondsTimeout){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function WaitAll_2($waitHandles, $timeout){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function WaitAll_3($waitHandles){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function WaitAll_4($waitHandles, $millisecondsTimeout, $exitContext){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function WaitAll_5($waitHandles, $timeout, $exitContext){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function WaitAny_1($waitHandles, $millisecondsTimeout){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected static function WaitAny_2($safeWaitHandles, $millisecondsTimeout){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function WaitAny_3($waitHandles, $timeout){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function WaitAny_4($waitHandles){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function WaitAny_5($waitHandles, $millisecondsTimeout, $exitContext){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function WaitAny_6($waitHandles, $timeout, $exitContext){}
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
class WaitHandle extends \System\MarshalByRefObject implements 
	\System\IDisposable
{
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected readonly $InvalidHandle;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $MaxWaitHandles;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $WaitSuccess;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $WaitAbandoned;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $WaitTimeout;
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
	 * @param \System\IntPtr $waitHandle
	 * @param \System\Int32|int $millisecondsTimeout
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function WaitOneCore($waitHandle, $millisecondsTimeout){}
	/**
	 * @uses WaitHandleMethodsOverride::WaitMultipleIgnoringSyncContext_1 ($waitHandles, $waitAll, $millisecondsTimeout)
	 * @uses WaitHandleMethodsOverride::WaitMultipleIgnoringSyncContext_2 ($waitHandles, $numHandles, $waitAll, $millisecondsTimeout)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function WaitMultipleIgnoringSyncContext(mixed ...$args){}
	/**
	 * @param \System\IntPtr $waitHandleToSignal
	 * @param \System\IntPtr $waitHandleToWaitOn
	 * @param \System\Int32|int $millisecondsTimeout
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SignalAndWaitCore($waitHandleToSignal, $waitHandleToWaitOn, $millisecondsTimeout){}
	/**
	 * @param \System\IntPtr $waitHandleToSignal
	 * @param \System\IntPtr $waitHandleToWaitOn
	 * @param \System\Int32|int $millisecondsTimeout
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SignalAndWaitNative($waitHandleToSignal, $waitHandleToWaitOn, $millisecondsTimeout){}
	/**
	 * @return \System\IntPtr
	 */
	public  function get_Handle(){}
	/**
	 * @param \System\IntPtr $value
	 * @return \System\Void|void
	 */
	public  function set_Handle($value){}
	/**
	 * @return \Microsoft\Win32\SafeHandles\SafeWaitHandle
	 */
	public  function get_SafeWaitHandle(){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeWaitHandle $value
	 * @return \System\Void|void
	 */
	public  function set_SafeWaitHandle($value){}
	/**
	 * @param \System\TimeSpan $timeout
	 * @return \System\Int32|int
	 */
	protected static function ToTimeoutMilliseconds($timeout){}
	/**
	 * @return \System\Void|void
	 */
	public  function Close(){}
	/**
	 * @uses WaitHandleMethodsOverride::Dispose_1 ($explicitDisposing)
	 * @uses WaitHandleMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @uses WaitHandleMethodsOverride::WaitOne_1 ($millisecondsTimeout)
	 * @uses WaitHandleMethodsOverride::WaitOne_2 ($timeout)
	 * @uses WaitHandleMethodsOverride::WaitOne_3 ()
	 * @uses WaitHandleMethodsOverride::WaitOne_4 ($millisecondsTimeout, $exitContext)
	 * @uses WaitHandleMethodsOverride::WaitOne_5 ($timeout, $exitContext)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function WaitOne(mixed ...$args){}
	/**
	 * @param \System\Int32|int $millisecondsTimeout
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function WaitOneNoCheck($millisecondsTimeout){}
	/**
	 * @param \System\Int32|int $capacity
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function RentSafeWaitHandleArray($capacity){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeWaitHandle[] $safeWaitHandles
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ReturnSafeWaitHandleArray($safeWaitHandles){}
	/**
	 * @param \System\ReadOnlySpan_1 $waitHandles
	 * @param \System\Span_1 $safeWaitHandles
	 * @param \System\Span_1 $unsafeWaitHandles
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ObtainSafeWaitHandles($waitHandles, $safeWaitHandles, $unsafeWaitHandles){}
	/**
	 * @uses WaitHandleMethodsOverride::WaitMultiple_1 ($waitHandles, $waitAll, $millisecondsTimeout)
	 * @uses WaitHandleMethodsOverride::WaitMultiple_2 ($waitHandles, $waitAll, $millisecondsTimeout)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function WaitMultiple(mixed ...$args){}
	/**
	 * @param \System\ReadOnlySpan_1 $safeWaitHandles
	 * @param \System\Int32|int $millisecondsTimeout
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function WaitAnyMultiple($safeWaitHandles, $millisecondsTimeout){}
	/**
	 * @uses WaitHandleMethodsOverride::SignalAndWait_1 ($toSignal, $toWaitOn, $millisecondsTimeout)
	 * @uses WaitHandleMethodsOverride::SignalAndWait_2 ($toSignal, $toWaitOn)
	 * @uses WaitHandleMethodsOverride::SignalAndWait_3 ($toSignal, $toWaitOn, $timeout, $exitContext)
	 * @uses WaitHandleMethodsOverride::SignalAndWait_4 ($toSignal, $toWaitOn, $millisecondsTimeout, $exitContext)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function SignalAndWait(mixed ...$args){}
	/**
	 * @uses WaitHandleMethodsOverride::WaitAll_1 ($waitHandles, $millisecondsTimeout)
	 * @uses WaitHandleMethodsOverride::WaitAll_2 ($waitHandles, $timeout)
	 * @uses WaitHandleMethodsOverride::WaitAll_3 ($waitHandles)
	 * @uses WaitHandleMethodsOverride::WaitAll_4 ($waitHandles, $millisecondsTimeout, $exitContext)
	 * @uses WaitHandleMethodsOverride::WaitAll_5 ($waitHandles, $timeout, $exitContext)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function WaitAll(mixed ...$args){}
	/**
	 * @uses WaitHandleMethodsOverride::WaitAny_1 ($waitHandles, $millisecondsTimeout)
	 * @uses WaitHandleMethodsOverride::WaitAny_2 ($safeWaitHandles, $millisecondsTimeout)
	 * @uses WaitHandleMethodsOverride::WaitAny_3 ($waitHandles, $timeout)
	 * @uses WaitHandleMethodsOverride::WaitAny_4 ($waitHandles)
	 * @uses WaitHandleMethodsOverride::WaitAny_5 ($waitHandles, $millisecondsTimeout, $exitContext)
	 * @uses WaitHandleMethodsOverride::WaitAny_6 ($waitHandles, $timeout, $exitContext)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function WaitAny(mixed ...$args){}
	/**
	 * @uses WaitHandleMethodsOverride::MemberwiseClone_1 ($cloneIdentity)
	 * @uses WaitHandleMethodsOverride::MemberwiseClone_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MemberwiseClone(mixed ...$args){}
}
