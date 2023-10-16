<?php
namespace System\Numerics;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
interface IShiftOperators_3
{
	/**
	 * @param \System\Numerics\TSelf $value
	 * @param \System\Numerics\TOther $shiftAmount
	 */
	public function op_LeftShift($value, $shiftAmount);
	/**
	 * @param \System\Numerics\TSelf $value
	 * @param \System\Numerics\TOther $shiftAmount
	 */
	public function op_RightShift($value, $shiftAmount);
	/**
	 * @param \System\Numerics\TSelf $value
	 * @param \System\Numerics\TOther $shiftAmount
	 */
	public function op_UnsignedRightShift($value, $shiftAmount);
}
