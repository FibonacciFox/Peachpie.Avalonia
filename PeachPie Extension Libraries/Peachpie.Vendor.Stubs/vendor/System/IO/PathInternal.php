<?php
namespace System\IO;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait PathInternalOverride {
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\Int32|int $rootLength
	 * @return \System\String|string
	 */
	#[MethodOverride]protected static function RemoveRelativeSegments_1 ($path, $rootLength){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $path [generic: System\Char]
	 * @param \System\Int32|int $rootLength
	 * @param \System\Text\ValueStringBuilder& $sb
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected static function RemoveRelativeSegments_2 ($path, $rootLength, $sb){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @return \System\String|string
	 */
	#[MethodOverride]protected static function TrimEndingDirectorySeparator_1 ($path){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $path [generic: System\Char]
	 * @return \System\ReadOnlySpan_1
	 */
	#[MethodOverride]protected static function TrimEndingDirectorySeparator_2 ($path){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected static function EndsInDirectorySeparator_1 ($path){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $path [generic: System\Char]
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected static function EndsInDirectorySeparator_2 ($path){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected static function IsEffectivelyEmpty_1 ($path){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $path [generic: System\Char]
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected static function IsEffectivelyEmpty_2 ($path){}
}
class PathInternal extends \System\Object
{
	use PathInternalOverride;

	/**
	 * @param \System\ReadOnlySpan_1 $path [generic: System\Char]
	 * @return \System\Boolean|bool
	 */
	protected static function StartsWithDirectorySeparator($path){}
	/**
	 * @param \System\String|string $path
	 * @return \System\String|string
	 */
	protected static function EnsureTrailingSeparator($path){}
	/**
	 * @param \System\ReadOnlySpan_1 $path [generic: System\Char]
	 * @return \System\Boolean|bool
	 */
	protected static function IsRoot($path){}
	/**
	 * @param \System\String|string $first
	 * @param \System\String|string $second
	 * @param \System\Boolean|bool $ignoreCase
	 * @return \System\Int32|int
	 */
	protected static function GetCommonPathLength($first, $second, $ignoreCase){}
	/**
	 * @param \System\String|string $first
	 * @param \System\String|string $second
	 * @param \System\Boolean|bool $ignoreCase
	 * @return \System\Int32|int
	 */
	protected static function EqualStartingCharacterCount($first, $second, $ignoreCase){}
	/**
	 * @param \System\String|string $first
	 * @param \System\String|string $second
	 * @param \System\StringComparison $comparisonType
	 * @return \System\Boolean|bool
	 */
	protected static function AreRootsEqual($first, $second, $comparisonType){}
	/**
	 * @uses PathInternalOverride::RemoveRelativeSegments_1 <br>protected , args: ($path, $rootLength)<br>
	 * @uses PathInternalOverride::RemoveRelativeSegments_2 <br>protected , args: ($path, $rootLength, $sb)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|\System\Boolean|bool|mixed|\override
	 */
	#[MethodOverrideProtected]function RemoveRelativeSegments (\override ...$args){}
	/**
	 * @uses PathInternalOverride::TrimEndingDirectorySeparator_1 <br>protected , args: ($path)<br>
	 * @uses PathInternalOverride::TrimEndingDirectorySeparator_2 <br>protected , args: ($path)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|\System\ReadOnlySpan_1|mixed|\override
	 */
	#[MethodOverrideProtected]function TrimEndingDirectorySeparator (\override ...$args){}
	/**
	 * @uses PathInternalOverride::EndsInDirectorySeparator_1 <br>protected , args: ($path)<br>
	 * @uses PathInternalOverride::EndsInDirectorySeparator_2 <br>protected , args: ($path)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverrideProtected]function EndsInDirectorySeparator (\override ...$args){}
	/**
	 * @param \System\ReadOnlySpan_1 $path [generic: System\Char]
	 * @return \System\Int32|int
	 */
	protected static function GetRootLength($path){}
	/**
	 * @param \System\Char $c
	 * @return \System\Boolean|bool
	 */
	protected static function IsDirectorySeparator($c){}
	/**
	 * @param \System\String|string $path
	 * @return \System\String|string
	 */
	protected static function NormalizeDirectorySeparators($path){}
	/**
	 * @param \System\ReadOnlySpan_1 $path [generic: System\Char]
	 * @return \System\Boolean|bool
	 */
	protected static function IsPartiallyQualified($path){}
	/**
	 * @uses PathInternalOverride::IsEffectivelyEmpty_1 <br>protected , args: ($path)<br>
	 * @uses PathInternalOverride::IsEffectivelyEmpty_2 <br>protected , args: ($path)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverrideProtected]function IsEffectivelyEmpty (\override ...$args){}
}