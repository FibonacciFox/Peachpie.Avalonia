<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait AutoCompleteSearchOverride {
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\String|string $value
	 * @param \System\StringComparison $comparison
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private static function Contains_1 ($s, $value, $comparison){}
	/**
	 * @deprecated
	 * @param \System\String|string $text
	 * @param \System\String|string $value
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function Contains_2 ($text, $value){}
}
class AutoCompleteSearch extends \System\Object
{
	use AutoCompleteSearchOverride;

	/**
	 * @param \Avalonia\Controls\AutoCompleteFilterMode $FilterMode
	 * @return \Avalonia\Controls\AutoCompleteFilterPredicate_1[System\String]
	 */
	public static function GetFilter($FilterMode){}
	/**
	 * @uses AutoCompleteSearchOverride::Contains_1 <br>private , args: ($s, $value, $comparison)<br>
	 * @uses AutoCompleteSearchOverride::Contains_2 <br>public , args: ($text, $value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function Contains (\override ...$args){}
	/**
	 * @param \System\String|string $text
	 * @param \System\String|string $value
	 * @return \System\Boolean|bool
	 */
	public static function StartsWith($text, $value){}
	/**
	 * @param \System\String|string $text
	 * @param \System\String|string $value
	 * @return \System\Boolean|bool
	 */
	public static function StartsWithCaseSensitive($text, $value){}
	/**
	 * @param \System\String|string $text
	 * @param \System\String|string $value
	 * @return \System\Boolean|bool
	 */
	public static function StartsWithOrdinal($text, $value){}
	/**
	 * @param \System\String|string $text
	 * @param \System\String|string $value
	 * @return \System\Boolean|bool
	 */
	public static function StartsWithOrdinalCaseSensitive($text, $value){}
	/**
	 * @param \System\String|string $text
	 * @param \System\String|string $value
	 * @return \System\Boolean|bool
	 */
	public static function ContainsCaseSensitive($text, $value){}
	/**
	 * @param \System\String|string $text
	 * @param \System\String|string $value
	 * @return \System\Boolean|bool
	 */
	public static function ContainsOrdinal($text, $value){}
	/**
	 * @param \System\String|string $text
	 * @param \System\String|string $value
	 * @return \System\Boolean|bool
	 */
	public static function ContainsOrdinalCaseSensitive($text, $value){}
	/**
	 * @param \System\String|string $text
	 * @param \System\String|string $value
	 * @return \System\Boolean|bool
	 */
	public static function EqualsCaseSensitive($text, $value){}
	/**
	 * @param \System\String|string $text
	 * @param \System\String|string $value
	 * @return \System\Boolean|bool
	 */
	public static function EqualsOrdinal($text, $value){}
	/**
	 * @param \System\String|string $text
	 * @param \System\String|string $value
	 * @return \System\Boolean|bool
	 */
	public static function EqualsOrdinalCaseSensitive($text, $value){}
}