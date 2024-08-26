<?php
namespace System;
final class OperatingSystem extends \System\Object implements
	\System\Runtime\Serialization\ISerializable,
	\System\ICloneable
{
	/**
	 * @property
	 * @var \System\PlatformID
	 * @since readonly
	 */
	public $Platform;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $ServicePack;
	/**
	 * @property
	 * @var \System\Version
	 * @since readonly
	 */
	public $Version;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $VersionString;
	/**
	 * @param \System\Runtime\Serialization\SerializationInfo $info
	 * @param \System\Runtime\Serialization\StreamingContext $context
	 * @return \System\Void|void
	 */
	public function GetObjectData($info, $context){}
	/**
	 * @return \System\Object|object
	 */
	public function Clone(){}
	/**
	 * @param \System\String|string $platform
	 * @return \System\Boolean|bool
	 */
	public static function IsOSPlatform($platform){}
	/**
	 * @param \System\String|string $platform
	 * @param \System\Int32|int $major
	 * @param \System\Int32|int $minor
	 * @param \System\Int32|int $build
	 * @param \System\Int32|int $revision
	 * @return \System\Boolean|bool
	 */
	public static function IsOSPlatformVersionAtLeast($platform, $major, $minor, $build, $revision){}
	/**
	 * @return \System\Boolean|bool
	 */
	public static function IsBrowser(){}
	/**
	 * @return \System\Boolean|bool
	 */
	public static function IsLinux(){}
	/**
	 * @return \System\Boolean|bool
	 */
	public static function IsFreeBSD(){}
	/**
	 * @param \System\Int32|int $major
	 * @param \System\Int32|int $minor
	 * @param \System\Int32|int $build
	 * @param \System\Int32|int $revision
	 * @return \System\Boolean|bool
	 */
	public static function IsFreeBSDVersionAtLeast($major, $minor, $build, $revision){}
	/**
	 * @return \System\Boolean|bool
	 */
	public static function IsAndroid(){}
	/**
	 * @param \System\Int32|int $major
	 * @param \System\Int32|int $minor
	 * @param \System\Int32|int $build
	 * @param \System\Int32|int $revision
	 * @return \System\Boolean|bool
	 */
	public static function IsAndroidVersionAtLeast($major, $minor, $build, $revision){}
	/**
	 * @return \System\Boolean|bool
	 */
	public static function IsIOS(){}
	/**
	 * @param \System\Int32|int $major
	 * @param \System\Int32|int $minor
	 * @param \System\Int32|int $build
	 * @return \System\Boolean|bool
	 */
	public static function IsIOSVersionAtLeast($major, $minor, $build){}
	/**
	 * @return \System\Boolean|bool
	 */
	public static function IsMacOS(){}
	/**
	 * @param \System\Int32|int $major
	 * @param \System\Int32|int $minor
	 * @param \System\Int32|int $build
	 * @return \System\Boolean|bool
	 */
	public static function IsMacOSVersionAtLeast($major, $minor, $build){}
	/**
	 * @return \System\Boolean|bool
	 */
	public static function IsMacCatalyst(){}
	/**
	 * @param \System\Int32|int $major
	 * @param \System\Int32|int $minor
	 * @param \System\Int32|int $build
	 * @return \System\Boolean|bool
	 */
	public static function IsMacCatalystVersionAtLeast($major, $minor, $build){}
	/**
	 * @return \System\Boolean|bool
	 */
	public static function IsTvOS(){}
	/**
	 * @param \System\Int32|int $major
	 * @param \System\Int32|int $minor
	 * @param \System\Int32|int $build
	 * @return \System\Boolean|bool
	 */
	public static function IsTvOSVersionAtLeast($major, $minor, $build){}
	/**
	 * @return \System\Boolean|bool
	 */
	public static function IsWatchOS(){}
	/**
	 * @param \System\Int32|int $major
	 * @param \System\Int32|int $minor
	 * @param \System\Int32|int $build
	 * @return \System\Boolean|bool
	 */
	public static function IsWatchOSVersionAtLeast($major, $minor, $build){}
	/**
	 * @return \System\Boolean|bool
	 */
	public static function IsWindows(){}
	/**
	 * @param \System\Int32|int $major
	 * @param \System\Int32|int $minor
	 * @param \System\Int32|int $build
	 * @param \System\Int32|int $revision
	 * @return \System\Boolean|bool
	 */
	public static function IsWindowsVersionAtLeast($major, $minor, $build, $revision){}
	private static function IsOSVersionAtLeast($major, $minor, $build, $revision){}
	/**
	 * @param \System\PlatformID $platform
	 * @param \System\Version $version
	 */
	public function __construct($platform, $version){}
}