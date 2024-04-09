<?php
namespace System\Numerics;
interface IRootFunctions_1
{

	/**
	 * @param \TSelf $x
	 * @return \TSelf
	 */
	public static function Cbrt($x);
	/**
	 * @param \TSelf $x
	 * @param \TSelf $y
	 * @return \TSelf
	 */
	public static function Hypot($x, $y);
	/**
	 * @param \TSelf $x
	 * @param \System\Int32|int $n
	 * @return \TSelf
	 */
	public static function RootN($x, $n);
	/**
	 * @param \TSelf $x
	 * @return \TSelf
	 */
	public static function Sqrt($x);
}