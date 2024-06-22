<?php
namespace System\Collections\Generic;
interface ISet_1
{


	/**
	 * @param \T|object $item
	 * @return \System\Boolean|bool
	 */
	public function Add($item);
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $other [generic: T]
	 * @return \System\Void|void
	 */
	public function UnionWith($other);
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $other [generic: T]
	 * @return \System\Void|void
	 */
	public function IntersectWith($other);
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $other [generic: T]
	 * @return \System\Void|void
	 */
	public function ExceptWith($other);
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $other [generic: T]
	 * @return \System\Void|void
	 */
	public function SymmetricExceptWith($other);
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
	public function IsProperSupersetOf($other);
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $other [generic: T]
	 * @return \System\Boolean|bool
	 */
	public function IsProperSubsetOf($other);
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