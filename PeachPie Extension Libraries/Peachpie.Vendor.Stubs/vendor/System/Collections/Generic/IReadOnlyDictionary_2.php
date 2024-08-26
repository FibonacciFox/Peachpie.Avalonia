<?php
namespace System\Collections\Generic;
interface IReadOnlyDictionary_2
{

	/**
	 * @param \TKey $key
	 * @return \System\Boolean|bool
	 */
	public function ContainsKey($key);
	/**
	 * @param \TKey $key
	 * @param \TValue& &$value
	 * @return \System\Boolean|bool
	 */
	public function TryGetValue($key, &$value);
}