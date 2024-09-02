<?php
namespace System\Collections\Generic;
class KeyValuePair extends \System\Object
{

	/**
	 * @param \TKey $key
	 * @param \TValue $value
	 * @return \System\Collections\Generic\KeyValuePair_2[TKey,TValue]
	 */
	public static function Create($key, $value){}
	/**
	 * @param \System\Object|object $key
	 * @param \System\Object|object $value
	 * @return \System\String|string
	 */
	protected static function PairToString($key, $value){}
}