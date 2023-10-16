<?php
namespace System\Collections;
/**
 */
interface IEqualityComparer
{
	/**
	 * @param \System\Object|object $x
	 * @param \System\Object|object $y
	 */
	public function Equals($x, $y);
	/**
	 * @param \System\Object|object $obj
	 */
	public function GetHashCode($obj);
}
