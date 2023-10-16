<?php
namespace System\Threading;
/**
 */
class OneElementAsyncLocalValueMap extends \System\Object implements 
	\System\Threading\IAsyncLocalValueMap
{
	/**
	 * @param \System\Threading\IAsyncLocal $key
	 * @param \System\Object|object $value
	 * @param \System\Boolean $treatNullValueAsNonexistent
	 * @return \System\Threading\IAsyncLocalValueMap
	 */
	public  function Set($key, $value, $treatNullValueAsNonexistent){}
	/**
	 * @param \System\Threading\IAsyncLocal $key
	 * @param \System\Object& $value
	 * @return \System\Boolean
	 */
	public  function TryGetValue($key, $value){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
