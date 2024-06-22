<?php
namespace System\Numerics;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait Matrix4x4Override {
	/**
	 * @deprecated
	 * @param \System\Numerics\Matrix4x4 $value1
	 * @param \System\Numerics\Matrix4x4 $value2
	 * @return \System\Numerics\Matrix4x4
	 */
	#[MethodOverride]public static function op_Multiply_1 ($value1, $value2){}
	/**
	 * @deprecated
	 * @param \System\Numerics\Matrix4x4 $value1
	 * @param \System\Single $value2
	 * @return \System\Numerics\Matrix4x4
	 */
	#[MethodOverride]public static function op_Multiply_2 ($value1, $value2){}
	/**
	 * @deprecated
	 * @param \System\Single $radians
	 * @return \System\Numerics\Matrix4x4
	 */
	#[MethodOverride]public static function CreateRotationX_1 ($radians){}
	/**
	 * @deprecated
	 * @param \System\Single $radians
	 * @param \System\Numerics\Vector3 $centerPoint
	 * @return \System\Numerics\Matrix4x4
	 */
	#[MethodOverride]public static function CreateRotationX_2 ($radians, $centerPoint){}
	/**
	 * @deprecated
	 * @param \System\Single $radians
	 * @return \System\Numerics\Matrix4x4
	 */
	#[MethodOverride]public static function CreateRotationY_1 ($radians){}
	/**
	 * @deprecated
	 * @param \System\Single $radians
	 * @param \System\Numerics\Vector3 $centerPoint
	 * @return \System\Numerics\Matrix4x4
	 */
	#[MethodOverride]public static function CreateRotationY_2 ($radians, $centerPoint){}
	/**
	 * @deprecated
	 * @param \System\Single $radians
	 * @return \System\Numerics\Matrix4x4
	 */
	#[MethodOverride]public static function CreateRotationZ_1 ($radians){}
	/**
	 * @deprecated
	 * @param \System\Single $radians
	 * @param \System\Numerics\Vector3 $centerPoint
	 * @return \System\Numerics\Matrix4x4
	 */
	#[MethodOverride]public static function CreateRotationZ_2 ($radians, $centerPoint){}
	/**
	 * @deprecated
	 * @param \System\Single $xScale
	 * @param \System\Single $yScale
	 * @param \System\Single $zScale
	 * @return \System\Numerics\Matrix4x4
	 */
	#[MethodOverride]public static function CreateScale_1 ($xScale, $yScale, $zScale){}
	/**
	 * @deprecated
	 * @param \System\Single $xScale
	 * @param \System\Single $yScale
	 * @param \System\Single $zScale
	 * @param \System\Numerics\Vector3 $centerPoint
	 * @return \System\Numerics\Matrix4x4
	 */
	#[MethodOverride]public static function CreateScale_2 ($xScale, $yScale, $zScale, $centerPoint){}
	/**
	 * @deprecated
	 * @param \System\Numerics\Vector3 $scales
	 * @return \System\Numerics\Matrix4x4
	 */
	#[MethodOverride]public static function CreateScale_3 ($scales){}
	/**
	 * @deprecated
	 * @param \System\Numerics\Vector3 $scales
	 * @param \System\Numerics\Vector3 $centerPoint
	 * @return \System\Numerics\Matrix4x4
	 */
	#[MethodOverride]public static function CreateScale_4 ($scales, $centerPoint){}
	/**
	 * @deprecated
	 * @param \System\Single $scale
	 * @return \System\Numerics\Matrix4x4
	 */
	#[MethodOverride]public static function CreateScale_5 ($scale){}
	/**
	 * @deprecated
	 * @param \System\Single $scale
	 * @param \System\Numerics\Vector3 $centerPoint
	 * @return \System\Numerics\Matrix4x4
	 */
	#[MethodOverride]public static function CreateScale_6 ($scale, $centerPoint){}
	/**
	 * @deprecated
	 * @param \System\Numerics\Vector3 $position
	 * @return \System\Numerics\Matrix4x4
	 */
	#[MethodOverride]public static function CreateTranslation_1 ($position){}
	/**
	 * @deprecated
	 * @param \System\Single $xPosition
	 * @param \System\Single $yPosition
	 * @param \System\Single $zPosition
	 * @return \System\Numerics\Matrix4x4
	 */
	#[MethodOverride]public static function CreateTranslation_2 ($xPosition, $yPosition, $zPosition){}
	/**
	 * @deprecated
	 * @param \System\Numerics\Matrix4x4 $value1
	 * @param \System\Numerics\Matrix4x4 $value2
	 * @return \System\Numerics\Matrix4x4
	 */
	#[MethodOverride]public static function Multiply_1 ($value1, $value2){}
	/**
	 * @deprecated
	 * @param \System\Numerics\Matrix4x4 $value1
	 * @param \System\Single $value2
	 * @return \System\Numerics\Matrix4x4
	 */
	#[MethodOverride]public static function Multiply_2 ($value1, $value2){}
	/**
	 * @param \System\Single $m11
	 * @param \System\Single $m12
	 * @param \System\Single $m13
	 * @param \System\Single $m14
	 * @param \System\Single $m21
	 * @param \System\Single $m22
	 * @param \System\Single $m23
	 * @param \System\Single $m24
	 * @param \System\Single $m31
	 * @param \System\Single $m32
	 * @param \System\Single $m33
	 * @param \System\Single $m34
	 * @param \System\Single $m41
	 * @param \System\Single $m42
	 * @param \System\Single $m43
	 * @param \System\Single $m44
	 */
	#[MethodOverride]public function __construct_1 ($m11, $m12, $m13, $m14, $m21, $m22, $m23, $m24, $m31, $m32, $m33, $m34, $m41, $m42, $m43, $m44){}
	/**
	 * @param \System\Numerics\Matrix3x2 $value
	 */
	#[MethodOverride]public function __construct_2 ($value){}
}
final class Matrix4x4 extends \System\ValueType implements
	\System\IEquatable_1
{
	use Matrix4x4Override;

	/**
	 * @field
	 * @var \System\Single
	 */
	public $M11;
	/**
	 * @field
	 * @var \System\Single
	 */
	public $M12;
	/**
	 * @field
	 * @var \System\Single
	 */
	public $M13;
	/**
	 * @field
	 * @var \System\Single
	 */
	public $M14;
	/**
	 * @field
	 * @var \System\Single
	 */
	public $M21;
	/**
	 * @field
	 * @var \System\Single
	 */
	public $M22;
	/**
	 * @field
	 * @var \System\Single
	 */
	public $M23;
	/**
	 * @field
	 * @var \System\Single
	 */
	public $M24;
	/**
	 * @field
	 * @var \System\Single
	 */
	public $M31;
	/**
	 * @field
	 * @var \System\Single
	 */
	public $M32;
	/**
	 * @field
	 * @var \System\Single
	 */
	public $M33;
	/**
	 * @field
	 * @var \System\Single
	 */
	public $M34;
	/**
	 * @field
	 * @var \System\Single
	 */
	public $M41;
	/**
	 * @field
	 * @var \System\Single
	 */
	public $M42;
	/**
	 * @field
	 * @var \System\Single
	 */
	public $M43;
	/**
	 * @field
	 * @var \System\Single
	 */
	public $M44;
	/**
	 * @property
	 * @var \System\Numerics\Matrix4x4
	 * @since readonly
	 */
	public $Identity;
	/**
	 * @property
	 * @var \System\Single
	 */
	public $Item;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsIdentity;
	/**
	 * @property
	 * @var \System\Numerics\Vector3
	 */
	public $Translation;
	/**
	 * @param \System\Numerics\Matrix4x4 $value1
	 * @param \System\Numerics\Matrix4x4 $value2
	 * @return \System\Numerics\Matrix4x4
	 */
	public static function op_Addition($value1, $value2){}
	/**
	 * @param \System\Numerics\Matrix4x4 $value1
	 * @param \System\Numerics\Matrix4x4 $value2
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($value1, $value2){}
	/**
	 * @param \System\Numerics\Matrix4x4 $value1
	 * @param \System\Numerics\Matrix4x4 $value2
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($value1, $value2){}
	/**
	 * @uses Matrix4x4Override::op_Multiply_1 <br>public , args: ($value1, $value2)<br>
	 * @uses Matrix4x4Override::op_Multiply_2 <br>public , args: ($value1, $value2)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Numerics\Matrix4x4|mixed|\override
	 */
	#[MethodOverridePublic]function op_Multiply (\override ...$args){}
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
	 * @uses Matrix4x4Override::CreateRotationX_1 <br>public , args: ($radians)<br>
	 * @uses Matrix4x4Override::CreateRotationX_2 <br>public , args: ($radians, $centerPoint)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Numerics\Matrix4x4|mixed|\override
	 */
	#[MethodOverridePublic]function CreateRotationX (\override ...$args){}
	/**
	 * @uses Matrix4x4Override::CreateRotationY_1 <br>public , args: ($radians)<br>
	 * @uses Matrix4x4Override::CreateRotationY_2 <br>public , args: ($radians, $centerPoint)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Numerics\Matrix4x4|mixed|\override
	 */
	#[MethodOverridePublic]function CreateRotationY (\override ...$args){}
	/**
	 * @uses Matrix4x4Override::CreateRotationZ_1 <br>public , args: ($radians)<br>
	 * @uses Matrix4x4Override::CreateRotationZ_2 <br>public , args: ($radians, $centerPoint)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Numerics\Matrix4x4|mixed|\override
	 */
	#[MethodOverridePublic]function CreateRotationZ (\override ...$args){}
	/**
	 * @uses Matrix4x4Override::CreateScale_1 <br>public , args: ($xScale, $yScale, $zScale)<br>
	 * @uses Matrix4x4Override::CreateScale_2 <br>public , args: ($xScale, $yScale, $zScale, $centerPoint)<br>
	 * @uses Matrix4x4Override::CreateScale_3 <br>public , args: ($scales)<br>
	 * @uses Matrix4x4Override::CreateScale_4 <br>public , args: ($scales, $centerPoint)<br>
	 * @uses Matrix4x4Override::CreateScale_5 <br>public , args: ($scale)<br>
	 * @uses Matrix4x4Override::CreateScale_6 <br>public , args: ($scale, $centerPoint)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Numerics\Matrix4x4|mixed|\override
	 */
	#[MethodOverridePublic]function CreateScale (\override ...$args){}
	/**
	 * @param \System\Numerics\Vector3 $lightDirection
	 * @param \System\Numerics\Plane $plane
	 * @return \System\Numerics\Matrix4x4
	 */
	public static function CreateShadow($lightDirection, $plane){}
	/**
	 * @uses Matrix4x4Override::CreateTranslation_1 <br>public , args: ($position)<br>
	 * @uses Matrix4x4Override::CreateTranslation_2 <br>public , args: ($xPosition, $yPosition, $zPosition)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Numerics\Matrix4x4|mixed|\override
	 */
	#[MethodOverridePublic]function CreateTranslation (\override ...$args){}
	/**
	 * @param \System\Numerics\Vector3 $position
	 * @param \System\Numerics\Vector3 $forward
	 * @param \System\Numerics\Vector3 $up
	 * @return \System\Numerics\Matrix4x4
	 */
	public static function CreateWorld($position, $forward, $up){}
	/**
	 * @param \System\Numerics\Matrix4x4 $matrix
	 * @param \System\Numerics\Matrix4x4& &$result
	 * @return \System\Boolean|bool
	 */
	public static function Invert($matrix, &$result){}
	/**
	 * @uses Matrix4x4Override::Multiply_1 <br>public , args: ($value1, $value2)<br>
	 * @uses Matrix4x4Override::Multiply_2 <br>public , args: ($value1, $value2)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Numerics\Matrix4x4|mixed|\override
	 */
	#[MethodOverridePublic]function Multiply (\override ...$args){}
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
	private static function Permute($value, $control){}
	/**
	 * @param \System\Numerics\Matrix4x4 $matrix
	 * @param \System\Numerics\Vector3& &$scale
	 * @param \System\Numerics\Quaternion& &$rotation
	 * @param \System\Numerics\Vector3& &$translation
	 * @return \System\Boolean|bool
	 */
	public static function Decompose($matrix, &$scale, &$rotation, &$translation){}
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
	 * @return \System\Single
	 */
	public function GetDeterminant(){}
	/**
	 * @uses Matrix4x4Override::__construct_1 <br>public , args: ($m11, $m12, $m13, $m14, $m21, $m22, $m23, $m24, $m31, $m32, $m33, $m34, $m41, $m42, $m43, $m44)<br>
	 * @uses Matrix4x4Override::__construct_2 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}