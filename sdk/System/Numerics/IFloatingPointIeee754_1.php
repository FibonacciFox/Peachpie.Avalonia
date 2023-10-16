<?php
namespace System\Numerics;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
interface IFloatingPointIeee754_1
{
	/**
	 */
	public function get_Epsilon();
	/**
	 */
	public function get_NaN();
	/**
	 */
	public function get_NegativeInfinity();
	/**
	 */
	public function get_NegativeZero();
	/**
	 */
	public function get_PositiveInfinity();
	/**
	 * @param \System\Numerics\TSelf $y
	 * @param \System\Numerics\TSelf $x
	 */
	public function Atan2($y, $x);
	/**
	 * @param \System\Numerics\TSelf $y
	 * @param \System\Numerics\TSelf $x
	 */
	public function Atan2Pi($y, $x);
	/**
	 * @param \System\Numerics\TSelf $x
	 */
	public function BitDecrement($x);
	/**
	 * @param \System\Numerics\TSelf $x
	 */
	public function BitIncrement($x);
	/**
	 * @param \System\Numerics\TSelf $left
	 * @param \System\Numerics\TSelf $right
	 * @param \System\Numerics\TSelf $addend
	 */
	public function FusedMultiplyAdd($left, $right, $addend);
	/**
	 * @param \System\Numerics\TSelf $left
	 * @param \System\Numerics\TSelf $right
	 */
	public function Ieee754Remainder($left, $right);
	/**
	 * @param \System\Numerics\TSelf $x
	 */
	public function ILogB($x);
	/**
	 * @param \System\Numerics\TSelf $x
	 */
	public function ReciprocalEstimate($x){}
	/**
	 * @param \System\Numerics\TSelf $x
	 */
	public function ReciprocalSqrtEstimate($x){}
	/**
	 * @param \System\Numerics\TSelf $x
	 * @param \System\Int32|int $n
	 */
	public function ScaleB($x, $n);
}
