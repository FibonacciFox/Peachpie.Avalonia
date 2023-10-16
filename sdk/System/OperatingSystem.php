<?php
namespace System;
/**
 */
class OperatingSystem extends \System\Object implements 
	\System\Runtime\Serialization\ISerializable,
	\System\ICloneable
{
	/**
	 * @var \System\PlatformID
	 * @property
	 */
	public readonly $Platform;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $ServicePack;
	/**
	 * @var \System\Version
	 * @property
	 */
	public readonly $Version;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $VersionString;
	/**
	 * @param \System\Runtime\Serialization\SerializationInfo $info
	 * @param \System\Runtime\Serialization\StreamingContext $context
	 * @return \System\Void|void
	 */
	public  function GetObjectData($info, $context){}
	/**
	 * @return \System\PlatformID
	 */
	public  function get_Platform(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_ServicePack(){}
	/**
	 * @return \System\Version
	 */
	public  function get_Version(){}
	/**
	 * @return \System\Object|object
	 */
	public  function Clone(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_VersionString(){}
	/**
	 * @param \System\String|string $platform
	 * @return \System\Boolean
	 */
	public static function IsOSPlatform($platform){}
	/**
	 * @param \System\String|string $platform
	 * @param \System\Int32|int $major
	 * @param \System\Int32|int $minor
	 * @param \System\Int32|int $build
	 * @param \System\Int32|int $revision
	 * @return \System\Boolean
	 */
	public static function IsOSPlatformVersionAtLeast($platform, $major, $minor, $build, $revision){}
	/**
	 * @return \System\Boolean
	 */
	public static function IsBrowser(){}
	/**
	 * @return \System\Boolean
	 */
	public static function IsLinux(){}
	/**
	 * @return \System\Boolean
	 */
	public static function IsFreeBSD(){}
	/**
	 * @param \System\Int32|int $major
	 * @param \System\Int32|int $minor
	 * @param \System\Int32|int $build
	 * @param \System\Int32|int $revision
	 * @return \System\Boolean
	 */
	public static function IsFreeBSDVersionAtLeast($major, $minor, $build, $revision){}
	/**
	 * @return \System\Boolean
	 */
	public static function IsAndroid(){}
	/**
	 * @param \System\Int32|int $major
	 * @param \System\Int32|int $minor
	 * @param \System\Int32|int $build
	 * @param \System\Int32|int $revision
	 * @return \System\Boolean
	 */
	public static function IsAndroidVersionAtLeast($major, $minor, $build, $revision){}
	/**
	 * @return \System\Boolean
	 */
	public static function IsIOS(){}
	/**
	 * @param \System\Int32|int $major
	 * @param \System\Int32|int $minor
	 * @param \System\Int32|int $build
	 * @return \System\Boolean
	 */
	public static function IsIOSVersionAtLeast($major, $minor, $build){}
	/**
	 * @return \System\Boolean
	 */
	public static function IsMacOS(){}
	/**
	 * @param \System\Int32|int $major
	 * @param \System\Int32|int $minor
	 * @param \System\Int32|int $build
	 * @return \System\Boolean
	 */
	public static function IsMacOSVersionAtLeast($major, $minor, $build){}
	/**
	 * @return \System\Boolean
	 */
	public static function IsMacCatalyst(){}
	/**
	 * @param \System\Int32|int $major
	 * @param \System\Int32|int $minor
	 * @param \System\Int32|int $build
	 * @return \System\Boolean
	 */
	public static function IsMacCatalystVersionAtLeast($major, $minor, $build){}
	/**
	 * @return \System\Boolean
	 */
	public static function IsTvOS(){}
	/**
	 * @param \System\Int32|int $major
	 * @param \System\Int32|int $minor
	 * @param \System\Int32|int $build
	 * @return \System\Boolean
	 */
	public static function IsTvOSVersionAtLeast($major, $minor, $build){}
	/**
	 * @return \System\Boolean
	 */
	public static function IsWatchOS(){}
	/**
	 * @param \System\Int32|int $major
	 * @param \System\Int32|int $minor
	 * @param \System\Int32|int $build
	 * @return \System\Boolean
	 */
	public static function IsWatchOSVersionAtLeast($major, $minor, $build){}
	/**
	 * @return \System\Boolean
	 */
	public static function IsWindows(){}
	/**
	 * @param \System\Int32|int $major
	 * @param \System\Int32|int $minor
	 * @param \System\Int32|int $build
	 * @param \System\Int32|int $revision
	 * @return \System\Boolean
	 */
	public static function IsWindowsVersionAtLeast($major, $minor, $build, $revision){}
	/**
	 * @param \System\Int32|int $major
	 * @param \System\Int32|int $minor
	 * @param \System\Int32|int $build
	 * @param \System\Int32|int $revision
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsOSVersionAtLeast($major, $minor, $build, $revision){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
