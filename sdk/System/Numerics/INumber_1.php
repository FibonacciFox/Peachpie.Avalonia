<?php
namespace System\Numerics;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
interface INumber_1
{
	/**
	 * @param \System\Numerics\TSelf $value
	 * @param \System\Numerics\TSelf $min
	 * @param \System\Numerics\TSelf $max
	 */
	public function Clamp($value, $min, $max){}
	/**
	 * @param \System\Numerics\TSelf $value
	 * @param \System\Numerics\TSelf $sign
	 */
	public function CopySign($value, $sign){}
	/**
	 * @param \System\Numerics\TSelf $x
	 * @param \System\Numerics\TSelf $y
	 */
	public function Max($x, $y){}
	/**
	 * @param \System\Numerics\TSelf $x
	 * @param \System\Numerics\TSelf $y
	 */
	public function MaxNumber($x, $y){}
	/**
	 * @param \System\Numerics\TSelf $x
	 * @param \System\Numerics\TSelf $y
	 */
	public function Min($x, $y){}
	/**
	 * @param \System\Numerics\TSelf $x
	 * @param \System\Numerics\TSelf $y
	 */
	public function MinNumber($x, $y){}
	/**
	 * @param \System\Numerics\TSelf $value
	 */
	public function Sign($value){}
}
