<?php
namespace System\Collections\Generic;
interface IDictionary_2
{

	/**
	 * @param \TKey $key
	 * @return \System\Boolean|bool
	 */
	public function ContainsKey($key);
	/**
	 * @param \TKey $key
	 * @param \TValue $value
	 * @return \System\Void|void
	 */
	public function Add($key, $value);
	/**
	 * @param \TKey $key
	 * @return \System\Boolean|bool
	 */
	public function Remove($key);
	/**
	 * @param \TKey $key
	 * @param \TValue& &$value
	 * @return \System\Boolean|bool
	 */
	public function TryGetValue($key, &$value);
}