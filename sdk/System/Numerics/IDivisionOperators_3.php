<?php
namespace System\Numerics;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
interface IDivisionOperators_3
{
	/**
	 * @param \System\Numerics\TSelf $left
	 * @param \System\Numerics\TOther $right
	 */
	public function op_Division($left, $right);
	/**
	 * @param \System\Numerics\TSelf $left
	 * @param \System\Numerics\TOther $right
	 */
	public function op_CheckedDivision($left, $right){}
}
