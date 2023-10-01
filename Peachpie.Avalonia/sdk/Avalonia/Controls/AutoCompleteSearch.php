<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait AutoCompleteSearchMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private static function Contains_1($s, $value, $comparison){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function Contains_2($text, $value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function Equals_1($text, $value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($obj){}
}
/**
 */
class AutoCompleteSearch extends \System\Object
{
	/**
	 * @param \Avalonia\Controls\AutoCompleteFilterMode $FilterMode
	 * @return \Avalonia\Controls\AutoCompleteFilterPredicate_1
	 */
	public static function GetFilter($FilterMode){}
	/**
	 * @uses AutoCompleteSearchMethodsOverride::Contains_1 ($s, $value, $comparison)
	 * @uses AutoCompleteSearchMethodsOverride::Contains_2 ($text, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Contains(mixed ...$args){}
	/**
	 * @param \System\String|string $text
	 * @param \System\String|string $value
	 * @return \System\Boolean
	 */
	public static function StartsWith($text, $value){}
	/**
	 * @param \System\String|string $text
	 * @param \System\String|string $value
	 * @return \System\Boolean
	 */
	public static function StartsWithCaseSensitive($text, $value){}
	/**
	 * @param \System\String|string $text
	 * @param \System\String|string $value
	 * @return \System\Boolean
	 */
	public static function StartsWithOrdinal($text, $value){}
	/**
	 * @param \System\String|string $text
	 * @param \System\String|string $value
	 * @return \System\Boolean
	 */
	public static function StartsWithOrdinalCaseSensitive($text, $value){}
	/**
	 * @param \System\String|string $text
	 * @param \System\String|string $value
	 * @return \System\Boolean
	 */
	public static function ContainsCaseSensitive($text, $value){}
	/**
	 * @param \System\String|string $text
	 * @param \System\String|string $value
	 * @return \System\Boolean
	 */
	public static function ContainsOrdinal($text, $value){}
	/**
	 * @param \System\String|string $text
	 * @param \System\String|string $value
	 * @return \System\Boolean
	 */
	public static function ContainsOrdinalCaseSensitive($text, $value){}
	/**
	 * @uses AutoCompleteSearchMethodsOverride::Equals_1 ($text, $value)
	 * @uses AutoCompleteSearchMethodsOverride::Equals_2 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @param \System\String|string $text
	 * @param \System\String|string $value
	 * @return \System\Boolean
	 */
	public static function EqualsCaseSensitive($text, $value){}
	/**
	 * @param \System\String|string $text
	 * @param \System\String|string $value
	 * @return \System\Boolean
	 */
	public static function EqualsOrdinal($text, $value){}
	/**
	 * @param \System\String|string $text
	 * @param \System\String|string $value
	 * @return \System\Boolean
	 */
	public static function EqualsOrdinalCaseSensitive($text, $value){}
}
