<?php
namespace System\IO;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait FileOverride {
	/**
	 * @deprecated
	 * @param \System\String|string $sourceFileName
	 * @param \System\String|string $destFileName
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Copy_1 ($sourceFileName, $destFileName){}
	/**
	 * @deprecated
	 * @param \System\String|string $sourceFileName
	 * @param \System\String|string $destFileName
	 * @param \System\Boolean|bool $overwrite
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Copy_2 ($sourceFileName, $destFileName, $overwrite){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @return \System\IO\FileStream
	 */
	#[MethodOverride]public static function Create_1 ($path){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\Int32|int $bufferSize
	 * @return \System\IO\FileStream
	 */
	#[MethodOverride]public static function Create_2 ($path, $bufferSize){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\Int32|int $bufferSize
	 * @param \System\IO\FileOptions $options
	 * @return \System\IO\FileStream
	 */
	#[MethodOverride]public static function Create_3 ($path, $bufferSize, $options){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\IO\FileStreamOptions $options
	 * @return \System\IO\FileStream
	 */
	#[MethodOverride]public static function Open_1 ($path, $options){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\IO\FileMode $mode
	 * @return \System\IO\FileStream
	 */
	#[MethodOverride]public static function Open_2 ($path, $mode){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\IO\FileMode $mode
	 * @param \System\IO\FileAccess $access
	 * @return \System\IO\FileStream
	 */
	#[MethodOverride]public static function Open_3 ($path, $mode, $access){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\IO\FileMode $mode
	 * @param \System\IO\FileAccess $access
	 * @param \System\IO\FileShare $share
	 * @return \System\IO\FileStream
	 */
	#[MethodOverride]public static function Open_4 ($path, $mode, $access, $share){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\DateTime $creationTime
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function SetCreationTime_1 ($path, $creationTime){}
	/**
	 * @deprecated
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $fileHandle
	 * @param \System\DateTime $creationTime
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function SetCreationTime_2 ($fileHandle, $creationTime){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\DateTime $creationTimeUtc
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function SetCreationTimeUtc_1 ($path, $creationTimeUtc){}
	/**
	 * @deprecated
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $fileHandle
	 * @param \System\DateTime $creationTimeUtc
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function SetCreationTimeUtc_2 ($fileHandle, $creationTimeUtc){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @return \System\DateTime
	 */
	#[MethodOverride]public static function GetCreationTime_1 ($path){}
	/**
	 * @deprecated
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $fileHandle
	 * @return \System\DateTime
	 */
	#[MethodOverride]public static function GetCreationTime_2 ($fileHandle){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @return \System\DateTime
	 */
	#[MethodOverride]public static function GetCreationTimeUtc_1 ($path){}
	/**
	 * @deprecated
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $fileHandle
	 * @return \System\DateTime
	 */
	#[MethodOverride]public static function GetCreationTimeUtc_2 ($fileHandle){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\DateTime $lastAccessTime
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function SetLastAccessTime_1 ($path, $lastAccessTime){}
	/**
	 * @deprecated
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $fileHandle
	 * @param \System\DateTime $lastAccessTime
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function SetLastAccessTime_2 ($fileHandle, $lastAccessTime){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\DateTime $lastAccessTimeUtc
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function SetLastAccessTimeUtc_1 ($path, $lastAccessTimeUtc){}
	/**
	 * @deprecated
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $fileHandle
	 * @param \System\DateTime $lastAccessTimeUtc
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function SetLastAccessTimeUtc_2 ($fileHandle, $lastAccessTimeUtc){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @return \System\DateTime
	 */
	#[MethodOverride]public static function GetLastAccessTime_1 ($path){}
	/**
	 * @deprecated
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $fileHandle
	 * @return \System\DateTime
	 */
	#[MethodOverride]public static function GetLastAccessTime_2 ($fileHandle){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @return \System\DateTime
	 */
	#[MethodOverride]public static function GetLastAccessTimeUtc_1 ($path){}
	/**
	 * @deprecated
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $fileHandle
	 * @return \System\DateTime
	 */
	#[MethodOverride]public static function GetLastAccessTimeUtc_2 ($fileHandle){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\DateTime $lastWriteTime
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function SetLastWriteTime_1 ($path, $lastWriteTime){}
	/**
	 * @deprecated
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $fileHandle
	 * @param \System\DateTime $lastWriteTime
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function SetLastWriteTime_2 ($fileHandle, $lastWriteTime){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\DateTime $lastWriteTimeUtc
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function SetLastWriteTimeUtc_1 ($path, $lastWriteTimeUtc){}
	/**
	 * @deprecated
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $fileHandle
	 * @param \System\DateTime $lastWriteTimeUtc
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function SetLastWriteTimeUtc_2 ($fileHandle, $lastWriteTimeUtc){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @return \System\DateTime
	 */
	#[MethodOverride]public static function GetLastWriteTime_1 ($path){}
	/**
	 * @deprecated
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $fileHandle
	 * @return \System\DateTime
	 */
	#[MethodOverride]public static function GetLastWriteTime_2 ($fileHandle){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @return \System\DateTime
	 */
	#[MethodOverride]public static function GetLastWriteTimeUtc_1 ($path){}
	/**
	 * @deprecated
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $fileHandle
	 * @return \System\DateTime
	 */
	#[MethodOverride]public static function GetLastWriteTimeUtc_2 ($fileHandle){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @return \System\IO\FileAttributes
	 */
	#[MethodOverride]public static function GetAttributes_1 ($path){}
	/**
	 * @deprecated
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $fileHandle
	 * @return \System\IO\FileAttributes
	 */
	#[MethodOverride]public static function GetAttributes_2 ($fileHandle){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\IO\FileAttributes $fileAttributes
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function SetAttributes_1 ($path, $fileAttributes){}
	/**
	 * @deprecated
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $fileHandle
	 * @param \System\IO\FileAttributes $fileAttributes
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function SetAttributes_2 ($fileHandle, $fileAttributes){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @return \System\IO\UnixFileMode
	 */
	#[MethodOverride]public static function GetUnixFileMode_1 ($path){}
	/**
	 * @deprecated
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $fileHandle
	 * @return \System\IO\UnixFileMode
	 */
	#[MethodOverride]public static function GetUnixFileMode_2 ($fileHandle){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\IO\UnixFileMode $mode
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function SetUnixFileMode_1 ($path, $mode){}
	/**
	 * @deprecated
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $fileHandle
	 * @param \System\IO\UnixFileMode $mode
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function SetUnixFileMode_2 ($fileHandle, $mode){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function ReadAllText_1 ($path){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\Text\Encoding $encoding
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function ReadAllText_2 ($path, $encoding){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\String|string $contents
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function WriteAllText_1 ($path, $contents){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\String|string $contents
	 * @param \System\Text\Encoding $encoding
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function WriteAllText_2 ($path, $contents, $encoding){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @return \System\String
	 */
	#[MethodOverride]public static function ReadAllLines_1 ($path){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\Text\Encoding $encoding
	 * @return \System\String
	 */
	#[MethodOverride]public static function ReadAllLines_2 ($path, $encoding){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public static function ReadLines_1 ($path){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\Text\Encoding $encoding
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public static function ReadLines_2 ($path, $encoding){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Collections\Generic\IAsyncEnumerable_1
	 */
	#[MethodOverride]public static function ReadLinesAsync_1 ($path, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\Text\Encoding $encoding
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Collections\Generic\IAsyncEnumerable_1
	 */
	#[MethodOverride]public static function ReadLinesAsync_2 ($path, $encoding, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\String $contents
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function WriteAllLines_1 ($path, $contents){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\Collections\Generic\IEnumerable_1 $contents [generic: System\String]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function WriteAllLines_2 ($path, $contents){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\String $contents
	 * @param \System\Text\Encoding $encoding
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function WriteAllLines_3 ($path, $contents, $encoding){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\Collections\Generic\IEnumerable_1 $contents [generic: System\String]
	 * @param \System\Text\Encoding $encoding
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function WriteAllLines_4 ($path, $contents, $encoding){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\String|string $contents
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function AppendAllText_1 ($path, $contents){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\String|string $contents
	 * @param \System\Text\Encoding $encoding
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function AppendAllText_2 ($path, $contents, $encoding){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\Collections\Generic\IEnumerable_1 $contents [generic: System\String]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function AppendAllLines_1 ($path, $contents){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\Collections\Generic\IEnumerable_1 $contents [generic: System\String]
	 * @param \System\Text\Encoding $encoding
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function AppendAllLines_2 ($path, $contents, $encoding){}
	/**
	 * @deprecated
	 * @param \System\String|string $sourceFileName
	 * @param \System\String|string $destinationFileName
	 * @param \System\String|string $destinationBackupFileName
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Replace_1 ($sourceFileName, $destinationFileName, $destinationBackupFileName){}
	/**
	 * @deprecated
	 * @param \System\String|string $sourceFileName
	 * @param \System\String|string $destinationFileName
	 * @param \System\String|string $destinationBackupFileName
	 * @param \System\Boolean|bool $ignoreMetadataErrors
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Replace_2 ($sourceFileName, $destinationFileName, $destinationBackupFileName, $ignoreMetadataErrors){}
	/**
	 * @deprecated
	 * @param \System\String|string $sourceFileName
	 * @param \System\String|string $destFileName
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Move_1 ($sourceFileName, $destFileName){}
	/**
	 * @deprecated
	 * @param \System\String|string $sourceFileName
	 * @param \System\String|string $destFileName
	 * @param \System\Boolean|bool $overwrite
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Move_2 ($sourceFileName, $destFileName, $overwrite){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public static function ReadAllTextAsync_1 ($path, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\Text\Encoding $encoding
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public static function ReadAllTextAsync_2 ($path, $encoding, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\String|string $contents
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public static function WriteAllTextAsync_1 ($path, $contents, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\String|string $contents
	 * @param \System\Text\Encoding $encoding
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public static function WriteAllTextAsync_2 ($path, $contents, $encoding, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public static function ReadAllLinesAsync_1 ($path, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\Text\Encoding $encoding
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public static function ReadAllLinesAsync_2 ($path, $encoding, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\Collections\Generic\IEnumerable_1 $contents [generic: System\String]
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public static function WriteAllLinesAsync_1 ($path, $contents, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\Collections\Generic\IEnumerable_1 $contents [generic: System\String]
	 * @param \System\Text\Encoding $encoding
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public static function WriteAllLinesAsync_2 ($path, $contents, $encoding, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\String|string $contents
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public static function AppendAllTextAsync_1 ($path, $contents, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\String|string $contents
	 * @param \System\Text\Encoding $encoding
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public static function AppendAllTextAsync_2 ($path, $contents, $encoding, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\Collections\Generic\IEnumerable_1 $contents [generic: System\String]
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public static function AppendAllLinesAsync_1 ($path, $contents, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\Collections\Generic\IEnumerable_1 $contents [generic: System\String]
	 * @param \System\Text\Encoding $encoding
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public static function AppendAllLinesAsync_2 ($path, $contents, $encoding, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @return \System\IO\UnixFileMode
	 */
	#[MethodOverride]private static function GetUnixFileModeCore_1 ($path){}
	/**
	 * @deprecated
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $fileHandle
	 * @return \System\IO\UnixFileMode
	 */
	#[MethodOverride]private static function GetUnixFileModeCore_2 ($fileHandle){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\IO\UnixFileMode $mode
	 * @return \System\Void|void
	 */
	#[MethodOverride]private static function SetUnixFileModeCore_1 ($path, $mode){}
	/**
	 * @deprecated
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $fileHandle
	 * @param \System\IO\UnixFileMode $mode
	 * @return \System\Void|void
	 */
	#[MethodOverride]private static function SetUnixFileModeCore_2 ($fileHandle, $mode){}
}
class File extends \System\Object
{
	use FileOverride;


	/**
	 * @param \System\String|string $path
	 * @return \System\IO\StreamReader
	 */
	public static function OpenText($path){}
	/**
	 * @param \System\String|string $path
	 * @return \System\IO\StreamWriter
	 */
	public static function CreateText($path){}
	/**
	 * @param \System\String|string $path
	 * @return \System\IO\StreamWriter
	 */
	public static function AppendText($path){}
	/**
	 * @uses FileOverride::Copy_1 <br>public , args: ($sourceFileName, $destFileName)<br>
	 * @uses FileOverride::Copy_2 <br>public , args: ($sourceFileName, $destFileName, $overwrite)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Copy (\override ...$args){}
	/**
	 * @uses FileOverride::Create_1 <br>public , args: ($path)<br>
	 * @uses FileOverride::Create_2 <br>public , args: ($path, $bufferSize)<br>
	 * @uses FileOverride::Create_3 <br>public , args: ($path, $bufferSize, $options)<br>
	 * @var mixed|\override ...$args
	 * @return \System\IO\FileStream|mixed|\override
	 */
	#[MethodOverridePublic]function Create (\override ...$args){}
	/**
	 * @param \System\String|string $path
	 * @return \System\Void|void
	 */
	public static function Delete($path){}
	/**
	 * @param \System\String|string $path
	 * @return \System\Boolean|bool
	 */
	public static function Exists($path){}
	/**
	 * @uses FileOverride::Open_1 <br>public , args: ($path, $options)<br>
	 * @uses FileOverride::Open_2 <br>public , args: ($path, $mode)<br>
	 * @uses FileOverride::Open_3 <br>public , args: ($path, $mode, $access)<br>
	 * @uses FileOverride::Open_4 <br>public , args: ($path, $mode, $access, $share)<br>
	 * @var mixed|\override ...$args
	 * @return \System\IO\FileStream|mixed|\override
	 */
	#[MethodOverridePublic]function Open (\override ...$args){}
	/**
	 * @param \System\String|string $path
	 * @param \System\IO\FileMode $mode
	 * @param \System\IO\FileAccess $access
	 * @param \System\IO\FileShare $share
	 * @param \System\IO\FileOptions $options
	 * @param \System\Int64|int $preallocationSize
	 * @return \Microsoft\Win32\SafeHandles\SafeFileHandle
	 */
	public static function OpenHandle($path, $mode, $access, $share, $options, $preallocationSize){}
	/**
	 * @param \System\DateTime $dateTime
	 * @return \System\DateTimeOffset
	 */
	protected static function GetUtcDateTimeOffset($dateTime){}
	/**
	 * @uses FileOverride::SetCreationTime_1 <br>public , args: ($path, $creationTime)<br>
	 * @uses FileOverride::SetCreationTime_2 <br>public , args: ($fileHandle, $creationTime)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function SetCreationTime (\override ...$args){}
	/**
	 * @uses FileOverride::SetCreationTimeUtc_1 <br>public , args: ($path, $creationTimeUtc)<br>
	 * @uses FileOverride::SetCreationTimeUtc_2 <br>public , args: ($fileHandle, $creationTimeUtc)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function SetCreationTimeUtc (\override ...$args){}
	/**
	 * @uses FileOverride::GetCreationTime_1 <br>public , args: ($path)<br>
	 * @uses FileOverride::GetCreationTime_2 <br>public , args: ($fileHandle)<br>
	 * @var mixed|\override ...$args
	 * @return \System\DateTime|mixed|\override
	 */
	#[MethodOverridePublic]function GetCreationTime (\override ...$args){}
	/**
	 * @uses FileOverride::GetCreationTimeUtc_1 <br>public , args: ($path)<br>
	 * @uses FileOverride::GetCreationTimeUtc_2 <br>public , args: ($fileHandle)<br>
	 * @var mixed|\override ...$args
	 * @return \System\DateTime|mixed|\override
	 */
	#[MethodOverridePublic]function GetCreationTimeUtc (\override ...$args){}
	/**
	 * @uses FileOverride::SetLastAccessTime_1 <br>public , args: ($path, $lastAccessTime)<br>
	 * @uses FileOverride::SetLastAccessTime_2 <br>public , args: ($fileHandle, $lastAccessTime)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function SetLastAccessTime (\override ...$args){}
	/**
	 * @uses FileOverride::SetLastAccessTimeUtc_1 <br>public , args: ($path, $lastAccessTimeUtc)<br>
	 * @uses FileOverride::SetLastAccessTimeUtc_2 <br>public , args: ($fileHandle, $lastAccessTimeUtc)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function SetLastAccessTimeUtc (\override ...$args){}
	/**
	 * @uses FileOverride::GetLastAccessTime_1 <br>public , args: ($path)<br>
	 * @uses FileOverride::GetLastAccessTime_2 <br>public , args: ($fileHandle)<br>
	 * @var mixed|\override ...$args
	 * @return \System\DateTime|mixed|\override
	 */
	#[MethodOverridePublic]function GetLastAccessTime (\override ...$args){}
	/**
	 * @uses FileOverride::GetLastAccessTimeUtc_1 <br>public , args: ($path)<br>
	 * @uses FileOverride::GetLastAccessTimeUtc_2 <br>public , args: ($fileHandle)<br>
	 * @var mixed|\override ...$args
	 * @return \System\DateTime|mixed|\override
	 */
	#[MethodOverridePublic]function GetLastAccessTimeUtc (\override ...$args){}
	/**
	 * @uses FileOverride::SetLastWriteTime_1 <br>public , args: ($path, $lastWriteTime)<br>
	 * @uses FileOverride::SetLastWriteTime_2 <br>public , args: ($fileHandle, $lastWriteTime)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function SetLastWriteTime (\override ...$args){}
	/**
	 * @uses FileOverride::SetLastWriteTimeUtc_1 <br>public , args: ($path, $lastWriteTimeUtc)<br>
	 * @uses FileOverride::SetLastWriteTimeUtc_2 <br>public , args: ($fileHandle, $lastWriteTimeUtc)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function SetLastWriteTimeUtc (\override ...$args){}
	/**
	 * @uses FileOverride::GetLastWriteTime_1 <br>public , args: ($path)<br>
	 * @uses FileOverride::GetLastWriteTime_2 <br>public , args: ($fileHandle)<br>
	 * @var mixed|\override ...$args
	 * @return \System\DateTime|mixed|\override
	 */
	#[MethodOverridePublic]function GetLastWriteTime (\override ...$args){}
	/**
	 * @uses FileOverride::GetLastWriteTimeUtc_1 <br>public , args: ($path)<br>
	 * @uses FileOverride::GetLastWriteTimeUtc_2 <br>public , args: ($fileHandle)<br>
	 * @var mixed|\override ...$args
	 * @return \System\DateTime|mixed|\override
	 */
	#[MethodOverridePublic]function GetLastWriteTimeUtc (\override ...$args){}
	/**
	 * @uses FileOverride::GetAttributes_1 <br>public , args: ($path)<br>
	 * @uses FileOverride::GetAttributes_2 <br>public , args: ($fileHandle)<br>
	 * @var mixed|\override ...$args
	 * @return \System\IO\FileAttributes|mixed|\override
	 */
	#[MethodOverridePublic]function GetAttributes (\override ...$args){}
	/**
	 * @uses FileOverride::SetAttributes_1 <br>public , args: ($path, $fileAttributes)<br>
	 * @uses FileOverride::SetAttributes_2 <br>public , args: ($fileHandle, $fileAttributes)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function SetAttributes (\override ...$args){}
	/**
	 * @uses FileOverride::GetUnixFileMode_1 <br>public , args: ($path)<br>
	 * @uses FileOverride::GetUnixFileMode_2 <br>public , args: ($fileHandle)<br>
	 * @var mixed|\override ...$args
	 * @return \System\IO\UnixFileMode|mixed|\override
	 */
	#[MethodOverridePublic]function GetUnixFileMode (\override ...$args){}
	/**
	 * @uses FileOverride::SetUnixFileMode_1 <br>public , args: ($path, $mode)<br>
	 * @uses FileOverride::SetUnixFileMode_2 <br>public , args: ($fileHandle, $mode)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function SetUnixFileMode (\override ...$args){}
	/**
	 * @param \System\String|string $path
	 * @return \System\IO\FileStream
	 */
	public static function OpenRead($path){}
	/**
	 * @param \System\String|string $path
	 * @return \System\IO\FileStream
	 */
	public static function OpenWrite($path){}
	/**
	 * @uses FileOverride::ReadAllText_1 <br>public , args: ($path)<br>
	 * @uses FileOverride::ReadAllText_2 <br>public , args: ($path, $encoding)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|mixed|\override
	 */
	#[MethodOverridePublic]function ReadAllText (\override ...$args){}
	/**
	 * @uses FileOverride::WriteAllText_1 <br>public , args: ($path, $contents)<br>
	 * @uses FileOverride::WriteAllText_2 <br>public , args: ($path, $contents, $encoding)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function WriteAllText (\override ...$args){}
	/**
	 * @param \System\String|string $path
	 * @return \System\Byte[]
	 */
	public static function ReadAllBytes($path){}
	/**
	 * @param \System\String|string $path
	 * @param \System\Byte $bytes
	 * @return \System\Void|void
	 */
	public static function WriteAllBytes($path, $bytes){}
	/**
	 * @uses FileOverride::ReadAllLines_1 <br>public , args: ($path)<br>
	 * @uses FileOverride::ReadAllLines_2 <br>public , args: ($path, $encoding)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|mixed|\override
	 */
	#[MethodOverridePublic]function ReadAllLines (\override ...$args){}
	/**
	 * @uses FileOverride::ReadLines_1 <br>public , args: ($path)<br>
	 * @uses FileOverride::ReadLines_2 <br>public , args: ($path, $encoding)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IEnumerable_1|mixed|\override
	 */
	#[MethodOverridePublic]function ReadLines (\override ...$args){}
	/**
	 * @uses FileOverride::ReadLinesAsync_1 <br>public , args: ($path, $cancellationToken)<br>
	 * @uses FileOverride::ReadLinesAsync_2 <br>public , args: ($path, $encoding, $cancellationToken)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IAsyncEnumerable_1|mixed|\override
	 */
	#[MethodOverridePublic]function ReadLinesAsync (\override ...$args){}
	/**
	 * @uses FileOverride::WriteAllLines_1 <br>public , args: ($path, $contents)<br>
	 * @uses FileOverride::WriteAllLines_2 <br>public , args: ($path, $contents)<br>
	 * @uses FileOverride::WriteAllLines_3 <br>public , args: ($path, $contents, $encoding)<br>
	 * @uses FileOverride::WriteAllLines_4 <br>public , args: ($path, $contents, $encoding)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function WriteAllLines (\override ...$args){}
	private static function InternalWriteAllLines($writer, $contents){}
	/**
	 * @uses FileOverride::AppendAllText_1 <br>public , args: ($path, $contents)<br>
	 * @uses FileOverride::AppendAllText_2 <br>public , args: ($path, $contents, $encoding)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function AppendAllText (\override ...$args){}
	/**
	 * @uses FileOverride::AppendAllLines_1 <br>public , args: ($path, $contents)<br>
	 * @uses FileOverride::AppendAllLines_2 <br>public , args: ($path, $contents, $encoding)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function AppendAllLines (\override ...$args){}
	/**
	 * @uses FileOverride::Replace_1 <br>public , args: ($sourceFileName, $destinationFileName, $destinationBackupFileName)<br>
	 * @uses FileOverride::Replace_2 <br>public , args: ($sourceFileName, $destinationFileName, $destinationBackupFileName, $ignoreMetadataErrors)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Replace (\override ...$args){}
	/**
	 * @uses FileOverride::Move_1 <br>public , args: ($sourceFileName, $destFileName)<br>
	 * @uses FileOverride::Move_2 <br>public , args: ($sourceFileName, $destFileName, $overwrite)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Move (\override ...$args){}
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
	private static function AsyncStreamReader($path, $encoding){}
	private static function AsyncStreamWriter($path, $encoding, $append){}
	/**
	 * @uses FileOverride::ReadAllTextAsync_1 <br>public , args: ($path, $cancellationToken)<br>
	 * @uses FileOverride::ReadAllTextAsync_2 <br>public , args: ($path, $encoding, $cancellationToken)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Threading\Tasks\Task_1|mixed|\override
	 */
	#[MethodOverridePublic]function ReadAllTextAsync (\override ...$args){}
	private static function InternalReadAllTextAsync($path, $encoding, $cancellationToken){}
	/**
	 * @uses FileOverride::WriteAllTextAsync_1 <br>public , args: ($path, $contents, $cancellationToken)<br>
	 * @uses FileOverride::WriteAllTextAsync_2 <br>public , args: ($path, $contents, $encoding, $cancellationToken)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Threading\Tasks\Task|mixed|\override
	 */
	#[MethodOverridePublic]function WriteAllTextAsync (\override ...$args){}
	/**
	 * @param \System\String|string $path
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task_1[System\Byte[]]
	 */
	public static function ReadAllBytesAsync($path, $cancellationToken){}
	private static function InternalReadAllBytesAsync($sfh, $count, $cancellationToken){}
	private static function InternalReadAllBytesUnknownLengthAsync($sfh, $cancellationToken){}
	/**
	 * @param \System\String|string $path
	 * @param \System\Byte $bytes
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task
	 */
	public static function WriteAllBytesAsync($path, $bytes, $cancellationToken){}
	/**
	 * @uses FileOverride::ReadAllLinesAsync_1 <br>public , args: ($path, $cancellationToken)<br>
	 * @uses FileOverride::ReadAllLinesAsync_2 <br>public , args: ($path, $encoding, $cancellationToken)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Threading\Tasks\Task_1|mixed|\override
	 */
	#[MethodOverridePublic]function ReadAllLinesAsync (\override ...$args){}
	private static function InternalReadAllLinesAsync($path, $encoding, $cancellationToken){}
	/**
	 * @uses FileOverride::WriteAllLinesAsync_1 <br>public , args: ($path, $contents, $cancellationToken)<br>
	 * @uses FileOverride::WriteAllLinesAsync_2 <br>public , args: ($path, $contents, $encoding, $cancellationToken)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Threading\Tasks\Task|mixed|\override
	 */
	#[MethodOverridePublic]function WriteAllLinesAsync (\override ...$args){}
	private static function InternalWriteAllLinesAsync($writer, $contents, $cancellationToken){}
	/**
	 * @uses FileOverride::AppendAllTextAsync_1 <br>public , args: ($path, $contents, $cancellationToken)<br>
	 * @uses FileOverride::AppendAllTextAsync_2 <br>public , args: ($path, $contents, $encoding, $cancellationToken)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Threading\Tasks\Task|mixed|\override
	 */
	#[MethodOverridePublic]function AppendAllTextAsync (\override ...$args){}
	/**
	 * @uses FileOverride::AppendAllLinesAsync_1 <br>public , args: ($path, $contents, $cancellationToken)<br>
	 * @uses FileOverride::AppendAllLinesAsync_2 <br>public , args: ($path, $contents, $encoding, $cancellationToken)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Threading\Tasks\Task|mixed|\override
	 */
	#[MethodOverridePublic]function AppendAllLinesAsync (\override ...$args){}
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
	private static function Validate($path, $encoding){}
	private static function ReadAllBytesUnknownLength($sfh){}
	private static function WriteToFile($path, $mode, $contents, $encoding){}
	private static function WriteToFileAsync($path, $mode, $contents, $encoding, $cancellationToken){}
	private static function GetPreallocationSize($mode, $contents, $encoding, $preambleSize){}
	private static function IterateFileLinesAsync($sr, $path, $encoding, $ctEnumerable, $ctEnumerator){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses FileOverride::GetUnixFileModeCore_1 <br>private , args: ($path)<br>
	 * @uses FileOverride::GetUnixFileModeCore_2 <br>private , args: ($fileHandle)<br>
	 * @var mixed|\override ...$args
	 * @return \System\IO\UnixFileMode|mixed|\override
	 */
	#[MethodOverridePrivate]function GetUnixFileModeCore (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses FileOverride::SetUnixFileModeCore_1 <br>private , args: ($path, $mode)<br>
	 * @uses FileOverride::SetUnixFileModeCore_2 <br>private , args: ($fileHandle, $mode)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePrivate]function SetUnixFileModeCore (\override ...$args){}
}