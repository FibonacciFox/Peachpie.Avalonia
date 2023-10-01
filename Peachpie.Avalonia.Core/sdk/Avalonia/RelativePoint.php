<?php
namespace Avalonia;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait RelativePointMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($obj){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($p){}
}
/**
 */
class RelativePoint extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @return \Avalonia\Point
	 */
	public  function get_Point(){}
	/**
	 * @return \Avalonia\RelativeUnit
	 */
	public  function get_Unit(){}
	/**
	 * @param \Avalonia\RelativePoint $left
	 * @param \Avalonia\RelativePoint $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \Avalonia\RelativePoint $left
	 * @param \Avalonia\RelativePoint $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @uses RelativePointMethodsOverride::Equals_1 ($obj)
	 * @uses RelativePointMethodsOverride::Equals_2 ($p)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @param \Avalonia\Size $size
	 * @return \Avalonia\Point
	 */
	public  function ToPixels($size){}
	/**
	 * @param \System\String|string $s
	 * @return \Avalonia\RelativePoint
	 */
	public static function Parse($s){}
}
