<?php
namespace System\Threading;
final class ThreeElementAsyncLocalValueMap extends \System\Object implements
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
	/**
	 * @param \System\Collections\Generic\KeyValuePair_2 $item0 [generic: System\Threading\IAsyncLocal,System\Object]
	 * @param \System\Collections\Generic\KeyValuePair_2 $item1 [generic: System\Threading\IAsyncLocal,System\Object]
	 * @param \System\Collections\Generic\KeyValuePair_2 $item2 [generic: System\Threading\IAsyncLocal,System\Object]
	 */
	public function __construct($item0, $item1, $item2){}
}