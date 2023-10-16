<?php
namespace System\Collections\Generic;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
interface IEqualityComparer_1
{
	/**
	 * @param \System\Collections\Generic\T $x
	 * @param \System\Collections\Generic\T $y
	 */
	public function Equals($x, $y);
	/**
	 * @param \System\Collections\Generic\T $obj
	 */
	public function GetHashCode($obj);
}
