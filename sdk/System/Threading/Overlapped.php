<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait OverlappedMethodsOverride
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
class Overlapped extends \System\Object
{
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
	 * @return \System\IAsyncResult
	 */
	public  function get_AsyncResult(){}
	/**
	 * @param \System\IAsyncResult $value
	 * @return \System\Void|void
	 */
	public  function set_AsyncResult($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_OffsetLow(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_OffsetLow($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_OffsetHigh(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_OffsetHigh($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_EventHandle(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_EventHandle($value){}
	/**
	 * @return \System\IntPtr
	 */
	public  function get_EventHandleIntPtr(){}
	/**
	 * @param \System\IntPtr $value
	 * @return \System\Void|void
	 */
	public  function set_EventHandleIntPtr($value){}
	/**
	 * @uses OverlappedMethodsOverride::Pack_1 ($iocb)
	 * @uses OverlappedMethodsOverride::Pack_2 ($iocb, $userData)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Pack(mixed ...$args){}
	/**
	 * @uses OverlappedMethodsOverride::UnsafePack_1 ($iocb)
	 * @uses OverlappedMethodsOverride::UnsafePack_2 ($iocb, $userData)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function UnsafePack(mixed ...$args){}
	/**
	 * @param \System\Threading\NativeOverlapped* $nativeOverlappedPtr
	 * @return \System\Threading\Overlapped
	 */
	public static function Unpack($nativeOverlappedPtr){}
	/**
	 * @param \System\Threading\NativeOverlapped* $nativeOverlappedPtr
	 * @return \System\Void|void
	 */
	public static function Free($nativeOverlappedPtr){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
