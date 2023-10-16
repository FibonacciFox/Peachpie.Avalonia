<?php
namespace System\Collections;
/**
 */
interface ICollection
{
	/**
	 * @param \System\Array|array $array
	 * @param \System\Int32|int $index
	 */
	public function CopyTo($array, $index);
	/**
	 */
	public function get_Count();
	/**
	 */
	public function get_SyncRoot();
	/**
	 */
	public function get_IsSynchronized();
}
