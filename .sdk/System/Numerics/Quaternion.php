<?php
namespace System\Numerics;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait QuaternionOverride {
	/**
	 * @deprecated
	 * @param \System\Numerics\Quaternion $value1
	 * @param \System\Numerics\Quaternion $value2
	 * @return \System\Numerics\Quaternion
	 */
	#[MethodOverride]public static function op_Multiply_1 ($value1, $value2){}
	/**
	 * @deprecated
	 * @param \System\Numerics\Quaternion $value1
	 * @param \System\Single $value2
	 * @return \System\Numerics\Quaternion
	 */
	#[MethodOverride]public static function op_Multiply_2 ($value1, $value2){}
	/**
	 * @deprecated
	 * @param \System\Numerics\Quaternion $value1
	 * @param \System\Numerics\Quaternion $value2
	 * @return \System\Numerics\Quaternion
	 */
	#[MethodOverride]public static function Multiply_1 ($value1, $value2){}
	/**
	 * @deprecated
	 * @param \System\Numerics\Quaternion $value1
	 * @param \System\Single $value2
	 * @return \System\Numerics\Quaternion
	 */
	#[MethodOverride]public static function Multiply_2 ($value1, $value2){}
	/**
	 * @param \System\Single $x
	 * @param \System\Single $y
	 * @param \System\Single $z
	 * @param \System\Single $w
	 */
	#[MethodOverride]public function __construct_1 ($x, $y, $z, $w){}
	/**
	 * @param \System\Numerics\Vector3 $vectorPart
	 * @param \System\Single $scalarPart
	 */
	#[MethodOverride]public function __construct_2 ($vectorPart, $scalarPart){}
}
final class Quaternion extends \System\ValueType implements
	\System\IEquatable_1
{
	use QuaternionOverride;
	/**
	 * @field
	 * @var \System\Single
	 */
	public $X;
	/**
	 * @field
	 * @var \System\Single
	 */
	public $Y;
	/**
	 * @field
	 * @var \System\Single
	 */
	public $Z;
	/**
	 * @field
	 * @var \System\Single
	 */
	public $W;
	/**
	 * @property
	 * @var \System\Numerics\Quaternion
	 * @since readonly
	 */
	public $Zero;
	/**
	 * @property
	 * @var \System\Numerics\Quaternion
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
	 * @param \System\Numerics\Quaternion $quaternion
	 * @param \System\Int32|int $index
	 * @return \System\Single
	 */
	protected static function GetElement($quaternion, $index){}
	private static function GetElementUnsafe($quaternion, $index){}
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
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($value1, $value2){}
	/**
	 * @param \System\Numerics\Quaternion $value1
	 * @param \System\Numerics\Quaternion $value2
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($value1, $value2){}
	/**
	 * @uses QuaternionOverride::op_Multiply_1 <br>public , args: ($value1, $value2)<br>
	 * @uses QuaternionOverride::op_Multiply_2 <br>public , args: ($value1, $value2)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Numerics\Quaternion|mixed|\override
	 */
	#[MethodOverridePublic]function op_Multiply (\override ...$args){}
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
	 * @uses QuaternionOverride::Multiply_1 <br>public , args: ($value1, $value2)<br>
	 * @uses QuaternionOverride::Multiply_2 <br>public , args: ($value1, $value2)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Numerics\Quaternion|mixed|\override
	 */
	#[MethodOverridePublic]function Multiply (\override ...$args){}
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
	 * @return \System\Single
	 */
	public function Length(){}
	/**
	 * @return \System\Single
	 */
	public function LengthSquared(){}
	/**
	 * @uses QuaternionOverride::__construct_1 <br>public , args: ($x, $y, $z, $w)<br>
	 * @uses QuaternionOverride::__construct_2 <br>public , args: ($vectorPart, $scalarPart)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}