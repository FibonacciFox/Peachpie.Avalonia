<?php
namespace System\Runtime\InteropServices;
/**
 */
class CollectionsMarshal extends \System\Object
{
	/**
	 * @param \System\Collections\Generic\List_1 $list
	 * @return \System\Span_1
	 */
	public static function AsSpan($list){}
	/**
	 * @param \System\Collections\Generic\Dictionary_2 $dictionary
	 * @param \System\Runtime\InteropServices\TKey $key
	 * @return \System\Runtime\InteropServices\TValue&
	 */
	public static function GetValueRefOrNullRef($dictionary, $key){}
	/**
	 * @param \System\Collections\Generic\Dictionary_2 $dictionary
	 * @param \System\Runtime\InteropServices\TKey $key
	 * @param \System\Boolean& $exists
	 * @return \System\Runtime\InteropServices\TValue&
	 */
	public static function GetValueRefOrAddDefault($dictionary, $key, $exists){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
