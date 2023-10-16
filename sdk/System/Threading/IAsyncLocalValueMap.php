<?php
namespace System\Threading;
/**
 */
interface IAsyncLocalValueMap
{
	/**
	 * @param \System\Threading\IAsyncLocal $key
	 * @param \System\Object& $value
	 */
	public function TryGetValue($key, $value);
	/**
	 * @param \System\Threading\IAsyncLocal $key
	 * @param \System\Object|object $value
	 * @param \System\Boolean $treatNullValueAsNonexistent
	 */
	public function Set($key, $value, $treatNullValueAsNonexistent);
}
