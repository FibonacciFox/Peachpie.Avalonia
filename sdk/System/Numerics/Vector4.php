<?php
namespace System\Numerics;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait Vector4MethodsOverride
{
	/**
	 * @return \System\Numerics\Vector4
	 */
	#[MethodOverride] public static function op_Division_1($left, $right){}
	/**
	 * @return \System\Numerics\Vector4
	 */
	#[MethodOverride] public static function op_Division_2($value1, $value2){}
	/**
	 * @return \System\Numerics\Vector4
	 */
	#[MethodOverride] public static function op_Multiply_1($left, $right){}
	/**
	 * @return \System\Numerics\Vector4
	 */
	#[MethodOverride] public static function op_Multiply_2($left, $right){}
	/**
	 * @return \System\Numerics\Vector4
	 */
	#[MethodOverride] public static function op_Multiply_3($left, $right){}
	/**
	 * @return \System\Numerics\Vector4
	 */
	#[MethodOverride] public static function Divide_1($left, $right){}
	/**
	 * @return \System\Numerics\Vector4
	 */
	#[MethodOverride] public static function Divide_2($left, $divisor){}
	/**
	 * @return \System\Numerics\Vector4
	 */
	#[MethodOverride] public static function Multiply_1($left, $right){}
	/**
	 * @return \System\Numerics\Vector4
	 */
	#[MethodOverride] public static function Multiply_2($left, $right){}
	/**
	 * @return \System\Numerics\Vector4
	 */
	#[MethodOverride] public static function Multiply_3($left, $right){}
	/**
	 * @return \System\Numerics\Vector4
	 */
	#[MethodOverride] public static function Transform_1($position, $matrix){}
	/**
	 * @return \System\Numerics\Vector4
	 */
	#[MethodOverride] public static function Transform_2($value, $rotation){}
	/**
	 * @return \System\Numerics\Vector4
	 */
	#[MethodOverride] public static function Transform_3($position, $matrix){}
	/**
	 * @return \System\Numerics\Vector4
	 */
	#[MethodOverride] public static function Transform_4($value, $rotation){}
	/**
	 * @return \System\Numerics\Vector4
	 */
	#[MethodOverride] public static function Transform_5($vector, $matrix){}
	/**
	 * @return \System\Numerics\Vector4
	 */
	#[MethodOverride] public static function Transform_6($value, $rotation){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function CopyTo_1($array){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function CopyTo_2($array, $index){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function CopyTo_3($destination){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($other){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($obj){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function ToString_1(){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function ToString_2($format){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function ToString_3($format, $formatProvider){}
}
/**
 */
