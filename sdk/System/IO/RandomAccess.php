<?php
namespace System\IO;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait RandomAccessMethodsOverride
{
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function Read_1($handle, $buffer, $fileOffset){}
	/**
	 * @return \System\Int64|int
	 */
	#[MethodOverride] public static function Read_2($handle, $buffers, $fileOffset){}
	/**
	 * @return \System\Threading\Tasks\ValueTask_1
	 */
	#[MethodOverride] public static function ReadAsync_1($handle, $buffer, $fileOffset, $cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\ValueTask_1
	 */
	#[MethodOverride] public static function ReadAsync_2($handle, $buffers, $fileOffset, $cancellationToken){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Write_1($handle, $buffer, $fileOffset){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Write_2($handle, $buffers, $fileOffset){}
	/**
	 * @return \System\Threading\Tasks\ValueTask
	 */
	#[MethodOverride] public static function WriteAsync_1($handle, $buffer, $fileOffset, $cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\ValueTask
	 */
	#[MethodOverride] public static function WriteAsync_2($handle, $buffers, $fileOffset, $cancellationToken){}
}
/**
 */
class RandomAccess extends \System\Object
{
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @return \System\Int64|int
	 */
	public static function GetLength($handle){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\Int64|int $length
	 * @return \System\Void|void
	 */
	public static function SetLength($handle, $length){}
	/**
	 * @uses RandomAccessMethodsOverride::Read_1 ($handle, $buffer, $fileOffset)
	 * @uses RandomAccessMethodsOverride::Read_2 ($handle, $buffers, $fileOffset)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Read(mixed ...$args){}
	/**
	 * @uses RandomAccessMethodsOverride::ReadAsync_1 ($handle, $buffer, $fileOffset, $cancellationToken)
	 * @uses RandomAccessMethodsOverride::ReadAsync_2 ($handle, $buffers, $fileOffset, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ReadAsync(mixed ...$args){}
	/**
	 * @uses RandomAccessMethodsOverride::Write_1 ($handle, $buffer, $fileOffset)
	 * @uses RandomAccessMethodsOverride::Write_2 ($handle, $buffers, $fileOffset)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Write(mixed ...$args){}
	/**
	 * @uses RandomAccessMethodsOverride::WriteAsync_1 ($handle, $buffer, $fileOffset, $cancellationToken)
	 * @uses RandomAccessMethodsOverride::WriteAsync_2 ($handle, $buffers, $fileOffset, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function WriteAsync(mixed ...$args){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\Int64|int $fileOffset
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ValidateInput($handle, $fileOffset){}
	/**
	 * @param \System\Collections\Generic\IReadOnlyList_1 $buffers
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ValidateBuffers($buffers){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\Memory_1 $buffer
	 * @param \System\Int64|int $fileOffset
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @param \System\IO\Strategies\OSFileStreamStrategy $strategy
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ScheduleSyncReadAtOffsetAsync($handle, $buffer, $fileOffset, $cancellationToken, $strategy){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\Collections\Generic\IReadOnlyList_1 $buffers
	 * @param \System\Int64|int $fileOffset
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ScheduleSyncReadScatterAtOffsetAsync($handle, $buffers, $fileOffset, $cancellationToken){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\ReadOnlyMemory_1 $buffer
	 * @param \System\Int64|int $fileOffset
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @param \System\IO\Strategies\OSFileStreamStrategy $strategy
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ScheduleSyncWriteAtOffsetAsync($handle, $buffer, $fileOffset, $cancellationToken, $strategy){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\Collections\Generic\IReadOnlyList_1 $buffers
	 * @param \System\Int64|int $fileOffset
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ScheduleSyncWriteGatherAtOffsetAsync($handle, $buffers, $fileOffset, $cancellationToken){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\Int64|int $length
	 * @return \System\Void|void
	 */
	protected static function SetFileLength($handle, $length){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\Span_1 $buffer
	 * @param \System\Int64|int $fileOffset
	 * @return \System\Int32|int
	 */
	protected static function ReadAtOffset($handle, $buffer, $fileOffset){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\Span_1 $buffer
	 * @param \System\Int64|int $fileOffset
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ReadSyncUsingAsyncHandle($handle, $buffer, $fileOffset){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\ReadOnlySpan_1 $buffer
	 * @param \System\Int64|int $fileOffset
	 * @return \System\Void|void
	 */
	protected static function WriteAtOffset($handle, $buffer, $fileOffset){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\ReadOnlySpan_1 $buffer
	 * @param \System\Int64|int $fileOffset
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function WriteSyncUsingAsyncHandle($handle, $buffer, $fileOffset){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\Memory_1 $buffer
	 * @param \System\Int64|int $fileOffset
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @param \System\IO\Strategies\OSFileStreamStrategy $strategy
	 * @return \System\Threading\Tasks\ValueTask_1
	 */
	protected static function ReadAtOffsetAsync($handle, $buffer, $fileOffset, $cancellationToken, $strategy){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\Memory_1 $buffer
	 * @param \System\Int64|int $fileOffset
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @param \System\IO\Strategies\OSFileStreamStrategy $strategy
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function QueueAsyncReadFile($handle, $buffer, $fileOffset, $cancellationToken, $strategy){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\ReadOnlyMemory_1 $buffer
	 * @param \System\Int64|int $fileOffset
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @param \System\IO\Strategies\OSFileStreamStrategy $strategy
	 * @return \System\Threading\Tasks\ValueTask
	 */
	protected static function WriteAtOffsetAsync($handle, $buffer, $fileOffset, $cancellationToken, $strategy){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\ReadOnlyMemory_1 $buffer
	 * @param \System\Int64|int $fileOffset
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @param \System\IO\Strategies\OSFileStreamStrategy $strategy
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function QueueAsyncWriteFile($handle, $buffer, $fileOffset, $cancellationToken, $strategy){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\Collections\Generic\IReadOnlyList_1 $buffers
	 * @param \System\Int64|int $fileOffset
	 * @return \System\Int64|int
	 */
	protected static function ReadScatterAtOffset($handle, $buffers, $fileOffset){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\Collections\Generic\IReadOnlyList_1 $buffers
	 * @param \System\Int64|int $fileOffset
	 * @return \System\Void|void
	 */
	protected static function WriteGatherAtOffset($handle, $buffers, $fileOffset){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CanUseScatterGatherWindowsAPIs($handle){}
	/**
	 * @param \System\Collections\Generic\IReadOnlyList_1 $buffers
	 * @param \System\Buffers\MemoryHandle[]& $handlesToDispose
	 * @param \System\IntPtr& $segmentsPtr
	 * @param \System\Int32& $totalBytes
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryPrepareScatterGatherBuffers($buffers, $handlesToDispose, $segmentsPtr, $totalBytes){}
	/**
	 * @param \System\Buffers\MemoryHandle[] $handlesToDispose
	 * @param \System\IntPtr $segmentsPtr
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CleanupScatterGatherBuffers($handlesToDispose, $segmentsPtr){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\Collections\Generic\IReadOnlyList_1 $buffers
	 * @param \System\Int64|int $fileOffset
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ReadScatterAtOffsetAsync($handle, $buffers, $fileOffset, $cancellationToken){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\Buffers\MemoryHandle[] $handlesToDispose
	 * @param \System\IntPtr $segmentsPtr
	 * @param \System\Int64|int $fileOffset
	 * @param \System\Int32|int $totalBytes
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ReadScatterAtOffsetSingleSyscallAsync($handle, $handlesToDispose, $segmentsPtr, $fileOffset, $totalBytes, $cancellationToken){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\IntPtr $segmentsPtr
	 * @param \System\Int32|int $bytesToRead
	 * @param \System\Int64|int $fileOffset
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ReadFileScatterAsync($handle, $segmentsPtr, $bytesToRead, $fileOffset, $cancellationToken){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\Collections\Generic\IReadOnlyList_1 $buffers
	 * @param \System\Int64|int $fileOffset
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ReadScatterAtOffsetMultipleSyscallsAsync($handle, $buffers, $fileOffset, $cancellationToken){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\Collections\Generic\IReadOnlyList_1 $buffers
	 * @param \System\Int64|int $fileOffset
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function WriteGatherAtOffsetAsync($handle, $buffers, $fileOffset, $cancellationToken){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\Buffers\MemoryHandle[] $handlesToDispose
	 * @param \System\IntPtr $segmentsPtr
	 * @param \System\Int64|int $fileOffset
	 * @param \System\Int32|int $totalBytes
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function WriteGatherAtOffsetSingleSyscallAsync($handle, $handlesToDispose, $segmentsPtr, $fileOffset, $totalBytes, $cancellationToken){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\IntPtr $segmentsPtr
	 * @param \System\Int32|int $bytesToWrite
	 * @param \System\Int64|int $fileOffset
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function WriteFileGatherAsync($handle, $segmentsPtr, $bytesToWrite, $fileOffset, $cancellationToken){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\Collections\Generic\IReadOnlyList_1 $buffers
	 * @param \System\Int64|int $fileOffset
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function WriteGatherAtOffsetMultipleSyscallsAsync($handle, $buffers, $fileOffset, $cancellationToken){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\Int64|int $fileOffset
	 * @param \System\IO\CallbackResetEvent $resetEvent
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetNativeOverlappedForAsyncHandle($handle, $fileOffset, $resetEvent){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\Int64|int $fileOffset
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetNativeOverlappedForSyncHandle($handle, $fileOffset){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function AllocateCallback(){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $fileHandle
	 * @param \System\Int64|int $fileOffset
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsEndOfFileForNoBuffering($fileHandle, $fileOffset){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
