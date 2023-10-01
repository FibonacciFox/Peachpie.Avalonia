<?php
namespace Avalonia;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait SizeMethodsOverride
{
	/**
	 * @return \Avalonia\Size
	 */
	#[MethodOverride] public static function op_Multiply_1($size, $scale){}
	/**
	 * @return \Avalonia\Size
	 */
	#[MethodOverride] public static function op_Multiply_2($size, $scale){}
	/**
	 * @return \Avalonia\Size
	 */
	#[MethodOverride] public static function op_Division_1($size, $scale){}
	/**
	 * @return \Avalonia\Vector
	 */
	#[MethodOverride] public static function op_Division_2($left, $right){}
	/**
	 * @return \Avalonia\Size
	 */
	#[MethodOverride] public static function op_Division_3($size, $scale){}
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
class Size extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @return \System\Double|double
	 */
	public  function get_AspectRatio(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Width(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Height(){}
	/**
	 * @param \Avalonia\Size $left
	 * @param \Avalonia\Size $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \Avalonia\Size $left
	 * @param \Avalonia\Size $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @uses SizeMethodsOverride::op_Multiply_1 ($size, $scale)
	 * @uses SizeMethodsOverride::op_Multiply_2 ($size, $scale)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function op_Multiply(mixed ...$args){}
	/**
	 * @uses SizeMethodsOverride::op_Division_1 ($size, $scale)
	 * @uses SizeMethodsOverride::op_Division_2 ($left, $right)
	 * @uses SizeMethodsOverride::op_Division_3 ($size, $scale)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function op_Division(mixed ...$args){}
	/**
	 * @param \Avalonia\Size $size
	 * @param \Avalonia\Size $toAdd
	 * @return \Avalonia\Size
	 */
	public static function op_Addition($size, $toAdd){}
	/**
	 * @param \Avalonia\Size $size
	 * @param \Avalonia\Size $toSubtract
	 * @return \Avalonia\Size
	 */
	public static function op_Subtraction($size, $toSubtract){}
	/**
	 * @param \System\String|string $s
	 * @return \Avalonia\Size
	 */
	public static function Parse($s){}
	/**
	 * @param \Avalonia\Size $constraint
	 * @return \Avalonia\Size
	 */
	public  function Constrain($constraint){}
	/**
	 * @param \Avalonia\Thickness $thickness
	 * @return \Avalonia\Size
	 */
	public  function Deflate($thickness){}
	/**
	 * @uses SizeMethodsOverride::Equals_1 ($other)
	 * @uses SizeMethodsOverride::Equals_2 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @param \Avalonia\Size $other
	 * @return \System\Boolean
	 */
	public  function NearlyEquals($other){}
	/**
	 * @param \Avalonia\Thickness $thickness
	 * @return \Avalonia\Size
	 */
	public  function Inflate($thickness){}
	/**
	 * @param \System\Double|double $width
	 * @return \Avalonia\Size
	 */
	public  function WithWidth($width){}
	/**
	 * @param \System\Double|double $height
	 * @return \Avalonia\Size
	 */
	public  function WithHeight($height){}
	/**
	 * @param \System\Double& $width
	 * @param \System\Double& $height
	 * @return \System\Void|void
	 */
	public  function Deconstruct($width, $height){}
}
