<?php
namespace System\Threading;
final class _IOCompletionCallback extends \System\Object
{


	/**
	 * @param \System\UInt32 $errorCode
	 * @param \System\UInt32 $numBytes
	 * @param \System\Threading\NativeOverlapped* $pNativeOverlapped
	 * @return \System\Void|void
	 */
	protected static function PerformIOCompletionCallback($errorCode, $numBytes, $pNativeOverlapped){}
	private static function IOCompletionCallback_Context($state){}
	/**
	 * @param \System\Threading\IOCompletionCallback $ioCompletionCallback
	 * @param \System\Threading\ExecutionContext $executionContext
	 */
	public function __construct($ioCompletionCallback, $executionContext){}
}