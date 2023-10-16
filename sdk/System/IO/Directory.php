<?php
namespace System\IO;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait DirectoryMethodsOverride
{
	/**
	 * @return \System\IO\DirectoryInfo
	 */
	#[MethodOverride] public static function CreateDirectory_1($path){}
	/**
	 * @return \System\IO\DirectoryInfo
	 */
	#[MethodOverride] public static function CreateDirectory_2($path, $unixCreateMode){}
	/**
	 * @return \System\String[]
	 */
	#[MethodOverride] public static function GetFiles_1($path){}
	/**
	 * @return \System\String[]
	 */
	#[MethodOverride] public static function GetFiles_2($path, $searchPattern){}
	/**
	 * @return \System\String[]
	 */
	#[MethodOverride] public static function GetFiles_3($path, $searchPattern, $searchOption){}
	/**
	 * @return \System\String[]
	 */
	#[MethodOverride] public static function GetFiles_4($path, $searchPattern, $enumerationOptions){}
	/**
	 * @return \System\String[]
	 */
	#[MethodOverride] public static function GetDirectories_1($path){}
	/**
	 * @return \System\String[]
	 */
	#[MethodOverride] public static function GetDirectories_2($path, $searchPattern){}
	/**
	 * @return \System\String[]
	 */
	#[MethodOverride] public static function GetDirectories_3($path, $searchPattern, $searchOption){}
	/**
	 * @return \System\String[]
	 */
	#[MethodOverride] public static function GetDirectories_4($path, $searchPattern, $enumerationOptions){}
	/**
	 * @return \System\String[]
	 */
	#[MethodOverride] public static function GetFileSystemEntries_1($path){}
	/**
	 * @return \System\String[]
	 */
	#[MethodOverride] public static function GetFileSystemEntries_2($path, $searchPattern){}
	/**
	 * @return \System\String[]
	 */
	#[MethodOverride] public static function GetFileSystemEntries_3($path, $searchPattern, $searchOption){}
	/**
	 * @return \System\String[]
	 */
	#[MethodOverride] public static function GetFileSystemEntries_4($path, $searchPattern, $enumerationOptions){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public static function EnumerateDirectories_1($path){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public static function EnumerateDirectories_2($path, $searchPattern){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public static function EnumerateDirectories_3($path, $searchPattern, $searchOption){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public static function EnumerateDirectories_4($path, $searchPattern, $enumerationOptions){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public static function EnumerateFiles_1($path){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public static function EnumerateFiles_2($path, $searchPattern){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public static function EnumerateFiles_3($path, $searchPattern, $searchOption){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public static function EnumerateFiles_4($path, $searchPattern, $enumerationOptions){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public static function EnumerateFileSystemEntries_1($path){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public static function EnumerateFileSystemEntries_2($path, $searchPattern){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public static function EnumerateFileSystemEntries_3($path, $searchPattern, $searchOption){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public static function EnumerateFileSystemEntries_4($path, $searchPattern, $enumerationOptions){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Delete_1($path){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Delete_2($path, $recursive){}
}
/**
 */
