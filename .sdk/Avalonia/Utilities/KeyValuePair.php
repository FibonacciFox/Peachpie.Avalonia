<?php
namespace Avalonia\Utilities;
final class KeyValuePair extends \System\ValueType
{

	/**
	 * @field
	 * @var \TKey
	 */
	public $Key;
	/**
	 * @field
	 * @var \TValue
	 */
	public $Value;
	/**
	 * @param \Avalonia\Utilities\InlineDictionary_2+KeyValuePair $kvp [generic: TKey,TValue]
	 * @return \System\Collections\Generic\KeyValuePair_2[TKey,TValue]
	 */
	public static function op_Implicit($kvp){}
	/**
	 * @param \TKey $key
	 * @param \TValue $value
	 */
	public function __construct($key, $value){}
}