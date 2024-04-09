<?php
namespace System\Numerics;
interface ITrigonometricFunctions_1
{

	/**
	 * @param \TSelf $x
	 * @return \TSelf
	 */
	public static function Acos($x);
	/**
	 * @param \TSelf $x
	 * @return \TSelf
	 */
	public static function AcosPi($x);
	/**
	 * @param \TSelf $x
	 * @return \TSelf
	 */
	public static function Asin($x);
	/**
	 * @param \TSelf $x
	 * @return \TSelf
	 */
	public static function AsinPi($x);
	/**
	 * @param \TSelf $x
	 * @return \TSelf
	 */
	public static function Atan($x);
	/**
	 * @param \TSelf $x
	 * @return \TSelf
	 */
	public static function AtanPi($x);
	/**
	 * @param \TSelf $x
	 * @return \TSelf
	 */
	public static function Cos($x);
	/**
	 * @param \TSelf $x
	 * @return \TSelf
	 */
	public static function CosPi($x);
	/**
	 * @param \TSelf $x
	 * @return \TSelf
	 */
	public static function Sin($x);
	/**
	 * @param \TSelf $x
	 * @return \System\ValueTuple_2[TSelf,TSelf]
	 */
	public static function SinCos($x);
	/**
	 * @param \TSelf $x
	 * @return \System\ValueTuple_2[TSelf,TSelf]
	 */
	public static function SinCosPi($x);
	/**
	 * @param \TSelf $x
	 * @return \TSelf
	 */
	public static function SinPi($x);
	/**
	 * @param \TSelf $x
	 * @return \TSelf
	 */
	public static function Tan($x);
	/**
	 * @param \TSelf $x
	 * @return \TSelf
	 */
	public static function TanPi($x);
}