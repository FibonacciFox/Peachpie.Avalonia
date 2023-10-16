<?php
namespace System\IO;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait FileMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Copy_1($sourceFileName, $destFileName){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Copy_2($sourceFileName, $destFileName, $overwrite){}
	/**
	 * @return \System\IO\FileStream
	 */
	#[MethodOverride] public static function Create_1($path){}
	/**
	 * @return \System\IO\FileStream
	 */
	#[MethodOverride] public static function Create_2($path, $bufferSize){}
	/**
	 * @return \System\IO\FileStream
	 */
	#[MethodOverride] public static function Create_3($path, $bufferSize, $options){}
	/**
	 * @return \System\IO\FileStream
	 */
	#[MethodOverride] public static function Open_1($path, $options){}
	/**
	 * @return \System\IO\FileStream
	 */
	#[MethodOverride] public static function Open_2($path, $mode){}
	/**
	 * @return \System\IO\FileStream
	 */
	#[MethodOverride] public static function Open_3($path, $mode, $access){}
	/**
	 * @return \System\IO\FileStream
	 */
	#[MethodOverride] public static function Open_4($path, $mode, $access, $share){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function SetCreationTime_1($path, $creationTime){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function SetCreationTime_2($fileHandle, $creationTime){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function SetCreationTimeUtc_1($path, $creationTimeUtc){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function SetCreationTimeUtc_2($fileHandle, $creationTimeUtc){}
	/**
	 * @return \System\DateTime
	 */
	#[MethodOverride] public static function GetCreationTime_1($path){}
	/**
	 * @return \System\DateTime
	 */
	#[MethodOverride] public static function GetCreationTime_2($fileHandle){}
	/**
	 * @return \System\DateTime
	 */
	#[MethodOverride] public static function GetCreationTimeUtc_1($path){}
	/**
	 * @return \System\DateTime
	 */
	#[MethodOverride] public static function GetCreationTimeUtc_2($fileHandle){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function SetLastAccessTime_1($path, $lastAccessTime){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function SetLastAccessTime_2($fileHandle, $lastAccessTime){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function SetLastAccessTimeUtc_1($path, $lastAccessTimeUtc){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function SetLastAccessTimeUtc_2($fileHandle, $lastAccessTimeUtc){}
	/**
	 * @return \System\DateTime
	 */
	#[MethodOverride] public static function GetLastAccessTime_1($path){}
	/**
	 * @return \System\DateTime
	 */
	#[MethodOverride] public static function GetLastAccessTime_2($fileHandle){}
	/**
	 * @return \System\DateTime
	 */
	#[MethodOverride] public static function GetLastAccessTimeUtc_1($path){}
	/**
	 * @return \System\DateTime
	 */
	#[MethodOverride] public static function GetLastAccessTimeUtc_2($fileHandle){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function SetLastWriteTime_1($path, $lastWriteTime){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function SetLastWriteTime_2($fileHandle, $lastWriteTime){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function SetLastWriteTimeUtc_1($path, $lastWriteTimeUtc){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function SetLastWriteTimeUtc_2($fileHandle, $lastWriteTimeUtc){}
	/**
	 * @return \System\DateTime
	 */
	#[MethodOverride] public static function GetLastWriteTime_1($path){}
	/**
	 * @return \System\DateTime
	 */
	#[MethodOverride] public static function GetLastWriteTime_2($fileHandle){}
	/**
	 * @return \System\DateTime
	 */
	#[MethodOverride] public static function GetLastWriteTimeUtc_1($path){}
	/**
	 * @return \System\DateTime
	 */
	#[MethodOverride] public static function GetLastWriteTimeUtc_2($fileHandle){}
	/**
	 * @return \System\IO\FileAttributes
	 */
	#[MethodOverride] public static function GetAttributes_1($path){}
	/**
	 * @return \System\IO\FileAttributes
	 */
	#[MethodOverride] public static function GetAttributes_2($fileHandle){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function SetAttributes_1($path, $fileAttributes){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function SetAttributes_2($fileHandle, $fileAttributes){}
	/**
	 * @return \System\IO\UnixFileMode
	 */
	#[MethodOverride] public static function GetUnixFileMode_1($path){}
	/**
	 * @return \System\IO\UnixFileMode
	 */
	#[MethodOverride] public static function GetUnixFileMode_2($fileHandle){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function SetUnixFileMode_1($path, $mode){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function SetUnixFileMode_2($fileHandle, $mode){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function ReadAllText_1($path){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function ReadAllText_2($path, $encoding){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function WriteAllText_1($path, $contents){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function WriteAllText_2($path, $contents, $encoding){}
	/**
	 * @return \System\String[]
	 */
	#[MethodOverride] public static function ReadAllLines_1($path){}
	/**
	 * @return \System\String[]
	 */
	#[MethodOverride] public static function ReadAllLines_2($path, $encoding){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public static function ReadLines_1($path){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public static function ReadLines_2($path, $encoding){}
	/**
	 * @return \System\Collections\Generic\IAsyncEnumerable_1
	 */
	#[MethodOverride] public static function ReadLinesAsync_1($path, $cancellationToken){}
	/**
	 * @return \System\Collections\Generic\IAsyncEnumerable_1
	 */
	#[MethodOverride] public static function ReadLinesAsync_2($path, $encoding, $cancellationToken){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function WriteAllLines_1($path, $contents){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function WriteAllLines_2($path, $contents){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function WriteAllLines_3($path, $contents, $encoding){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function WriteAllLines_4($path, $contents, $encoding){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function AppendAllText_1($path, $contents){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function AppendAllText_2($path, $contents, $encoding){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function AppendAllLines_1($path, $contents){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function AppendAllLines_2($path, $contents, $encoding){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Replace_1($sourceFileName, $destinationFileName, $destinationBackupFileName){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Replace_2($sourceFileName, $destinationFileName, $destinationBackupFileName, $ignoreMetadataErrors){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Move_1($sourceFileName, $destFileName){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Move_2($sourceFileName, $destFileName, $overwrite){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public static function ReadAllTextAsync_1($path, $cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public static function ReadAllTextAsync_2($path, $encoding, $cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public static function WriteAllTextAsync_1($path, $contents, $cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public static function WriteAllTextAsync_2($path, $contents, $encoding, $cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public static function ReadAllLinesAsync_1($path, $cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public static function ReadAllLinesAsync_2($path, $encoding, $cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public static function WriteAllLinesAsync_1($path, $contents, $cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public static function WriteAllLinesAsync_2($path, $contents, $encoding, $cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public static function AppendAllTextAsync_1($path, $contents, $cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public static function AppendAllTextAsync_2($path, $contents, $encoding, $cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public static function AppendAllLinesAsync_1($path, $contents, $cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public static function AppendAllLinesAsync_2($path, $contents, $encoding, $cancellationToken){}
	/**
	 * @return \System\IO\UnixFileMode
	 */
	#[MethodOverride] private static function GetUnixFileModeCore_1($path){}
	/**
	 * @return \System\IO\UnixFileMode
	 */
	#[MethodOverride] private static function GetUnixFileModeCore_2($fileHandle){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private static function SetUnixFileModeCore_1($path, $mode){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private static function SetUnixFileModeCore_2($fileHandle, $mode){}
}
/**
 */
