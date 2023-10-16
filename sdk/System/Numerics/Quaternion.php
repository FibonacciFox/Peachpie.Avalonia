<?php
namespace System\Numerics;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait QuaternionMethodsOverride
{
	/**
	 * @return \System\Numerics\Quaternion
	 */
	#[MethodOverride] public static function op_Multiply_1($value1, $value2){}
	/**
	 * @return \System\Numerics\Quaternion
	 */
	#[MethodOverride] public static function op_Multiply_2($value1, $value2){}
	/**
	 * @return \System\Numerics\Quaternion
	 */
	#[MethodOverride] public static function Multiply_1($value1, $value2){}
	/**
	 * @return \System\Numerics\Quaternion
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
class Quaternion extends \System\ValueType implements 
	\System\IEquatable_1
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
	 * @var \System\Numerics\Quaternion
	 * @property
	 */
	public readonly $Zero;
	/**
	 * @var \System\Numerics\Quaternion
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
	 * @return \System\Numerics\Quaternion
	 */
	public static function get_Zero(){}
	/**
	 * @return \System\Numerics\Quaternion
	 */
	public static function get_Identity(){}
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
	 * @param \System\Numerics\Quaternion $quaternion
	 * @param \System\Int32|int $index
	 * @return \System\Single
	 */
	protected static function GetElement($quaternion, $index){}
	/**
	 * @param \System\Numerics\Quaternion& $quaternion
	 * @param \System\Int32|int $index
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetElementUnsafe($quaternion, $index){}
	/**
	 * @param \System\Numerics\Quaternion $quaternion
	 * @param \System\Int32|int $index
	 * @param \System\Single $value
	 * @return \System\Numerics\Quaternion
	 */
	protected static function WithElement($quaternion, $index, $value){}
	/**
	 * @param \System\Numerics\Quaternion& $quaternion
	 * @param \System\Int32|int $index
	 * @param \System\Single $value
	 * @return \System\Void|void
	 */
	protected static function SetElementUnsafe($quaternion, $index, $value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsIdentity(){}
	/**
	 * @param \System\Numerics\Quaternion $value1
	 * @param \System\Numerics\Quaternion $value2
	 * @return \System\Numerics\Quaternion
	 */
	public static function op_Addition($value1, $value2){}
	/**
	 * @param \System\Numerics\Quaternion $value1
	 * @param \System\Numerics\Quaternion $value2
	 * @return \System\Numerics\Quaternion
	 */
	public static function op_Division($value1, $value2){}
	/**
	 * @param \System\Numerics\Quaternion $value1
	 * @param \System\Numerics\Quaternion $value2
	 * @return \System\Boolean
	 */
	public static function op_Equality($value1, $value2){}
	/**
	 * @param \System\Numerics\Quaternion $value1
	 * @param \System\Numerics\Quaternion $value2
	 * @return \System\Boolean
	 */
	public static function op_Inequality($value1, $value2){}
	/**
	 * @uses QuaternionMethodsOverride::op_Multiply_1 ($value1, $value2)
	 * @uses QuaternionMethodsOverride::op_Multiply_2 ($value1, $value2)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function op_Multiply(mixed ...$args){}
	/**
	 * @param \System\Numerics\Quaternion $value1
	 * @param \System\Numerics\Quaternion $value2
	 * @return \System\Numerics\Quaternion
	 */
	public static function op_Subtraction($value1, $value2){}
	/**
	 * @param \System\Numerics\Quaternion $value
	 * @return \System\Numerics\Quaternion
	 */
	public static function op_UnaryNegation($value){}
	/**
	 * @param \System\Numerics\Quaternion $value1
	 * @param \System\Numerics\Quaternion $value2
	 * @return \System\Numerics\Quaternion
	 */
	public static function Add($value1, $value2){}
	/**
	 * @param \System\Numerics\Quaternion $value1
	 * @param \System\Numerics\Quaternion $value2
	 * @return \System\Numerics\Quaternion
	 */
	public static function Concatenate($value1, $value2){}
	/**
	 * @param \System\Numerics\Quaternion $value
	 * @return \System\Numerics\Quaternion
	 */
	public static function Conjugate($value){}
	/**
	 * @param \System\Numerics\Vector3 $axis
	 * @param \System\Single $angle
	 * @return \System\Numerics\Quaternion
	 */
	public static function CreateFromAxisAngle($axis, $angle){}
	/**
	 * @param \System\Numerics\Matrix4x4 $matrix
	 * @return \System\Numerics\Quaternion
	 */
	public static function CreateFromRotationMatrix($matrix){}
	/**
	 * @param \System\Single $yaw
	 * @param \System\Single $pitch
	 * @param \System\Single $roll
	 * @return \System\Numerics\Quaternion
	 */
	public static function CreateFromYawPitchRoll($yaw, $pitch, $roll){}
	/**
	 * @param \System\Numerics\Quaternion $value1
	 * @param \System\Numerics\Quaternion $value2
	 * @return \System\Numerics\Quaternion
	 */
	public static function Divide($value1, $value2){}
	/**
	 * @param \System\Numerics\Quaternion $quaternion1
	 * @param \System\Numerics\Quaternion $quaternion2
	 * @return \System\Single
	 */
	public static function Dot($quaternion1, $quaternion2){}
	/**
	 * @param \System\Numerics\Quaternion $value
	 * @return \System\Numerics\Quaternion
	 */
	public static function Inverse($value){}
	/**
	 * @param \System\Numerics\Quaternion $quaternion1
	 * @param \System\Numerics\Quaternion $quaternion2
	 * @param \System\Single $amount
	 * @return \System\Numerics\Quaternion
	 */
	public static function Lerp($quaternion1, $quaternion2, $amount){}
	/**
	 * @uses QuaternionMethodsOverride::Multiply_1 ($value1, $value2)
	 * @uses QuaternionMethodsOverride::Multiply_2 ($value1, $value2)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Multiply(mixed ...$args){}
	/**
	 * @param \System\Numerics\Quaternion $value
	 * @return \System\Numerics\Quaternion
	 */
	public static function Negate($value){}
	/**
	 * @param \System\Numerics\Quaternion $value
	 * @return \System\Numerics\Quaternion
	 */
	public static function Normalize($value){}
	/**
	 * @param \System\Numerics\Quaternion $quaternion1
	 * @param \System\Numerics\Quaternion $quaternion2
	 * @param \System\Single $amount
	 * @return \System\Numerics\Quaternion
	 */
	public static function Slerp($quaternion1, $quaternion2, $amount){}
	/**
	 * @param \System\Numerics\Quaternion $value1
	 * @param \System\Numerics\Quaternion $value2
	 * @return \System\Numerics\Quaternion
	 */
	public static function Subtract($value1, $value2){}
	/**
	 * @uses QuaternionMethodsOverride::Equals_1 ($obj)
	 * @uses QuaternionMethodsOverride::Equals_2 ($other)
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
}
