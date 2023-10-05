<?php
namespace Avalonia;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait PointMethodsOverride
{
	/**
	 * @return \Avalonia\Point
	 */
	#[MethodOverride] public static function op_Addition_1($a, $b){}
	/**
	 * @return \Avalonia\Point
	 */
	#[MethodOverride] public static function op_Addition_2($a, $b){}
	/**
	 * @return \Avalonia\Point
	 */
	#[MethodOverride] public static function op_Subtraction_1($a, $b){}
	/**
	 * @return \Avalonia\Point
	 */
	#[MethodOverride] public static function op_Subtraction_2($a, $b){}
	/**
	 * @return \Avalonia\Point
	 */
	#[MethodOverride] public static function op_Multiply_1($p, $k){}
	/**
	 * @return \Avalonia\Point
	 */
	#[MethodOverride] public static function op_Multiply_2($k, $p){}
	/**
	 * @return \Avalonia\Point
	 */
	#[MethodOverride] public static function op_Multiply_3($point, $matrix){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($other){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($obj){}
	/**
	 * @return \Avalonia\Point
	 */
	#[MethodOverride] public  function Transform_1($transform){}
	/**
	 * @return \Avalonia\Point
	 */
	#[MethodOverride] protected  function Transform_2($matrix){}
}
/**
 */
class Point extends \System\ValueType implements 
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
	 * @return \System\Double|double
	 */
	public  function get_X(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Y(){}
	/**
	 * @param \Avalonia\Point $p
	 * @return \Avalonia\Vector
	 */
	public static function op_Implicit($p){}
	/**
	 * @param \Avalonia\Point $a
	 * @return \Avalonia\Point
	 */
	public static function op_UnaryNegation($a){}
	/**
	 * @param \Avalonia\Point $left
	 * @param \Avalonia\Point $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \Avalonia\Point $left
	 * @param \Avalonia\Point $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @uses PointMethodsOverride::op_Addition_1 ($a, $b)
	 * @uses PointMethodsOverride::op_Addition_2 ($a, $b)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function op_Addition(mixed ...$args){}
	/**
	 * @uses PointMethodsOverride::op_Subtraction_1 ($a, $b)
	 * @uses PointMethodsOverride::op_Subtraction_2 ($a, $b)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function op_Subtraction(mixed ...$args){}
	/**
	 * @uses PointMethodsOverride::op_Multiply_1 ($p, $k)
	 * @uses PointMethodsOverride::op_Multiply_2 ($k, $p)
	 * @uses PointMethodsOverride::op_Multiply_3 ($point, $matrix)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function op_Multiply(mixed ...$args){}
	/**
	 * @param \Avalonia\Point $p
	 * @param \System\Double|double $k
	 * @return \Avalonia\Point
	 */
	public static function op_Division($p, $k){}
	/**
	 * @param \Avalonia\Point $value1
	 * @param \Avalonia\Point $value2
	 * @return \System\Double|double
	 */
	public static function Distance($value1, $value2){}
	/**
	 * @param \System\String|string $s
	 * @return \Avalonia\Point
	 */
	public static function Parse($s){}
	/**
	 * @uses PointMethodsOverride::Equals_1 ($other)
	 * @uses PointMethodsOverride::Equals_2 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @param \Avalonia\Point $other
	 * @return \System\Boolean
	 */
	public  function NearlyEquals($other){}
	/**
	 * @uses PointMethodsOverride::Transform_1 ($transform)
	 * @uses PointMethodsOverride::Transform_2 ($matrix)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Transform(mixed ...$args){}
	/**
	 * @param \System\Double|double $x
	 * @return \Avalonia\Point
	 */
	public  function WithX($x){}
	/**
	 * @param \System\Double|double $y
	 * @return \Avalonia\Point
	 */
	public  function WithY($y){}
	/**
	 * @param \System\Double& $x
	 * @param \System\Double& $y
	 * @return \System\Void|void
	 */
	public  function Deconstruct($x, $y){}
}
