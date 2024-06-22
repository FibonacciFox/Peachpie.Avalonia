<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ThreadPoolBoundHandleOverride {
	/**
	 * @deprecated
	 * @param \System\Threading\IOCompletionCallback $callback
	 * @param \System\Object|object $state
	 * @param \System\Object|object $pinData
	 * @return \System\Threading\NativeOverlapped*
	 */
	#[MethodOverride]public function AllocateNativeOverlapped_1 ($callback, $state, $pinData){}
	/**
	 * @deprecated
	 * @param \System\Threading\IOCompletionCallback $callback
	 * @param \System\Object|object $state
	 * @param \System\Object|object $pinData
	 * @param \System\Boolean|bool $flowExecutionContext
	 * @return \System\Threading\NativeOverlapped*
	 */
	#[MethodOverride]private function AllocateNativeOverlapped_2 ($callback, $state, $pinData, $flowExecutionContext){}
	/**
	 * @deprecated
	 * @param \System\Threading\PreAllocatedOverlapped $preAllocated
	 * @return \System\Threading\NativeOverlapped*
	 */
	#[MethodOverride]public function AllocateNativeOverlapped_3 ($preAllocated){}
}
final class ThreadPoolBoundHandle extends \System\Object implements
	\System\IDisposable
{
	use ThreadPoolBoundHandleOverride;

	/**
	 * @property
	 * @var \System\Runtime\InteropServices\SafeHandle
	 * @since readonly
	 */
	public $Handle;
	/**
	 * @param \System\Runtime\InteropServices\SafeHandle $handle
	 * @return \System\Threading\ThreadPoolBoundHandle
	 */
	public static function BindHandle($handle){}
	/**
	 * @uses ThreadPoolBoundHandleOverride::AllocateNativeOverlapped_1 <br>public , args: ($callback, $state, $pinData)<br>
	 * @uses ThreadPoolBoundHandleOverride::AllocateNativeOverlapped_2 <br>private , args: ($callback, $state, $pinData, $flowExecutionContext)<br>
	 * @uses ThreadPoolBoundHandleOverride::AllocateNativeOverlapped_3 <br>public , args: ($preAllocated)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Threading\NativeOverlapped*|mixed|\override
	 */
	#[MethodOverridePublic]function AllocateNativeOverlapped (\override ...$args){}
	/**
	 * @param \System\Threading\IOCompletionCallback $callback
	 * @param \System\Object|object $state
	 * @param \System\Object|object $pinData
	 * @return \System\Threading\NativeOverlapped*
	 */
	public function UnsafeAllocateNativeOverlapped($callback, $state, $pinData){}
	/**
	 * @param \System\Threading\NativeOverlapped* $overlapped
	 * @return \System\Void|void
	 */
	public function FreeNativeOverlapped($overlapped){}
	/**
	 * @param \System\Threading\NativeOverlapped* $overlapped
	 * @return \System\Object|object
	 */
	public static function GetNativeOverlappedState($overlapped){}
	private static function GetOverlappedWrapper($overlapped){}
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	private function EnsureNotDisposed(){}
	private static function BindHandleCore($handle){}
}