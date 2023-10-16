<?php
namespace System\Collections\Generic;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
interface ISet_1
{
	/**
	 * @param \System\Collections\Generic\T $item
	 */
	public function Add($item);
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $other
	 */
	public function UnionWith($other);
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $other
	 */
	public function IntersectWith($other);
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $other
	 */
	public function ExceptWith($other);
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $other
	 */
	public function SymmetricExceptWith($other);
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
	public function IsProperSupersetOf($other);
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $other
	 */
	public function IsProperSubsetOf($other);
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $other
	 */
	public function Overlaps($other);
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $other
	 */
	public function SetEquals($other);
}
