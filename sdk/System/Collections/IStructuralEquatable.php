<?php
namespace System\Collections;
/**
 */
interface IStructuralEquatable
{
	/**
	 * @param \System\Object|object $other
	 * @param \System\Collections\IEqualityComparer $comparer
	 */
	public function Equals($other, $comparer);
	/**
	 * @param \System\Collections\IEqualityComparer $comparer
	 */
	public function GetHashCode($comparer);
}
