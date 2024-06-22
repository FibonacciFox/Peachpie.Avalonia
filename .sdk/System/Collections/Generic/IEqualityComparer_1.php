<?php
namespace System\Collections\Generic;
interface IEqualityComparer_1
{


	/**
	 * @param \T|object $x
	 * @param \T|object $y
	 * @return \System\Boolean|bool
	 */
	public function Equals($x, $y);
	/**
	 * @param \T|object $obj
	 * @return \System\Int32|int
	 */
	public function GetHashCode($obj);
}