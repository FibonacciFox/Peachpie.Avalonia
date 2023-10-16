<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait SpinWaitMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SpinOnce_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SpinOnce_2($sleep1Threshold){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function SpinUntil_1($condition){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function SpinUntil_2($condition, $timeout){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function SpinUntil_3($condition, $millisecondsTimeout){}
}
/**
 */
class SpinWait extends \System\ValueType
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected readonly $SpinCountforSpinBeforeWait;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $Count;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $NextSpinWillYield;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Count(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	protected  function set_Count($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_NextSpinWillYield(){}
	/**
	 * @uses SpinWaitMethodsOverride::SpinOnce_1 ()
	 * @uses SpinWaitMethodsOverride::SpinOnce_2 ($sleep1Threshold)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SpinOnce(mixed ...$args){}
	/**
	 * @param \System\Int32|int $sleep1Threshold
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SpinOnceCore($sleep1Threshold){}
	/**
	 * @return \System\Void|void
	 */
	public  function Reset(){}
	/**
	 * @uses SpinWaitMethodsOverride::SpinUntil_1 ($condition)
	 * @uses SpinWaitMethodsOverride::SpinUntil_2 ($condition, $timeout)
	 * @uses SpinWaitMethodsOverride::SpinUntil_3 ($condition, $millisecondsTimeout)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function SpinUntil(mixed ...$args){}
}
