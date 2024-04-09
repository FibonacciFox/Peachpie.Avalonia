<?php

/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait SysOverride {
	/**
	 * @deprecated
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $fd
	 * @param \Interop+Sys+LockOperations $operation
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected static function FLock_1 ($fd, $operation){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $fd
	 * @param \Interop+Sys+LockOperations $operation
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected static function FLock_2 ($fd, $operation){}
	/**
	 * @deprecated
	 * @param \System\Byte* $buffer
	 * @param \System\Int32|int $bufferLength
	 * @return \System\Byte*
	 */
	#[MethodOverride]private static function GetCwd_1 ($buffer, $bufferLength){}
	/**
	 * @deprecated
	 * @return \System\String|string
	 */
	#[MethodOverride]protected static function GetCwd_2 (){}
	/**
	 * @deprecated
	 * @param \System\Byte* $name
	 * @param \System\Int32|int $nameLength
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private static function GetHostName_1 ($name, $nameLength){}
	/**
	 * @deprecated
	 * @return \System\String|string
	 */
	#[MethodOverride]protected static function GetHostName_2 (){}
	/**
	 * @deprecated
	 * @param \System\Byte $version
	 * @param \System\Int32& $capacity
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private static function GetUnixVersion_1 ($version, $capacity){}
	/**
	 * @deprecated
	 * @return \System\String|string
	 */
	#[MethodOverride]protected static function GetUnixVersion_2 (){}
	/**
	 * @deprecated
	 * @param \System\Byte& $path
	 * @param \System\Int32|int $mode
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private static function MkDir_1 ($path, $mode){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $path [generic: System\Char]
	 * @param \System\Int32|int $mode
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected static function MkDir_2 ($path, $mode){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $onFound
	 * @param \System\Void* $context
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private static function GetAllMountPoints_1 ($onFound, $context){}
	/**
	 * @deprecated
	 * @return \System\String
	 */
	#[MethodOverride]protected static function GetAllMountPoints_2 (){}
	/**
	 * @deprecated
	 * @param \System\Byte& $path
	 * @param \System\Byte& $buffer
	 * @param \System\Int32|int $bufferSize
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private static function ReadLink_1 ($path, $buffer, $bufferSize){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $path [generic: System\Char]
	 * @return \System\String|string
	 */
	#[MethodOverride]protected static function ReadLink_2 ($path){}
	/**
	 * @deprecated
	 * @param \System\String|string $oldPath
	 * @param \System\String|string $newPath
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected static function Rename_1 ($oldPath, $newPath){}
	/**
	 * @deprecated
	 * @param \System\Byte& $oldPath
	 * @param \System\Byte& $newPath
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected static function Rename_2 ($oldPath, $newPath){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $oldPath [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $newPath [generic: System\Char]
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected static function Rename_3 ($oldPath, $newPath){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \Interop+Sys+FileStatus& &$output
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected static function Stat_1 ($path, &$output){}
	/**
	 * @deprecated
	 * @param \System\Byte& $path
	 * @param \Interop+Sys+FileStatus& &$output
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected static function Stat_2 ($path, &$output){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $path [generic: System\Char]
	 * @param \Interop+Sys+FileStatus& &$output
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected static function Stat_3 ($path, &$output){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \Interop+Sys+FileStatus& &$output
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected static function LStat_1 ($path, &$output){}
	/**
	 * @deprecated
	 * @param \System\Byte& $path
	 * @param \Interop+Sys+FileStatus& &$output
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected static function LStat_2 ($path, &$output){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $path [generic: System\Char]
	 * @param \Interop+Sys+FileStatus& &$output
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected static function LStat_3 ($path, &$output){}
	/**
	 * @deprecated
	 * @param \System\Runtime\InteropServices\SafeHandle $fd
	 * @param \System\Byte* $buffer
	 * @param \System\Int32|int $bufferSize
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected static function Write_1 ($fd, $buffer, $bufferSize){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $fd
	 * @param \System\Byte* $buffer
	 * @param \System\Int32|int $bufferSize
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected static function Write_2 ($fd, $buffer, $bufferSize){}
}
class Sys extends \System\Object
{
	use SysOverride;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Boolean|bool
	 */
	protected static $CanSetHiddenFlag;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Boolean|bool
	 */
	protected static $SupportsHiddenFlag;
	/**
	 * @return \Interop+Error
	 */
	protected static function GetLastError(){}
	/**
	 * @return \Interop+ErrorInfo
	 */
	protected static function GetLastErrorInfo(){}
	/**
	 * @param \System\Int32|int $platformErrno
	 * @return \System\String|string
	 */
	protected static function StrError($platformErrno){}
	/**
	 * @param \System\Int32|int $platformErrno
	 * @return \Interop+Error
	 */
	protected static function ConvertErrorPlatformToPal($platformErrno){}
	/**
	 * @param \Interop+Error $error
	 * @return \System\Int32|int
	 */
	protected static function ConvertErrorPalToPlatform($error){}
	private static function StrErrorR($platformErrno, $buffer, $bufferSize){}
	/**
	 * @param \System\String|string $path
	 * @param \Interop+Sys+AccessMode $mode
	 * @return \System\Int32|int
	 */
	protected static function Access($path, $mode){}
	/**
	 * @param \System\String|string $path
	 * @return \System\Int32|int
	 */
	protected static function ChDir($path){}
	/**
	 * @param \System\String|string $path
	 * @param \System\Int32|int $mode
	 * @return \System\Int32|int
	 */
	protected static function ChMod($path, $mode){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $fd
	 * @param \System\Int32|int $mode
	 * @return \System\Int32|int
	 */
	protected static function FChMod($fd, $mode){}
	/**
	 * @param \System\IntPtr $fd
	 * @return \System\Int32|int
	 */
	protected static function Close($fd){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $source
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $destination
	 * @param \System\Int64|int $sourceLength
	 * @return \System\Int32|int
	 */
	protected static function CopyFile($source, $destination, $sourceLength){}
	/**
	 * @return \System\IntPtr
	 */
	protected static function GetDefaultSearchOrderPseudoHandle(){}
	/**
	 * @return \System\Int32|int
	 */
	protected static function GetErrNo(){}
	/**
	 * @param \System\Int32|int $errorCode
	 * @return \System\Void|void
	 */
	protected static function SetErrNo($errorCode){}
	private static function GetFileSystemType($fd){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $fd
	 * @param \Interop+Sys+UnixFileSystemTypes& &$fileSystemType
	 * @return \System\Boolean|bool
	 */
	protected static function TryGetFileSystemType($fd, &$fileSystemType){}
	/**
	 * @uses SysOverride::FLock_1 <br>protected , args: ($fd, $operation)<br>
	 * @uses SysOverride::FLock_2 <br>protected , args: ($fd, $operation)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverrideProtected]function FLock (\override ...$args){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $fd
	 * @return \System\Int32|int
	 */
	protected static function FSync($fd){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $fd
	 * @param \System\Int64|int $length
	 * @return \System\Int32|int
	 */
	protected static function FTruncate($fd, $length){}
	/**
	 * @param \Interop+Sys+ProcessCpuInformation& $previousCpuInfo
	 * @return \System\Double|double
	 */
	protected static function GetCpuUtilization($previousCpuInfo){}
	/**
	 * @uses SysOverride::GetCwd_1 <br>private , args: ($buffer, $bufferLength)<br>
	 * @uses SysOverride::GetCwd_2 <br>protected , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Byte*|\System\String|string|mixed|\override
	 */
	#[MethodOverrideProtected]function GetCwd (\override ...$args){}
	private static function GetCwdHelper($ptr, $bufferSize){}
	/**
	 * @uses SysOverride::GetHostName_1 <br>private , args: ($name, $nameLength)<br>
	 * @uses SysOverride::GetHostName_2 <br>protected , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|\System\String|string|mixed|\override
	 */
	#[MethodOverrideProtected]function GetHostName (\override ...$args){}
	/**
	 * @return \System\Int32|int
	 */
	protected static function GetOSArchitecture(){}
	/**
	 * @return \System\String|string
	 */
	protected static function GetProcessPath(){}
	/**
	 * @param \System\Byte* $buffer
	 * @param \System\Int32|int $length
	 * @return \System\Void|void
	 */
	protected static function GetNonCryptographicallySecureRandomBytes($buffer, $length){}
	/**
	 * @param \System\Byte* $buffer
	 * @param \System\Int32|int $length
	 * @return \System\Int32|int
	 */
	protected static function GetCryptographicallySecureRandomBytes($buffer, $length){}
	/**
	 * @return \System\Int64|int
	 */
	protected static function GetSystemTimeAsTicks(){}
	/**
	 * @return \System\UInt64
	 */
	protected static function GetTimestamp(){}
	/**
	 * @uses SysOverride::GetUnixVersion_1 <br>private , args: ($version, $capacity)<br>
	 * @uses SysOverride::GetUnixVersion_2 <br>protected , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|\System\String|string|mixed|\override
	 */
	#[MethodOverrideProtected]function GetUnixVersion (\override ...$args){}
	/**
	 * @return \System\String|string
	 */
	public static function GetUnixRelease(){}
	/**
	 * @param \System\String|string $path
	 * @param \System\UInt32 $flags
	 * @return \System\Int32|int
	 */
	protected static function LChflags($path, $flags){}
	/**
	 * @param \System\Runtime\InteropServices\SafeHandle $fd
	 * @param \System\UInt32 $flags
	 * @return \System\Int32|int
	 */
	protected static function FChflags($fd, $flags){}
	private static function LChflagsCanSetHiddenFlag(){}
	private static function CanGetHiddenFlag(){}
	/**
	 * @param \System\String|string $source
	 * @param \System\String|string $link
	 * @return \System\Int32|int
	 */
	protected static function Link($source, $link){}
	/**
	 * @param \System\Runtime\InteropServices\SafeHandle $fd
	 * @param \System\Int64|int $offset
	 * @param \System\Int64|int $length
	 * @param \Interop+Sys+LockType $lockType
	 * @return \System\Int32|int
	 */
	protected static function LockFileRegion($fd, $offset, $length, $lockType){}
	/**
	 * @param \System\Byte* $buffer
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	protected static function Log($buffer, $count){}
	/**
	 * @param \System\Byte* $buffer
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	protected static function LogError($buffer, $count){}
	/**
	 * @return \System\IntPtr
	 */
	protected static function LowLevelMonitor_Create(){}
	/**
	 * @param \System\IntPtr $monitor
	 * @return \System\Void|void
	 */
	protected static function LowLevelMonitor_Destroy($monitor){}
	/**
	 * @param \System\IntPtr $monitor
	 * @return \System\Void|void
	 */
	protected static function LowLevelMonitor_Acquire($monitor){}
	/**
	 * @param \System\IntPtr $monitor
	 * @return \System\Void|void
	 */
	protected static function LowLevelMonitor_Release($monitor){}
	/**
	 * @param \System\IntPtr $monitor
	 * @return \System\Void|void
	 */
	protected static function LowLevelMonitor_Wait($monitor){}
	/**
	 * @param \System\IntPtr $monitor
	 * @return \System\Void|void
	 */
	protected static function LowLevelMonitor_Signal_Release($monitor){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $fd
	 * @param \System\Int64|int $offset
	 * @param \Interop+Sys+SeekWhence $whence
	 * @return \System\Int64|int
	 */
	protected static function LSeek($fd, $offset, $whence){}
	/**
	 * @param \System\UIntPtr $alignment
	 * @param \System\UIntPtr $size
	 * @return \System\Void*
	 */
	protected static function AlignedAlloc($alignment, $size){}
	/**
	 * @param \System\Void* $ptr
	 * @return \System\Void|void
	 */
	protected static function AlignedFree($ptr){}
	/**
	 * @param \System\Void* $ptr
	 * @param \System\UIntPtr $alignment
	 * @param \System\UIntPtr $new_size
	 * @return \System\Void*
	 */
	protected static function AlignedRealloc($ptr, $alignment, $new_size){}
	/**
	 * @param \System\UIntPtr $num
	 * @param \System\UIntPtr $size
	 * @return \System\Void*
	 */
	protected static function Calloc($num, $size){}
	/**
	 * @param \System\Void* $ptr
	 * @return \System\Void|void
	 */
	protected static function Free($ptr){}
	/**
	 * @param \System\UIntPtr $size
	 * @return \System\Void*
	 */
	protected static function Malloc($size){}
	/**
	 * @param \System\Void* $ptr
	 * @param \System\UIntPtr $new_size
	 * @return \System\Void*
	 */
	protected static function Realloc($ptr, $new_size){}
	/**
	 * @uses SysOverride::MkDir_1 <br>private , args: ($path, $mode)<br>
	 * @uses SysOverride::MkDir_2 <br>protected , args: ($path, $mode)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverrideProtected]function MkDir (\override ...$args){}
	/**
	 * @param \System\Byte* $template
	 * @return \System\Byte*
	 */
	protected static function MkdTemp($template){}
	/**
	 * @param \System\Byte* $template
	 * @param \System\Int32|int $suffixlen
	 * @return \System\IntPtr
	 */
	protected static function MksTemps($template, $suffixlen){}
	/**
	 * @uses SysOverride::GetAllMountPoints_1 <br>private , args: ($onFound, $context)<br>
	 * @uses SysOverride::GetAllMountPoints_2 <br>protected , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|\System\String|mixed|\override
	 */
	#[MethodOverrideProtected]function GetAllMountPoints (\override ...$args){}
	private static function AddMountPoint($context, $name){}
	/**
	 * @param \System\String|string $filename
	 * @param \Interop+Sys+OpenFlags $flags
	 * @param \System\Int32|int $mode
	 * @return \Microsoft\Win32\SafeHandles\SafeFileHandle
	 */
	protected static function Open($filename, $flags, $mode){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $fd
	 * @param \System\Int64|int $offset
	 * @param \System\Int64|int $length
	 * @param \Interop+Sys+FileAdvice $advice
	 * @return \System\Int32|int
	 */
	protected static function PosixFAdvise($fd, $offset, $length, $advice){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $fd
	 * @param \System\Int64|int $offset
	 * @param \System\Int64|int $length
	 * @return \System\Int32|int
	 */
	protected static function FAllocate($fd, $offset, $length){}
	/**
	 * @param \System\Runtime\InteropServices\SafeHandle $fd
	 * @param \System\Byte* $buffer
	 * @param \System\Int32|int $bufferSize
	 * @param \System\Int64|int $fileOffset
	 * @return \System\Int32|int
	 */
	protected static function PRead($fd, $buffer, $bufferSize, $fileOffset){}
	/**
	 * @param \System\Runtime\InteropServices\SafeHandle $fd
	 * @param \Interop+Sys+IOVector* $vectors
	 * @param \System\Int32|int $vectorCount
	 * @param \System\Int64|int $fileOffset
	 * @return \System\Int64|int
	 */
	protected static function PReadV($fd, $vectors, $vectorCount, $fileOffset){}
	/**
	 * @param \System\Runtime\InteropServices\SafeHandle $fd
	 * @param \System\Byte* $buffer
	 * @param \System\Int32|int $bufferSize
	 * @param \System\Int64|int $fileOffset
	 * @return \System\Int32|int
	 */
	protected static function PWrite($fd, $buffer, $bufferSize, $fileOffset){}
	/**
	 * @param \System\Runtime\InteropServices\SafeHandle $fd
	 * @param \Interop+Sys+IOVector* $vectors
	 * @param \System\Int32|int $vectorCount
	 * @param \System\Int64|int $fileOffset
	 * @return \System\Int64|int
	 */
	protected static function PWriteV($fd, $vectors, $vectorCount, $fileOffset){}
	/**
	 * @param \System\Runtime\InteropServices\SafeHandle $fd
	 * @param \System\Byte* $buffer
	 * @param \System\Int32|int $count
	 * @return \System\Int32|int
	 */
	protected static function Read($fd, $buffer, $count){}
	/**
	 * @param \System\String|string $path
	 * @return \System\IntPtr
	 */
	protected static function OpenDir($path){}
	/**
	 * @return \System\Int32|int
	 */
	protected static function GetReadDirRBufferSize(){}
	/**
	 * @param \System\IntPtr $dir
	 * @param \System\Byte* $buffer
	 * @param \System\Int32|int $bufferSize
	 * @param \Interop+Sys+DirectoryEntry* $outputEntry
	 * @return \System\Int32|int
	 */
	protected static function ReadDirR($dir, $buffer, $bufferSize, $outputEntry){}
	/**
	 * @param \System\IntPtr $dir
	 * @return \System\Int32|int
	 */
	protected static function CloseDir($dir){}
	/**
	 * @uses SysOverride::ReadLink_1 <br>private , args: ($path, $buffer, $bufferSize)<br>
	 * @uses SysOverride::ReadLink_2 <br>protected , args: ($path)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|\System\String|string|mixed|\override
	 */
	#[MethodOverrideProtected]function ReadLink (\override ...$args){}
	/**
	 * @uses SysOverride::Rename_1 <br>protected , args: ($oldPath, $newPath)<br>
	 * @uses SysOverride::Rename_2 <br>protected , args: ($oldPath, $newPath)<br>
	 * @uses SysOverride::Rename_3 <br>protected , args: ($oldPath, $newPath)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverrideProtected]function Rename (\override ...$args){}
	/**
	 * @param \System\String|string $path
	 * @return \System\Int32|int
	 */
	protected static function RmDir($path){}
	/**
	 * @param \System\Runtime\InteropServices\SafeHandle $fd
	 * @param \Interop+Sys+FileStatus& &$output
	 * @return \System\Int32|int
	 */
	protected static function FStat($fd, &$output){}
	/**
	 * @uses SysOverride::Stat_1 <br>protected , args: ($path, &$output)<br>
	 * @uses SysOverride::Stat_2 <br>protected , args: ($path, &$output)<br>
	 * @uses SysOverride::Stat_3 <br>protected , args: ($path, &$output)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverrideProtected]function Stat (\override ...$args){}
	/**
	 * @uses SysOverride::LStat_1 <br>protected , args: ($path, &$output)<br>
	 * @uses SysOverride::LStat_2 <br>protected , args: ($path, &$output)<br>
	 * @uses SysOverride::LStat_3 <br>protected , args: ($path, &$output)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverrideProtected]function LStat (\override ...$args){}
	/**
	 * @param \System\String|string $target
	 * @param \System\String|string $linkPath
	 * @return \System\Int32|int
	 */
	protected static function SymLink($target, $linkPath){}
	/**
	 * @param \Interop+Sys+SysConfName $name
	 * @return \System\Int64|int
	 */
	protected static function SysConf($name){}
	/**
	 * @param \Interop+Sys+SysLogPriority $priority
	 * @param \System\String|string $message
	 * @param \System\String|string $arg1
	 * @return \System\Void|void
	 */
	protected static function SysLog($priority, $message, $arg1){}
	/**
	 * @param \System\String|string $pathname
	 * @return \System\Int32|int
	 */
	protected static function Unlink($pathname){}
	/**
	 * @param \System\String|string $path
	 * @param \Interop+Sys+TimeSpec* $times
	 * @return \System\Int32|int
	 */
	protected static function UTimensat($path, $times){}
	/**
	 * @param \System\Runtime\InteropServices\SafeHandle $fd
	 * @param \Interop+Sys+TimeSpec* $times
	 * @return \System\Int32|int
	 */
	protected static function FUTimens($fd, $times){}
	/**
	 * @uses SysOverride::Write_1 <br>protected , args: ($fd, $buffer, $bufferSize)<br>
	 * @uses SysOverride::Write_2 <br>protected , args: ($fd, $buffer, $bufferSize)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverrideProtected]function Write (\override ...$args){}
	/**
	 * @return \System\UInt32
	 */
	protected static function GetEUid(){}
	/**
	 * @param \System\UInt32 $gid
	 * @return \System\Boolean|bool
	 */
	protected static function IsMemberOfGroup($gid){}
	private static function GetEGid(){}
	private static function GetGroups($ngroups, $groups){}
	/**
	 * @param \System\UInt32 $uid
	 * @return \System\String|string
	 */
	protected static function GetUserNameFromPasswd($uid){}
	private static function TryGetUserNameFromPasswd($uid, $buf, $bufLen, &$username){}
	/**
	 * @param \System\UInt32 $uid
	 * @param \Interop+Sys+Passwd& &$pwd
	 * @param \System\Byte* $buf
	 * @param \System\Int32|int $bufLen
	 * @return \System\Int32|int
	 */
	protected static function GetPwUidR($uid, &$pwd, $buf, $bufLen){}
	/**
	 * @return \System\Int32|int
	 */
	protected static function GetPid(){}
	/**
	 * @return \System\Boolean|bool
	 */
	protected static function InitializeTerminalAndSignalHandling(){}
	/**
	 * @param \System\IntPtr $handler
	 * @return \System\Void|void
	 */
	protected static function SetPosixSignalHandler($handler){}
	/**
	 * @param \System\Int32|int $signal
	 * @return \System\Boolean|bool
	 */
	protected static function EnablePosixSignalHandling($signal){}
	/**
	 * @param \System\Int32|int $signal
	 * @return \System\Void|void
	 */
	protected static function DisablePosixSignalHandling($signal){}
	/**
	 * @param \System\Int32|int $signal
	 * @return \System\Void|void
	 */
	protected static function HandleNonCanceledPosixSignal($signal){}
	/**
	 * @param \System\Runtime\InteropServices\PosixSignal $signal
	 * @return \System\Int32|int
	 */
	protected static function GetPlatformSignalNumber($signal){}
}