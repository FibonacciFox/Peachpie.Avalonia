<?php
namespace Avalonia\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait DispatcherPriorityMethodsOverride
{
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function op_Implicit_1($priority){}
	/**
	 * @return \Avalonia\Threading\DispatcherPriority
	 */
	#[MethodOverride] public static function op_Implicit_2($value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($other){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($obj){}
}
/**
 */
class DispatcherPriority extends \System\ValueType implements 
	\System\IEquatable_1,
	\System\IComparable_1
{
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Value(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \Avalonia\Threading\DispatcherPriority
	 */
	public static function FromValue($value){}
	/**
	 * @uses DispatcherPriorityMethodsOverride::op_Implicit_1 ($priority)
	 * @uses DispatcherPriorityMethodsOverride::op_Implicit_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function op_Implicit(mixed ...$args){}
	/**
	 * @uses DispatcherPriorityMethodsOverride::Equals_1 ($other)
	 * @uses DispatcherPriorityMethodsOverride::Equals_2 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @param \Avalonia\Threading\DispatcherPriority $left
	 * @param \Avalonia\Threading\DispatcherPriority $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \Avalonia\Threading\DispatcherPriority $left
	 * @param \Avalonia\Threading\DispatcherPriority $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Threading\DispatcherPriority $left
	 * @param \Avalonia\Threading\DispatcherPriority $right
	 * @return \System\Boolean
	 */
	public static function op_LessThan($left, $right){}
	/**
	 * @param \Avalonia\Threading\DispatcherPriority $left
	 * @param \Avalonia\Threading\DispatcherPriority $right
	 * @return \System\Boolean
	 */
	public static function op_GreaterThan($left, $right){}
	/**
	 * @param \Avalonia\Threading\DispatcherPriority $left
	 * @param \Avalonia\Threading\DispatcherPriority $right
	 * @return \System\Boolean
	 */
	public static function op_LessThanOrEqual($left, $right){}
	/**
	 * @param \Avalonia\Threading\DispatcherPriority $left
	 * @param \Avalonia\Threading\DispatcherPriority $right
	 * @return \System\Boolean
	 */
	public static function op_GreaterThanOrEqual($left, $right){}
	/**
	 * @param \Avalonia\Threading\DispatcherPriority $other
	 * @return \System\Int32|int
	 */
	public  function CompareTo($other){}
	/**
	 * @param \Avalonia\Threading\DispatcherPriority $priority
	 * @param \System\String|string $parameterName
	 * @return \System\Void|void
	 */
	public static function Validate($priority, $parameterName){}
}
