<?php
namespace System\Globalization;
class IcuLocaleData extends \System\Object
{

	/**
	 * @param \System\Int32|int $culture
	 * @return \System\String|string
	 */
	protected static function LCIDToLocaleName($culture){}
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
	private static function GetLocaleDataMappedCulture($cultureName, $part){}
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
	private static function SearchCultureName($name){}
	private static function GetCultureName($localeNameIndice){}
	private static function GetString($buffer){}
}