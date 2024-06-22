<?php
namespace System\Collections\Generic;
interface ICollection_1
{


	/**
	 * @param \T|object $item
	 * @return \System\Void|void
	 */
	public function Add($item);
	/**
	 * @return \System\Void|void
	 */
	public function Clear();
	/**
	 * @param \T|object $item
	 * @return \System\Boolean|bool
	 */
	public function Contains($item);
	/**
	 * @param \T $array
	 * @param \System\Int32|int $arrayIndex
	 * @return \System\Void|void
	 */
	public function CopyTo($array, $arrayIndex);
	/**
	 * @param \T|object $item
	 * @return \System\Boolean|bool
	 */
	public function Remove($item);
}