class Directory extends \System\Object
{
	/**
	 * @param \System\String|string $path
	 * @return \System\IO\DirectoryInfo
	 */
	public static function GetParent($path){}
	/**
	 * @uses DirectoryMethodsOverride::CreateDirectory_1 ($path)
	 * @uses DirectoryMethodsOverride::CreateDirectory_2 ($path, $unixCreateMode)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function CreateDirectory(mixed ...$args){}
	/**
	 * @param \System\String|string $prefix
	 * @return \System\IO\DirectoryInfo
	 */
	public static function CreateTempSubdirectory($prefix){}
	/**
	 * @param \System\String|string $value
	 * @param \System\String|string $paramName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function EnsureNoDirectorySeparators($value, $paramName){}
	/**
	 * @param \System\String|string $path
	 * @return \System\Boolean
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
	 * @uses DirectoryMethodsOverride::GetFiles_1 ($path)
	 * @uses DirectoryMethodsOverride::GetFiles_2 ($path, $searchPattern)
	 * @uses DirectoryMethodsOverride::GetFiles_3 ($path, $searchPattern, $searchOption)
	 * @uses DirectoryMethodsOverride::GetFiles_4 ($path, $searchPattern, $enumerationOptions)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetFiles(mixed ...$args){}
	/**
	 * @uses DirectoryMethodsOverride::GetDirectories_1 ($path)
	 * @uses DirectoryMethodsOverride::GetDirectories_2 ($path, $searchPattern)
	 * @uses DirectoryMethodsOverride::GetDirectories_3 ($path, $searchPattern, $searchOption)
	 * @uses DirectoryMethodsOverride::GetDirectories_4 ($path, $searchPattern, $enumerationOptions)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetDirectories(mixed ...$args){}
	/**
	 * @uses DirectoryMethodsOverride::GetFileSystemEntries_1 ($path)
	 * @uses DirectoryMethodsOverride::GetFileSystemEntries_2 ($path, $searchPattern)
	 * @uses DirectoryMethodsOverride::GetFileSystemEntries_3 ($path, $searchPattern, $searchOption)
	 * @uses DirectoryMethodsOverride::GetFileSystemEntries_4 ($path, $searchPattern, $enumerationOptions)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetFileSystemEntries(mixed ...$args){}
	/**
	 * @param \System\String|string $path
	 * @param \System\String|string $searchPattern
	 * @param \System\IO\SearchTarget $searchTarget
	 * @param \System\IO\EnumerationOptions $options
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	protected static function InternalEnumeratePaths($path, $searchPattern, $searchTarget, $options){}
	/**
	 * @uses DirectoryMethodsOverride::EnumerateDirectories_1 ($path)
	 * @uses DirectoryMethodsOverride::EnumerateDirectories_2 ($path, $searchPattern)
	 * @uses DirectoryMethodsOverride::EnumerateDirectories_3 ($path, $searchPattern, $searchOption)
	 * @uses DirectoryMethodsOverride::EnumerateDirectories_4 ($path, $searchPattern, $enumerationOptions)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function EnumerateDirectories(mixed ...$args){}
	/**
	 * @uses DirectoryMethodsOverride::EnumerateFiles_1 ($path)
	 * @uses DirectoryMethodsOverride::EnumerateFiles_2 ($path, $searchPattern)
	 * @uses DirectoryMethodsOverride::EnumerateFiles_3 ($path, $searchPattern, $searchOption)
	 * @uses DirectoryMethodsOverride::EnumerateFiles_4 ($path, $searchPattern, $enumerationOptions)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function EnumerateFiles(mixed ...$args){}
	/**
	 * @uses DirectoryMethodsOverride::EnumerateFileSystemEntries_1 ($path)
	 * @uses DirectoryMethodsOverride::EnumerateFileSystemEntries_2 ($path, $searchPattern)
	 * @uses DirectoryMethodsOverride::EnumerateFileSystemEntries_3 ($path, $searchPattern, $searchOption)
	 * @uses DirectoryMethodsOverride::EnumerateFileSystemEntries_4 ($path, $searchPattern, $enumerationOptions)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function EnumerateFileSystemEntries(mixed ...$args){}
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
	 * @uses DirectoryMethodsOverride::Delete_1 ($path)
	 * @uses DirectoryMethodsOverride::Delete_2 ($path, $recursive)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Delete(mixed ...$args){}
	/**
	 * @return \System\String[]
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
	 * @param \System\Boolean $returnFinalTarget
	 * @return \System\IO\FileSystemInfo
	 */
	public static function ResolveLinkTarget($linkPath, $returnFinalTarget){}
	/**
	 * @param \System\String|string $path
	 * @param \System\IO\UnixFileMode $unixCreateMode
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateDirectoryCore($path, $unixCreateMode){}
	/**
	 * @param \System\String|string $prefix
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateTempSubdirectoryCore($prefix){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
