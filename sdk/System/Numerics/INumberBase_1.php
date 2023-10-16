<?php
namespace System\Numerics;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
interface INumberBase_1
{
	/**
	 */
	public function get_One();
	/**
	 */
	public function get_Radix();
	/**
	 */
	public function get_Zero();
	/**
	 * @param \System\Numerics\TSelf $value
	 */
	public function Abs($value);
	/**
	 * @param \System\Numerics\TOther $value
	 */
	public function CreateChecked($value){}
	/**
	 * @param \System\Numerics\TOther $value
	 */
	public function CreateSaturating($value){}
	/**
	 * @param \System\Numerics\TOther $value
	 */
	public function CreateTruncating($value){}
	/**
	 * @param \System\Numerics\TSelf $value
	 */
	public function IsCanonical($value);
	/**
	 * @param \System\Numerics\TSelf $value
	 */
	public function IsComplexNumber($value);
	/**
	 * @param \System\Numerics\TSelf $value
	 */
	public function IsEvenInteger($value);
	/**
	 * @param \System\Numerics\TSelf $value
	 */
	public function IsFinite($value);
	/**
	 * @param \System\Numerics\TSelf $value
	 */
	public function IsImaginaryNumber($value);
	/**
	 * @param \System\Numerics\TSelf $value
	 */
	public function IsInfinity($value);
	/**
	 * @param \System\Numerics\TSelf $value
	 */
	public function IsInteger($value);
	/**
	 * @param \System\Numerics\TSelf $value
	 */
	public function IsNaN($value);
	/**
	 * @param \System\Numerics\TSelf $value
	 */
	public function IsNegative($value);
	/**
	 * @param \System\Numerics\TSelf $value
	 */
	public function IsNegativeInfinity($value);
	/**
	 * @param \System\Numerics\TSelf $value
	 */
	public function IsNormal($value);
	/**
	 * @param \System\Numerics\TSelf $value
	 */
	public function IsOddInteger($value);
	/**
	 * @param \System\Numerics\TSelf $value
	 */
	public function IsPositive($value);
	/**
	 * @param \System\Numerics\TSelf $value
	 */
	public function IsPositiveInfinity($value);
	/**
	 * @param \System\Numerics\TSelf $value
	 */
	public function IsRealNumber($value);
	/**
	 * @param \System\Numerics\TSelf $value
	 */
	public function IsSubnormal($value);
	/**
	 * @param \System\Numerics\TSelf $value
	 */
	public function IsZero($value);
	/**
	 * @param \System\Numerics\TSelf $x
	 * @param \System\Numerics\TSelf $y
	 */
	public function MaxMagnitude($x, $y);
	/**
	 * @param \System\Numerics\TSelf $x
	 * @param \System\Numerics\TSelf $y
	 */
	public function MaxMagnitudeNumber($x, $y);
	/**
	 * @param \System\Numerics\TSelf $x
	 * @param \System\Numerics\TSelf $y
	 */
	public function MinMagnitude($x, $y);
	/**
	 * @param \System\Numerics\TSelf $x
	 * @param \System\Numerics\TSelf $y
	 */
	public function MinMagnitudeNumber($x, $y);
	/**
	 * @param \System\Numerics\TOther $value
	 * @param \System\Numerics\TSelf& $result
	 */
	protected function TryConvertFromChecked($value, $result);
	/**
	 * @param \System\Numerics\TOther $value
	 * @param \System\Numerics\TSelf& $result
	 */
	protected function TryConvertFromSaturating($value, $result);
	/**
	 * @param \System\Numerics\TOther $value
	 * @param \System\Numerics\TSelf& $result
	 */
	protected function TryConvertFromTruncating($value, $result);
	/**
	 * @param \System\Numerics\TSelf $value
	 * @param \System\Numerics\TOther& $result
	 */
	protected function TryConvertToChecked($value, $result);
	/**
	 * @param \System\Numerics\TSelf $value
	 * @param \System\Numerics\TOther& $result
	 */
	protected function TryConvertToSaturating($value, $result);
	/**
	 * @param \System\Numerics\TSelf $value
	 * @param \System\Numerics\TOther& $result
	 */
	protected function TryConvertToTruncating($value, $result);
}
