<?php
namespace System\Threading;
class AsyncLocalValueMap extends \System\Object
{
	/**
	 * @property
	 * @var \System\Threading\IAsyncLocalValueMap
	 * @since readonly
	 */
	public $Empty;
	/**
	 * @param \System\Threading\IAsyncLocalValueMap $asyncLocalValueMap
	 * @return \System\Boolean|bool
	 */
	public static function IsEmpty($asyncLocalValueMap){}
	/**
	 * @param \System\Threading\IAsyncLocal $key
	 * @param \System\Object|object $value
	 * @param \System\Boolean|bool $treatNullValueAsNonexistent
	 * @return \System\Threading\IAsyncLocalValueMap
	 */
	public static function Create($key, $value, $treatNullValueAsNonexistent){}
}