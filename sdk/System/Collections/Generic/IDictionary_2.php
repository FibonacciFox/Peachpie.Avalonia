<?php
namespace System\Collections\Generic;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
interface IDictionary_2
{
	/**
	 * @param \System\Collections\Generic\TKey $key
	 */
	public function get_Item($key);
	/**
	 * @param \System\Collections\Generic\TKey $key
	 * @param \System\Collections\Generic\TValue $value
	 */
	public function set_Item($key, $value);
	/**
	 */
	public function get_Keys();
	/**
	 */
	public function get_Values();
	/**
	 * @param \System\Collections\Generic\TKey $key
	 */
	public function ContainsKey($key);
	/**
	 * @param \System\Collections\Generic\TKey $key
	 * @param \System\Collections\Generic\TValue $value
	 */
	public function Add($key, $value);
	/**
	 * @param \System\Collections\Generic\TKey $key
	 */
	public function Remove($key);
	/**
	 * @param \System\Collections\Generic\TKey $key
	 * @param \System\Collections\Generic\TValue& $value
	 */
	public function TryGetValue($key, $value);
}
