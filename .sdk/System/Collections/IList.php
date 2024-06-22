<?php
namespace System\Collections;
interface IList
{


	/**
	 * @param \System\Object|object $value
	 * @return \System\Int32|int
	 */
	public function Add($value);
	/**
	 * @param \System\Object|object $value
	 * @return \System\Boolean|bool
	 */
	public function Contains($value);
	/**
	 * @return \System\Void|void
	 */
	public function Clear();
	/**
	 * @param \System\Object|object $value
	 * @return \System\Int32|int
	 */
	public function IndexOf($value);
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public function Insert($index, $value);
	/**
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public function Remove($value);
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	public function RemoveAt($index);
}