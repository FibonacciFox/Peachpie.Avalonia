<?php
namespace System\IO;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait PathMethodsOverride
{
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function GetDirectoryName_1($path){}
	/**
	 * @return \System\ReadOnlySpan_1
	 */
	#[MethodOverride] public static function GetDirectoryName_2($path){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function GetExtension_1($path){}
	/**
	 * @return \System\ReadOnlySpan_1
	 */
	#[MethodOverride] public static function GetExtension_2($path){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function GetFileName_1($path){}
	/**
	 * @return \System\ReadOnlySpan_1
	 */
	#[MethodOverride] public static function GetFileName_2($path){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function GetFileNameWithoutExtension_1($path){}
	/**
	 * @return \System\ReadOnlySpan_1
	 */
	#[MethodOverride] public static function GetFileNameWithoutExtension_2($path){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function IsPathFullyQualified_1($path){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function IsPathFullyQualified_2($path){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function HasExtension_1($path){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function HasExtension_2($path){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function Combine_1($path1, $path2){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function Combine_2($path1, $path2, $path3){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function Combine_3($path1, $path2, $path3, $path4){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function Combine_4($paths){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function Join_1($path1, $path2){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function Join_2($path1, $path2, $path3){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function Join_3($path1, $path2, $path3, $path4){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function Join_4($path1, $path2){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function Join_5($path1, $path2, $path3){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function Join_6($path1, $path2, $path3, $path4){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function Join_7($paths){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryJoin_1($path1, $path2, $destination, $charsWritten){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryJoin_2($path1, $path2, $path3, $destination, $charsWritten){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] private static function CombineInternal_1($first, $second){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] private static function CombineInternal_2($first, $second, $third){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] private static function CombineInternal_3($first, $second, $third, $fourth){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] private static function JoinInternal_1($first, $second){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] private static function JoinInternal_2($first, $second, $third){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] private static function JoinInternal_3($first, $second, $third, $fourth){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function GetRelativePath_1($relativeTo, $path){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] private static function GetRelativePath_2($relativeTo, $path, $comparisonType){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function TrimEndingDirectorySeparator_1($path){}
	/**
	 * @return \System\ReadOnlySpan_1
	 */
	#[MethodOverride] public static function TrimEndingDirectorySeparator_2($path){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function EndsInDirectorySeparator_1($path){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function EndsInDirectorySeparator_2($path){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function GetFullPath_1($path){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function GetFullPath_2($path, $basePath){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function GetTempPath_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected static function GetTempPath_2($builder){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function IsPathRooted_1($path){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function IsPathRooted_2($path){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function GetPathRoot_1($path){}
	/**
	 * @return \System\ReadOnlySpan_1
	 */
	#[MethodOverride] public static function GetPathRoot_2($path){}
}
/**
 */
