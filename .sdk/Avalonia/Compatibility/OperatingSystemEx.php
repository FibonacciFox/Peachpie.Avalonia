<?php
namespace Avalonia\Compatibility;
final class OperatingSystemEx extends \System\Object
{

	/**
	 * @return \System\Boolean|bool
	 */
	public static function IsWindows(){}
	/**
	 * @return \System\Boolean|bool
	 */
	public static function IsMacOS(){}
	/**
	 * @return \System\Boolean|bool
	 */
	public static function IsLinux(){}
	/**
	 * @return \System\Boolean|bool
	 */
	public static function IsAndroid(){}
	/**
	 * @return \System\Boolean|bool
	 */
	public static function IsIOS(){}
	/**
	 * @return \System\Boolean|bool
	 */
	public static function IsBrowser(){}
	/**
	 * @param \System\String|string $platform
	 * @return \System\Boolean|bool
	 */
	public static function IsOSPlatform($platform){}
	/**
	 */
	public function __construct(){}
}