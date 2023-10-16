<?php
namespace System\Collections\Generic;
/**
 */
class KeyValuePair extends \System\Object
{
	/**
	 * @param \System\Collections\Generic\TKey $key
	 * @param \System\Collections\Generic\TValue $value
	 * @return \System\Collections\Generic\KeyValuePair_2
	 */
	public static function Create($key, $value){}
	/**
	 * @param \System\Object|object $key
	 * @param \System\Object|object $value
	 * @return \System\String|string
	 */
	protected static function PairToString($key, $value){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
