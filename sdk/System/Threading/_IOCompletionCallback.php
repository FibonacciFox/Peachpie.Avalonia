<?php
namespace System\Threading;
/**
 */
class _IOCompletionCallback extends \System\Object
{
	/**
	 * @param \System\UInt32 $errorCode
	 * @param \System\UInt32 $numBytes
	 * @param \System\Threading\NativeOverlapped* $pNativeOverlapped
	 * @return \System\Void|void
	 */
	protected static function PerformIOCompletionCallback($errorCode, $numBytes, $pNativeOverlapped){}
	/**
	 * @param \System\Object|object $state
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IOCompletionCallback_Context($state){}
	/**
	 * @param \System\UInt32 $errorCode
	 * @param \System\UInt32 $numBytes
	 * @param \System\Threading\NativeOverlapped* $pNativeOverlapped
	 * @return \System\Void|void
	 */
	public static function PerformSingleIOCompletionCallback($errorCode, $numBytes, $pNativeOverlapped){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
