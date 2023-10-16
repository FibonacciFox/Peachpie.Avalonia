<?php
namespace System\Numerics;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
interface IMultiplyOperators_3
{
	/**
	 * @param \System\Numerics\TSelf $left
	 * @param \System\Numerics\TOther $right
	 */
	public function op_Multiply($left, $right);
	/**
	 * @param \System\Numerics\TSelf $left
	 * @param \System\Numerics\TOther $right
	 */
	public function op_CheckedMultiply($left, $right){}
}
