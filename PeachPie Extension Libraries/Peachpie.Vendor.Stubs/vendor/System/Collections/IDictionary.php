<?php
namespace System\Collections;
interface IDictionary
{

	/**
	 * @param \System\Object|object $key
	 * @return \System\Boolean|bool
	 */
	public function Contains($key);
	/**
	 * @param \System\Object|object $key
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public function Add($key, $value);
	/**
	 * @return \System\Void|void
	 */
	public function Clear();
	/**
	 * @return \System\Collections\IDictionaryEnumerator
	 */
	public function GetEnumerator();
	/**
	 * @param \System\Object|object $key
	 * @return \System\Void|void
	 */
	public function Remove($key);
}