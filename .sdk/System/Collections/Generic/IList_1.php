<?php
namespace System\Collections\Generic;
interface IList_1
{

	/**
	 * @param \T|object $item
	 * @return \System\Int32|int
	 */
	public function IndexOf($item);
	/**
	 * @param \System\Int32|int $index
	 * @param \T|object $item
	 * @return \System\Void|void
	 */
	public function Insert($index, $item);
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	public function RemoveAt($index);
}