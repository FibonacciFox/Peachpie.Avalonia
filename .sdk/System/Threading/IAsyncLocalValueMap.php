<?php
namespace System\Threading;
interface IAsyncLocalValueMap
{


	/**
	 * @param \System\Threading\IAsyncLocal $key
	 * @param \System\Object& &$value
	 * @return \System\Boolean|bool
	 */
	public function TryGetValue($key, &$value);
	/**
	 * @param \System\Threading\IAsyncLocal $key
	 * @param \System\Object|object $value
	 * @param \System\Boolean|bool $treatNullValueAsNonexistent
	 * @return \System\Threading\IAsyncLocalValueMap
	 */
	public function Set($key, $value, $treatNullValueAsNonexistent);
}