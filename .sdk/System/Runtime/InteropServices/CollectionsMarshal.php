<?php
namespace System\Runtime\InteropServices;
class CollectionsMarshal extends \System\Object
{

	/**
	 * @param \System\Collections\Generic\List_1 $list [generic: T]
	 * @return \System\Span_1[T]
	 */
	public static function AsSpan($list){}
	/**
	 * @param \System\Collections\Generic\Dictionary_2 $dictionary [generic: TKey,TValue]
	 * @param \TKey $key
	 * @return \TValue&
	 */
	public static function GetValueRefOrNullRef($dictionary, $key){}
	/**
	 * @param \System\Collections\Generic\Dictionary_2 $dictionary [generic: TKey,TValue]
	 * @param \TKey $key
	 * @param \System\Boolean& &$exists
	 * @return \TValue&
	 */
	public static function GetValueRefOrAddDefault($dictionary, $key, &$exists){}
}