<?php
namespace System\Threading;
/**
 */
class AsyncLocalValueMap extends \System\Object
{
	/**
	 * @var \System\Threading\IAsyncLocalValueMap
	 * @property
	 */
	public readonly $Empty;
	/**
	 * @return \System\Threading\IAsyncLocalValueMap
	 */
	public static function get_Empty(){}
	/**
	 * @param \System\Threading\IAsyncLocalValueMap $asyncLocalValueMap
	 * @return \System\Boolean
	 */
	public static function IsEmpty($asyncLocalValueMap){}
	/**
	 * @param \System\Threading\IAsyncLocal $key
	 * @param \System\Object|object $value
	 * @param \System\Boolean $treatNullValueAsNonexistent
	 * @return \System\Threading\IAsyncLocalValueMap
	 */
	public static function Create($key, $value, $treatNullValueAsNonexistent){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
