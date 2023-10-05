<?php
namespace Avalonia;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait VectorMethodsOverride
{
	/**
	 * @return \System\Double|double
	 */
	#[MethodOverride] public static function op_Multiply_1($a, $b){}
	/**
	 * @return \Avalonia\Vector
	 */
	#[MethodOverride] public static function op_Multiply_2($vector, $scale){}
	/**
	 * @return \Avalonia\Vector
	 */
	#[MethodOverride] public static function op_Multiply_3($scale, $vector){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($other){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($obj){}
	/**
	 * @return \Avalonia\Vector
	 */
	#[MethodOverride] public  function Normalize_1(){}
	/**
	 * @return \Avalonia\Vector
	 */
	#[MethodOverride] public static function Normalize_2($vector){}
	/**
	 * @return \Avalonia\Vector
	 */
	#[MethodOverride] public  function Negate_1(){}
	/**
	 * @return \Avalonia\Vector
	 */
	#[MethodOverride] public static function Negate_2($vector){}
	/**
	 * @return \Avalonia\Vector
	 */
	#[MethodOverride] public static function Divide_1($a, $b){}
	/**
	 * @return \Avalonia\Vector
	 */
	#[MethodOverride] public static function Divide_2($vector, $scalar){}
	/**
	 * @return \Avalonia\Vector
	 */
	#[MethodOverride] public static function Multiply_1($a, $b){}
	/**
	 * @return \Avalonia\Vector
	 */
	#[MethodOverride] public static function Multiply_2($vector, $scalar){}
}
/**
 */
class Vector extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $X;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $Y;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $Length;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $SquaredLength;
	/**
	 * @var \Avalonia\Vector
	 * @property
	 */
	public readonly $Zero;
	/**
	 * @var \Avalonia\Vector
	 * @property
	 */
	public readonly $One;
	/**
	 * @var \Avalonia\Vector
	 * @property
	 */
	public readonly $UnitX;
	/**
	 * @var \Avalonia\Vector
	 * @property
	 */
	public readonly $UnitY;
	/**
	 * @return \System\Double|double
	 */
	public  function get_X(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Y(){}
	/**
	 * @param \Avalonia\Vector $a
	 * @return \Avalonia\Point
	 */
	public static function op_Explicit($a){}
	/**
	 * @uses VectorMethodsOverride::op_Multiply_1 ($a, $b)
	 * @uses VectorMethodsOverride::op_Multiply_2 ($vector, $scale)
	 * @uses VectorMethodsOverride::op_Multiply_3 ($scale, $vector)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function op_Multiply(mixed ...$args){}
	/**
	 * @param \Avalonia\Vector $vector
	 * @param \System\Double|double $scale
	 * @return \Avalonia\Vector
	 */
	public static function op_Division($vector, $scale){}
	/**
	 * @param \System\String|string $s
	 * @return \Avalonia\Vector
	 */
	public static function Parse($s){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Length(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_SquaredLength(){}
	/**
	 * @param \Avalonia\Vector $a
	 * @return \Avalonia\Vector
	 */
	public static function op_UnaryNegation($a){}
	/**
	 * @param \Avalonia\Vector $a
	 * @param \Avalonia\Vector $b
	 * @return \Avalonia\Vector
	 */
	public static function op_Addition($a, $b){}
	/**
	 * @param \Avalonia\Vector $a
	 * @param \Avalonia\Vector $b
	 * @return \Avalonia\Vector
	 */
	public static function op_Subtraction($a, $b){}
	/**
	 * @uses VectorMethodsOverride::Equals_1 ($other)
	 * @uses VectorMethodsOverride::Equals_2 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @param \Avalonia\Vector $other
	 * @return \System\Boolean
	 */
	public  function NearlyEquals($other){}
	/**
	 * @param \Avalonia\Vector $left
	 * @param \Avalonia\Vector $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \Avalonia\Vector $left
	 * @param \Avalonia\Vector $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \System\Double|double $x
	 * @return \Avalonia\Vector
	 */
	public  function WithX($x){}
	/**
	 * @param \System\Double|double $y
	 * @return \Avalonia\Vector
	 */
	public  function WithY($y){}
	/**
	 * @uses VectorMethodsOverride::Normalize_1 ()
	 * @uses VectorMethodsOverride::Normalize_2 ($vector)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Normalize(mixed ...$args){}
	/**
	 * @uses VectorMethodsOverride::Negate_1 ()
	 * @uses VectorMethodsOverride::Negate_2 ($vector)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Negate(mixed ...$args){}
	/**
	 * @param \Avalonia\Vector $a
	 * @param \Avalonia\Vector $b
	 * @return \System\Double|double
	 */
	public static function Dot($a, $b){}
	/**
	 * @param \Avalonia\Vector $a
	 * @param \Avalonia\Vector $b
	 * @return \System\Double|double
	 */
	public static function Cross($a, $b){}
	/**
	 * @uses VectorMethodsOverride::Divide_1 ($a, $b)
	 * @uses VectorMethodsOverride::Divide_2 ($vector, $scalar)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Divide(mixed ...$args){}
	/**
	 * @uses VectorMethodsOverride::Multiply_1 ($a, $b)
	 * @uses VectorMethodsOverride::Multiply_2 ($vector, $scalar)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Multiply(mixed ...$args){}
	/**
	 * @param \Avalonia\Vector $a
	 * @param \Avalonia\Vector $b
	 * @return \Avalonia\Vector
	 */
	public static function Add($a, $b){}
	/**
	 * @param \Avalonia\Vector $a
	 * @param \Avalonia\Vector $b
	 * @return \Avalonia\Vector
	 */
	public static function Subtract($a, $b){}
	/**
	 * @return \Avalonia\Vector
	 */
	public static function get_Zero(){}
	/**
	 * @return \Avalonia\Vector
	 */
	public static function get_One(){}
	/**
	 * @return \Avalonia\Vector
	 */
	public static function get_UnitX(){}
	/**
	 * @return \Avalonia\Vector
	 */
	public static function get_UnitY(){}
	/**
	 * @param \System\Double& $x
	 * @param \System\Double& $y
	 * @return \System\Void|void
	 */
	public  function Deconstruct($x, $y){}
	/**
	 * @return \System\Numerics\Vector2
	 */
	protected  function ToVector2(){}
	/**
	 * @return \Avalonia\Vector
	 */
	public  function Abs(){}
	/**
	 * @param \Avalonia\Vector $value
	 * @param \Avalonia\Vector $min
	 * @param \Avalonia\Vector $max
	 * @return \Avalonia\Vector
	 */
	public static function Clamp($value, $min, $max){}
	/**
	 * @param \Avalonia\Vector $left
	 * @param \Avalonia\Vector $right
	 * @return \Avalonia\Vector
	 */
	public static function Max($left, $right){}
	/**
	 * @param \Avalonia\Vector $left
	 * @param \Avalonia\Vector $right
	 * @return \Avalonia\Vector
	 */
	public static function Min($left, $right){}
	/**
	 * @param \Avalonia\Vector $value1
	 * @param \Avalonia\Vector $value2
	 * @return \System\Double|double
	 */
	public static function Distance($value1, $value2){}
	/**
	 * @param \Avalonia\Vector $value1
	 * @param \Avalonia\Vector $value2
	 * @return \System\Double|double
	 */
	public static function DistanceSquared($value1, $value2){}
	/**
	 * @param \System\Numerics\Vector2 $v
	 * @return \Avalonia\Vector
	 */
	public static function op_Implicit($v){}
}
