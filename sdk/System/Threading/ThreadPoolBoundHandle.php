<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ThreadPoolBoundHandleMethodsOverride
{
	/**
	 * @return \System\Threading\NativeOverlapped*
	 */
	#[MethodOverride] public  function AllocateNativeOverlapped_1($callback, $state, $pinData){}
	/**
	 * @return \System\Threading\NativeOverlapped*
	 */
	#[MethodOverride] private  function AllocateNativeOverlapped_2($callback, $state, $pinData, $flowExecutionContext){}
	/**
	 * @return \System\Threading\NativeOverlapped*
	 */
	#[MethodOverride] public  function AllocateNativeOverlapped_3($preAllocated){}
}
/**
 */
class ThreadPoolBoundHandle extends \System\Object implements 
	\System\IDisposable
{
	/**
	 * @var \System\Runtime\InteropServices\SafeHandle
	 * @property
	 */
	public readonly $Handle;
	/**
	 * @return \System\Runtime\InteropServices\SafeHandle
	 */
	public  function get_Handle(){}
	/**
	 * @param \System\Runtime\InteropServices\SafeHandle $handle
	 * @return \System\Threading\ThreadPoolBoundHandle
	 */
	public static function BindHandle($handle){}
	/**
	 * @uses ThreadPoolBoundHandleMethodsOverride::AllocateNativeOverlapped_1 ($callback, $state, $pinData)
	 * @uses ThreadPoolBoundHandleMethodsOverride::AllocateNativeOverlapped_2 ($callback, $state, $pinData, $flowExecutionContext)
	 * @uses ThreadPoolBoundHandleMethodsOverride::AllocateNativeOverlapped_3 ($preAllocated)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AllocateNativeOverlapped(mixed ...$args){}
	/**
	 * @param \System\Threading\IOCompletionCallback $callback
	 * @param \System\Object|object $state
	 * @param \System\Object|object $pinData
	 * @return \System\Threading\NativeOverlapped*
	 */
	public  function UnsafeAllocateNativeOverlapped($callback, $state, $pinData){}
	/**
	 * @param \System\Threading\NativeOverlapped* $overlapped
	 * @return \System\Void|void
	 */
	public  function FreeNativeOverlapped($overlapped){}
	/**
	 * @param \System\Threading\NativeOverlapped* $overlapped
	 * @return \System\Object|object
	 */
	public static function GetNativeOverlappedState($overlapped){}
	/**
	 * @param \System\Threading\NativeOverlapped* $overlapped
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetOverlappedWrapper($overlapped){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function EnsureNotDisposed(){}
	/**
	 * @param \System\Runtime\InteropServices\SafeHandle $handle
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function BindHandleCore($handle){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
