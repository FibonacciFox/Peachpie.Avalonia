<?php
namespace System\Threading;
final class OverlappedData extends \System\Object
{
	/**
	 * @field
	 * @var \System\IAsyncResult
	 */
	protected $_asyncResult;
	/**
	 * @field
	 * @var \System\Object|object
	 */
	protected $_callback;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Threading\Overlapped
	 */
	protected $_overlapped;
	/**
	 * @param \System\Threading\IOCompletionCallback $iocb
	 * @param \System\Object|object $userData
	 * @return \System\Threading\NativeOverlapped*
	 */
	protected function Pack($iocb, $userData){}
	/**
	 * @param \System\Threading\IOCompletionCallback $iocb
	 * @param \System\Object|object $userData
	 * @return \System\Threading\NativeOverlapped*
	 */
	protected function UnsafePack($iocb, $userData){}
	private function AllocateNativeOverlapped(){}
	/**
	 * @param \System\Threading\NativeOverlapped* $nativeOverlappedPtr
	 * @return \System\Void|void
	 */
	protected static function FreeNativeOverlapped($nativeOverlappedPtr){}
	/**
	 * @param \System\Threading\NativeOverlapped* $nativeOverlappedPtr
	 * @return \System\Threading\OverlappedData
	 */
	protected static function GetOverlappedFromNative($nativeOverlappedPtr){}
	/**
	 * @param \System\Threading\NativeOverlapped*& &$pNativeOverlapped
	 * @param \System\UInt32& &$errorCode
	 * @param \System\UInt32& &$numBytes
	 * @return \System\Void|void
	 */
	protected static function CheckVMForIOPacket(&$pNativeOverlapped, &$errorCode, &$numBytes){}
}