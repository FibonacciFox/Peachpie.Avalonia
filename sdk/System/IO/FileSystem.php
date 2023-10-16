<?php
namespace System\IO;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait FileSystemMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected static function MoveDirectory_1($sourceFullPath, $destFullPath){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private static function MoveDirectory_2($sourceFullPath, $destFullPath, $isCaseSensitiveRename){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function DirectoryExists_1($fullPath){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private static function DirectoryExists_2($path, $lastError){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected static function FillAttributeInfo_1($path, $data, $returnErrorOnNotFound){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private static function FillAttributeInfo_2($fileHandle, $data){}
	/**
	 * @return \System\IO\FileAttributes
	 */
	#[MethodOverride] public static function GetAttributes_1($fullPath){}
	/**
	 * @return \System\IO\FileAttributes
	 */
	#[MethodOverride] public static function GetAttributes_2($fileHandle){}
	/**
	 * @return \System\DateTimeOffset
	 */
	#[MethodOverride] public static function GetCreationTime_1($fullPath){}
	/**
	 * @return \System\DateTimeOffset
	 */
	#[MethodOverride] public static function GetCreationTime_2($fileHandle){}
	/**
	 * @return \System\DateTimeOffset
	 */
	#[MethodOverride] public static function GetLastAccessTime_1($fullPath){}
	/**
	 * @return \System\DateTimeOffset
	 */
	#[MethodOverride] public static function GetLastAccessTime_2($fileHandle){}
	/**
	 * @return \System\DateTimeOffset
	 */
	#[MethodOverride] public static function GetLastWriteTime_1($fullPath){}
	/**
	 * @return \System\DateTimeOffset
	 */
	#[MethodOverride] public static function GetLastWriteTime_2($fileHandle){}
	/**
	 * @return \\WIN32_FILE_ATTRIBUTE_DATA
	 */
	#[MethodOverride] protected static function GetAttributeData_1($fullPath, $returnErrorOnNotFound){}
	/**
	 * @return \\WIN32_FILE_ATTRIBUTE_DATA
	 */
	#[MethodOverride] protected static function GetAttributeData_2($fileHandle){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function SetAttributes_1($fullPath, $attributes){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function SetAttributes_2($fileHandle, $attributes){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private static function SetFileTime_1($fullPath, $asDirectory, $creationTime, $lastAccessTime, $lastWriteTime, $changeTime, $fileAttributes){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private static function SetFileTime_2($fileHandle, $fullPath, $creationTime, $lastAccessTime, $lastWriteTime, $changeTime, $fileAttributes){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function SetCreationTime_1($fullPath, $time, $asDirectory){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function SetCreationTime_2($fileHandle, $time){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function SetLastAccessTime_1($fullPath, $time, $asDirectory){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function SetLastAccessTime_2($fileHandle, $time){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function SetLastWriteTime_1($fullPath, $time, $asDirectory){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function SetLastWriteTime_2($fileHandle, $time){}
}
/**
 */
class FileSystem extends \System\Object
{
	/**
	 * @param \System\String|string $path
	 * @param \System\String|string $argName
	 * @return \System\Void|void
	 */
	protected static function VerifyValidPath($path, $argName){}
	/**
	 * @uses FileSystemMethodsOverride::MoveDirectory_1 ($sourceFullPath, $destFullPath)
	 * @uses FileSystemMethodsOverride::MoveDirectory_2 ($sourceFullPath, $destFullPath, $isCaseSensitiveRename)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function MoveDirectory(mixed ...$args){}
	/**
	 * @uses FileSystemMethodsOverride::DirectoryExists_1 ($fullPath)
	 * @uses FileSystemMethodsOverride::DirectoryExists_2 ($path, $lastError)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function DirectoryExists(mixed ...$args){}
	/**
	 * @param \System\String|string $fullPath
	 * @return \System\Boolean
	 */
	public static function FileExists($fullPath){}
	/**
	 * @uses FileSystemMethodsOverride::FillAttributeInfo_1 ($path, $data, $returnErrorOnNotFound)
	 * @uses FileSystemMethodsOverride::FillAttributeInfo_2 ($fileHandle, $data)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function FillAttributeInfo(mixed ...$args){}
	/**
	 * @param \System\Int32|int $errorCode
	 * @return \System\Boolean
	 */
	protected static function IsPathUnreachableError($errorCode){}
	/**
	 * @param \System\String|string $fullPath
	 * @param \System\Byte[] $securityDescriptor
	 * @return \System\Void|void
	 */
	public static function CreateDirectory($fullPath, $securityDescriptor){}
	/**
	 * @param \System\String|string $path
	 * @return \System\Void|void
	 */
	public static function Encrypt($path){}
	/**
	 * @param \System\String|string $path
	 * @return \System\Void|void
	 */
	public static function Decrypt($path){}
	/**
	 * @param \System\String|string $fullPath
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ThrowExceptionEncryptDecryptFail($fullPath){}
	/**
	 * @param \System\String|string $sourceFullPath
	 * @param \System\String|string $destFullPath
	 * @param \System\Boolean $overwrite
	 * @return \System\Void|void
	 */
	public static function CopyFile($sourceFullPath, $destFullPath, $overwrite){}
	/**
	 * @param \System\String|string $sourceFullPath
	 * @param \System\String|string $destFullPath
	 * @param \System\String|string $destBackupFullPath
	 * @param \System\Boolean $ignoreMetadataErrors
	 * @return \System\Void|void
	 */
	public static function ReplaceFile($sourceFullPath, $destFullPath, $destBackupFullPath, $ignoreMetadataErrors){}
	/**
	 * @param \System\String|string $fullPath
	 * @return \System\Void|void
	 */
	public static function DeleteFile($fullPath){}
	/**
	 * @uses FileSystemMethodsOverride::GetAttributes_1 ($fullPath)
	 * @uses FileSystemMethodsOverride::GetAttributes_2 ($fileHandle)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetAttributes(mixed ...$args){}
	/**
	 * @uses FileSystemMethodsOverride::GetCreationTime_1 ($fullPath)
	 * @uses FileSystemMethodsOverride::GetCreationTime_2 ($fileHandle)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetCreationTime(mixed ...$args){}
	/**
	 * @uses FileSystemMethodsOverride::GetLastAccessTime_1 ($fullPath)
	 * @uses FileSystemMethodsOverride::GetLastAccessTime_2 ($fileHandle)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetLastAccessTime(mixed ...$args){}
	/**
	 * @uses FileSystemMethodsOverride::GetLastWriteTime_1 ($fullPath)
	 * @uses FileSystemMethodsOverride::GetLastWriteTime_2 ($fileHandle)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetLastWriteTime(mixed ...$args){}
	/**
	 * @uses FileSystemMethodsOverride::GetAttributeData_1 ($fullPath, $returnErrorOnNotFound)
	 * @uses FileSystemMethodsOverride::GetAttributeData_2 ($fileHandle)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetAttributeData(mixed ...$args){}
	/**
	 * @param \\WIN32_FILE_ATTRIBUTE_DATA& $data
	 * @param \\BY_HANDLE_FILE_INFORMATION& $fileInformationData
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function PopulateAttributeData($data, $fileInformationData){}
	/**
	 * @param \System\String|string $sourceFullPath
	 * @param \System\String|string $destFullPath
	 * @param \System\Boolean $overwrite
	 * @return \System\Void|void
	 */
	public static function MoveFile($sourceFullPath, $destFullPath, $overwrite){}
	/**
	 * @param \System\String|string $fullPath
	 * @param \System\Boolean $asDirectory
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function OpenHandleToWriteAttributes($fullPath, $asDirectory){}
	/**
	 * @param \System\String|string $fullPath
	 * @param \System\Boolean $recursive
	 * @return \System\Void|void
	 */
	public static function RemoveDirectory($fullPath, $recursive){}
	/**
	 * @param \System\String|string $fullPath
	 * @param \System\Boolean $isDirectory
	 * @param \System\Boolean $ignoreAccessDenied
	 * @param \\WIN32_FIND_DATA& $findData
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetFindData($fullPath, $isDirectory, $ignoreAccessDenied, $findData){}
	/**
	 * @param \\WIN32_FIND_DATA& $data
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsNameSurrogateReparsePoint($data){}
	/**
	 * @param \System\String|string $fullPath
	 * @param \\WIN32_FIND_DATA& $findData
	 * @param \System\Boolean $topLevel
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function RemoveDirectoryRecursive($fullPath, $findData, $topLevel){}
	/**
	 * @param \System\String|string $fullPath
	 * @param \System\Boolean $topLevel
	 * @param \System\Boolean $allowDirectoryNotEmpty
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function RemoveDirectoryInternal($fullPath, $topLevel, $allowDirectoryNotEmpty){}
	/**
	 * @uses FileSystemMethodsOverride::SetAttributes_1 ($fullPath, $attributes)
	 * @uses FileSystemMethodsOverride::SetAttributes_2 ($fileHandle, $attributes)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function SetAttributes(mixed ...$args){}
	/**
	 * @uses FileSystemMethodsOverride::SetFileTime_1 ($fullPath, $asDirectory, $creationTime, $lastAccessTime, $lastWriteTime, $changeTime, $fileAttributes)
	 * @uses FileSystemMethodsOverride::SetFileTime_2 ($fileHandle, $fullPath, $creationTime, $lastAccessTime, $lastWriteTime, $changeTime, $fileAttributes)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function SetFileTime(mixed ...$args){}
	/**
	 * @uses FileSystemMethodsOverride::SetCreationTime_1 ($fullPath, $time, $asDirectory)
	 * @uses FileSystemMethodsOverride::SetCreationTime_2 ($fileHandle, $time)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function SetCreationTime(mixed ...$args){}
	/**
	 * @uses FileSystemMethodsOverride::SetLastAccessTime_1 ($fullPath, $time, $asDirectory)
	 * @uses FileSystemMethodsOverride::SetLastAccessTime_2 ($fileHandle, $time)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function SetLastAccessTime(mixed ...$args){}
	/**
	 * @uses FileSystemMethodsOverride::SetLastWriteTime_1 ($fullPath, $time, $asDirectory)
	 * @uses FileSystemMethodsOverride::SetLastWriteTime_2 ($fileHandle, $time)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function SetLastWriteTime(mixed ...$args){}
	/**
	 * @return \System\String[]
	 */
	public static function GetLogicalDrives(){}
	/**
	 * @param \System\String|string $path
	 * @param \System\String|string $pathToTarget
	 * @param \System\Boolean $isDirectory
	 * @return \System\Void|void
	 */
	protected static function CreateSymbolicLink($path, $pathToTarget, $isDirectory){}
	/**
	 * @param \System\String|string $linkPath
	 * @param \System\Boolean $returnFinalTarget
	 * @param \System\Boolean $isDirectory
	 * @return \System\IO\FileSystemInfo
	 */
	protected static function ResolveLinkTarget($linkPath, $returnFinalTarget, $isDirectory){}
	/**
	 * @param \System\String|string $linkPath
	 * @param \System\Boolean $isDirectory
	 * @return \System\String|string
	 */
	protected static function GetLinkTarget($linkPath, $isDirectory){}
	/**
	 * @param \System\String|string $linkPath
	 * @param \System\Boolean $isDirectory
	 * @param \System\Boolean $throwOnError
	 * @param \System\Boolean $returnFullPath
	 * @return \System\String|string
	 */
	protected static function GetImmediateLinkTarget($linkPath, $isDirectory, $throwOnError, $returnFullPath){}
	/**
	 * @param \System\String|string $linkPath
	 * @param \System\Boolean $isDirectory
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetFinalLinkTarget($linkPath, $isDirectory){}
	/**
	 * @param \System\String|string $path
	 * @param \System\Int32|int $flags
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function OpenSafeFileHandle($path, $flags){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
