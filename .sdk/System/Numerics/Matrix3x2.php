<?php
namespace System\Numerics;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait Matrix3x2Override {
	/**
	 * @deprecated
	 * @param \System\Numerics\Matrix3x2 $value1
	 * @param \System\Numerics\Matrix3x2 $value2
	 * @return \System\Numerics\Matrix3x2
	 */
	#[MethodOverride]public static function op_Multiply_1 ($value1, $value2){}
	/**
	 * @deprecated
	 * @param \System\Numerics\Matrix3x2 $value1
	 * @param \System\Single $value2
	 * @return \System\Numerics\Matrix3x2
	 */
	#[MethodOverride]public static function op_Multiply_2 ($value1, $value2){}
	/**
	 * @deprecated
	 * @param \System\Single $radians
	 * @return \System\Numerics\Matrix3x2
	 */
	#[MethodOverride]public static function CreateRotation_1 ($radians){}
	/**
	 * @deprecated
	 * @param \System\Single $radians
	 * @param \System\Numerics\Vector2 $centerPoint
	 * @return \System\Numerics\Matrix3x2
	 */
	#[MethodOverride]public static function CreateRotation_2 ($radians, $centerPoint){}
	/**
	 * @deprecated
	 * @param \System\Numerics\Vector2 $scales
	 * @return \System\Numerics\Matrix3x2
	 */
	#[MethodOverride]public static function CreateScale_1 ($scales){}
	/**
	 * @deprecated
	 * @param \System\Single $xScale
	 * @param \System\Single $yScale
	 * @return \System\Numerics\Matrix3x2
	 */
	#[MethodOverride]public static function CreateScale_2 ($xScale, $yScale){}
	/**
	 * @deprecated
	 * @param \System\Single $xScale
	 * @param \System\Single $yScale
	 * @param \System\Numerics\Vector2 $centerPoint
	 * @return \System\Numerics\Matrix3x2
	 */
	#[MethodOverride]public static function CreateScale_3 ($xScale, $yScale, $centerPoint){}
	/**
	 * @deprecated
	 * @param \System\Numerics\Vector2 $scales
	 * @param \System\Numerics\Vector2 $centerPoint
	 * @return \System\Numerics\Matrix3x2
	 */
	#[MethodOverride]public static function CreateScale_4 ($scales, $centerPoint){}
	/**
	 * @deprecated
	 * @param \System\Single $scale
	 * @return \System\Numerics\Matrix3x2
	 */
	#[MethodOverride]public static function CreateScale_5 ($scale){}
	/**
	 * @deprecated
	 * @param \System\Single $scale
	 * @param \System\Numerics\Vector2 $centerPoint
	 * @return \System\Numerics\Matrix3x2
	 */
	#[MethodOverride]public static function CreateScale_6 ($scale, $centerPoint){}
	/**
	 * @deprecated
	 * @param \System\Single $radiansX
	 * @param \System\Single $radiansY
	 * @return \System\Numerics\Matrix3x2
	 */
	#[MethodOverride]public static function CreateSkew_1 ($radiansX, $radiansY){}
	/**
	 * @deprecated
	 * @param \System\Single $radiansX
	 * @param \System\Single $radiansY
	 * @param \System\Numerics\Vector2 $centerPoint
	 * @return \System\Numerics\Matrix3x2
	 */
	#[MethodOverride]public static function CreateSkew_2 ($radiansX, $radiansY, $centerPoint){}
	/**
	 * @deprecated
	 * @param \System\Numerics\Vector2 $position
	 * @return \System\Numerics\Matrix3x2
	 */
	#[MethodOverride]public static function CreateTranslation_1 ($position){}
	/**
	 * @deprecated
	 * @param \System\Single $xPosition
	 * @param \System\Single $yPosition
	 * @return \System\Numerics\Matrix3x2
	 */
	#[MethodOverride]public static function CreateTranslation_2 ($xPosition, $yPosition){}
	/**
	 * @deprecated
	 * @param \System\Numerics\Matrix3x2 $value1
	 * @param \System\Numerics\Matrix3x2 $value2
	 * @return \System\Numerics\Matrix3x2
	 */
	#[MethodOverride]public static function Multiply_1 ($value1, $value2){}
	/**
	 * @deprecated
	 * @param \System\Numerics\Matrix3x2 $value1
	 * @param \System\Single $value2
	 * @return \System\Numerics\Matrix3x2
	 */
	#[MethodOverride]public static function Multiply_2 ($value1, $value2){}
}
final class Matrix3x2 extends \System\ValueType implements
	\System\IEquatable_1
{
	use Matrix3x2Override;
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
	public $M31;
	/**
	 * @field
	 * @var \System\Single
	 */
	public $M32;
	/**
	 * @property
	 * @var \System\Numerics\Matrix3x2
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
	 * @var \System\Numerics\Vector2
	 */
	public $Translation;
	/**
	 * @param \System\Numerics\Matrix3x2 $value1
	 * @param \System\Numerics\Matrix3x2 $value2
	 * @return \System\Numerics\Matrix3x2
	 */
	public static function op_Addition($value1, $value2){}
	/**
	 * @param \System\Numerics\Matrix3x2 $value1
	 * @param \System\Numerics\Matrix3x2 $value2
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($value1, $value2){}
	/**
	 * @param \System\Numerics\Matrix3x2 $value1
	 * @param \System\Numerics\Matrix3x2 $value2
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($value1, $value2){}
	/**
	 * @uses Matrix3x2Override::op_Multiply_1 <br>public , args: ($value1, $value2)<br>
	 * @uses Matrix3x2Override::op_Multiply_2 <br>public , args: ($value1, $value2)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Numerics\Matrix3x2|mixed|\override
	 */
	#[MethodOverridePublic]function op_Multiply (\override ...$args){}
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
	 * @uses Matrix3x2Override::CreateRotation_1 <br>public , args: ($radians)<br>
	 * @uses Matrix3x2Override::CreateRotation_2 <br>public , args: ($radians, $centerPoint)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Numerics\Matrix3x2|mixed|\override
	 */
	#[MethodOverridePublic]function CreateRotation (\override ...$args){}
	/**
	 * @uses Matrix3x2Override::CreateScale_1 <br>public , args: ($scales)<br>
	 * @uses Matrix3x2Override::CreateScale_2 <br>public , args: ($xScale, $yScale)<br>
	 * @uses Matrix3x2Override::CreateScale_3 <br>public , args: ($xScale, $yScale, $centerPoint)<br>
	 * @uses Matrix3x2Override::CreateScale_4 <br>public , args: ($scales, $centerPoint)<br>
	 * @uses Matrix3x2Override::CreateScale_5 <br>public , args: ($scale)<br>
	 * @uses Matrix3x2Override::CreateScale_6 <br>public , args: ($scale, $centerPoint)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Numerics\Matrix3x2|mixed|\override
	 */
	#[MethodOverridePublic]function CreateScale (\override ...$args){}
	/**
	 * @uses Matrix3x2Override::CreateSkew_1 <br>public , args: ($radiansX, $radiansY)<br>
	 * @uses Matrix3x2Override::CreateSkew_2 <br>public , args: ($radiansX, $radiansY, $centerPoint)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Numerics\Matrix3x2|mixed|\override
	 */
	#[MethodOverridePublic]function CreateSkew (\override ...$args){}
	/**
	 * @uses Matrix3x2Override::CreateTranslation_1 <br>public , args: ($position)<br>
	 * @uses Matrix3x2Override::CreateTranslation_2 <br>public , args: ($xPosition, $yPosition)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Numerics\Matrix3x2|mixed|\override
	 */
	#[MethodOverridePublic]function CreateTranslation (\override ...$args){}
	/**
	 * @param \System\Numerics\Matrix3x2 $matrix
	 * @param \System\Numerics\Matrix3x2& &$result
	 * @return \System\Boolean|bool
	 */
	public static function Invert($matrix, &$result){}
	/**
	 * @param \System\Numerics\Matrix3x2 $matrix1
	 * @param \System\Numerics\Matrix3x2 $matrix2
	 * @param \System\Single $amount
	 * @return \System\Numerics\Matrix3x2
	 */
	public static function Lerp($matrix1, $matrix2, $amount){}
	/**
	 * @uses Matrix3x2Override::Multiply_1 <br>public , args: ($value1, $value2)<br>
	 * @uses Matrix3x2Override::Multiply_2 <br>public , args: ($value1, $value2)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Numerics\Matrix3x2|mixed|\override
	 */
	#[MethodOverridePublic]function Multiply (\override ...$args){}
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
	 * @return \System\Single
	 */
	public function GetDeterminant(){}
	/**
	 * @param \System\Single $m11
	 * @param \System\Single $m12
	 * @param \System\Single $m21
	 * @param \System\Single $m22
	 * @param \System\Single $m31
	 * @param \System\Single $m32
	 */
	public function __construct($m11, $m12, $m21, $m22, $m31, $m32){}
}