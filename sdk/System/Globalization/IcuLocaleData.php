<?php
namespace System\Globalization;
/**
 */
class IcuLocaleData extends \System\Object
{
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_CultureNames(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_LocalesNamesIndexes(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_ThreeLetterWindowsLanguageName(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_NameIndexToNumericData(){}
	/**
	 * @param \System\String|string $cultureName
	 * @param \System\Globalization\IcuLocaleDataParts $part
	 * @return \System\Int32|int
	 */
	protected static function GetLocaleDataNumericPart($cultureName, $part){}
	/**
	 * @param \System\String|string $cultureName
	 * @return \System\String|string
	 */
	protected static function GetThreeLetterWindowsLanguageName($cultureName){}
	/**
	 * @param \System\String|string $cultureName
	 * @param \System\Globalization\IcuLocaleDataParts $part
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetLocaleDataMappedCulture($cultureName, $part){}
	/**
	 * @param \System\String|string $cultureName
	 * @return \System\String|string
	 */
	protected static function GetSpecificCultureName($cultureName){}
	/**
	 * @param \System\String|string $cultureName
	 * @return \System\String|string
	 */
	protected static function GetConsoleUICulture($cultureName){}
	/**
	 * @param \System\String|string $name
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SearchCultureName($name){}
	/**
	 * @param \System\Int32|int $localeNameIndice
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetCultureName($localeNameIndice){}
	/**
	 * @param \System\ReadOnlySpan_1 $buffer
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetString($buffer){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
