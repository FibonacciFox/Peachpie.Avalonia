<?php
namespace Avalonia\Utilities;
/**
 */
class KeyValuePair extends \System\ValueType
{
	/**
	 * @var \TKey
	 * @field
	 */
	public $Key;
	/**
	 * @var \TValue
	 * @field
	 */
	public $Value;
	/**
	 * @param \Avalonia\Utilities\KeyValuePair $kvp
	 * @return \System\Collections\Generic\KeyValuePair_2
	 */
	public static function op_Implicit($kvp){}
}
