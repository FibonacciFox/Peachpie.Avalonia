<?php
namespace System\IO;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait PathOverride {
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function GetDirectoryName_1 ($path){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $path [generic: System\Char]
	 * @return \System\ReadOnlySpan_1
	 */
	#[MethodOverride]public static function GetDirectoryName_2 ($path){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function GetExtension_1 ($path){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $path [generic: System\Char]
	 * @return \System\ReadOnlySpan_1
	 */
	#[MethodOverride]public static function GetExtension_2 ($path){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function GetFileName_1 ($path){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $path [generic: System\Char]
	 * @return \System\ReadOnlySpan_1
	 */
	#[MethodOverride]public static function GetFileName_2 ($path){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function GetFileNameWithoutExtension_1 ($path){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $path [generic: System\Char]
	 * @return \System\ReadOnlySpan_1
	 */
	#[MethodOverride]public static function GetFileNameWithoutExtension_2 ($path){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function IsPathFullyQualified_1 ($path){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $path [generic: System\Char]
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function IsPathFullyQualified_2 ($path){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function HasExtension_1 ($path){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $path [generic: System\Char]
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function HasExtension_2 ($path){}
	/**
	 * @deprecated
	 * @param \System\String|string $path1
	 * @param \System\String|string $path2
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function Combine_1 ($path1, $path2){}
	/**
	 * @deprecated
	 * @param \System\String|string $path1
	 * @param \System\String|string $path2
	 * @param \System\String|string $path3
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function Combine_2 ($path1, $path2, $path3){}
	/**
	 * @deprecated
	 * @param \System\String|string $path1
	 * @param \System\String|string $path2
	 * @param \System\String|string $path3
	 * @param \System\String|string $path4
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function Combine_3 ($path1, $path2, $path3, $path4){}
	/**
	 * @deprecated
	 * @param \System\String ...$paths
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function Combine_4 (...$paths){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $path1 [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $path2 [generic: System\Char]
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function Join_1 ($path1, $path2){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $path1 [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $path2 [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $path3 [generic: System\Char]
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function Join_2 ($path1, $path2, $path3){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $path1 [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $path2 [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $path3 [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $path4 [generic: System\Char]
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function Join_3 ($path1, $path2, $path3, $path4){}
	/**
	 * @deprecated
	 * @param \System\String|string $path1
	 * @param \System\String|string $path2
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function Join_4 ($path1, $path2){}
	/**
	 * @deprecated
	 * @param \System\String|string $path1
	 * @param \System\String|string $path2
	 * @param \System\String|string $path3
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function Join_5 ($path1, $path2, $path3){}
	/**
	 * @deprecated
	 * @param \System\String|string $path1
	 * @param \System\String|string $path2
	 * @param \System\String|string $path3
	 * @param \System\String|string $path4
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function Join_6 ($path1, $path2, $path3, $path4){}
	/**
	 * @deprecated
	 * @param \System\String ...$paths
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function Join_7 (...$paths){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $path1 [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $path2 [generic: System\Char]
	 * @param \System\Span_1 $destination [generic: System\Char]
	 * @param \System\Int32& &$charsWritten
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryJoin_1 ($path1, $path2, $destination, &$charsWritten){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $path1 [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $path2 [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $path3 [generic: System\Char]
	 * @param \System\Span_1 $destination [generic: System\Char]
	 * @param \System\Int32& &$charsWritten
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryJoin_2 ($path1, $path2, $path3, $destination, &$charsWritten){}
	/**
	 * @deprecated
	 * @param \System\String|string $first
	 * @param \System\String|string $second
	 * @return \System\String|string
	 */
	#[MethodOverride]private static function CombineInternal_1 ($first, $second){}
	/**
	 * @deprecated
	 * @param \System\String|string $first
	 * @param \System\String|string $second
	 * @param \System\String|string $third
	 * @return \System\String|string
	 */
	#[MethodOverride]private static function CombineInternal_2 ($first, $second, $third){}
	/**
	 * @deprecated
	 * @param \System\String|string $first
	 * @param \System\String|string $second
	 * @param \System\String|string $third
	 * @param \System\String|string $fourth
	 * @return \System\String|string
	 */
	#[MethodOverride]private static function CombineInternal_3 ($first, $second, $third, $fourth){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $first [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $second [generic: System\Char]
	 * @return \System\String|string
	 */
	#[MethodOverride]private static function JoinInternal_1 ($first, $second){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $first [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $second [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $third [generic: System\Char]
	 * @return \System\String|string
	 */
	#[MethodOverride]private static function JoinInternal_2 ($first, $second, $third){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $first [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $second [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $third [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $fourth [generic: System\Char]
	 * @return \System\String|string
	 */
	#[MethodOverride]private static function JoinInternal_3 ($first, $second, $third, $fourth){}
	/**
	 * @deprecated
	 * @param \System\String|string $relativeTo
	 * @param \System\String|string $path
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function GetRelativePath_1 ($relativeTo, $path){}
	/**
	 * @deprecated
	 * @param \System\String|string $relativeTo
	 * @param \System\String|string $path
	 * @param \System\StringComparison $comparisonType
	 * @return \System\String|string
	 */
	#[MethodOverride]private static function GetRelativePath_2 ($relativeTo, $path, $comparisonType){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function TrimEndingDirectorySeparator_1 ($path){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $path [generic: System\Char]
	 * @return \System\ReadOnlySpan_1
	 */
	#[MethodOverride]public static function TrimEndingDirectorySeparator_2 ($path){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $path [generic: System\Char]
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function EndsInDirectorySeparator_1 ($path){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function EndsInDirectorySeparator_2 ($path){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function GetFullPath_1 ($path){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\String|string $basePath
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function GetFullPath_2 ($path, $basePath){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function IsPathRooted_1 ($path){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $path [generic: System\Char]
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function IsPathRooted_2 ($path){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function GetPathRoot_1 ($path){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $path [generic: System\Char]
	 * @return \System\ReadOnlySpan_1
	 */
	#[MethodOverride]public static function GetPathRoot_2 ($path){}
}
class Path extends \System\Object
{
	use PathOverride;

	/**
	 * @field
	 * @since readonly
	 * @var \System\Char
	 */
	public static $DirectorySeparatorChar;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Char
	 */
	public static $AltDirectorySeparatorChar;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Char
	 */
	public static $VolumeSeparatorChar;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Char
	 */
	public static $PathSeparator;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Char[]
	 */
	public static $InvalidPathChars;
	/**
	 * @param \System\String|string $path
	 * @param \System\String|string $extension
	 * @return \System\String|string
	 */
	public static function ChangeExtension($path, $extension){}
	/**
	 * @param \System\String|string $path
	 * @return \System\Boolean|bool
	 */
	public static function Exists($path){}
	/**
	 * @uses PathOverride::GetDirectoryName_1 <br>public , args: ($path)<br>
	 * @uses PathOverride::GetDirectoryName_2 <br>public , args: ($path)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|\System\ReadOnlySpan_1|mixed|\override
	 */
	#[MethodOverridePublic]function GetDirectoryName (\override ...$args){}
	/**
	 * @param \System\ReadOnlySpan_1 $path [generic: System\Char]
	 * @return \System\Int32|int
	 */
	protected static function GetDirectoryNameOffset($path){}
	/**
	 * @uses PathOverride::GetExtension_1 <br>public , args: ($path)<br>
	 * @uses PathOverride::GetExtension_2 <br>public , args: ($path)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|\System\ReadOnlySpan_1|mixed|\override
	 */
	#[MethodOverridePublic]function GetExtension (\override ...$args){}
	/**
	 * @uses PathOverride::GetFileName_1 <br>public , args: ($path)<br>
	 * @uses PathOverride::GetFileName_2 <br>public , args: ($path)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|\System\ReadOnlySpan_1|mixed|\override
	 */
	#[MethodOverridePublic]function GetFileName (\override ...$args){}
	/**
	 * @uses PathOverride::GetFileNameWithoutExtension_1 <br>public , args: ($path)<br>
	 * @uses PathOverride::GetFileNameWithoutExtension_2 <br>public , args: ($path)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|\System\ReadOnlySpan_1|mixed|\override
	 */
	#[MethodOverridePublic]function GetFileNameWithoutExtension (\override ...$args){}
	/**
	 * @return \System\String|string
	 */
	public static function GetRandomFileName(){}
	/**
	 * @uses PathOverride::IsPathFullyQualified_1 <br>public , args: ($path)<br>
	 * @uses PathOverride::IsPathFullyQualified_2 <br>public , args: ($path)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function IsPathFullyQualified (\override ...$args){}
	/**
	 * @uses PathOverride::HasExtension_1 <br>public , args: ($path)<br>
	 * @uses PathOverride::HasExtension_2 <br>public , args: ($path)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function HasExtension (\override ...$args){}
	/**
	 * @uses PathOverride::Combine_1 <br>public , args: ($path1, $path2)<br>
	 * @uses PathOverride::Combine_2 <br>public , args: ($path1, $path2, $path3)<br>
	 * @uses PathOverride::Combine_3 <br>public , args: ($path1, $path2, $path3, $path4)<br>
	 * @uses PathOverride::Combine_4 <br>public , args: (...$paths)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|mixed|\override
	 */
	#[MethodOverridePublic]function Combine (\override ...$args){}
	/**
	 * @uses PathOverride::Join_1 <br>public , args: ($path1, $path2)<br>
	 * @uses PathOverride::Join_2 <br>public , args: ($path1, $path2, $path3)<br>
	 * @uses PathOverride::Join_3 <br>public , args: ($path1, $path2, $path3, $path4)<br>
	 * @uses PathOverride::Join_4 <br>public , args: ($path1, $path2)<br>
	 * @uses PathOverride::Join_5 <br>public , args: ($path1, $path2, $path3)<br>
	 * @uses PathOverride::Join_6 <br>public , args: ($path1, $path2, $path3, $path4)<br>
	 * @uses PathOverride::Join_7 <br>public , args: (...$paths)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|mixed|\override
	 */
	#[MethodOverridePublic]function Join (\override ...$args){}
	/**
	 * @uses PathOverride::TryJoin_1 <br>public , args: ($path1, $path2, $destination, &$charsWritten)<br>
	 * @uses PathOverride::TryJoin_2 <br>public , args: ($path1, $path2, $path3, $destination, &$charsWritten)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function TryJoin (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses PathOverride::CombineInternal_1 <br>private , args: ($first, $second)<br>
	 * @uses PathOverride::CombineInternal_2 <br>private , args: ($first, $second, $third)<br>
	 * @uses PathOverride::CombineInternal_3 <br>private , args: ($first, $second, $third, $fourth)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|mixed|\override
	 */
	#[MethodOverridePrivate]function CombineInternal (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses PathOverride::JoinInternal_1 <br>private , args: ($first, $second)<br>
	 * @uses PathOverride::JoinInternal_2 <br>private , args: ($first, $second, $third)<br>
	 * @uses PathOverride::JoinInternal_3 <br>private , args: ($first, $second, $third, $fourth)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|mixed|\override
	 */
	#[MethodOverridePrivate]function JoinInternal (\override ...$args){}
	/**
	 * @param \System\Byte* $bytes
	 * @param \System\Int32|int $byteCount
	 * @param \System\Span_1 $chars [generic: System\Char]
	 * @return \System\Void|void
	 */
	protected static function Populate83FileNameFromRandomBytes($bytes, $byteCount, $chars){}
	/**
	 * @uses PathOverride::GetRelativePath_1 <br>public , args: ($relativeTo, $path)<br>
	 * @uses PathOverride::GetRelativePath_2 <br>private , args: ($relativeTo, $path, $comparisonType)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|mixed|\override
	 */
	#[MethodOverridePublic]function GetRelativePath (\override ...$args){}
	/**
	 * @uses PathOverride::TrimEndingDirectorySeparator_1 <br>public , args: ($path)<br>
	 * @uses PathOverride::TrimEndingDirectorySeparator_2 <br>public , args: ($path)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|\System\ReadOnlySpan_1|mixed|\override
	 */
	#[MethodOverridePublic]function TrimEndingDirectorySeparator (\override ...$args){}
	/**
	 * @uses PathOverride::EndsInDirectorySeparator_1 <br>public , args: ($path)<br>
	 * @uses PathOverride::EndsInDirectorySeparator_2 <br>public , args: ($path)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function EndsInDirectorySeparator (\override ...$args){}
	/**
	 * @return \System\Char[]
	 */
	public static function GetInvalidFileNameChars(){}
	/**
	 * @return \System\Char[]
	 */
	public static function GetInvalidPathChars(){}
	private static function ExistsCore($fullPath, &$isDirectory){}
	/**
	 * @uses PathOverride::GetFullPath_1 <br>public , args: ($path)<br>
	 * @uses PathOverride::GetFullPath_2 <br>public , args: ($path, $basePath)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|mixed|\override
	 */
	#[MethodOverridePublic]function GetFullPath (\override ...$args){}
	private static function GetFullPathInternal($path){}
	/**
	 * @return \System\String|string
	 */
	public static function GetTempPath(){}
	/**
	 * @return \System\String|string
	 */
	public static function GetTempFileName(){}
	/**
	 * @uses PathOverride::IsPathRooted_1 <br>public , args: ($path)<br>
	 * @uses PathOverride::IsPathRooted_2 <br>public , args: ($path)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function IsPathRooted (\override ...$args){}
	/**
	 * @uses PathOverride::GetPathRoot_1 <br>public , args: ($path)<br>
	 * @uses PathOverride::GetPathRoot_2 <br>public , args: ($path)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|\System\ReadOnlySpan_1|mixed|\override
	 */
	#[MethodOverridePublic]function GetPathRoot (\override ...$args){}
}