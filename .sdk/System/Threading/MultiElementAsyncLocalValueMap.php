<?php
namespace System\Threading;
final class MultiElementAsyncLocalValueMap extends \System\Object implements
	\System\Threading\IAsyncLocalValueMap
{


	/**
	 * @param \System\Threading\IAsyncLocal $key
	 * @param \System\Object|object $value
	 * @param \System\Boolean|bool $treatNullValueAsNonexistent
	 * @return \System\Threading\IAsyncLocalValueMap
	 */
	public function Set($key, $value, $treatNullValueAsNonexistent){}
	/**
	 * @param \System\Threading\IAsyncLocal $key
	 * @param \System\Object& &$value
	 * @return \System\Boolean|bool
	 */
	public function TryGetValue($key, &$value){}
}