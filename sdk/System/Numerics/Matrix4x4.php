<?php
namespace System\Numerics;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait Matrix4x4MethodsOverride
{
	/**
	 * @return \System\Numerics\Matrix4x4
	 */
	#[MethodOverride] public static function op_Multiply_1($value1, $value2){}
	/**
	 * @return \System\Numerics\Matrix4x4
	 */
	#[MethodOverride] public static function op_Multiply_2($value1, $value2){}
	/**
	 * @return \System\Numerics\Matrix4x4
	 */
	#[MethodOverride] public static function CreateRotationX_1($radians){}
	/**
	 * @return \System\Numerics\Matrix4x4
	 */
	#[MethodOverride] public static function CreateRotationX_2($radians, $centerPoint){}
	/**
	 * @return \System\Numerics\Matrix4x4
	 */
	#[MethodOverride] public static function CreateRotationY_1($radians){}
	/**
	 * @return \System\Numerics\Matrix4x4
	 */
	#[MethodOverride] public static function CreateRotationY_2($radians, $centerPoint){}
	/**
	 * @return \System\Numerics\Matrix4x4
	 */
	#[MethodOverride] public static function CreateRotationZ_1($radians){}
	/**
	 * @return \System\Numerics\Matrix4x4
	 */
	#[MethodOverride] public static function CreateRotationZ_2($radians, $centerPoint){}
	/**
	 * @return \System\Numerics\Matrix4x4
	 */
	#[MethodOverride] public static function CreateScale_1($xScale, $yScale, $zScale){}
	/**
	 * @return \System\Numerics\Matrix4x4
	 */
	#[MethodOverride] public static function CreateScale_2($xScale, $yScale, $zScale, $centerPoint){}
	/**
	 * @return \System\Numerics\Matrix4x4
	 */
	#[MethodOverride] public static function CreateScale_3($scales){}
	/**
	 * @return \System\Numerics\Matrix4x4
	 */
	#[MethodOverride] public static function CreateScale_4($scales, $centerPoint){}
	/**
	 * @return \System\Numerics\Matrix4x4
	 */
	#[MethodOverride] public static function CreateScale_5($scale){}
	/**
	 * @return \System\Numerics\Matrix4x4
	 */
	#[MethodOverride] public static function CreateScale_6($scale, $centerPoint){}
	/**
	 * @return \System\Numerics\Matrix4x4
	 */
	#[MethodOverride] public static function CreateTranslation_1($position){}
	/**
	 * @return \System\Numerics\Matrix4x4
	 */
	#[MethodOverride] public static function CreateTranslation_2($xPosition, $yPosition, $zPosition){}
	/**
	 * @return \System\Numerics\Matrix4x4
	 */
	#[MethodOverride] public static function Multiply_1($value1, $value2){}
	/**
	 * @return \System\Numerics\Matrix4x4
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
class Matrix4x4 extends \System\ValueType implements 
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
	public $M13;
	/**
	 * @var \System\Single
	 * @field
	 */
	public $M14;
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
	public $M23;
	/**
	 * @var \System\Single
	 * @field
	 */
	public $M24;
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
	 * @var \System\Single
	 * @field
	 */
	public $M33;
	/**
	 * @var \System\Single
	 * @field
	 */
	public $M34;
	/**
	 * @var \System\Single
	 * @field
	 */
	public $M41;
	/**
	 * @var \System\Single
	 * @field
	 */
	public $M42;
	/**
	 * @var \System\Single
	 * @field
	 */
	public $M43;
	/**
	 * @var \System\Single
	 * @field
	 */
	public $M44;
	/**
	 * @var \System\Numerics\Matrix4x4
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
	 * @var \System\Numerics\Vector3
	 * @property
	 */
	public $Translation;
	/**
	 * @return \System\Numerics\Matrix4x4
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
	 * @return \System\Numerics\Vector3
	 */
	public  function get_Translation(){}
	/**
	 * @param \System\Numerics\Vector3 $value
	 * @return \System\Void|void
	 */
	public  function set_Translation($value){}
	/**
	 * @param \System\Numerics\Matrix4x4 $value1
	 * @param \System\Numerics\Matrix4x4 $value2
	 * @return \System\Numerics\Matrix4x4
	 */
	public static function op_Addition($value1, $value2){}
	/**
	 * @param \System\Numerics\Matrix4x4 $value1
	 * @param \System\Numerics\Matrix4x4 $value2
	 * @return \System\Boolean
	 */
	public static function op_Equality($value1, $value2){}
	/**
	 * @param \System\Numerics\Matrix4x4 $value1
	 * @param \System\Numerics\Matrix4x4 $value2
	 * @return \System\Boolean
	 */
	public static function op_Inequality($value1, $value2){}
	/**
	 * @uses Matrix4x4MethodsOverride::op_Multiply_1 ($value1, $value2)
	 * @uses Matrix4x4MethodsOverride::op_Multiply_2 ($value1, $value2)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function op_Multiply(mixed ...$args){}
	/**
	 * @param \System\Numerics\Matrix4x4 $value1
	 * @param \System\Numerics\Matrix4x4 $value2
	 * @return \System\Numerics\Matrix4x4
	 */
	public static function op_Subtraction($value1, $value2){}
	/**
	 * @param \System\Numerics\Matrix4x4 $value
	 * @return \System\Numerics\Matrix4x4
	 */
	public static function op_UnaryNegation($value){}
	/**
	 * @param \System\Numerics\Matrix4x4 $value1
	 * @param \System\Numerics\Matrix4x4 $value2
	 * @return \System\Numerics\Matrix4x4
	 */
	public static function Add($value1, $value2){}
	/**
	 * @param \System\Numerics\Vector3 $objectPosition
	 * @param \System\Numerics\Vector3 $cameraPosition
	 * @param \System\Numerics\Vector3 $cameraUpVector
	 * @param \System\Numerics\Vector3 $cameraForwardVector
	 * @return \System\Numerics\Matrix4x4
	 */
	public static function CreateBillboard($objectPosition, $cameraPosition, $cameraUpVector, $cameraForwardVector){}
	/**
	 * @param \System\Numerics\Vector3 $objectPosition
	 * @param \System\Numerics\Vector3 $cameraPosition
	 * @param \System\Numerics\Vector3 $rotateAxis
	 * @param \System\Numerics\Vector3 $cameraForwardVector
	 * @param \System\Numerics\Vector3 $objectForwardVector
	 * @return \System\Numerics\Matrix4x4
	 */
	public static function CreateConstrainedBillboard($objectPosition, $cameraPosition, $rotateAxis, $cameraForwardVector, $objectForwardVector){}
	/**
	 * @param \System\Numerics\Vector3 $axis
	 * @param \System\Single $angle
	 * @return \System\Numerics\Matrix4x4
	 */
	public static function CreateFromAxisAngle($axis, $angle){}
	/**
	 * @param \System\Numerics\Quaternion $quaternion
	 * @return \System\Numerics\Matrix4x4
	 */
	public static function CreateFromQuaternion($quaternion){}
	/**
	 * @param \System\Single $yaw
	 * @param \System\Single $pitch
	 * @param \System\Single $roll
	 * @return \System\Numerics\Matrix4x4
	 */
	public static function CreateFromYawPitchRoll($yaw, $pitch, $roll){}
	/**
	 * @param \System\Numerics\Vector3 $cameraPosition
	 * @param \System\Numerics\Vector3 $cameraTarget
	 * @param \System\Numerics\Vector3 $cameraUpVector
	 * @return \System\Numerics\Matrix4x4
	 */
	public static function CreateLookAt($cameraPosition, $cameraTarget, $cameraUpVector){}
	/**
	 * @param \System\Single $width
	 * @param \System\Single $height
	 * @param \System\Single $zNearPlane
	 * @param \System\Single $zFarPlane
	 * @return \System\Numerics\Matrix4x4
	 */
	public static function CreateOrthographic($width, $height, $zNearPlane, $zFarPlane){}
	/**
	 * @param \System\Single $left
	 * @param \System\Single $right
	 * @param \System\Single $bottom
	 * @param \System\Single $top
	 * @param \System\Single $zNearPlane
	 * @param \System\Single $zFarPlane
	 * @return \System\Numerics\Matrix4x4
	 */
	public static function CreateOrthographicOffCenter($left, $right, $bottom, $top, $zNearPlane, $zFarPlane){}
	/**
	 * @param \System\Single $width
	 * @param \System\Single $height
	 * @param \System\Single $nearPlaneDistance
	 * @param \System\Single $farPlaneDistance
	 * @return \System\Numerics\Matrix4x4
	 */
	public static function CreatePerspective($width, $height, $nearPlaneDistance, $farPlaneDistance){}
	/**
	 * @param \System\Single $fieldOfView
	 * @param \System\Single $aspectRatio
	 * @param \System\Single $nearPlaneDistance
	 * @param \System\Single $farPlaneDistance
	 * @return \System\Numerics\Matrix4x4
	 */
	public static function CreatePerspectiveFieldOfView($fieldOfView, $aspectRatio, $nearPlaneDistance, $farPlaneDistance){}
	/**
	 * @param \System\Single $left
	 * @param \System\Single $right
	 * @param \System\Single $bottom
	 * @param \System\Single $top
	 * @param \System\Single $nearPlaneDistance
	 * @param \System\Single $farPlaneDistance
	 * @return \System\Numerics\Matrix4x4
	 */
	public static function CreatePerspectiveOffCenter($left, $right, $bottom, $top, $nearPlaneDistance, $farPlaneDistance){}
	/**
	 * @param \System\Numerics\Plane $value
	 * @return \System\Numerics\Matrix4x4
	 */
	public static function CreateReflection($value){}
	/**
	 * @uses Matrix4x4MethodsOverride::CreateRotationX_1 ($radians)
	 * @uses Matrix4x4MethodsOverride::CreateRotationX_2 ($radians, $centerPoint)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function CreateRotationX(mixed ...$args){}
	/**
	 * @uses Matrix4x4MethodsOverride::CreateRotationY_1 ($radians)
	 * @uses Matrix4x4MethodsOverride::CreateRotationY_2 ($radians, $centerPoint)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function CreateRotationY(mixed ...$args){}
	/**
	 * @uses Matrix4x4MethodsOverride::CreateRotationZ_1 ($radians)
	 * @uses Matrix4x4MethodsOverride::CreateRotationZ_2 ($radians, $centerPoint)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function CreateRotationZ(mixed ...$args){}
	/**
	 * @uses Matrix4x4MethodsOverride::CreateScale_1 ($xScale, $yScale, $zScale)
	 * @uses Matrix4x4MethodsOverride::CreateScale_2 ($xScale, $yScale, $zScale, $centerPoint)
	 * @uses Matrix4x4MethodsOverride::CreateScale_3 ($scales)
	 * @uses Matrix4x4MethodsOverride::CreateScale_4 ($scales, $centerPoint)
	 * @uses Matrix4x4MethodsOverride::CreateScale_5 ($scale)
	 * @uses Matrix4x4MethodsOverride::CreateScale_6 ($scale, $centerPoint)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function CreateScale(mixed ...$args){}
	/**
	 * @param \System\Numerics\Vector3 $lightDirection
	 * @param \System\Numerics\Plane $plane
	 * @return \System\Numerics\Matrix4x4
	 */
	public static function CreateShadow($lightDirection, $plane){}
	/**
	 * @uses Matrix4x4MethodsOverride::CreateTranslation_1 ($position)
	 * @uses Matrix4x4MethodsOverride::CreateTranslation_2 ($xPosition, $yPosition, $zPosition)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function CreateTranslation(mixed ...$args){}
	/**
	 * @param \System\Numerics\Vector3 $position
	 * @param \System\Numerics\Vector3 $forward
	 * @param \System\Numerics\Vector3 $up
	 * @return \System\Numerics\Matrix4x4
	 */
	public static function CreateWorld($position, $forward, $up){}
	/**
	 * @param \System\Numerics\Matrix4x4 $matrix
	 * @param \System\Numerics\Matrix4x4& $result
	 * @return \System\Boolean
	 */
	public static function Invert($matrix, $result){}
	/**
	 * @uses Matrix4x4MethodsOverride::Multiply_1 ($value1, $value2)
	 * @uses Matrix4x4MethodsOverride::Multiply_2 ($value1, $value2)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Multiply(mixed ...$args){}
	/**
	 * @param \System\Numerics\Matrix4x4 $value
	 * @return \System\Numerics\Matrix4x4
	 */
	public static function Negate($value){}
	/**
	 * @param \System\Numerics\Matrix4x4 $value1
	 * @param \System\Numerics\Matrix4x4 $value2
	 * @return \System\Numerics\Matrix4x4
	 */
	public static function Subtract($value1, $value2){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value
	 * @param \System\Byte $control
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Permute($value, $control){}
	/**
	 * @param \System\Numerics\Matrix4x4 $matrix
	 * @param \System\Numerics\Vector3& $scale
	 * @param \System\Numerics\Quaternion& $rotation
	 * @param \System\Numerics\Vector3& $translation
	 * @return \System\Boolean
	 */
	public static function Decompose($matrix, $scale, $rotation, $translation){}
	/**
	 * @param \System\Numerics\Matrix4x4 $matrix1
	 * @param \System\Numerics\Matrix4x4 $matrix2
	 * @param \System\Single $amount
	 * @return \System\Numerics\Matrix4x4
	 */
	public static function Lerp($matrix1, $matrix2, $amount){}
	/**
	 * @param \System\Numerics\Matrix4x4 $value
	 * @param \System\Numerics\Quaternion $rotation
	 * @return \System\Numerics\Matrix4x4
	 */
	public static function Transform($value, $rotation){}
	/**
	 * @param \System\Numerics\Matrix4x4 $matrix
	 * @return \System\Numerics\Matrix4x4
	 */
	public static function Transpose($matrix){}
	/**
	 * @uses Matrix4x4MethodsOverride::Equals_1 ($obj)
	 * @uses Matrix4x4MethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @return \System\Single
	 */
	public  function GetDeterminant(){}
}
