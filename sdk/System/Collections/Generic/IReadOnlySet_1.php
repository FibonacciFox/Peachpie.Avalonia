<?php
namespace System\Collections\Generic;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
interface IReadOnlySet_1
{
	/**
	 * @param \System\Collections\Generic\T $item
	 */
	public function Contains($item);
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $other
	 */
	public function IsProperSubsetOf($other);
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $other
	 */
	public function IsProperSupersetOf($other);
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $other
	 */
	public function IsSubsetOf($other);
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $other
	 */
	public function IsSupersetOf($other);
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $other
	 */
	public function Overlaps($other);
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $other
	 */
	public function SetEquals($other);
}
