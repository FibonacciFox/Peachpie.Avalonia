<?php
namespace Avalonia;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait CornerRadiusMethodsOverride
{
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
class CornerRadius extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @return \System\Double|double
	 */
	public  function get_TopLeft(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_TopRight(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_BottomRight(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_BottomLeft(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsUniform(){}
	/**
	 * @uses CornerRadiusMethodsOverride::Equals_1 ($other)
	 * @uses CornerRadiusMethodsOverride::Equals_2 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @param \System\String|string $s
	 * @return \Avalonia\CornerRadius
	 */
	public static function Parse($s){}
	/**
	 * @param \Avalonia\CornerRadius $left
	 * @param \Avalonia\CornerRadius $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \Avalonia\CornerRadius $left
	 * @param \Avalonia\CornerRadius $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
}
