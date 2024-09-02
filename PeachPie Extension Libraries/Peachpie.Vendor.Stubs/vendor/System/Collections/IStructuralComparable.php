<?php
namespace System\Collections;
interface IStructuralComparable
{

	/**
	 * @param \System\Object|object $other
	 * @param \System\Collections\IComparer $comparer
	 * @return \System\Int32|int
	 */
	public function CompareTo($other, $comparer);
}