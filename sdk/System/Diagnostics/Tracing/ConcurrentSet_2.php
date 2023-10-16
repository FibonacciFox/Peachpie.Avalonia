<?php
namespace System\Diagnostics\Tracing;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class ConcurrentSet_2 extends \System\ValueType
{
	/**
	 * @param \System\Diagnostics\Tracing\KeyType $key
	 * @return \System\Diagnostics\Tracing\ItemType
	 */
	public  function TryGet($key){}
	/**
	 * @param \System\Diagnostics\Tracing\ItemType $newItem
	 * @return \System\Diagnostics\Tracing\ItemType
	 */
	public  function GetOrAdd($newItem){}
}
