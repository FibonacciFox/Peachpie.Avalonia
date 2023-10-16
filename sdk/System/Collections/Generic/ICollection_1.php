<?php
namespace System\Collections\Generic;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
interface ICollection_1
{
	/**
	 */
	public function get_Count();
	/**
	 */
	public function get_IsReadOnly();
	/**
	 * @param \System\Collections\Generic\T $item
	 */
	public function Add($item);
	/**
	 */
	public function Clear();
	/**
	 * @param \System\Collections\Generic\T $item
	 */
	public function Contains($item);
	/**
	 * @param \System\Collections\Generic\T[] $array
	 * @param \System\Int32|int $arrayIndex
	 */
	public function CopyTo($array, $arrayIndex);
	/**
	 * @param \System\Collections\Generic\T $item
	 */
	public function Remove($item);
}