class File extends \System\Object
{
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_UTF8NoBOM(){}
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
	 * @uses FileMethodsOverride::Copy_1 ($sourceFileName, $destFileName)
	 * @uses FileMethodsOverride::Copy_2 ($sourceFileName, $destFileName, $overwrite)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Copy(mixed ...$args){}
	/**
	 * @uses FileMethodsOverride::Create_1 ($path)
	 * @uses FileMethodsOverride::Create_2 ($path, $bufferSize)
	 * @uses FileMethodsOverride::Create_3 ($path, $bufferSize, $options)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Create(mixed ...$args){}
	/**
	 * @param \System\String|string $path
	 * @return \System\Void|void
	 */
	public static function Delete($path){}
	/**
	 * @param \System\String|string $path
	 * @return \System\Boolean
	 */
	public static function Exists($path){}
	/**
	 * @uses FileMethodsOverride::Open_1 ($path, $options)
	 * @uses FileMethodsOverride::Open_2 ($path, $mode)
	 * @uses FileMethodsOverride::Open_3 ($path, $mode, $access)
	 * @uses FileMethodsOverride::Open_4 ($path, $mode, $access, $share)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Open(mixed ...$args){}
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
	 * @uses FileMethodsOverride::SetCreationTime_1 ($path, $creationTime)
	 * @uses FileMethodsOverride::SetCreationTime_2 ($fileHandle, $creationTime)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function SetCreationTime(mixed ...$args){}
	/**
	 * @uses FileMethodsOverride::SetCreationTimeUtc_1 ($path, $creationTimeUtc)
	 * @uses FileMethodsOverride::SetCreationTimeUtc_2 ($fileHandle, $creationTimeUtc)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function SetCreationTimeUtc(mixed ...$args){}
	/**
	 * @uses FileMethodsOverride::GetCreationTime_1 ($path)
	 * @uses FileMethodsOverride::GetCreationTime_2 ($fileHandle)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetCreationTime(mixed ...$args){}
	/**
	 * @uses FileMethodsOverride::GetCreationTimeUtc_1 ($path)
	 * @uses FileMethodsOverride::GetCreationTimeUtc_2 ($fileHandle)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetCreationTimeUtc(mixed ...$args){}
	/**
	 * @uses FileMethodsOverride::SetLastAccessTime_1 ($path, $lastAccessTime)
	 * @uses FileMethodsOverride::SetLastAccessTime_2 ($fileHandle, $lastAccessTime)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function SetLastAccessTime(mixed ...$args){}
	/**
	 * @uses FileMethodsOverride::SetLastAccessTimeUtc_1 ($path, $lastAccessTimeUtc)
	 * @uses FileMethodsOverride::SetLastAccessTimeUtc_2 ($fileHandle, $lastAccessTimeUtc)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function SetLastAccessTimeUtc(mixed ...$args){}
	/**
	 * @uses FileMethodsOverride::GetLastAccessTime_1 ($path)
	 * @uses FileMethodsOverride::GetLastAccessTime_2 ($fileHandle)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetLastAccessTime(mixed ...$args){}
	/**
	 * @uses FileMethodsOverride::GetLastAccessTimeUtc_1 ($path)
	 * @uses FileMethodsOverride::GetLastAccessTimeUtc_2 ($fileHandle)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetLastAccessTimeUtc(mixed ...$args){}
	/**
	 * @uses FileMethodsOverride::SetLastWriteTime_1 ($path, $lastWriteTime)
	 * @uses FileMethodsOverride::SetLastWriteTime_2 ($fileHandle, $lastWriteTime)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function SetLastWriteTime(mixed ...$args){}
	/**
	 * @uses FileMethodsOverride::SetLastWriteTimeUtc_1 ($path, $lastWriteTimeUtc)
	 * @uses FileMethodsOverride::SetLastWriteTimeUtc_2 ($fileHandle, $lastWriteTimeUtc)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function SetLastWriteTimeUtc(mixed ...$args){}
	/**
	 * @uses FileMethodsOverride::GetLastWriteTime_1 ($path)
	 * @uses FileMethodsOverride::GetLastWriteTime_2 ($fileHandle)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetLastWriteTime(mixed ...$args){}
	/**
	 * @uses FileMethodsOverride::GetLastWriteTimeUtc_1 ($path)
	 * @uses FileMethodsOverride::GetLastWriteTimeUtc_2 ($fileHandle)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetLastWriteTimeUtc(mixed ...$args){}
	/**
	 * @uses FileMethodsOverride::GetAttributes_1 ($path)
	 * @uses FileMethodsOverride::GetAttributes_2 ($fileHandle)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetAttributes(mixed ...$args){}
	/**
	 * @uses FileMethodsOverride::SetAttributes_1 ($path, $fileAttributes)
	 * @uses FileMethodsOverride::SetAttributes_2 ($fileHandle, $fileAttributes)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function SetAttributes(mixed ...$args){}
	/**
	 * @uses FileMethodsOverride::GetUnixFileMode_1 ($path)
	 * @uses FileMethodsOverride::GetUnixFileMode_2 ($fileHandle)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetUnixFileMode(mixed ...$args){}
	/**
	 * @uses FileMethodsOverride::SetUnixFileMode_1 ($path, $mode)
	 * @uses FileMethodsOverride::SetUnixFileMode_2 ($fileHandle, $mode)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function SetUnixFileMode(mixed ...$args){}
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
	 * @uses FileMethodsOverride::ReadAllText_1 ($path)
	 * @uses FileMethodsOverride::ReadAllText_2 ($path, $encoding)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ReadAllText(mixed ...$args){}
	/**
	 * @uses FileMethodsOverride::WriteAllText_1 ($path, $contents)
	 * @uses FileMethodsOverride::WriteAllText_2 ($path, $contents, $encoding)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function WriteAllText(mixed ...$args){}
	/**
	 * @param \System\String|string $path
	 * @return \System\Byte[]
	 */
	public static function ReadAllBytes($path){}
	/**
	 * @param \System\String|string $path
	 * @param \System\Byte[] $bytes
	 * @return \System\Void|void
	 */
	public static function WriteAllBytes($path, $bytes){}
	/**
	 * @uses FileMethodsOverride::ReadAllLines_1 ($path)
	 * @uses FileMethodsOverride::ReadAllLines_2 ($path, $encoding)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ReadAllLines(mixed ...$args){}
	/**
	 * @uses FileMethodsOverride::ReadLines_1 ($path)
	 * @uses FileMethodsOverride::ReadLines_2 ($path, $encoding)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ReadLines(mixed ...$args){}
	/**
	 * @uses FileMethodsOverride::ReadLinesAsync_1 ($path, $cancellationToken)
	 * @uses FileMethodsOverride::ReadLinesAsync_2 ($path, $encoding, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ReadLinesAsync(mixed ...$args){}
	/**
	 * @uses FileMethodsOverride::WriteAllLines_1 ($path, $contents)
	 * @uses FileMethodsOverride::WriteAllLines_2 ($path, $contents)
	 * @uses FileMethodsOverride::WriteAllLines_3 ($path, $contents, $encoding)
	 * @uses FileMethodsOverride::WriteAllLines_4 ($path, $contents, $encoding)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function WriteAllLines(mixed ...$args){}
	/**
	 * @param \System\IO\TextWriter $writer
	 * @param \System\Collections\Generic\IEnumerable_1 $contents
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InternalWriteAllLines($writer, $contents){}
	/**
	 * @uses FileMethodsOverride::AppendAllText_1 ($path, $contents)
	 * @uses FileMethodsOverride::AppendAllText_2 ($path, $contents, $encoding)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function AppendAllText(mixed ...$args){}
	/**
	 * @uses FileMethodsOverride::AppendAllLines_1 ($path, $contents)
	 * @uses FileMethodsOverride::AppendAllLines_2 ($path, $contents, $encoding)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function AppendAllLines(mixed ...$args){}
	/**
	 * @uses FileMethodsOverride::Replace_1 ($sourceFileName, $destinationFileName, $destinationBackupFileName)
	 * @uses FileMethodsOverride::Replace_2 ($sourceFileName, $destinationFileName, $destinationBackupFileName, $ignoreMetadataErrors)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Replace(mixed ...$args){}
	/**
	 * @uses FileMethodsOverride::Move_1 ($sourceFileName, $destFileName)
	 * @uses FileMethodsOverride::Move_2 ($sourceFileName, $destFileName, $overwrite)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Move(mixed ...$args){}
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
	 * @param \System\String|string $path
	 * @param \System\Text\Encoding $encoding
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function AsyncStreamReader($path, $encoding){}
	/**
	 * @param \System\String|string $path
	 * @param \System\Text\Encoding $encoding
	 * @param \System\Boolean $append
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function AsyncStreamWriter($path, $encoding, $append){}
	/**
	 * @uses FileMethodsOverride::ReadAllTextAsync_1 ($path, $cancellationToken)
	 * @uses FileMethodsOverride::ReadAllTextAsync_2 ($path, $encoding, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ReadAllTextAsync(mixed ...$args){}
	/**
	 * @param \System\String|string $path
	 * @param \System\Text\Encoding $encoding
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InternalReadAllTextAsync($path, $encoding, $cancellationToken){}
	/**
	 * @uses FileMethodsOverride::WriteAllTextAsync_1 ($path, $contents, $cancellationToken)
	 * @uses FileMethodsOverride::WriteAllTextAsync_2 ($path, $contents, $encoding, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function WriteAllTextAsync(mixed ...$args){}
	/**
	 * @param \System\String|string $path
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task_1
	 */
	public static function ReadAllBytesAsync($path, $cancellationToken){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $sfh
	 * @param \System\Int32|int $count
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InternalReadAllBytesAsync($sfh, $count, $cancellationToken){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $sfh
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InternalReadAllBytesUnknownLengthAsync($sfh, $cancellationToken){}
	/**
	 * @param \System\String|string $path
	 * @param \System\Byte[] $bytes
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task
	 */
	public static function WriteAllBytesAsync($path, $bytes, $cancellationToken){}
	/**
	 * @uses FileMethodsOverride::ReadAllLinesAsync_1 ($path, $cancellationToken)
	 * @uses FileMethodsOverride::ReadAllLinesAsync_2 ($path, $encoding, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ReadAllLinesAsync(mixed ...$args){}
	/**
	 * @param \System\String|string $path
	 * @param \System\Text\Encoding $encoding
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InternalReadAllLinesAsync($path, $encoding, $cancellationToken){}
	/**
	 * @uses FileMethodsOverride::WriteAllLinesAsync_1 ($path, $contents, $cancellationToken)
	 * @uses FileMethodsOverride::WriteAllLinesAsync_2 ($path, $contents, $encoding, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function WriteAllLinesAsync(mixed ...$args){}
	/**
	 * @param \System\IO\TextWriter $writer
	 * @param \System\Collections\Generic\IEnumerable_1 $contents
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InternalWriteAllLinesAsync($writer, $contents, $cancellationToken){}
	/**
	 * @uses FileMethodsOverride::AppendAllTextAsync_1 ($path, $contents, $cancellationToken)
	 * @uses FileMethodsOverride::AppendAllTextAsync_2 ($path, $contents, $encoding, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function AppendAllTextAsync(mixed ...$args){}
	/**
	 * @uses FileMethodsOverride::AppendAllLinesAsync_1 ($path, $contents, $cancellationToken)
	 * @uses FileMethodsOverride::AppendAllLinesAsync_2 ($path, $contents, $encoding, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function AppendAllLinesAsync(mixed ...$args){}
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
	 * @param \System\Text\Encoding $encoding
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Validate($path, $encoding){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $sfh
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ReadAllBytesUnknownLength($sfh){}
	/**
	 * @param \System\String|string $path
	 * @param \System\IO\FileMode $mode
	 * @param \System\String|string $contents
	 * @param \System\Text\Encoding $encoding
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function WriteToFile($path, $mode, $contents, $encoding){}
	/**
	 * @param \System\String|string $path
	 * @param \System\IO\FileMode $mode
	 * @param \System\String|string $contents
	 * @param \System\Text\Encoding $encoding
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function WriteToFileAsync($path, $mode, $contents, $encoding, $cancellationToken){}
	/**
	 * @param \System\IO\FileMode $mode
	 * @param \System\String|string $contents
	 * @param \System\Text\Encoding $encoding
	 * @param \System\Int32|int $preambleSize
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetPreallocationSize($mode, $contents, $encoding, $preambleSize){}
	/**
	 * @param \System\IO\StreamReader $sr
	 * @param \System\String|string $path
	 * @param \System\Text\Encoding $encoding
	 * @param \System\Threading\CancellationToken $ctEnumerable
	 * @param \System\Threading\CancellationToken $ctEnumerator
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IterateFileLinesAsync($sr, $path, $encoding, $ctEnumerable, $ctEnumerator){}
	/**
	 * @uses FileMethodsOverride::GetUnixFileModeCore_1 ($path)
	 * @uses FileMethodsOverride::GetUnixFileModeCore_2 ($fileHandle)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetUnixFileModeCore(mixed ...$args){}
	/**
	 * @uses FileMethodsOverride::SetUnixFileModeCore_1 ($path, $mode)
	 * @uses FileMethodsOverride::SetUnixFileModeCore_2 ($fileHandle, $mode)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function SetUnixFileModeCore(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
