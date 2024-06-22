<?php
namespace System\Numerics;
interface INumberBase_1
{


	/**
	 * @param \TSelf $value
	 * @return \TSelf
	 */
	public static function Abs($value);
	/**
	 * @param \TOther $value
	 * @return \TSelf
	 */
	public static function CreateChecked($value){}
	/**
	 * @param \TOther $value
	 * @return \TSelf
	 */
	public static function CreateSaturating($value){}
	/**
	 * @param \TOther $value
	 * @return \TSelf
	 */
	public static function CreateTruncating($value){}
	/**
	 * @param \TSelf $value
	 * @return \System\Boolean|bool
	 */
	public static function IsCanonical($value);
	/**
	 * @param \TSelf $value
	 * @return \System\Boolean|bool
	 */
	public static function IsComplexNumber($value);
	/**
	 * @param \TSelf $value
	 * @return \System\Boolean|bool
	 */
	public static function IsEvenInteger($value);
	/**
	 * @param \TSelf $value
	 * @return \System\Boolean|bool
	 */
	public static function IsFinite($value);
	/**
	 * @param \TSelf $value
	 * @return \System\Boolean|bool
	 */
	public static function IsImaginaryNumber($value);
	/**
	 * @param \TSelf $value
	 * @return \System\Boolean|bool
	 */
	public static function IsInfinity($value);
	/**
	 * @param \TSelf $value
	 * @return \System\Boolean|bool
	 */
	public static function IsInteger($value);
	/**
	 * @param \TSelf $value
	 * @return \System\Boolean|bool
	 */
	public static function IsNaN($value);
	/**
	 * @param \TSelf $value
	 * @return \System\Boolean|bool
	 */
	public static function IsNegative($value);
	/**
	 * @param \TSelf $value
	 * @return \System\Boolean|bool
	 */
	public static function IsNegativeInfinity($value);
	/**
	 * @param \TSelf $value
	 * @return \System\Boolean|bool
	 */
	public static function IsNormal($value);
	/**
	 * @param \TSelf $value
	 * @return \System\Boolean|bool
	 */
	public static function IsOddInteger($value);
	/**
	 * @param \TSelf $value
	 * @return \System\Boolean|bool
	 */
	public static function IsPositive($value);
	/**
	 * @param \TSelf $value
	 * @return \System\Boolean|bool
	 */
	public static function IsPositiveInfinity($value);
	/**
	 * @param \TSelf $value
	 * @return \System\Boolean|bool
	 */
	public static function IsRealNumber($value);
	/**
	 * @param \TSelf $value
	 * @return \System\Boolean|bool
	 */
	public static function IsSubnormal($value);
	/**
	 * @param \TSelf $value
	 * @return \System\Boolean|bool
	 */
	public static function IsZero($value);
	/**
	 * @param \TSelf $x
	 * @param \TSelf $y
	 * @return \TSelf
	 */
	public static function MaxMagnitude($x, $y);
	/**
	 * @param \TSelf $x
	 * @param \TSelf $y
	 * @return \TSelf
	 */
	public static function MaxMagnitudeNumber($x, $y);
	/**
	 * @param \TSelf $x
	 * @param \TSelf $y
	 * @return \TSelf
	 */
	public static function MinMagnitude($x, $y);
	/**
	 * @param \TSelf $x
	 * @param \TSelf $y
	 * @return \TSelf
	 */
	public static function MinMagnitudeNumber($x, $y);
	/**
	 * @param \System\String|string $s
	 * @param \System\Globalization\NumberStyles $style
	 * @param \System\IFormatProvider $provider
	 * @return \TSelf
	 */
	public static function Parse($s, $style, $provider);
	/**
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\Globalization\NumberStyles $style
	 * @param \System\IFormatProvider $provider
	 * @return \TSelf
	 */
	public static function Parse($s, $style, $provider);
	/**
	 * @param \TOther $value
	 * @param \TSelf& &$result
	 * @return \System\Boolean|bool
	 */
	protected static function TryConvertFromChecked($value, &$result);
	/**
	 * @param \TOther $value
	 * @param \TSelf& &$result
	 * @return \System\Boolean|bool
	 */
	protected static function TryConvertFromSaturating($value, &$result);
	/**
	 * @param \TOther $value
	 * @param \TSelf& &$result
	 * @return \System\Boolean|bool
	 */
	protected static function TryConvertFromTruncating($value, &$result);
	/**
	 * @param \TSelf $value
	 * @param \TOther& &$result
	 * @return \System\Boolean|bool
	 */
	protected static function TryConvertToChecked($value, &$result);
	/**
	 * @param \TSelf $value
	 * @param \TOther& &$result
	 * @return \System\Boolean|bool
	 */
	protected static function TryConvertToSaturating($value, &$result);
	/**
	 * @param \TSelf $value
	 * @param \TOther& &$result
	 * @return \System\Boolean|bool
	 */
	protected static function TryConvertToTruncating($value, &$result);
	/**
	 * @param \System\String|string $s
	 * @param \System\Globalization\NumberStyles $style
	 * @param \System\IFormatProvider $provider
	 * @param \TSelf& &$result
	 * @return \System\Boolean|bool
	 */
	public static function TryParse($s, $style, $provider, &$result);
	/**
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\Globalization\NumberStyles $style
	 * @param \System\IFormatProvider $provider
	 * @param \TSelf& &$result
	 * @return \System\Boolean|bool
	 */
	public static function TryParse($s, $style, $provider, &$result);
}