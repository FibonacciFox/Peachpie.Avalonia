<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ThreadPoolBoundHandleOverlappedMethodsOverride
{
	/**
	 * @return \System\Threading\NativeOverlapped*
	 */
	#[MethodOverride] public  function Pack_1($iocb){}
	/**
	 * @return \System\Threading\NativeOverlapped*
	 */
	#[MethodOverride] public  function Pack_2($iocb, $userData){}
	/**
	 * @return \System\Threading\NativeOverlapped*
	 */
	#[MethodOverride] public  function UnsafePack_1($iocb){}
	/**
	 * @return \System\Threading\NativeOverlapped*
	 */
	#[MethodOverride] public  function UnsafePack_2($iocb, $userData){}
}
/**
 */
class ThreadPoolBoundHandleOverlapped extends \System\Threading\Overlapped
{
	/**
	 * @var \System\Object
	 * @field
	 */
	protected readonly $_userState;
	/**
	 * @var \System\Threading\PreAllocatedOverlapped
	 * @field
	 */
	protected readonly $_preAllocated;
	/**
	 * @var \System\Threading\NativeOverlapped*
	 * @field
	 */
	protected $_nativeOverlapped;
	/**
	 * @var \System\Threading\ThreadPoolBoundHandle
	 * @field
	 */
	protected $_boundHandle;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	protected $_completed;
	/**
	 * @var \System\IAsyncResult
	 * @property
	 */
	public $AsyncResult;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $OffsetLow;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $OffsetHigh;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $EventHandle;
	/**
	 * @var \System\IntPtr
	 * @property
	 */
	public $EventHandleIntPtr;
	/**
	 * @param \System\UInt32 $errorCode
	 * @param \System\UInt32 $numBytes
	 * @param \System\Threading\NativeOverlapped* $nativeOverlapped
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CompletionCallback($errorCode, $numBytes, $nativeOverlapped){}
	/**
	 * @uses ThreadPoolBoundHandleOverlappedMethodsOverride::Pack_1 ($iocb)
	 * @uses ThreadPoolBoundHandleOverlappedMethodsOverride::Pack_2 ($iocb, $userData)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Pack(mixed ...$args){}
	/**
	 * @uses ThreadPoolBoundHandleOverlappedMethodsOverride::UnsafePack_1 ($iocb)
	 * @uses ThreadPoolBoundHandleOverlappedMethodsOverride::UnsafePack_2 ($iocb, $userData)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function UnsafePack(mixed ...$args){}
}
