<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait SpinWaitOverride {
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function SpinOnce_1 (){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $sleep1Threshold
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function SpinOnce_2 ($sleep1Threshold){}
	/**
	 * @deprecated
	 * @param \System\Func_1 $condition [generic: System\Boolean]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function SpinUntil_1 ($condition){}
	/**
	 * @deprecated
	 * @param \System\Func_1 $condition [generic: System\Boolean]
	 * @param \System\TimeSpan $timeout
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function SpinUntil_2 ($condition, $timeout){}
	/**
	 * @deprecated
	 * @param \System\Func_1 $condition [generic: System\Boolean]
	 * @param \System\Int32|int $millisecondsTimeout
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function SpinUntil_3 ($condition, $millisecondsTimeout){}
}
final class SpinWait extends \System\ValueType
{
	use SpinWaitOverride;

	/**
	 * @field
	 * @since readonly
	 * @var \System\Int32|int
	 */
	protected static $SpinCountforSpinBeforeWait;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $Count;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $NextSpinWillYield;
	/**
	 * @uses SpinWaitOverride::SpinOnce_1 <br>public , args: ()<br>
	 * @uses SpinWaitOverride::SpinOnce_2 <br>public , args: ($sleep1Threshold)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function SpinOnce (\override ...$args){}
	private function SpinOnceCore($sleep1Threshold){}
	/**
	 * @return \System\Void|void
	 */
	public function Reset(){}
	/**
	 * @uses SpinWaitOverride::SpinUntil_1 <br>public , args: ($condition)<br>
	 * @uses SpinWaitOverride::SpinUntil_2 <br>public , args: ($condition, $timeout)<br>
	 * @uses SpinWaitOverride::SpinUntil_3 <br>public , args: ($condition, $millisecondsTimeout)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|\System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function SpinUntil (\override ...$args){}
}