<?php
namespace System\Collections\Generic;
interface IReadOnlySet_1
{


	/**
	 * @param \T|object $item
	 * @return \System\Boolean|bool
	 */
	public function Contains($item);
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $other [generic: T]
	 * @return \System\Boolean|bool
	 */
	public function IsProperSubsetOf($other);
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $other [generic: T]
	 * @return \System\Boolean|bool
	 */
	public function IsProperSupersetOf($other);
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $other [generic: T]
	 * @return \System\Boolean|bool
	 */
	public function IsSubsetOf($other);
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $other [generic: T]
	 * @return \System\Boolean|bool
	 */
	public function IsSupersetOf($other);
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $other [generic: T]
	 * @return \System\Boolean|bool
	 */
	public function Overlaps($other);
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $other [generic: T]
	 * @return \System\Boolean|bool
	 */
	public function SetEquals($other);
}