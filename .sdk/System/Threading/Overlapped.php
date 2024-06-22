<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait OverlappedOverride {
	/**
	 * @deprecated
	 * @param \System\Threading\IOCompletionCallback $iocb
	 * @return \System\Threading\NativeOverlapped*
	 */
	#[MethodOverride]public function Pack_1 ($iocb){}
	/**
	 * @deprecated
	 * @param \System\Threading\IOCompletionCallback $iocb
	 * @param \System\Object|object $userData
	 * @return \System\Threading\NativeOverlapped*
	 */
	#[MethodOverride]public function Pack_2 ($iocb, $userData){}
	/**
	 * @deprecated
	 * @param \System\Threading\IOCompletionCallback $iocb
	 * @return \System\Threading\NativeOverlapped*
	 */
	#[MethodOverride]public function UnsafePack_1 ($iocb){}
	/**
	 * @deprecated
	 * @param \System\Threading\IOCompletionCallback $iocb
	 * @param \System\Object|object $userData
	 * @return \System\Threading\NativeOverlapped*
	 */
	#[MethodOverride]public function UnsafePack_2 ($iocb, $userData){}
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\Int32|int $offsetLo
	 * @param \System\Int32|int $offsetHi
	 * @param \System\IntPtr $hEvent
	 * @param \System\IAsyncResult $ar
	 */
	#[MethodOverride]public function __construct_2 ($offsetLo, $offsetHi, $hEvent, $ar){}
	/**
	 * @param \System\Int32|int $offsetLo
	 * @param \System\Int32|int $offsetHi
	 * @param \System\Int32|int $hEvent
	 * @param \System\IAsyncResult $ar
	 */
	#[MethodOverride]public function __construct_3 ($offsetLo, $offsetHi, $hEvent, $ar){}
}
class Overlapped extends \System\Object
{
	use OverlappedOverride;

	/**
	 * @property
	 * @var \System\IAsyncResult
	 */
	public $AsyncResult;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $OffsetLow;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $OffsetHigh;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $EventHandle;
	/**
	 * @property
	 * @var \System\IntPtr
	 */
	public $EventHandleIntPtr;
	/**
	 * @uses OverlappedOverride::Pack_1 <br>public , args: ($iocb)<br>
	 * @uses OverlappedOverride::Pack_2 <br>public , args: ($iocb, $userData)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Threading\NativeOverlapped*|mixed|\override
	 */
	#[MethodOverridePublic]function Pack (\override ...$args){}
	/**
	 * @uses OverlappedOverride::UnsafePack_1 <br>public , args: ($iocb)<br>
	 * @uses OverlappedOverride::UnsafePack_2 <br>public , args: ($iocb, $userData)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Threading\NativeOverlapped*|mixed|\override
	 */
	#[MethodOverridePublic]function UnsafePack (\override ...$args){}
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
	 * @uses OverlappedOverride::__construct_1 <br>public , args: ()<br>
	 * @uses OverlappedOverride::__construct_2 <br>public , args: ($offsetLo, $offsetHi, $hEvent, $ar)<br>
	 * @uses OverlappedOverride::__construct_3 <br>public , args: ($offsetLo, $offsetHi, $hEvent, $ar)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}