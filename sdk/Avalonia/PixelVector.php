<?php
namespace Avalonia;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait PixelVectorMethodsOverride
{
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function op_Multiply_1($a, $b){}
	/**
	 * @return \Avalonia\PixelVector
	 */
	#[MethodOverride] public static function op_Multiply_2($vector, $scale){}
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
class PixelVector extends \System\ValueType
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $X;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Y;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $Length;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_X(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Y(){}
	/**
	 * @param \Avalonia\PixelVector $a
	 * @return \Avalonia\PixelPoint
	 */
	public static function op_Explicit($a){}
	/**
	 * @uses PixelVectorMethodsOverride::op_Multiply_1 ($a, $b)
	 * @uses PixelVectorMethodsOverride::op_Multiply_2 ($vector, $scale)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function op_Multiply(mixed ...$args){}
	/**
	 * @param \Avalonia\PixelVector $vector
	 * @param \System\Int32|int $scale
	 * @return \Avalonia\PixelVector
	 */
	public static function op_Division($vector, $scale){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Length(){}
	/**
	 * @param \Avalonia\PixelVector $a
	 * @return \Avalonia\PixelVector
	 */
	public static function op_UnaryNegation($a){}
	/**
	 * @param \Avalonia\PixelVector $a
	 * @param \Avalonia\PixelVector $b
	 * @return \Avalonia\PixelVector
	 */
	public static function op_Addition($a, $b){}
	/**
	 * @param \Avalonia\PixelVector $a
	 * @param \Avalonia\PixelVector $b
	 * @return \Avalonia\PixelVector
	 */
	public static function op_Subtraction($a, $b){}
	/**
	 * @uses PixelVectorMethodsOverride::Equals_1 ($other)
	 * @uses PixelVectorMethodsOverride::Equals_2 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @param \Avalonia\PixelVector $other
	 * @return \System\Boolean
	 */
	public  function NearlyEquals($other){}
	/**
	 * @param \Avalonia\PixelVector $left
	 * @param \Avalonia\PixelVector $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \Avalonia\PixelVector $left
	 * @param \Avalonia\PixelVector $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \System\Int32|int $x
	 * @return \Avalonia\PixelVector
	 */
	public  function WithX($x){}
	/**
	 * @param \System\Int32|int $y
	 * @return \Avalonia\PixelVector
	 */
	public  function WithY($y){}
}
