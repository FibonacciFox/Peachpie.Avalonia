<?php
namespace System\Collections;
/**
 */
interface IList
{
	/**
	 * @param \System\Int32|int $index
	 */
	public function get_Item($index);
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Object|object $value
	 */
	public function set_Item($index, $value);
	/**
	 * @param \System\Object|object $value
	 */
	public function Add($value);
	/**
	 * @param \System\Object|object $value
	 */
	public function Contains($value);
	/**
	 */
	public function Clear();
	/**
	 */
	public function get_IsReadOnly();
	/**
	 */
	public function get_IsFixedSize();
	/**
	 * @param \System\Object|object $value
	 */
	public function IndexOf($value);
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Object|object $value
	 */
	public function Insert($index, $value);
	/**
	 * @param \System\Object|object $value
	 */
	public function Remove($value);
	/**
	 * @param \System\Int32|int $index
	 */
	public function RemoveAt($index);
}
