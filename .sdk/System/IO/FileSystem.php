<?php
namespace System\IO;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait FileSystemOverride {
	/**
	 * @deprecated
	 * @param \System\String|string $sourceFullPath
	 * @param \System\String|string $destFullPath
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected static function MoveDirectory_1 ($sourceFullPath, $destFullPath){}
	/**
	 * @deprecated
	 * @param \System\String|string $sourceFullPath
	 * @param \System\String|string $destFullPath
	 * @param \System\Boolean|bool $isCaseSensitiveRename
	 * @return \System\Void|void
	 */
	#[MethodOverride]private static function MoveDirectory_2 ($sourceFullPath, $destFullPath, $isCaseSensitiveRename){}
	/**
	 * @deprecated
	 * @param \System\String|string $fullPath
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function CreateDirectory_1 ($fullPath){}
	/**
	 * @deprecated
	 * @param \System\String|string $fullPath
	 * @param \System\IO\UnixFileMode $unixCreateMode
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function CreateDirectory_2 ($fullPath, $unixCreateMode){}
	/**
	 * @deprecated
	 * @param \System\String|string $fullPath
	 * @return \System\IO\FileAttributes
	 */
	#[MethodOverride]public static function GetAttributes_1 ($fullPath){}
	/**
	 * @deprecated
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $fileHandle
	 * @return \System\IO\FileAttributes
	 */
	#[MethodOverride]public static function GetAttributes_2 ($fileHandle){}
	/**
	 * @deprecated
	 * @param \System\String|string $fullPath
	 * @param \System\IO\FileAttributes $attributes
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function SetAttributes_1 ($fullPath, $attributes){}
	/**
	 * @deprecated
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $fileHandle
	 * @param \System\IO\FileAttributes $attributes
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function SetAttributes_2 ($fileHandle, $attributes){}
	/**
	 * @deprecated
	 * @param \System\String|string $fullPath
	 * @return \System\IO\UnixFileMode
	 */
	#[MethodOverride]public static function GetUnixFileMode_1 ($fullPath){}
	/**
	 * @deprecated
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $fileHandle
	 * @return \System\IO\UnixFileMode
	 */
	#[MethodOverride]public static function GetUnixFileMode_2 ($fileHandle){}
	/**
	 * @deprecated
	 * @param \System\String|string $fullPath
	 * @param \System\IO\UnixFileMode $mode
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function SetUnixFileMode_1 ($fullPath, $mode){}
	/**
	 * @deprecated
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $fileHandle
	 * @param \System\IO\UnixFileMode $mode
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function SetUnixFileMode_2 ($fileHandle, $mode){}
	/**
	 * @deprecated
	 * @param \System\String|string $fullPath
	 * @return \System\DateTimeOffset
	 */
	#[MethodOverride]public static function GetCreationTime_1 ($fullPath){}
	/**
	 * @deprecated
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $fileHandle
	 * @return \System\DateTimeOffset
	 */
	#[MethodOverride]public static function GetCreationTime_2 ($fileHandle){}
	/**
	 * @deprecated
	 * @param \System\String|string $fullPath
	 * @param \System\DateTimeOffset $time
	 * @param \System\Boolean|bool $asDirectory
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function SetCreationTime_1 ($fullPath, $time, $asDirectory){}
	/**
	 * @deprecated
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $fileHandle
	 * @param \System\DateTimeOffset $time
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function SetCreationTime_2 ($fileHandle, $time){}
	/**
	 * @deprecated
	 * @param \System\String|string $fullPath
	 * @return \System\DateTimeOffset
	 */
	#[MethodOverride]public static function GetLastAccessTime_1 ($fullPath){}
	/**
	 * @deprecated
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $fileHandle
	 * @return \System\DateTimeOffset
	 */
	#[MethodOverride]public static function GetLastAccessTime_2 ($fileHandle){}
	/**
	 * @deprecated
	 * @param \System\String|string $fullPath
	 * @param \System\DateTimeOffset $time
	 * @param \System\Boolean|bool $asDirectory
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function SetLastAccessTime_1 ($fullPath, $time, $asDirectory){}
	/**
	 * @deprecated
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $fileHandle
	 * @param \System\DateTimeOffset $time
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function SetLastAccessTime_2 ($fileHandle, $time){}
	/**
	 * @deprecated
	 * @param \System\String|string $fullPath
	 * @return \System\DateTimeOffset
	 */
	#[MethodOverride]public static function GetLastWriteTime_1 ($fullPath){}
	/**
	 * @deprecated
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $fileHandle
	 * @return \System\DateTimeOffset
	 */
	#[MethodOverride]public static function GetLastWriteTime_2 ($fileHandle){}
	/**
	 * @deprecated
	 * @param \System\String|string $fullPath
	 * @param \System\DateTimeOffset $time
	 * @param \System\Boolean|bool $asDirectory
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function SetLastWriteTime_1 ($fullPath, $time, $asDirectory){}
	/**
	 * @deprecated
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $fileHandle
	 * @param \System\DateTimeOffset $time
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function SetLastWriteTime_2 ($fileHandle, $time){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $fullPath [generic: System\Char]
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function DirectoryExists_1 ($fullPath){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $fullPath [generic: System\Char]
	 * @param \Interop+ErrorInfo& &$errorInfo
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private static function DirectoryExists_2 ($fullPath, &$errorInfo){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $fullPath [generic: System\Char]
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function FileExists_1 ($fullPath){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $fullPath [generic: System\Char]
	 * @param \Interop+ErrorInfo& &$errorInfo
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private static function FileExists_2 ($fullPath, &$errorInfo){}
}
class FileSystem extends \System\Object
{
	use FileSystemOverride;


	/**
	 * @param \System\String|string $path
	 * @param \System\String|string $argName
	 * @return \System\Void|void
	 */
	protected static function VerifyValidPath($path, $argName){}
	/**
	 * @uses FileSystemOverride::MoveDirectory_1 <br>protected , args: ($sourceFullPath, $destFullPath)<br>
	 * @uses FileSystemOverride::MoveDirectory_2 <br>private , args: ($sourceFullPath, $destFullPath, $isCaseSensitiveRename)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function MoveDirectory (\override ...$args){}
	/**
	 * @param \System\String|string $sourceFullPath
	 * @param \System\String|string $destFullPath
	 * @param \System\Boolean|bool $overwrite
	 * @return \System\Void|void
	 */
	public static function CopyFile($sourceFullPath, $destFullPath, $overwrite){}
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
	private static function LinkOrCopyFile($sourceFullPath, $destFullPath){}
	/**
	 * @param \System\String|string $sourceFullPath
	 * @param \System\String|string $destFullPath
	 * @param \System\String|string $destBackupFullPath
	 * @param \System\Boolean|bool $ignoreMetadataErrors
	 * @return \System\Void|void
	 */
	public static function ReplaceFile($sourceFullPath, $destFullPath, $destBackupFullPath, $ignoreMetadataErrors){}
	/**
	 * @param \System\String|string $sourceFullPath
	 * @param \System\String|string $destFullPath
	 * @param \System\Boolean|bool $overwrite
	 * @return \System\Void|void
	 */
	public static function MoveFile($sourceFullPath, $destFullPath, $overwrite){}
	/**
	 * @param \System\String|string $fullPath
	 * @return \System\Void|void
	 */
	public static function DeleteFile($fullPath){}
	/**
	 * @uses FileSystemOverride::CreateDirectory_1 <br>public , args: ($fullPath)<br>
	 * @uses FileSystemOverride::CreateDirectory_2 <br>public , args: ($fullPath, $unixCreateMode)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function CreateDirectory (\override ...$args){}
	private static function CreateParentsAndDirectory($fullPath, $unixCreateMode){}
	/**
	 * @param \System\String|string $fullPath
	 * @param \System\Boolean|bool $recursive
	 * @return \System\Void|void
	 */
	public static function RemoveDirectory($fullPath, $recursive){}
	private static function RemoveDirectoryRecursive($fullPath){}
	private static function RemoveEmptyDirectory($fullPath, $topLevel, $throwWhenNotEmpty){}
	/**
	 * @uses FileSystemOverride::GetAttributes_1 <br>public , args: ($fullPath)<br>
	 * @uses FileSystemOverride::GetAttributes_2 <br>public , args: ($fileHandle)<br>
	 * @var mixed|\override ...$args
	 * @return \System\IO\FileAttributes|mixed|\override
	 */
	#[MethodOverridePublic]function GetAttributes (\override ...$args){}
	/**
	 * @uses FileSystemOverride::SetAttributes_1 <br>public , args: ($fullPath, $attributes)<br>
	 * @uses FileSystemOverride::SetAttributes_2 <br>public , args: ($fileHandle, $attributes)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function SetAttributes (\override ...$args){}
	/**
	 * @uses FileSystemOverride::GetUnixFileMode_1 <br>public , args: ($fullPath)<br>
	 * @uses FileSystemOverride::GetUnixFileMode_2 <br>public , args: ($fileHandle)<br>
	 * @var mixed|\override ...$args
	 * @return \System\IO\UnixFileMode|mixed|\override
	 */
	#[MethodOverridePublic]function GetUnixFileMode (\override ...$args){}
	/**
	 * @uses FileSystemOverride::SetUnixFileMode_1 <br>public , args: ($fullPath, $mode)<br>
	 * @uses FileSystemOverride::SetUnixFileMode_2 <br>public , args: ($fileHandle, $mode)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function SetUnixFileMode (\override ...$args){}
	/**
	 * @uses FileSystemOverride::GetCreationTime_1 <br>public , args: ($fullPath)<br>
	 * @uses FileSystemOverride::GetCreationTime_2 <br>public , args: ($fileHandle)<br>
	 * @var mixed|\override ...$args
	 * @return \System\DateTimeOffset|mixed|\override
	 */
	#[MethodOverridePublic]function GetCreationTime (\override ...$args){}
	/**
	 * @uses FileSystemOverride::SetCreationTime_1 <br>public , args: ($fullPath, $time, $asDirectory)<br>
	 * @uses FileSystemOverride::SetCreationTime_2 <br>public , args: ($fileHandle, $time)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function SetCreationTime (\override ...$args){}
	/**
	 * @uses FileSystemOverride::GetLastAccessTime_1 <br>public , args: ($fullPath)<br>
	 * @uses FileSystemOverride::GetLastAccessTime_2 <br>public , args: ($fileHandle)<br>
	 * @var mixed|\override ...$args
	 * @return \System\DateTimeOffset|mixed|\override
	 */
	#[MethodOverridePublic]function GetLastAccessTime (\override ...$args){}
	/**
	 * @uses FileSystemOverride::SetLastAccessTime_1 <br>public , args: ($fullPath, $time, $asDirectory)<br>
	 * @uses FileSystemOverride::SetLastAccessTime_2 <br>public , args: ($fileHandle, $time)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function SetLastAccessTime (\override ...$args){}
	/**
	 * @uses FileSystemOverride::GetLastWriteTime_1 <br>public , args: ($fullPath)<br>
	 * @uses FileSystemOverride::GetLastWriteTime_2 <br>public , args: ($fileHandle)<br>
	 * @var mixed|\override ...$args
	 * @return \System\DateTimeOffset|mixed|\override
	 */
	#[MethodOverridePublic]function GetLastWriteTime (\override ...$args){}
	/**
	 * @uses FileSystemOverride::SetLastWriteTime_1 <br>public , args: ($fullPath, $time, $asDirectory)<br>
	 * @uses FileSystemOverride::SetLastWriteTime_2 <br>public , args: ($fileHandle, $time)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function SetLastWriteTime (\override ...$args){}
	/**
	 * @return \System\String[]|array
	 */
	public static function GetLogicalDrives(){}
	/**
	 * @param \System\ReadOnlySpan_1 $linkPath [generic: System\Char]
	 * @param \System\Boolean|bool $isDirectory
	 * @return \System\String|string
	 */
	protected static function GetLinkTarget($linkPath, $isDirectory){}
	/**
	 * @param \System\String|string $path
	 * @param \System\String|string $pathToTarget
	 * @param \System\Boolean|bool $isDirectory
	 * @return \System\Void|void
	 */
	protected static function CreateSymbolicLink($path, $pathToTarget, $isDirectory){}
	/**
	 * @param \System\String|string $linkPath
	 * @param \System\Boolean|bool $returnFinalTarget
	 * @param \System\Boolean|bool $isDirectory
	 * @return \System\IO\FileSystemInfo
	 */
	protected static function ResolveLinkTarget($linkPath, $returnFinalTarget, $isDirectory){}
	/**
	 * @uses FileSystemOverride::DirectoryExists_1 <br>public , args: ($fullPath)<br>
	 * @uses FileSystemOverride::DirectoryExists_2 <br>private , args: ($fullPath, &$errorInfo)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function DirectoryExists (\override ...$args){}
	/**
	 * @uses FileSystemOverride::FileExists_1 <br>public , args: ($fullPath)<br>
	 * @uses FileSystemOverride::FileExists_2 <br>private , args: ($fullPath, &$errorInfo)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function FileExists (\override ...$args){}
}