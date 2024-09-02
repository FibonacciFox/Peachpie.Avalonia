<?php
namespace System\Collections;
interface IStructuralEquatable
{

	/**
	 * @param \System\Object|object $other
	 * @param \System\Collections\IEqualityComparer $comparer
	 * @return \System\Boolean|bool
	 */
	public function Equals($other, $comparer);
	/**
	 * @param \System\Collections\IEqualityComparer $comparer
	 * @return \System\Int32|int
	 */
	public function GetHashCode($comparer);
}