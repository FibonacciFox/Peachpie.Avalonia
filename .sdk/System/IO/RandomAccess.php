<?php
namespace System\IO;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait RandomAccessOverride {
	/**
	 * @deprecated
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\Span_1 $buffer [generic: System\Byte]
	 * @param \System\Int64|int $fileOffset
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function Read_1 ($handle, $buffer, $fileOffset){}
	/**
	 * @deprecated
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\Collections\Generic\IReadOnlyList_1 $buffers [generic: System\Memory_1[System\Byte]
	 * @param \System\Int64|int $fileOffset
	 * @return \System\Int64|int
	 */
	#[MethodOverride]public static function Read_2 ($handle, $buffers, $fileOffset){}
	/**
	 * @deprecated
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\Memory_1 $buffer [generic: System\Byte]
	 * @param \System\Int64|int $fileOffset
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\ValueTask_1
	 */
	#[MethodOverride]public static function ReadAsync_1 ($handle, $buffer, $fileOffset, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\Collections\Generic\IReadOnlyList_1 $buffers [generic: System\Memory_1[System\Byte]
	 * @param \System\Int64|int $fileOffset
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\ValueTask_1
	 */
	#[MethodOverride]public static function ReadAsync_2 ($handle, $buffers, $fileOffset, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\ReadOnlySpan_1 $buffer [generic: System\Byte]
	 * @param \System\Int64|int $fileOffset
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Write_1 ($handle, $buffer, $fileOffset){}
	/**
	 * @deprecated
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\Collections\Generic\IReadOnlyList_1 $buffers [generic: System\ReadOnlyMemory_1[System\Byte]
	 * @param \System\Int64|int $fileOffset
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Write_2 ($handle, $buffers, $fileOffset){}
	/**
	 * @deprecated
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\ReadOnlyMemory_1 $buffer [generic: System\Byte]
	 * @param \System\Int64|int $fileOffset
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\ValueTask
	 */
	#[MethodOverride]public static function WriteAsync_1 ($handle, $buffer, $fileOffset, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\Collections\Generic\IReadOnlyList_1 $buffers [generic: System\ReadOnlyMemory_1[System\Byte]
	 * @param \System\Int64|int $fileOffset
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\ValueTask
	 */
	#[MethodOverride]public static function WriteAsync_2 ($handle, $buffers, $fileOffset, $cancellationToken){}
}
class RandomAccess extends \System\Object
{
	use RandomAccessOverride;


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
	 * @uses RandomAccessOverride::Read_1 <br>public , args: ($handle, $buffer, $fileOffset)<br>
	 * @uses RandomAccessOverride::Read_2 <br>public , args: ($handle, $buffers, $fileOffset)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|\System\Int64|int|mixed|\override
	 */
	#[MethodOverridePublic]function Read (\override ...$args){}
	/**
	 * @uses RandomAccessOverride::ReadAsync_1 <br>public , args: ($handle, $buffer, $fileOffset, $cancellationToken)<br>
	 * @uses RandomAccessOverride::ReadAsync_2 <br>public , args: ($handle, $buffers, $fileOffset, $cancellationToken)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Threading\Tasks\ValueTask_1|mixed|\override
	 */
	#[MethodOverridePublic]function ReadAsync (\override ...$args){}
	/**
	 * @uses RandomAccessOverride::Write_1 <br>public , args: ($handle, $buffer, $fileOffset)<br>
	 * @uses RandomAccessOverride::Write_2 <br>public , args: ($handle, $buffers, $fileOffset)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Write (\override ...$args){}
	/**
	 * @uses RandomAccessOverride::WriteAsync_1 <br>public , args: ($handle, $buffer, $fileOffset, $cancellationToken)<br>
	 * @uses RandomAccessOverride::WriteAsync_2 <br>public , args: ($handle, $buffers, $fileOffset, $cancellationToken)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Threading\Tasks\ValueTask|mixed|\override
	 */
	#[MethodOverridePublic]function WriteAsync (\override ...$args){}
	private static function ValidateInput($handle, $fileOffset){}
	private static function ValidateBuffers($buffers){}
	private static function ScheduleSyncReadAtOffsetAsync($handle, $buffer, $fileOffset, $cancellationToken, $strategy){}
	private static function ScheduleSyncReadScatterAtOffsetAsync($handle, $buffers, $fileOffset, $cancellationToken){}
	private static function ScheduleSyncWriteAtOffsetAsync($handle, $buffer, $fileOffset, $cancellationToken, $strategy){}
	private static function ScheduleSyncWriteGatherAtOffsetAsync($handle, $buffers, $fileOffset, $cancellationToken){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\Int64|int $length
	 * @return \System\Void|void
	 */
	protected static function SetFileLength($handle, $length){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\Span_1 $buffer [generic: System\Byte]
	 * @param \System\Int64|int $fileOffset
	 * @return \System\Int32|int
	 */
	protected static function ReadAtOffset($handle, $buffer, $fileOffset){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\Collections\Generic\IReadOnlyList_1 $buffers [generic: System\Memory_1[System\Byte]
	 * @param \System\Int64|int $fileOffset
	 * @return \System\Int64|int
	 */
	protected static function ReadScatterAtOffset($handle, $buffers, $fileOffset){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\Memory_1 $buffer [generic: System\Byte]
	 * @param \System\Int64|int $fileOffset
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @param \System\IO\Strategies\OSFileStreamStrategy $strategy
	 * @return \System\Threading\Tasks\ValueTask_1[System\Int32]
	 */
	protected static function ReadAtOffsetAsync($handle, $buffer, $fileOffset, $cancellationToken, $strategy){}
	private static function ReadScatterAtOffsetAsync($handle, $buffers, $fileOffset, $cancellationToken){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\ReadOnlySpan_1 $buffer [generic: System\Byte]
	 * @param \System\Int64|int $fileOffset
	 * @return \System\Void|void
	 */
	protected static function WriteAtOffset($handle, $buffer, $fileOffset){}
	private static function GetNumberOfBytesToWrite($byteCount){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\Collections\Generic\IReadOnlyList_1 $buffers [generic: System\ReadOnlyMemory_1[System\Byte]
	 * @param \System\Int64|int $fileOffset
	 * @return \System\Void|void
	 */
	protected static function WriteGatherAtOffset($handle, $buffers, $fileOffset){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\ReadOnlyMemory_1 $buffer [generic: System\Byte]
	 * @param \System\Int64|int $fileOffset
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @param \System\IO\Strategies\OSFileStreamStrategy $strategy
	 * @return \System\Threading\Tasks\ValueTask
	 */
	protected static function WriteAtOffsetAsync($handle, $buffer, $fileOffset, $cancellationToken, $strategy){}
	private static function WriteGatherAtOffsetAsync($handle, $buffers, $fileOffset, $cancellationToken){}
}