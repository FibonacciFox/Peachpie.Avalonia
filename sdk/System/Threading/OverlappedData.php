<?php
namespace System\Threading;
/**
 */
class OverlappedData extends \System\Object
{
	/**
	 * @var \System\IAsyncResult
	 * @field
	 */
	protected $_asyncResult;
	/**
	 * @var \System\Object
	 * @field
	 */
	protected $_callback;
	/**
	 * @var \System\Threading\Overlapped
	 * @field
	 */
	protected readonly $_overlapped;
	/**
	 * @return \System\Int32&
	 */
	protected  function get_OffsetLow(){}
	/**
	 * @return \System\Int32&
	 */
	protected  function get_OffsetHigh(){}
	/**
	 * @return \System\IntPtr&
	 */
	protected  function get_EventHandle(){}
	/**
	 * @param \System\Threading\IOCompletionCallback $iocb
	 * @param \System\Object|object $userData
	 * @return \System\Threading\NativeOverlapped*
	 */
	protected  function Pack($iocb, $userData){}
	/**
	 * @param \System\Threading\IOCompletionCallback $iocb
	 * @param \System\Object|object $userData
	 * @return \System\Threading\NativeOverlapped*
	 */
	protected  function UnsafePack($iocb, $userData){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AllocateNativeOverlapped(){}
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
	 * @param \System\Threading\NativeOverlapped*& $pNativeOverlapped
	 * @param \System\UInt32& $errorCode
	 * @param \System\UInt32& $numBytes
	 * @return \System\Void|void
	 */
	protected static function CheckVMForIOPacket($pNativeOverlapped, $errorCode, $numBytes){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