class Path extends \System\Object
{
	/**
	 * @var \System\Char
	 * @field
	 */
	public readonly $DirectorySeparatorChar;
	/**
	 * @var \System\Char
	 * @field
	 */
	public readonly $AltDirectorySeparatorChar;
	/**
	 * @var \System\Char
	 * @field
	 */
	public readonly $VolumeSeparatorChar;
	/**
	 * @var \System\Char
	 * @field
	 */
	public readonly $PathSeparator;
	/**
	 * @var \System\Char[]
	 * @field
	 */
	public readonly $InvalidPathChars;
	/**
	 * @param \System\String|string $path
	 * @param \System\String|string $extension
	 * @return \System\String|string
	 */
	public static function ChangeExtension($path, $extension){}
	/**
	 * @param \System\String|string $path
	 * @return \System\Boolean
	 */
	public static function Exists($path){}
	/**
	 * @uses PathMethodsOverride::GetDirectoryName_1 ($path)
	 * @uses PathMethodsOverride::GetDirectoryName_2 ($path)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetDirectoryName(mixed ...$args){}
	/**
	 * @param \System\ReadOnlySpan_1 $path
	 * @return \System\Int32|int
	 */
	protected static function GetDirectoryNameOffset($path){}
	/**
	 * @uses PathMethodsOverride::GetExtension_1 ($path)
	 * @uses PathMethodsOverride::GetExtension_2 ($path)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetExtension(mixed ...$args){}
	/**
	 * @uses PathMethodsOverride::GetFileName_1 ($path)
	 * @uses PathMethodsOverride::GetFileName_2 ($path)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetFileName(mixed ...$args){}
	/**
	 * @uses PathMethodsOverride::GetFileNameWithoutExtension_1 ($path)
	 * @uses PathMethodsOverride::GetFileNameWithoutExtension_2 ($path)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetFileNameWithoutExtension(mixed ...$args){}
	/**
	 * @return \System\String|string
	 */
	public static function GetRandomFileName(){}
	/**
	 * @uses PathMethodsOverride::IsPathFullyQualified_1 ($path)
	 * @uses PathMethodsOverride::IsPathFullyQualified_2 ($path)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function IsPathFullyQualified(mixed ...$args){}
	/**
	 * @uses PathMethodsOverride::HasExtension_1 ($path)
	 * @uses PathMethodsOverride::HasExtension_2 ($path)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function HasExtension(mixed ...$args){}
	/**
	 * @uses PathMethodsOverride::Combine_1 ($path1, $path2)
	 * @uses PathMethodsOverride::Combine_2 ($path1, $path2, $path3)
	 * @uses PathMethodsOverride::Combine_3 ($path1, $path2, $path3, $path4)
	 * @uses PathMethodsOverride::Combine_4 ($paths)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Combine(mixed ...$args){}
	/**
	 * @uses PathMethodsOverride::Join_1 ($path1, $path2)
	 * @uses PathMethodsOverride::Join_2 ($path1, $path2, $path3)
	 * @uses PathMethodsOverride::Join_3 ($path1, $path2, $path3, $path4)
	 * @uses PathMethodsOverride::Join_4 ($path1, $path2)
	 * @uses PathMethodsOverride::Join_5 ($path1, $path2, $path3)
	 * @uses PathMethodsOverride::Join_6 ($path1, $path2, $path3, $path4)
	 * @uses PathMethodsOverride::Join_7 ($paths)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Join(mixed ...$args){}
	/**
	 * @uses PathMethodsOverride::TryJoin_1 ($path1, $path2, $destination, $charsWritten)
	 * @uses PathMethodsOverride::TryJoin_2 ($path1, $path2, $path3, $destination, $charsWritten)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TryJoin(mixed ...$args){}
	/**
	 * @uses PathMethodsOverride::CombineInternal_1 ($first, $second)
	 * @uses PathMethodsOverride::CombineInternal_2 ($first, $second, $third)
	 * @uses PathMethodsOverride::CombineInternal_3 ($first, $second, $third, $fourth)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function CombineInternal(mixed ...$args){}
	/**
	 * @uses PathMethodsOverride::JoinInternal_1 ($first, $second)
	 * @uses PathMethodsOverride::JoinInternal_2 ($first, $second, $third)
	 * @uses PathMethodsOverride::JoinInternal_3 ($first, $second, $third, $fourth)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function JoinInternal(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_Base32Char(){}
	/**
	 * @param \System\Byte* $bytes
	 * @param \System\Int32|int $byteCount
	 * @param \System\Span_1 $chars
	 * @return \System\Void|void
	 */
	protected static function Populate83FileNameFromRandomBytes($bytes, $byteCount, $chars){}
	/**
	 * @uses PathMethodsOverride::GetRelativePath_1 ($relativeTo, $path)
	 * @uses PathMethodsOverride::GetRelativePath_2 ($relativeTo, $path, $comparisonType)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetRelativePath(mixed ...$args){}
	/**
	 * @uses PathMethodsOverride::TrimEndingDirectorySeparator_1 ($path)
	 * @uses PathMethodsOverride::TrimEndingDirectorySeparator_2 ($path)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TrimEndingDirectorySeparator(mixed ...$args){}
	/**
	 * @uses PathMethodsOverride::EndsInDirectorySeparator_1 ($path)
	 * @uses PathMethodsOverride::EndsInDirectorySeparator_2 ($path)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function EndsInDirectorySeparator(mixed ...$args){}
	/**
	 * @return \System\Char[]
	 */
	public static function GetInvalidFileNameChars(){}
	/**
	 * @return \System\Char[]
	 */
	public static function GetInvalidPathChars(){}
	/**
	 * @param \System\String|string $fullPath
	 * @param \System\Boolean& $isDirectory
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ExistsCore($fullPath, $isDirectory){}
	/**
	 * @uses PathMethodsOverride::GetFullPath_1 ($path)
	 * @uses PathMethodsOverride::GetFullPath_2 ($path, $basePath)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetFullPath(mixed ...$args){}
	/**
	 * @param \System\String|string $path
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetFullPathInternal($path){}
	/**
	 * @uses PathMethodsOverride::GetTempPath_1 ()
	 * @uses PathMethodsOverride::GetTempPath_2 ($builder)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetTempPath(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetGetTempPathWFunc(){}
	/**
	 * @return \System\String|string
	 */
	public static function GetTempFileName(){}
	/**
	 * @uses PathMethodsOverride::IsPathRooted_1 ($path)
	 * @uses PathMethodsOverride::IsPathRooted_2 ($path)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function IsPathRooted(mixed ...$args){}
	/**
	 * @uses PathMethodsOverride::GetPathRoot_1 ($path)
	 * @uses PathMethodsOverride::GetPathRoot_2 ($path)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetPathRoot(mixed ...$args){}
	/**
	 * @param \System\ReadOnlySpan_1 $path
	 * @return \System\ReadOnlySpan_1
	 */
	protected static function GetVolumeName($path){}
	/**
	 * @param \System\ReadOnlySpan_1 $path
	 * @return \System\Int32|int
	 */
	protected static function GetUncRootLength($path){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
