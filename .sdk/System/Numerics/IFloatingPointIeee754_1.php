<?php
namespace System\Numerics;
interface IFloatingPointIeee754_1
{


	/**
	 * @param \TSelf $y
	 * @param \TSelf $x
	 * @return \TSelf
	 */
	public static function Atan2($y, $x);
	/**
	 * @param \TSelf $y
	 * @param \TSelf $x
	 * @return \TSelf
	 */
	public static function Atan2Pi($y, $x);
	/**
	 * @param \TSelf $x
	 * @return \TSelf
	 */
	public static function BitDecrement($x);
	/**
	 * @param \TSelf $x
	 * @return \TSelf
	 */
	public static function BitIncrement($x);
	/**
	 * @param \TSelf $left
	 * @param \TSelf $right
	 * @param \TSelf $addend
	 * @return \TSelf
	 */
	public static function FusedMultiplyAdd($left, $right, $addend);
	/**
	 * @param \TSelf $left
	 * @param \TSelf $right
	 * @return \TSelf
	 */
	public static function Ieee754Remainder($left, $right);
	/**
	 * @param \TSelf $x
	 * @return \System\Int32|int
	 */
	public static function ILogB($x);
	/**
	 * @param \TSelf $x
	 * @return \TSelf
	 */
	public static function ReciprocalEstimate($x){}
	/**
	 * @param \TSelf $x
	 * @return \TSelf
	 */
	public static function ReciprocalSqrtEstimate($x){}
	/**
	 * @param \TSelf $x
	 * @param \System\Int32|int $n
	 * @return \TSelf
	 */
	public static function ScaleB($x, $n);
}