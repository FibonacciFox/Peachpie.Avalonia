<?php
namespace System\Collections;
interface IEqualityComparer
{


	/**
	 * @param \System\Object|object $x
	 * @param \System\Object|object $y
	 * @return \System\Boolean|bool
	 */
	public function Equals($x, $y);
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Int32|int
	 */
	public function GetHashCode($obj);
}