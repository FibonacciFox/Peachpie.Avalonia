<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait MonitorOverride {
	/**
	 * @deprecated
	 * @param \System\Object|object $obj
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Enter_1 ($obj){}
	/**
	 * @deprecated
	 * @param \System\Object|object $obj
	 * @param \System\Boolean& $lockTaken
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Enter_2 ($obj, $lockTaken){}
	/**
	 * @deprecated
	 * @param \System\Object|object $obj
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryEnter_1 ($obj){}
	/**
	 * @deprecated
	 * @param \System\Object|object $obj
	 * @param \System\Boolean& $lockTaken
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function TryEnter_2 ($obj, $lockTaken){}
	/**
	 * @deprecated
	 * @param \System\Object|object $obj
	 * @param \System\Int32|int $millisecondsTimeout
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryEnter_3 ($obj, $millisecondsTimeout){}
	/**
	 * @deprecated
	 * @param \System\Object|object $obj
	 * @param \System\Int32|int $millisecondsTimeout
	 * @param \System\Boolean& $lockTaken
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function TryEnter_4 ($obj, $millisecondsTimeout, $lockTaken){}
	/**
	 * @deprecated
	 * @param \System\Object|object $obj
	 * @param \System\TimeSpan $timeout
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryEnter_5 ($obj, $timeout){}
	/**
	 * @deprecated
	 * @param \System\Object|object $obj
	 * @param \System\TimeSpan $timeout
	 * @param \System\Boolean& $lockTaken
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function TryEnter_6 ($obj, $timeout, $lockTaken){}
	/**
	 * @deprecated
	 * @param \System\Object|object $obj
	 * @param \System\Int32|int $millisecondsTimeout
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function Wait_1 ($obj, $millisecondsTimeout){}
	/**
	 * @deprecated
	 * @param \System\Object|object $obj
	 * @param \System\TimeSpan $timeout
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function Wait_2 ($obj, $timeout){}
	/**
	 * @deprecated
	 * @param \System\Object|object $obj
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function Wait_3 ($obj){}
	/**
	 * @deprecated
	 * @param \System\Object|object $obj
	 * @param \System\Int32|int $millisecondsTimeout
	 * @param \System\Boolean|bool $exitContext
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function Wait_4 ($obj, $millisecondsTimeout, $exitContext){}
	/**
	 * @deprecated
	 * @param \System\Object|object $obj
	 * @param \System\TimeSpan $timeout
	 * @param \System\Boolean|bool $exitContext
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function Wait_5 ($obj, $timeout, $exitContext){}
}
class Monitor extends \System\Object
{
	use MonitorOverride;

	/**
	 * @property
	 * @var \System\Int64|int
	 * @since readonly
	 */
	public $LockContentionCount;
	/**
	 * @uses MonitorOverride::Enter_1 <br>public , args: ($obj)<br>
	 * @uses MonitorOverride::Enter_2 <br>public , args: ($obj, $lockTaken)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Enter (\override ...$args){}
	private static function ThrowLockTakenException(){}
	private static function ReliableEnter($obj, $lockTaken){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Void|void
	 */
	public static function Exit($obj){}
	/**
	 * @uses MonitorOverride::TryEnter_1 <br>public , args: ($obj)<br>
	 * @uses MonitorOverride::TryEnter_2 <br>public , args: ($obj, $lockTaken)<br>
	 * @uses MonitorOverride::TryEnter_3 <br>public , args: ($obj, $millisecondsTimeout)<br>
	 * @uses MonitorOverride::TryEnter_4 <br>public , args: ($obj, $millisecondsTimeout, $lockTaken)<br>
	 * @uses MonitorOverride::TryEnter_5 <br>public , args: ($obj, $timeout)<br>
	 * @uses MonitorOverride::TryEnter_6 <br>public , args: ($obj, $timeout, $lockTaken)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|\System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function TryEnter (\override ...$args){}
	private static function ReliableEnterTimeout($obj, $timeout, $lockTaken){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean|bool
	 */
	public static function IsEntered($obj){}
	private static function IsEnteredNative($obj){}
	private static function ObjWait($millisecondsTimeout, $obj){}
	/**
	 * @uses MonitorOverride::Wait_1 <br>public , args: ($obj, $millisecondsTimeout)<br>
	 * @uses MonitorOverride::Wait_2 <br>public , args: ($obj, $timeout)<br>
	 * @uses MonitorOverride::Wait_3 <br>public , args: ($obj)<br>
	 * @uses MonitorOverride::Wait_4 <br>public , args: ($obj, $millisecondsTimeout, $exitContext)<br>
	 * @uses MonitorOverride::Wait_5 <br>public , args: ($obj, $timeout, $exitContext)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function Wait (\override ...$args){}
	private static function ObjPulse($obj){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Void|void
	 */
	public static function Pulse($obj){}
	private static function ObjPulseAll($obj){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Void|void
	 */
	public static function PulseAll($obj){}
	private static function GetLockContentionCount(){}
}