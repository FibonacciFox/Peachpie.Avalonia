<?php
namespace Avalonia\Utilities;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait MathUtilitiesMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function AreClose_1($value1, $value2){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function AreClose_2($value1, $value2, $eps){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function AreClose_3($value1, $value2){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function LessThan_1($value1, $value2){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function LessThan_2($value1, $value2){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function GreaterThan_1($value1, $value2){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function GreaterThan_2($value1, $value2){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function LessThanOrClose_1($value1, $value2){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function LessThanOrClose_2($value1, $value2){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function GreaterThanOrClose_1($value1, $value2){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function GreaterThanOrClose_2($value1, $value2){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function IsOne_1($value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function IsOne_2($value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function IsZero_1($value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function IsZero_2($value){}
	/**
	 * @return \System\Double|double
	 */
	#[MethodOverride] public static function Clamp_1($val, $min, $max){}
	/**
	 * @return \System\Decimal
	 */
	#[MethodOverride] public static function Clamp_2($val, $min, $max){}
	/**
	 * @return \System\Single
	 */
	#[MethodOverride] public static function Clamp_3($value, $min, $max){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function Clamp_4($val, $min, $max){}
}
/**
 */
class MathUtilities extends \System\Object
{
	/**
	 * @uses MathUtilitiesMethodsOverride::AreClose_1 ($value1, $value2)
	 * @uses MathUtilitiesMethodsOverride::AreClose_2 ($value1, $value2, $eps)
	 * @uses MathUtilitiesMethodsOverride::AreClose_3 ($value1, $value2)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function AreClose(mixed ...$args){}
	/**
	 * @uses MathUtilitiesMethodsOverride::LessThan_1 ($value1, $value2)
	 * @uses MathUtilitiesMethodsOverride::LessThan_2 ($value1, $value2)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function LessThan(mixed ...$args){}
	/**
	 * @uses MathUtilitiesMethodsOverride::GreaterThan_1 ($value1, $value2)
	 * @uses MathUtilitiesMethodsOverride::GreaterThan_2 ($value1, $value2)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GreaterThan(mixed ...$args){}
	/**
	 * @uses MathUtilitiesMethodsOverride::LessThanOrClose_1 ($value1, $value2)
	 * @uses MathUtilitiesMethodsOverride::LessThanOrClose_2 ($value1, $value2)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function LessThanOrClose(mixed ...$args){}
	/**
	 * @uses MathUtilitiesMethodsOverride::GreaterThanOrClose_1 ($value1, $value2)
	 * @uses MathUtilitiesMethodsOverride::GreaterThanOrClose_2 ($value1, $value2)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GreaterThanOrClose(mixed ...$args){}
	/**
	 * @uses MathUtilitiesMethodsOverride::IsOne_1 ($value)
	 * @uses MathUtilitiesMethodsOverride::IsOne_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function IsOne(mixed ...$args){}
	/**
	 * @uses MathUtilitiesMethodsOverride::IsZero_1 ($value)
	 * @uses MathUtilitiesMethodsOverride::IsZero_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function IsZero(mixed ...$args){}
	/**
	 * @uses MathUtilitiesMethodsOverride::Clamp_1 ($val, $min, $max)
	 * @uses MathUtilitiesMethodsOverride::Clamp_2 ($val, $min, $max)
	 * @uses MathUtilitiesMethodsOverride::Clamp_3 ($value, $min, $max)
	 * @uses MathUtilitiesMethodsOverride::Clamp_4 ($val, $min, $max)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Clamp(mixed ...$args){}
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
	 * @return \System\ValueTuple_2
	 */
	public static function GetMinMax($a, $b){}
	/**
	 * @param \System\Double|double $initialValue
	 * @param \System\Double|double $delta
	 * @return \System\ValueTuple_2
	 */
	public static function GetMinMaxFromDelta($initialValue, $delta){}
	/**
	 * @param \Avalonia\Utilities\T $min
	 * @param \Avalonia\Utilities\T $max
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ThrowCannotBeGreaterThanException($min, $max){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
