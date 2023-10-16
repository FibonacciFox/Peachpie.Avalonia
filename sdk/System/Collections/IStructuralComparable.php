<?php
namespace System\Collections;
/**
 */
interface IStructuralComparable
{
	/**
	 * @param \System\Object|object $other
	 * @param \System\Collections\IComparer $comparer
	 */
	public function CompareTo($other, $comparer);
}
