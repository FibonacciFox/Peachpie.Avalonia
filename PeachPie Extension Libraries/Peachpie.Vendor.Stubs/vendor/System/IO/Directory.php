<?php
namespace System\IO;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait DirectoryOverride {
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @return \System\IO\DirectoryInfo
	 */
	#[MethodOverride]public static function CreateDirectory_1 ($path){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\IO\UnixFileMode $unixCreateMode
	 * @return \System\IO\DirectoryInfo
	 */
	#[MethodOverride]public static function CreateDirectory_2 ($path, $unixCreateMode){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @return \System\String
	 */
	#[MethodOverride]public static function GetFiles_1 ($path){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\String|string $searchPattern
	 * @return \System\String
	 */
	#[MethodOverride]public static function GetFiles_2 ($path, $searchPattern){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\String|string $searchPattern
	 * @param \System\IO\SearchOption $searchOption
	 * @return \System\String
	 */
	#[MethodOverride]public static function GetFiles_3 ($path, $searchPattern, $searchOption){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\String|string $searchPattern
	 * @param \System\IO\EnumerationOptions $enumerationOptions
	 * @return \System\String
	 */
	#[MethodOverride]public static function GetFiles_4 ($path, $searchPattern, $enumerationOptions){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @return \System\String
	 */
	#[MethodOverride]public static function GetDirectories_1 ($path){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\String|string $searchPattern
	 * @return \System\String
	 */
	#[MethodOverride]public static function GetDirectories_2 ($path, $searchPattern){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\String|string $searchPattern
	 * @param \System\IO\SearchOption $searchOption
	 * @return \System\String
	 */
	#[MethodOverride]public static function GetDirectories_3 ($path, $searchPattern, $searchOption){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\String|string $searchPattern
	 * @param \System\IO\EnumerationOptions $enumerationOptions
	 * @return \System\String
	 */
	#[MethodOverride]public static function GetDirectories_4 ($path, $searchPattern, $enumerationOptions){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @return \System\String
	 */
	#[MethodOverride]public static function GetFileSystemEntries_1 ($path){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\String|string $searchPattern
	 * @return \System\String
	 */
	#[MethodOverride]public static function GetFileSystemEntries_2 ($path, $searchPattern){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\String|string $searchPattern
	 * @param \System\IO\SearchOption $searchOption
	 * @return \System\String
	 */
	#[MethodOverride]public static function GetFileSystemEntries_3 ($path, $searchPattern, $searchOption){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\String|string $searchPattern
	 * @param \System\IO\EnumerationOptions $enumerationOptions
	 * @return \System\String
	 */
	#[MethodOverride]public static function GetFileSystemEntries_4 ($path, $searchPattern, $enumerationOptions){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public static function EnumerateDirectories_1 ($path){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\String|string $searchPattern
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public static function EnumerateDirectories_2 ($path, $searchPattern){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\String|string $searchPattern
	 * @param \System\IO\SearchOption $searchOption
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public static function EnumerateDirectories_3 ($path, $searchPattern, $searchOption){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\String|string $searchPattern
	 * @param \System\IO\EnumerationOptions $enumerationOptions
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public static function EnumerateDirectories_4 ($path, $searchPattern, $enumerationOptions){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public static function EnumerateFiles_1 ($path){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\String|string $searchPattern
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public static function EnumerateFiles_2 ($path, $searchPattern){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\String|string $searchPattern
	 * @param \System\IO\SearchOption $searchOption
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public static function EnumerateFiles_3 ($path, $searchPattern, $searchOption){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\String|string $searchPattern
	 * @param \System\IO\EnumerationOptions $enumerationOptions
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public static function EnumerateFiles_4 ($path, $searchPattern, $enumerationOptions){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public static function EnumerateFileSystemEntries_1 ($path){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\String|string $searchPattern
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public static function EnumerateFileSystemEntries_2 ($path, $searchPattern){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\String|string $searchPattern
	 * @param \System\IO\SearchOption $searchOption
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public static function EnumerateFileSystemEntries_3 ($path, $searchPattern, $searchOption){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\String|string $searchPattern
	 * @param \System\IO\EnumerationOptions $enumerationOptions
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public static function EnumerateFileSystemEntries_4 ($path, $searchPattern, $enumerationOptions){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Delete_1 ($path){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\Boolean|bool $recursive
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Delete_2 ($path, $recursive){}
}
class Directory extends \System\Object
{
	use DirectoryOverride;

	/**
	 * @param \System\String|string $path
	 * @return \System\IO\DirectoryInfo
	 */
	public static function GetParent($path){}
	/**
	 * @uses DirectoryOverride::CreateDirectory_1 <br>public , args: ($path)<br>
	 * @uses DirectoryOverride::CreateDirectory_2 <br>public , args: ($path, $unixCreateMode)<br>
	 * @var mixed|\override ...$args
	 * @return \System\IO\DirectoryInfo|mixed|\override
	 */
	#[MethodOverridePublic]function CreateDirectory (\override ...$args){}
	/**
	 * @param \System\String|string $prefix
	 * @return \System\IO\DirectoryInfo
	 */
	public static function CreateTempSubdirectory($prefix){}
	private static function EnsureNoDirectorySeparators($value, $paramName){}
	/**
	 * @param \System\String|string $path
	 * @return \System\Boolean|bool
	 */
	public static function Exists($path){}
	/**
	 * @param \System\String|string $path
	 * @param \System\DateTime $creationTime
	 * @return \System\Void|void
	 */
	public static function SetCreationTime($path, $creationTime){}
	/**
	 * @param \System\String|string $path
	 * @param \System\DateTime $creationTimeUtc
	 * @return \System\Void|void
	 */
	public static function SetCreationTimeUtc($path, $creationTimeUtc){}
	/**
	 * @param \System\String|string $path
	 * @return \System\DateTime
	 */
	public static function GetCreationTime($path){}
	/**
	 * @param \System\String|string $path
	 * @return \System\DateTime
	 */
	public static function GetCreationTimeUtc($path){}
	/**
	 * @param \System\String|string $path
	 * @param \System\DateTime $lastWriteTime
	 * @return \System\Void|void
	 */
	public static function SetLastWriteTime($path, $lastWriteTime){}
	/**
	 * @param \System\String|string $path
	 * @param \System\DateTime $lastWriteTimeUtc
	 * @return \System\Void|void
	 */
	public static function SetLastWriteTimeUtc($path, $lastWriteTimeUtc){}
	/**
	 * @param \System\String|string $path
	 * @return \System\DateTime
	 */
	public static function GetLastWriteTime($path){}
	/**
	 * @param \System\String|string $path
	 * @return \System\DateTime
	 */
	public static function GetLastWriteTimeUtc($path){}
	/**
	 * @param \System\String|string $path
	 * @param \System\DateTime $lastAccessTime
	 * @return \System\Void|void
	 */
	public static function SetLastAccessTime($path, $lastAccessTime){}
	/**
	 * @param \System\String|string $path
	 * @param \System\DateTime $lastAccessTimeUtc
	 * @return \System\Void|void
	 */
	public static function SetLastAccessTimeUtc($path, $lastAccessTimeUtc){}
	/**
	 * @param \System\String|string $path
	 * @return \System\DateTime
	 */
	public static function GetLastAccessTime($path){}
	/**
	 * @param \System\String|string $path
	 * @return \System\DateTime
	 */
	public static function GetLastAccessTimeUtc($path){}
	/**
	 * @uses DirectoryOverride::GetFiles_1 <br>public , args: ($path)<br>
	 * @uses DirectoryOverride::GetFiles_2 <br>public , args: ($path, $searchPattern)<br>
	 * @uses DirectoryOverride::GetFiles_3 <br>public , args: ($path, $searchPattern, $searchOption)<br>
	 * @uses DirectoryOverride::GetFiles_4 <br>public , args: ($path, $searchPattern, $enumerationOptions)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|mixed|\override
	 */
	#[MethodOverridePublic]function GetFiles (\override ...$args){}
	/**
	 * @uses DirectoryOverride::GetDirectories_1 <br>public , args: ($path)<br>
	 * @uses DirectoryOverride::GetDirectories_2 <br>public , args: ($path, $searchPattern)<br>
	 * @uses DirectoryOverride::GetDirectories_3 <br>public , args: ($path, $searchPattern, $searchOption)<br>
	 * @uses DirectoryOverride::GetDirectories_4 <br>public , args: ($path, $searchPattern, $enumerationOptions)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|mixed|\override
	 */
	#[MethodOverridePublic]function GetDirectories (\override ...$args){}
	/**
	 * @uses DirectoryOverride::GetFileSystemEntries_1 <br>public , args: ($path)<br>
	 * @uses DirectoryOverride::GetFileSystemEntries_2 <br>public , args: ($path, $searchPattern)<br>
	 * @uses DirectoryOverride::GetFileSystemEntries_3 <br>public , args: ($path, $searchPattern, $searchOption)<br>
	 * @uses DirectoryOverride::GetFileSystemEntries_4 <br>public , args: ($path, $searchPattern, $enumerationOptions)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|mixed|\override
	 */
	#[MethodOverridePublic]function GetFileSystemEntries (\override ...$args){}
	/**
	 * @param \System\String|string $path
	 * @param \System\String|string $searchPattern
	 * @param \System\IO\SearchTarget $searchTarget
	 * @param \System\IO\EnumerationOptions $options
	 * @return \System\Collections\Generic\IEnumerable_1[System\String]
	 */
	protected static function InternalEnumeratePaths($path, $searchPattern, $searchTarget, $options){}
	/**
	 * @uses DirectoryOverride::EnumerateDirectories_1 <br>public , args: ($path)<br>
	 * @uses DirectoryOverride::EnumerateDirectories_2 <br>public , args: ($path, $searchPattern)<br>
	 * @uses DirectoryOverride::EnumerateDirectories_3 <br>public , args: ($path, $searchPattern, $searchOption)<br>
	 * @uses DirectoryOverride::EnumerateDirectories_4 <br>public , args: ($path, $searchPattern, $enumerationOptions)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IEnumerable_1|mixed|\override
	 */
	#[MethodOverridePublic]function EnumerateDirectories (\override ...$args){}
	/**
	 * @uses DirectoryOverride::EnumerateFiles_1 <br>public , args: ($path)<br>
	 * @uses DirectoryOverride::EnumerateFiles_2 <br>public , args: ($path, $searchPattern)<br>
	 * @uses DirectoryOverride::EnumerateFiles_3 <br>public , args: ($path, $searchPattern, $searchOption)<br>
	 * @uses DirectoryOverride::EnumerateFiles_4 <br>public , args: ($path, $searchPattern, $enumerationOptions)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IEnumerable_1|mixed|\override
	 */
	#[MethodOverridePublic]function EnumerateFiles (\override ...$args){}
	/**
	 * @uses DirectoryOverride::EnumerateFileSystemEntries_1 <br>public , args: ($path)<br>
	 * @uses DirectoryOverride::EnumerateFileSystemEntries_2 <br>public , args: ($path, $searchPattern)<br>
	 * @uses DirectoryOverride::EnumerateFileSystemEntries_3 <br>public , args: ($path, $searchPattern, $searchOption)<br>
	 * @uses DirectoryOverride::EnumerateFileSystemEntries_4 <br>public , args: ($path, $searchPattern, $enumerationOptions)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IEnumerable_1|mixed|\override
	 */
	#[MethodOverridePublic]function EnumerateFileSystemEntries (\override ...$args){}
	/**
	 * @param \System\String|string $path
	 * @return \System\String|string
	 */
	public static function GetDirectoryRoot($path){}
	/**
	 * @return \System\String|string
	 */
	public static function GetCurrentDirectory(){}
	/**
	 * @param \System\String|string $path
	 * @return \System\Void|void
	 */
	public static function SetCurrentDirectory($path){}
	/**
	 * @param \System\String|string $sourceDirName
	 * @param \System\String|string $destDirName
	 * @return \System\Void|void
	 */
	public static function Move($sourceDirName, $destDirName){}
	/**
	 * @uses DirectoryOverride::Delete_1 <br>public , args: ($path)<br>
	 * @uses DirectoryOverride::Delete_2 <br>public , args: ($path, $recursive)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Delete (\override ...$args){}
	/**
	 * @return \System\String[]|array
	 */
	public static function GetLogicalDrives(){}
	/**
	 * @param \System\String|string $path
	 * @param \System\String|string $pathToTarget
	 * @return \System\IO\FileSystemInfo
	 */
	public static function CreateSymbolicLink($path, $pathToTarget){}
	/**
	 * @param \System\String|string $linkPath
	 * @param \System\Boolean|bool $returnFinalTarget
	 * @return \System\IO\FileSystemInfo
	 */
	public static function ResolveLinkTarget($linkPath, $returnFinalTarget){}
	private static function CreateDirectoryCore($path, $unixCreateMode){}
	private static function CreateTempSubdirectoryCore($prefix){}
}