class Vector4 extends \System\ValueType implements 
	\System\IEquatable_1,
	\System\IFormattable
{
	/**
	 * @var \System\Single
	 * @field
	 */
	public $X;
	/**
	 * @var \System\Single
	 * @field
	 */
	public $Y;
	/**
	 * @var \System\Single
	 * @field
	 */
	public $Z;
	/**
	 * @var \System\Single
	 * @field
	 */
	public $W;
	/**
	 * @var \System\Numerics\Vector4
	 * @property
	 */
	public readonly $Zero;
	/**
	 * @var \System\Numerics\Vector4
	 * @property
	 */
	public readonly $One;
	/**
	 * @var \System\Numerics\Vector4
	 * @property
	 */
	public readonly $UnitX;
	/**
	 * @var \System\Numerics\Vector4
	 * @property
	 */
	public readonly $UnitY;
	/**
	 * @var \System\Numerics\Vector4
	 * @property
	 */
	public readonly $UnitZ;
	/**
	 * @var \System\Numerics\Vector4
	 * @property
	 */
	public readonly $UnitW;
	/**
	 * @var \System\Single
	 * @property
	 */
	public $Item;
	/**
	 * @return \System\Numerics\Vector4
	 */
	public static function get_Zero(){}
	/**
	 * @return \System\Numerics\Vector4
	 */
	public static function get_One(){}
	/**
	 * @return \System\Numerics\Vector4
	 */
	public static function get_UnitX(){}
	/**
	 * @return \System\Numerics\Vector4
	 */
	public static function get_UnitY(){}
	/**
	 * @return \System\Numerics\Vector4
	 */
	public static function get_UnitZ(){}
	/**
	 * @return \System\Numerics\Vector4
	 */
	public static function get_UnitW(){}
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Single
	 */
	public  function get_Item($index){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Single $value
	 * @return \System\Void|void
	 */
	public  function set_Item($index, $value){}
	/**
	 * @param \System\Numerics\Vector4 $vector
	 * @param \System\Int32|int $index
	 * @return \System\Single
	 */
	protected static function GetElement($vector, $index){}
	/**
	 * @param \System\Numerics\Vector4& $vector
	 * @param \System\Int32|int $index
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetElementUnsafe($vector, $index){}
	/**
	 * @param \System\Numerics\Vector4 $vector
	 * @param \System\Int32|int $index
	 * @param \System\Single $value
	 * @return \System\Numerics\Vector4
	 */
	protected static function WithElement($vector, $index, $value){}
	/**
	 * @param \System\Numerics\Vector4& $vector
	 * @param \System\Int32|int $index
	 * @param \System\Single $value
	 * @return \System\Void|void
	 */
	protected static function SetElementUnsafe($vector, $index, $value){}
	/**
	 * @param \System\Numerics\Vector4 $left
	 * @param \System\Numerics\Vector4 $right
	 * @return \System\Numerics\Vector4
	 */
	public static function op_Addition($left, $right){}
	/**
	 * @uses Vector4MethodsOverride::op_Division_1 ($left, $right)
	 * @uses Vector4MethodsOverride::op_Division_2 ($value1, $value2)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function op_Division(mixed ...$args){}
	/**
	 * @param \System\Numerics\Vector4 $left
	 * @param \System\Numerics\Vector4 $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\Numerics\Vector4 $left
	 * @param \System\Numerics\Vector4 $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @uses Vector4MethodsOverride::op_Multiply_1 ($left, $right)
	 * @uses Vector4MethodsOverride::op_Multiply_2 ($left, $right)
	 * @uses Vector4MethodsOverride::op_Multiply_3 ($left, $right)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function op_Multiply(mixed ...$args){}
	/**
	 * @param \System\Numerics\Vector4 $left
	 * @param \System\Numerics\Vector4 $right
	 * @return \System\Numerics\Vector4
	 */
	public static function op_Subtraction($left, $right){}
	/**
	 * @param \System\Numerics\Vector4 $value
	 * @return \System\Numerics\Vector4
	 */
	public static function op_UnaryNegation($value){}
	/**
	 * @param \System\Numerics\Vector4 $value
	 * @return \System\Numerics\Vector4
	 */
	public static function Abs($value){}
	/**
	 * @param \System\Numerics\Vector4 $left
	 * @param \System\Numerics\Vector4 $right
	 * @return \System\Numerics\Vector4
	 */
	public static function Add($left, $right){}
	/**
	 * @param \System\Numerics\Vector4 $value1
	 * @param \System\Numerics\Vector4 $min
	 * @param \System\Numerics\Vector4 $max
	 * @return \System\Numerics\Vector4
	 */
	public static function Clamp($value1, $min, $max){}
	/**
	 * @param \System\Numerics\Vector4 $value1
	 * @param \System\Numerics\Vector4 $value2
	 * @return \System\Single
	 */
	public static function Distance($value1, $value2){}
	/**
	 * @param \System\Numerics\Vector4 $value1
	 * @param \System\Numerics\Vector4 $value2
	 * @return \System\Single
	 */
	public static function DistanceSquared($value1, $value2){}
	/**
	 * @uses Vector4MethodsOverride::Divide_1 ($left, $right)
	 * @uses Vector4MethodsOverride::Divide_2 ($left, $divisor)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Divide(mixed ...$args){}
	/**
	 * @param \System\Numerics\Vector4 $vector1
	 * @param \System\Numerics\Vector4 $vector2
	 * @return \System\Single
	 */
	public static function Dot($vector1, $vector2){}
	/**
	 * @param \System\Numerics\Vector4 $value1
	 * @param \System\Numerics\Vector4 $value2
	 * @param \System\Single $amount
	 * @return \System\Numerics\Vector4
	 */
	public static function Lerp($value1, $value2, $amount){}
	/**
	 * @param \System\Numerics\Vector4 $value1
	 * @param \System\Numerics\Vector4 $value2
	 * @return \System\Numerics\Vector4
	 */
	public static function Max($value1, $value2){}
	/**
	 * @param \System\Numerics\Vector4 $value1
	 * @param \System\Numerics\Vector4 $value2
	 * @return \System\Numerics\Vector4
	 */
	public static function Min($value1, $value2){}
	/**
	 * @uses Vector4MethodsOverride::Multiply_1 ($left, $right)
	 * @uses Vector4MethodsOverride::Multiply_2 ($left, $right)
	 * @uses Vector4MethodsOverride::Multiply_3 ($left, $right)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Multiply(mixed ...$args){}
	/**
	 * @param \System\Numerics\Vector4 $value
	 * @return \System\Numerics\Vector4
	 */
	public static function Negate($value){}
	/**
	 * @param \System\Numerics\Vector4 $vector
	 * @return \System\Numerics\Vector4
	 */
	public static function Normalize($vector){}
	/**
	 * @param \System\Numerics\Vector4 $value
	 * @return \System\Numerics\Vector4
	 */
	public static function SquareRoot($value){}
	/**
	 * @param \System\Numerics\Vector4 $left
	 * @param \System\Numerics\Vector4 $right
	 * @return \System\Numerics\Vector4
	 */
	public static function Subtract($left, $right){}
	/**
	 * @uses Vector4MethodsOverride::Transform_1 ($position, $matrix)
	 * @uses Vector4MethodsOverride::Transform_2 ($value, $rotation)
	 * @uses Vector4MethodsOverride::Transform_3 ($position, $matrix)
	 * @uses Vector4MethodsOverride::Transform_4 ($value, $rotation)
	 * @uses Vector4MethodsOverride::Transform_5 ($vector, $matrix)
	 * @uses Vector4MethodsOverride::Transform_6 ($value, $rotation)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Transform(mixed ...$args){}
	/**
	 * @uses Vector4MethodsOverride::CopyTo_1 ($array)
	 * @uses Vector4MethodsOverride::CopyTo_2 ($array, $index)
	 * @uses Vector4MethodsOverride::CopyTo_3 ($destination)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyTo(mixed ...$args){}
	/**
	 * @param \System\Span_1 $destination
	 * @return \System\Boolean
	 */
	public  function TryCopyTo($destination){}
	/**
	 * @uses Vector4MethodsOverride::Equals_1 ($other)
	 * @uses Vector4MethodsOverride::Equals_2 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @return \System\Single
	 */
	public  function Length(){}
	/**
	 * @return \System\Single
	 */
	public  function LengthSquared(){}
	/**
	 * @uses Vector4MethodsOverride::ToString_1 ()
	 * @uses Vector4MethodsOverride::ToString_2 ($format)
	 * @uses Vector4MethodsOverride::ToString_3 ($format, $formatProvider)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToString(mixed ...$args){}
}
