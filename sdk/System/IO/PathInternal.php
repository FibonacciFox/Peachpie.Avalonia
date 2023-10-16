<?php
namespace System\IO;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait PathInternalMethodsOverride
{
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] protected static function RemoveRelativeSegments_1($path, $rootLength){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected static function RemoveRelativeSegments_2($path, $rootLength, $sb){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] protected static function TrimEndingDirectorySeparator_1($path){}
	/**
	 * @return \System\ReadOnlySpan_1
	 */
	#[MethodOverride] protected static function TrimEndingDirectorySeparator_2($path){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected static function EndsInDirectorySeparator_1($path){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected static function EndsInDirectorySeparator_2($path){}
}
/**
 */
class PathInternal extends \System\Object
{
	/**
	 * @param \System\ReadOnlySpan_1 $path
	 * @return \System\Boolean
	 */
	protected static function StartsWithDirectorySeparator($path){}
	/**
	 * @param \System\String|string $path
	 * @return \System\String|string
	 */
	protected static function EnsureTrailingSeparator($path){}
	/**
	 * @param \System\ReadOnlySpan_1 $path
	 * @return \System\Boolean
	 */
	protected static function IsRoot($path){}
	/**
	 * @param \System\String|string $first
	 * @param \System\String|string $second
	 * @param \System\Boolean $ignoreCase
	 * @return \System\Int32|int
	 */
	protected static function GetCommonPathLength($first, $second, $ignoreCase){}
	/**
	 * @param \System\String|string $first
	 * @param \System\String|string $second
	 * @param \System\Boolean $ignoreCase
	 * @return \System\Int32|int
	 */
	protected static function EqualStartingCharacterCount($first, $second, $ignoreCase){}
	/**
	 * @param \System\String|string $first
	 * @param \System\String|string $second
	 * @param \System\StringComparison $comparisonType
	 * @return \System\Boolean
	 */
	protected static function AreRootsEqual($first, $second, $comparisonType){}
	/**
	 * @uses PathInternalMethodsOverride::RemoveRelativeSegments_1 ($path, $rootLength)
	 * @uses PathInternalMethodsOverride::RemoveRelativeSegments_2 ($path, $rootLength, $sb)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function RemoveRelativeSegments(mixed ...$args){}
	/**
	 * @uses PathInternalMethodsOverride::TrimEndingDirectorySeparator_1 ($path)
	 * @uses PathInternalMethodsOverride::TrimEndingDirectorySeparator_2 ($path)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TrimEndingDirectorySeparator(mixed ...$args){}
	/**
	 * @uses PathInternalMethodsOverride::EndsInDirectorySeparator_1 ($path)
	 * @uses PathInternalMethodsOverride::EndsInDirectorySeparator_2 ($path)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function EndsInDirectorySeparator(mixed ...$args){}
	/**
	 * @param \System\Char $value
	 * @return \System\Boolean
	 */
	protected static function IsValidDriveChar($value){}
	/**
	 * @param \System\String|string $path
	 * @return \System\Boolean
	 */
	protected static function EndsWithPeriodOrSpace($path){}
	/**
	 * @param \System\String|string $path
	 * @return \System\String|string
	 */
	protected static function EnsureExtendedPrefixIfNeeded($path){}
	/**
	 * @param \System\String|string $path
	 * @return \System\String|string
	 */
	protected static function EnsureExtendedPrefix($path){}
	/**
	 * @param \System\ReadOnlySpan_1 $path
	 * @return \System\Boolean
	 */
	protected static function IsDevice($path){}
	/**
	 * @param \System\ReadOnlySpan_1 $path
	 * @return \System\Boolean
	 */
	protected static function IsDeviceUNC($path){}
	/**
	 * @param \System\ReadOnlySpan_1 $path
	 * @return \System\Boolean
	 */
	protected static function IsExtended($path){}
	/**
	 * @param \System\ReadOnlySpan_1 $path
	 * @return \System\Int32|int
	 */
	protected static function GetRootLength($path){}
	/**
	 * @param \System\ReadOnlySpan_1 $path
	 * @return \System\Boolean
	 */
	protected static function IsPartiallyQualified($path){}
	/**
	 * @param \System\Char $c
	 * @return \System\Boolean
	 */
	protected static function IsDirectorySeparator($c){}
	/**
	 * @param \System\String|string $path
	 * @return \System\String|string
	 */
	protected static function NormalizeDirectorySeparators($path){}
	/**
	 * @param \System\ReadOnlySpan_1 $path
	 * @return \System\Boolean
	 */
	protected static function IsEffectivelyEmpty($path){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
