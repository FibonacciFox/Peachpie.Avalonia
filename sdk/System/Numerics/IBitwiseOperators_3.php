<?php
namespace System\Numerics;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
interface IBitwiseOperators_3
{
	/**
	 * @param \System\Numerics\TSelf $left
	 * @param \System\Numerics\TOther $right
	 */
	public function op_BitwiseAnd($left, $right);
	/**
	 * @param \System\Numerics\TSelf $left
	 * @param \System\Numerics\TOther $right
	 */
	public function op_BitwiseOr($left, $right);
	/**
	 * @param \System\Numerics\TSelf $left
	 * @param \System\Numerics\TOther $right
	 */
	public function op_ExclusiveOr($left, $right);
	/**
	 * @param \System\Numerics\TSelf $value
	 */
	public function op_OnesComplement($value);
}
