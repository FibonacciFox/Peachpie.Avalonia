<?php
namespace Avalonia;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait Vector3DMethodsOverride
{
	/**
	 * @return \Avalonia\Vector3D
	 */
	#[MethodOverride] public static function Multiply_1($left, $right){}
	/**
	 * @return \Avalonia\Vector3D
	 */
	#[MethodOverride] public static function Multiply_2($left, $right){}
	/**
	 * @return \Avalonia\Vector3D
	 */
	#[MethodOverride] public static function Divide_1($left, $right){}
	/**
	 * @return \Avalonia\Vector3D
	 */
	#[MethodOverride] public static function Divide_2($left, $right){}
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
class Vector3D extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @return \System\Double|double
	 */
	public  function get_X(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_X($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Y(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_Y($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Z(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_Z($value){}
	/**
	 * @param \System\String|string $s
	 * @return \Avalonia\Vector3D
	 */
	public static function Parse($s){}
	/**
	 * @return \System\Numerics\Vector3
	 */
	protected  function ToVector3(){}
	/**
	 * @param \System\Numerics\Vector3 $vector
	 * @return \Avalonia\Vector3D
	 */
	public static function op_Implicit($vector){}
	/**
	 * @param \Avalonia\Vector3D $vector1
	 * @param \Avalonia\Vector3D $vector2
	 * @return \System\Double|double
	 */
	public static function Dot($vector1, $vector2){}
	/**
	 * @param \Avalonia\Vector3D $left
	 * @param \Avalonia\Vector3D $right
	 * @return \Avalonia\Vector3D
	 */
	public static function Add($left, $right){}
	/**
	 * @param \Avalonia\Vector3D $left
	 * @param \Avalonia\Vector3D $right
	 * @return \Avalonia\Vector3D
	 */
	public static function op_Addition($left, $right){}
	/**
	 * @param \Avalonia\Vector3D $left
	 * @param \Avalonia\Vector3D $right
	 * @return \Avalonia\Vector3D
	 */
	public static function Substract($left, $right){}
	/**
	 * @param \Avalonia\Vector3D $left
	 * @param \Avalonia\Vector3D $right
	 * @return \Avalonia\Vector3D
	 */
	public static function op_Subtraction($left, $right){}
	/**
	 * @param \Avalonia\Vector3D $v
	 * @return \Avalonia\Vector3D
	 */
	public static function op_UnaryNegation($v){}
	/**
	 * @uses Vector3DMethodsOverride::Multiply_1 ($left, $right)
	 * @uses Vector3DMethodsOverride::Multiply_2 ($left, $right)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Multiply(mixed ...$args){}
	/**
	 * @param \Avalonia\Vector3D $left
	 * @param \System\Double|double $right
	 * @return \Avalonia\Vector3D
	 */
	public static function op_Multiply($left, $right){}
	/**
	 * @uses Vector3DMethodsOverride::Divide_1 ($left, $right)
	 * @uses Vector3DMethodsOverride::Divide_2 ($left, $right)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Divide(mixed ...$args){}
	/**
	 * @return \Avalonia\Vector3D
	 */
	public  function Abs(){}
	/**
	 * @param \Avalonia\Vector3D $value
	 * @param \Avalonia\Vector3D $min
	 * @param \Avalonia\Vector3D $max
	 * @return \Avalonia\Vector3D
	 */
	public static function Clamp($value, $min, $max){}
	/**
	 * @param \Avalonia\Vector3D $left
	 * @param \Avalonia\Vector3D $right
	 * @return \Avalonia\Vector3D
	 */
	public static function Max($left, $right){}
	/**
	 * @param \Avalonia\Vector3D $left
	 * @param \Avalonia\Vector3D $right
	 * @return \Avalonia\Vector3D
	 */
	public static function Min($left, $right){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Length(){}
	/**
	 * @param \Avalonia\Vector3D $value
	 * @return \Avalonia\Vector3D
	 */
	public static function Normalize($value){}
	/**
	 * @param \Avalonia\Vector3D $value1
	 * @param \Avalonia\Vector3D $value2
	 * @return \System\Double|double
	 */
	public static function DistanceSquared($value1, $value2){}
	/**
	 * @param \Avalonia\Vector3D $value1
	 * @param \Avalonia\Vector3D $value2
	 * @return \System\Double|double
	 */
	public static function Distance($value1, $value2){}
	/**
	 * @param \System\Text\StringBuilder $builder
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Vector3D $left
	 * @param \Avalonia\Vector3D $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Vector3D $left
	 * @param \Avalonia\Vector3D $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @uses Vector3DMethodsOverride::Equals_1 ($obj)
	 * @uses Vector3DMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @param \System\Double& $X
	 * @param \System\Double& $Y
	 * @param \System\Double& $Z
	 * @return \System\Void|void
	 */
	public  function Deconstruct($X, $Y, $Z){}
}
