<?php
namespace Avalonia\Compatibility;
/**
 */
class OperatingSystemEx extends \System\Object
{
	/**
	 * @return \System\Boolean
	 */
	public static function IsWindows(){}
	/**
	 * @return \System\Boolean
	 */
	public static function IsMacOS(){}
	/**
	 * @return \System\Boolean
	 */
	public static function IsLinux(){}
	/**
	 * @return \System\Boolean
	 */
	public static function IsAndroid(){}
	/**
	 * @return \System\Boolean
	 */
	public static function IsIOS(){}
	/**
	 * @return \System\Boolean
	 */
	public static function IsBrowser(){}
	/**
	 * @param \System\String|string $platform
	 * @return \System\Boolean
	 */
	public static function IsOSPlatform($platform){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
