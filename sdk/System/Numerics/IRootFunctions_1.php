<?php
namespace System\Numerics;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
interface IRootFunctions_1
{
	/**
	 * @param \System\Numerics\TSelf $x
	 */
	public function Cbrt($x);
	/**
	 * @param \System\Numerics\TSelf $x
	 * @param \System\Numerics\TSelf $y
	 */
	public function Hypot($x, $y);
	/**
	 * @param \System\Numerics\TSelf $x
	 * @param \System\Int32|int $n
	 */
	public function RootN($x, $n);
	/**
	 * @param \System\Numerics\TSelf $x
	 */
	public function Sqrt($x);
}
