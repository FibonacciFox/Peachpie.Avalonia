<?php
namespace Avalonia\Input\Raw;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait RawPointerPointMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($obj){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($other){}
}
/**
 */
class RawPointerPoint extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @return \Avalonia\Point
	 */
	public  function get_Position(){}
	/**
	 * @param \Avalonia\Point $value
	 * @return \System\Void|void
	 */
	public  function set_Position($value){}
	/**
	 * @return \System\Single
	 */
	public  function get_Twist(){}
	/**
	 * @param \System\Single $value
	 * @return \System\Void|void
	 */
	public  function set_Twist($value){}
	/**
	 * @return \System\Single
	 */
	public  function get_Pressure(){}
	/**
	 * @param \System\Single $value
	 * @return \System\Void|void
	 */
	public  function set_Pressure($value){}
	/**
	 * @return \System\Single
	 */
	public  function get_XTilt(){}
	/**
	 * @param \System\Single $value
	 * @return \System\Void|void
	 */
	public  function set_XTilt($value){}
	/**
	 * @return \System\Single
	 */
	public  function get_YTilt(){}
	/**
	 * @param \System\Single $value
	 * @return \System\Void|void
	 */
	public  function set_YTilt($value){}
	/**
	 * @param \System\Text\StringBuilder $builder
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Input\Raw\RawPointerPoint $left
	 * @param \Avalonia\Input\Raw\RawPointerPoint $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Input\Raw\RawPointerPoint $left
	 * @param \Avalonia\Input\Raw\RawPointerPoint $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @uses RawPointerPointMethodsOverride::Equals_1 ($obj)
	 * @uses RawPointerPointMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
}
