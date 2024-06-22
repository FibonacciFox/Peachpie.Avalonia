<?php
namespace System\Numerics;
interface ILogarithmicFunctions_1
{


	/**
	 * @param \TSelf $x
	 * @return \TSelf
	 */
	public static function Log($x);
	/**
	 * @param \TSelf $x
	 * @param \TSelf $newBase
	 * @return \TSelf
	 */
	public static function Log($x, $newBase);
	/**
	 * @param \TSelf $x
	 * @return \TSelf
	 */
	public static function LogP1($x){}
	/**
	 * @param \TSelf $x
	 * @return \TSelf
	 */
	public static function Log2($x);
	/**
	 * @param \TSelf $x
	 * @return \TSelf
	 */
	public static function Log2P1($x){}
	/**
	 * @param \TSelf $x
	 * @return \TSelf
	 */
	public static function Log10($x);
	/**
	 * @param \TSelf $x
	 * @return \TSelf
	 */
	public static function Log10P1($x){}
}