<?php
namespace System\Collections\Generic;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
interface IList_1
{
	/**
	 * @param \System\Int32|int $index
	 */
	public function get_Item($index);
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Collections\Generic\T $value
	 */
	public function set_Item($index, $value);
	/**
	 * @param \System\Collections\Generic\T $item
	 */
	public function IndexOf($item);
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Collections\Generic\T $item
	 */
	public function Insert($index, $item);
	/**
	 * @param \System\Int32|int $index
	 */
	public function RemoveAt($index);
}
