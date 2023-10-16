<?php
namespace System\Collections;
/**
 */
interface IDictionary
{
	/**
	 * @param \System\Object|object $key
	 */
	public function get_Item($key);
	/**
	 * @param \System\Object|object $key
	 * @param \System\Object|object $value
	 */
	public function set_Item($key, $value);
	/**
	 */
	public function get_Keys();
	/**
	 */
	public function get_Values();
	/**
	 * @param \System\Object|object $key
	 */
	public function Contains($key);
	/**
	 * @param \System\Object|object $key
	 * @param \System\Object|object $value
	 */
	public function Add($key, $value);
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
	 */
	public function GetEnumerator();
	/**
	 * @param \System\Object|object $key
	 */
	public function Remove($key);
}
