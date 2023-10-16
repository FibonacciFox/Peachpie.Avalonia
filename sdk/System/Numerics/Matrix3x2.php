<?php
namespace System\Numerics;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait Matrix3x2MethodsOverride
{
	/**
	 * @return \System\Numerics\Matrix3x2
	 */
	#[MethodOverride] public static function op_Multiply_1($value1, $value2){}
	/**
	 * @return \System\Numerics\Matrix3x2
	 */
	#[MethodOverride] public static function op_Multiply_2($value1, $value2){}
	/**
	 * @return \System\Numerics\Matrix3x2
	 */
	#[MethodOverride] public static function CreateRotation_1($radians){}
	/**
	 * @return \System\Numerics\Matrix3x2
	 */
	#[MethodOverride] public static function CreateRotation_2($radians, $centerPoint){}
	/**
	 * @return \System\Numerics\Matrix3x2
	 */
	#[MethodOverride] public static function CreateScale_1($scales){}
	/**
	 * @return \System\Numerics\Matrix3x2
	 */
	#[MethodOverride] public static function CreateScale_2($xScale, $yScale){}
	/**
	 * @return \System\Numerics\Matrix3x2
	 */
	#[MethodOverride] public static function CreateScale_3($xScale, $yScale, $centerPoint){}
	/**
	 * @return \System\Numerics\Matrix3x2
	 */
	#[MethodOverride] public static function CreateScale_4($scales, $centerPoint){}
	/**
	 * @return \System\Numerics\Matrix3x2
	 */
	#[MethodOverride] public static function CreateScale_5($scale){}
	/**
	 * @return \System\Numerics\Matrix3x2
	 */
	#[MethodOverride] public static function CreateScale_6($scale, $centerPoint){}
	/**
	 * @return \System\Numerics\Matrix3x2
	 */
	#[MethodOverride] public static function CreateSkew_1($radiansX, $radiansY){}
	/**
	 * @return \System\Numerics\Matrix3x2
	 */
	#[MethodOverride] public static function CreateSkew_2($radiansX, $radiansY, $centerPoint){}
	/**
	 * @return \System\Numerics\Matrix3x2
	 */
	#[MethodOverride] public static function CreateTranslation_1($position){}
	/**
	 * @return \System\Numerics\Matrix3x2
	 */
	#[MethodOverride] public static function CreateTranslation_2($xPosition, $yPosition){}
	/**
	 * @return \System\Numerics\Matrix3x2
	 */
	#[MethodOverride] public static function Multiply_1($value1, $value2){}
	/**
	 * @return \System\Numerics\Matrix3x2
	 */
	#[MethodOverride] public static function Multiply_2($value1, $value2){}
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
class Matrix3x2 extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @var \System\Single
	 * @field
	 */
	public $M11;
	/**
	 * @var \System\Single
	 * @field
	 */
	public $M12;
	/**
	 * @var \System\Single
	 * @field
	 */
	public $M21;
	/**
	 * @var \System\Single
	 * @field
	 */
	public $M22;
	/**
	 * @var \System\Single
	 * @field
	 */
	public $M31;
	/**
	 * @var \System\Single
	 * @field
	 */
	public $M32;
	/**
	 * @var \System\Numerics\Matrix3x2
	 * @property
	 */
	public readonly $Identity;
	/**
	 * @var \System\Single
	 * @property
	 */
	public $Item;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsIdentity;
	/**
	 * @var \System\Numerics\Vector2
	 * @property
	 */
	public $Translation;
	/**
	 * @return \System\Numerics\Matrix3x2
	 */
	public static function get_Identity(){}
	/**
	 * @param \System\Int32|int $row
	 * @param \System\Int32|int $column
	 * @return \System\Single
	 */
	public  function get_Item($row, $column){}
	/**
	 * @param \System\Int32|int $row
	 * @param \System\Int32|int $column
	 * @param \System\Single $value
	 * @return \System\Void|void
	 */
	public  function set_Item($row, $column, $value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsIdentity(){}
	/**
	 * @return \System\Numerics\Vector2
	 */
	public  function get_Translation(){}
	/**
	 * @param \System\Numerics\Vector2 $value
	 * @return \System\Void|void
	 */
	public  function set_Translation($value){}
	/**
	 * @param \System\Numerics\Matrix3x2 $value1
	 * @param \System\Numerics\Matrix3x2 $value2
	 * @return \System\Numerics\Matrix3x2
	 */
	public static function op_Addition($value1, $value2){}
	/**
	 * @param \System\Numerics\Matrix3x2 $value1
	 * @param \System\Numerics\Matrix3x2 $value2
	 * @return \System\Boolean
	 */
	public static function op_Equality($value1, $value2){}
	/**
	 * @param \System\Numerics\Matrix3x2 $value1
	 * @param \System\Numerics\Matrix3x2 $value2
	 * @return \System\Boolean
	 */
	public static function op_Inequality($value1, $value2){}
	/**
	 * @uses Matrix3x2MethodsOverride::op_Multiply_1 ($value1, $value2)
	 * @uses Matrix3x2MethodsOverride::op_Multiply_2 ($value1, $value2)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function op_Multiply(mixed ...$args){}
	/**
	 * @param \System\Numerics\Matrix3x2 $value1
	 * @param \System\Numerics\Matrix3x2 $value2
	 * @return \System\Numerics\Matrix3x2
	 */
	public static function op_Subtraction($value1, $value2){}
	/**
	 * @param \System\Numerics\Matrix3x2 $value
	 * @return \System\Numerics\Matrix3x2
	 */
	public static function op_UnaryNegation($value){}
	/**
	 * @param \System\Numerics\Matrix3x2 $value1
	 * @param \System\Numerics\Matrix3x2 $value2
	 * @return \System\Numerics\Matrix3x2
	 */
	public static function Add($value1, $value2){}
	/**
	 * @uses Matrix3x2MethodsOverride::CreateRotation_1 ($radians)
	 * @uses Matrix3x2MethodsOverride::CreateRotation_2 ($radians, $centerPoint)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function CreateRotation(mixed ...$args){}
	/**
	 * @uses Matrix3x2MethodsOverride::CreateScale_1 ($scales)
	 * @uses Matrix3x2MethodsOverride::CreateScale_2 ($xScale, $yScale)
	 * @uses Matrix3x2MethodsOverride::CreateScale_3 ($xScale, $yScale, $centerPoint)
	 * @uses Matrix3x2MethodsOverride::CreateScale_4 ($scales, $centerPoint)
	 * @uses Matrix3x2MethodsOverride::CreateScale_5 ($scale)
	 * @uses Matrix3x2MethodsOverride::CreateScale_6 ($scale, $centerPoint)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function CreateScale(mixed ...$args){}
	/**
	 * @uses Matrix3x2MethodsOverride::CreateSkew_1 ($radiansX, $radiansY)
	 * @uses Matrix3x2MethodsOverride::CreateSkew_2 ($radiansX, $radiansY, $centerPoint)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function CreateSkew(mixed ...$args){}
	/**
	 * @uses Matrix3x2MethodsOverride::CreateTranslation_1 ($position)
	 * @uses Matrix3x2MethodsOverride::CreateTranslation_2 ($xPosition, $yPosition)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function CreateTranslation(mixed ...$args){}
	/**
	 * @param \System\Numerics\Matrix3x2 $matrix
	 * @param \System\Numerics\Matrix3x2& $result
	 * @return \System\Boolean
	 */
	public static function Invert($matrix, $result){}
	/**
	 * @param \System\Numerics\Matrix3x2 $matrix1
	 * @param \System\Numerics\Matrix3x2 $matrix2
	 * @param \System\Single $amount
	 * @return \System\Numerics\Matrix3x2
	 */
	public static function Lerp($matrix1, $matrix2, $amount){}
	/**
	 * @uses Matrix3x2MethodsOverride::Multiply_1 ($value1, $value2)
	 * @uses Matrix3x2MethodsOverride::Multiply_2 ($value1, $value2)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Multiply(mixed ...$args){}
	/**
	 * @param \System\Numerics\Matrix3x2 $value
	 * @return \System\Numerics\Matrix3x2
	 */
	public static function Negate($value){}
	/**
	 * @param \System\Numerics\Matrix3x2 $value1
	 * @param \System\Numerics\Matrix3x2 $value2
	 * @return \System\Numerics\Matrix3x2
	 */
	public static function Subtract($value1, $value2){}
	/**
	 * @uses Matrix3x2MethodsOverride::Equals_1 ($obj)
	 * @uses Matrix3x2MethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @return \System\Single
	 */
	public  function GetDeterminant(){}
}
