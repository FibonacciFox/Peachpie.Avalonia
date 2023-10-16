<?php
namespace System\Numerics;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait Vector3MethodsOverride
{
	/**
	 * @return \System\Numerics\Vector3
	 */
	#[MethodOverride] public static function op_Division_1($left, $right){}
	/**
	 * @return \System\Numerics\Vector3
	 */
	#[MethodOverride] public static function op_Division_2($value1, $value2){}
	/**
	 * @return \System\Numerics\Vector3
	 */
	#[MethodOverride] public static function op_Multiply_1($left, $right){}
	/**
	 * @return \System\Numerics\Vector3
	 */
	#[MethodOverride] public static function op_Multiply_2($left, $right){}
	/**
	 * @return \System\Numerics\Vector3
	 */
	#[MethodOverride] public static function op_Multiply_3($left, $right){}
	/**
	 * @return \System\Numerics\Vector3
	 */
	#[MethodOverride] public static function Divide_1($left, $right){}
	/**
	 * @return \System\Numerics\Vector3
	 */
	#[MethodOverride] public static function Divide_2($left, $divisor){}
	/**
	 * @return \System\Numerics\Vector3
	 */
	#[MethodOverride] public static function Multiply_1($left, $right){}
	/**
	 * @return \System\Numerics\Vector3
	 */
	#[MethodOverride] public static function Multiply_2($left, $right){}
	/**
	 * @return \System\Numerics\Vector3
	 */
	#[MethodOverride] public static function Multiply_3($left, $right){}
	/**
	 * @return \System\Numerics\Vector3
	 */
	#[MethodOverride] public static function Transform_1($position, $matrix){}
	/**
	 * @return \System\Numerics\Vector3
	 */
	#[MethodOverride] public static function Transform_2($value, $rotation){}
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
	#[MethodOverride] public  function Equals_1($obj){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($other){}
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
class Vector3 extends \System\ValueType implements 
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
	 * @var \System\Numerics\Vector3
	 * @property
	 */
	public readonly $Zero;
	/**
	 * @var \System\Numerics\Vector3
	 * @property
	 */
	public readonly $One;
	/**
	 * @var \System\Numerics\Vector3
	 * @property
	 */
	public readonly $UnitX;
	/**
	 * @var \System\Numerics\Vector3
	 * @property
	 */
	public readonly $UnitY;
	/**
	 * @var \System\Numerics\Vector3
	 * @property
	 */
	public readonly $UnitZ;
	/**
	 * @var \System\Single
	 * @property
	 */
	public $Item;
	/**
	 * @return \System\Numerics\Vector3
	 */
	public static function get_Zero(){}
	/**
	 * @return \System\Numerics\Vector3
	 */
	public static function get_One(){}
	/**
	 * @return \System\Numerics\Vector3
	 */
	public static function get_UnitX(){}
	/**
	 * @return \System\Numerics\Vector3
	 */
	public static function get_UnitY(){}
	/**
	 * @return \System\Numerics\Vector3
	 */
	public static function get_UnitZ(){}
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
	 * @param \System\Numerics\Vector3 $vector
	 * @param \System\Int32|int $index
	 * @return \System\Single
	 */
	protected static function GetElement($vector, $index){}
	/**
	 * @param \System\Numerics\Vector3& $vector
	 * @param \System\Int32|int $index
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetElementUnsafe($vector, $index){}
	/**
	 * @param \System\Numerics\Vector3 $vector
	 * @param \System\Int32|int $index
	 * @param \System\Single $value
	 * @return \System\Numerics\Vector3
	 */
	protected static function WithElement($vector, $index, $value){}
	/**
	 * @param \System\Numerics\Vector3& $vector
	 * @param \System\Int32|int $index
	 * @param \System\Single $value
	 * @return \System\Void|void
	 */
	protected static function SetElementUnsafe($vector, $index, $value){}
	/**
	 * @param \System\Numerics\Vector3 $left
	 * @param \System\Numerics\Vector3 $right
	 * @return \System\Numerics\Vector3
	 */
	public static function op_Addition($left, $right){}
	/**
	 * @uses Vector3MethodsOverride::op_Division_1 ($left, $right)
	 * @uses Vector3MethodsOverride::op_Division_2 ($value1, $value2)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function op_Division(mixed ...$args){}
	/**
	 * @param \System\Numerics\Vector3 $left
	 * @param \System\Numerics\Vector3 $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\Numerics\Vector3 $left
	 * @param \System\Numerics\Vector3 $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @uses Vector3MethodsOverride::op_Multiply_1 ($left, $right)
	 * @uses Vector3MethodsOverride::op_Multiply_2 ($left, $right)
	 * @uses Vector3MethodsOverride::op_Multiply_3 ($left, $right)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function op_Multiply(mixed ...$args){}
	/**
	 * @param \System\Numerics\Vector3 $left
	 * @param \System\Numerics\Vector3 $right
	 * @return \System\Numerics\Vector3
	 */
	public static function op_Subtraction($left, $right){}
	/**
	 * @param \System\Numerics\Vector3 $value
	 * @return \System\Numerics\Vector3
	 */
	public static function op_UnaryNegation($value){}
	/**
	 * @param \System\Numerics\Vector3 $value
	 * @return \System\Numerics\Vector3
	 */
	public static function Abs($value){}
	/**
	 * @param \System\Numerics\Vector3 $left
	 * @param \System\Numerics\Vector3 $right
	 * @return \System\Numerics\Vector3
	 */
	public static function Add($left, $right){}
	/**
	 * @param \System\Numerics\Vector3 $value1
	 * @param \System\Numerics\Vector3 $min
	 * @param \System\Numerics\Vector3 $max
	 * @return \System\Numerics\Vector3
	 */
	public static function Clamp($value1, $min, $max){}
	/**
	 * @param \System\Numerics\Vector3 $vector1
	 * @param \System\Numerics\Vector3 $vector2
	 * @return \System\Numerics\Vector3
	 */
	public static function Cross($vector1, $vector2){}
	/**
	 * @param \System\Numerics\Vector3 $value1
	 * @param \System\Numerics\Vector3 $value2
	 * @return \System\Single
	 */
	public static function Distance($value1, $value2){}
	/**
	 * @param \System\Numerics\Vector3 $value1
	 * @param \System\Numerics\Vector3 $value2
	 * @return \System\Single
	 */
	public static function DistanceSquared($value1, $value2){}
	/**
	 * @uses Vector3MethodsOverride::Divide_1 ($left, $right)
	 * @uses Vector3MethodsOverride::Divide_2 ($left, $divisor)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Divide(mixed ...$args){}
	/**
	 * @param \System\Numerics\Vector3 $vector1
	 * @param \System\Numerics\Vector3 $vector2
	 * @return \System\Single
	 */
	public static function Dot($vector1, $vector2){}
	/**
	 * @param \System\Numerics\Vector3 $value1
	 * @param \System\Numerics\Vector3 $value2
	 * @param \System\Single $amount
	 * @return \System\Numerics\Vector3
	 */
	public static function Lerp($value1, $value2, $amount){}
	/**
	 * @param \System\Numerics\Vector3 $value1
	 * @param \System\Numerics\Vector3 $value2
	 * @return \System\Numerics\Vector3
	 */
	public static function Max($value1, $value2){}
	/**
	 * @param \System\Numerics\Vector3 $value1
	 * @param \System\Numerics\Vector3 $value2
	 * @return \System\Numerics\Vector3
	 */
	public static function Min($value1, $value2){}
	/**
	 * @uses Vector3MethodsOverride::Multiply_1 ($left, $right)
	 * @uses Vector3MethodsOverride::Multiply_2 ($left, $right)
	 * @uses Vector3MethodsOverride::Multiply_3 ($left, $right)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Multiply(mixed ...$args){}
	/**
	 * @param \System\Numerics\Vector3 $value
	 * @return \System\Numerics\Vector3
	 */
	public static function Negate($value){}
	/**
	 * @param \System\Numerics\Vector3 $value
	 * @return \System\Numerics\Vector3
	 */
	public static function Normalize($value){}
	/**
	 * @param \System\Numerics\Vector3 $vector
	 * @param \System\Numerics\Vector3 $normal
	 * @return \System\Numerics\Vector3
	 */
	public static function Reflect($vector, $normal){}
	/**
	 * @param \System\Numerics\Vector3 $value
	 * @return \System\Numerics\Vector3
	 */
	public static function SquareRoot($value){}
	/**
	 * @param \System\Numerics\Vector3 $left
	 * @param \System\Numerics\Vector3 $right
	 * @return \System\Numerics\Vector3
	 */
	public static function Subtract($left, $right){}
	/**
	 * @uses Vector3MethodsOverride::Transform_1 ($position, $matrix)
	 * @uses Vector3MethodsOverride::Transform_2 ($value, $rotation)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Transform(mixed ...$args){}
	/**
	 * @param \System\Numerics\Vector3 $normal
	 * @param \System\Numerics\Matrix4x4 $matrix
	 * @return \System\Numerics\Vector3
	 */
	public static function TransformNormal($normal, $matrix){}
	/**
	 * @uses Vector3MethodsOverride::CopyTo_1 ($array)
	 * @uses Vector3MethodsOverride::CopyTo_2 ($array, $index)
	 * @uses Vector3MethodsOverride::CopyTo_3 ($destination)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyTo(mixed ...$args){}
	/**
	 * @param \System\Span_1 $destination
	 * @return \System\Boolean
	 */
	public  function TryCopyTo($destination){}
	/**
	 * @uses Vector3MethodsOverride::Equals_1 ($obj)
	 * @uses Vector3MethodsOverride::Equals_2 ($other)
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
	 * @uses Vector3MethodsOverride::ToString_1 ()
	 * @uses Vector3MethodsOverride::ToString_2 ($format)
	 * @uses Vector3MethodsOverride::ToString_3 ($format, $formatProvider)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToString(mixed ...$args){}
}
