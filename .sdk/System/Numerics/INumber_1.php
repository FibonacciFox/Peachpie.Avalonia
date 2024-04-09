<?php
namespace System\Numerics;
interface INumber_1
{

	/**
	 * @param \TSelf $value
	 * @param \TSelf $min
	 * @param \TSelf $max
	 * @return \TSelf
	 */
	public static function Clamp($value, $min, $max){}
	/**
	 * @param \TSelf $value
	 * @param \TSelf $sign
	 * @return \TSelf
	 */
	public static function CopySign($value, $sign){}
	/**
	 * @param \TSelf $x
	 * @param \TSelf $y
	 * @return \TSelf
	 */
	public static function Max($x, $y){}
	/**
	 * @param \TSelf $x
	 * @param \TSelf $y
	 * @return \TSelf
	 */
	public static function MaxNumber($x, $y){}
	/**
	 * @param \TSelf $x
	 * @param \TSelf $y
	 * @return \TSelf
	 */
	public static function Min($x, $y){}
	/**
	 * @param \TSelf $x
	 * @param \TSelf $y
	 * @return \TSelf
	 */
	public static function MinNumber($x, $y){}
	/**
	 * @param \TSelf $value
	 * @return \System\Int32|int
	 */
	public static function Sign($value){}
}