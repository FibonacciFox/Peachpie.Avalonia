<?php
namespace Avalonia\Utilities;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait MathUtilitiesOverride {
	/**
	 * @deprecated
	 * @param \System\Double|double $value1
	 * @param \System\Double|double $value2
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function AreClose_1 ($value1, $value2){}
	/**
	 * @deprecated
	 * @param \System\Double|double $value1
	 * @param \System\Double|double $value2
	 * @param \System\Double|double $eps
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function AreClose_2 ($value1, $value2, $eps){}
	/**
	 * @deprecated
	 * @param \System\Single $value1
	 * @param \System\Single $value2
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function AreClose_3 ($value1, $value2){}
	/**
	 * @deprecated
	 * @param \System\Double|double $value1
	 * @param \System\Double|double $value2
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function LessThan_1 ($value1, $value2){}
	/**
	 * @deprecated
	 * @param \System\Single $value1
	 * @param \System\Single $value2
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function LessThan_2 ($value1, $value2){}
	/**
	 * @deprecated
	 * @param \System\Double|double $value1
	 * @param \System\Double|double $value2
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function GreaterThan_1 ($value1, $value2){}
	/**
	 * @deprecated
	 * @param \System\Single $value1
	 * @param \System\Single $value2
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function GreaterThan_2 ($value1, $value2){}
	/**
	 * @deprecated
	 * @param \System\Double|double $value1
	 * @param \System\Double|double $value2
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function LessThanOrClose_1 ($value1, $value2){}
	/**
	 * @deprecated
	 * @param \System\Single $value1
	 * @param \System\Single $value2
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function LessThanOrClose_2 ($value1, $value2){}
	/**
	 * @deprecated
	 * @param \System\Double|double $value1
	 * @param \System\Double|double $value2
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function GreaterThanOrClose_1 ($value1, $value2){}
	/**
	 * @deprecated
	 * @param \System\Single $value1
	 * @param \System\Single $value2
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function GreaterThanOrClose_2 ($value1, $value2){}
	/**
	 * @deprecated
	 * @param \System\Double|double $value
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function IsOne_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Single $value
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function IsOne_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\Double|double $value
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function IsZero_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Single $value
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function IsZero_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\Double|double $val
	 * @param \System\Double|double $min
	 * @param \System\Double|double $max
	 * @return \System\Double|double
	 */
	#[MethodOverride]public static function Clamp_1 ($val, $min, $max){}
	/**
	 * @deprecated
	 * @param \System\Decimal $val
	 * @param \System\Decimal $min
	 * @param \System\Decimal $max
	 * @return \System\Decimal
	 */
	#[MethodOverride]public static function Clamp_2 ($val, $min, $max){}
	/**
	 * @deprecated
	 * @param \System\Single $value
	 * @param \System\Single $min
	 * @param \System\Single $max
	 * @return \System\Single
	 */
	#[MethodOverride]public static function Clamp_3 ($value, $min, $max){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $val
	 * @param \System\Int32|int $min
	 * @param \System\Int32|int $max
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function Clamp_4 ($val, $min, $max){}
}
class MathUtilities extends \System\Object
{
	use MathUtilitiesOverride;
	/**
	 * @field
	 * @var \System\Double|double
	 */
	const DoubleEpsilon = '2,220446049250313E-16';
	/**
	 * @uses MathUtilitiesOverride::AreClose_1 <br>public , args: ($value1, $value2)<br>
	 * @uses MathUtilitiesOverride::AreClose_2 <br>public , args: ($value1, $value2, $eps)<br>
	 * @uses MathUtilitiesOverride::AreClose_3 <br>public , args: ($value1, $value2)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function AreClose (\override ...$args){}
	/**
	 * @uses MathUtilitiesOverride::LessThan_1 <br>public , args: ($value1, $value2)<br>
	 * @uses MathUtilitiesOverride::LessThan_2 <br>public , args: ($value1, $value2)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function LessThan (\override ...$args){}
	/**
	 * @uses MathUtilitiesOverride::GreaterThan_1 <br>public , args: ($value1, $value2)<br>
	 * @uses MathUtilitiesOverride::GreaterThan_2 <br>public , args: ($value1, $value2)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function GreaterThan (\override ...$args){}
	/**
	 * @uses MathUtilitiesOverride::LessThanOrClose_1 <br>public , args: ($value1, $value2)<br>
	 * @uses MathUtilitiesOverride::LessThanOrClose_2 <br>public , args: ($value1, $value2)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function LessThanOrClose (\override ...$args){}
	/**
	 * @uses MathUtilitiesOverride::GreaterThanOrClose_1 <br>public , args: ($value1, $value2)<br>
	 * @uses MathUtilitiesOverride::GreaterThanOrClose_2 <br>public , args: ($value1, $value2)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function GreaterThanOrClose (\override ...$args){}
	/**
	 * @uses MathUtilitiesOverride::IsOne_1 <br>public , args: ($value)<br>
	 * @uses MathUtilitiesOverride::IsOne_2 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function IsOne (\override ...$args){}
	/**
	 * @uses MathUtilitiesOverride::IsZero_1 <br>public , args: ($value)<br>
	 * @uses MathUtilitiesOverride::IsZero_2 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function IsZero (\override ...$args){}
	/**
	 * @uses MathUtilitiesOverride::Clamp_1 <br>public , args: ($val, $min, $max)<br>
	 * @uses MathUtilitiesOverride::Clamp_2 <br>public , args: ($val, $min, $max)<br>
	 * @uses MathUtilitiesOverride::Clamp_3 <br>public , args: ($value, $min, $max)<br>
	 * @uses MathUtilitiesOverride::Clamp_4 <br>public , args: ($val, $min, $max)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Double|double|\System\Decimal|\System\Single|\System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function Clamp (\override ...$args){}
	/**
	 * @param \System\Double|double $angle
	 * @return \System\Double|double
	 */
	public static function Deg2Rad($angle){}
	/**
	 * @param \System\Double|double $angle
	 * @return \System\Double|double
	 */
	public static function Grad2Rad($angle){}
	/**
	 * @param \System\Double|double $angle
	 * @return \System\Double|double
	 */
	public static function Turn2Rad($angle){}
	/**
	 * @param \Avalonia\Point $centre
	 * @param \System\Double|double $radiusX
	 * @param \System\Double|double $radiusY
	 * @param \System\Double|double $angle
	 * @return \Avalonia\Point
	 */
	public static function GetEllipsePoint($centre, $radiusX, $radiusY, $angle){}
	/**
	 * @param \System\Double|double $a
	 * @param \System\Double|double $b
	 * @return \System\ValueTuple_2[System\Double,System\Double]
	 */
	public static function GetMinMax($a, $b){}
	/**
	 * @param \System\Double|double $initialValue
	 * @param \System\Double|double $delta
	 * @return \System\ValueTuple_2[System\Double,System\Double]
	 */
	public static function GetMinMaxFromDelta($initialValue, $delta){}
	private static function ThrowCannotBeGreaterThanException($min, $max){}
}