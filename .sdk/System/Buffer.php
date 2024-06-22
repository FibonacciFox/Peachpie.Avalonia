<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait BufferOverride {
	/**
	 * @deprecated
	 * @param \System\Byte* $dest
	 * @param \System\Byte* $src
	 * @param \System\Int32|int $len
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected static function Memcpy_1 ($dest, $src, $len){}
	/**
	 * @deprecated
	 * @param \System\Byte* $pDest
	 * @param \System\Int32|int $destIndex
	 * @param \System\Byte $src
	 * @param \System\Int32|int $srcIndex
	 * @param \System\Int32|int $len
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected static function Memcpy_2 ($pDest, $destIndex, $src, $srcIndex, $len){}
	/**
	 * @deprecated
	 * @param \T& $destination
	 * @param \T& $source
	 * @param \System\UIntPtr $elementCount
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected static function Memmove_1 ($destination, $source, $elementCount){}
	/**
	 * @deprecated
	 * @param \System\Byte& $dest
	 * @param \System\Byte& $src
	 * @param \System\UIntPtr $len
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected static function Memmove_2 ($dest, $src, $len){}
	/**
	 * @deprecated
	 * @param \System\Void* $source
	 * @param \System\Void* $destination
	 * @param \System\Int64|int $destinationSizeInBytes
	 * @param \System\Int64|int $sourceBytesToCopy
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function MemoryCopy_1 ($source, $destination, $destinationSizeInBytes, $sourceBytesToCopy){}
	/**
	 * @deprecated
	 * @param \System\Void* $source
	 * @param \System\Void* $destination
	 * @param \System\UInt64 $destinationSizeInBytes
	 * @param \System\UInt64 $sourceBytesToCopy
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function MemoryCopy_2 ($source, $destination, $destinationSizeInBytes, $sourceBytesToCopy){}
}
class Buffer extends \System\Object
{
	use BufferOverride;


	/**
	 * @param \System\Byte& $b
	 * @param \System\UIntPtr $byteLength
	 * @return \System\Void|void
	 */
	protected static function _ZeroMemory($b, $byteLength){}
	private static function __ZeroMemory($b, $byteLength){}
	/**
	 * @param \System\Byte& $destination
	 * @param \System\Byte& $source
	 * @param \System\UIntPtr $byteCount
	 * @return \System\Void|void
	 */
	protected static function BulkMoveWithWriteBarrier($destination, $source, $byteCount){}
	private static function _BulkMoveWithWriteBarrier($destination, $source, $byteCount){}
	private static function __BulkMoveWithWriteBarrier($destination, $source, $byteCount){}
	private static function __Memmove($dest, $src, $len){}
	/**
	 * @uses BufferOverride::Memcpy_1 <br>protected , args: ($dest, $src, $len)<br>
	 * @uses BufferOverride::Memcpy_2 <br>protected , args: ($pDest, $destIndex, $src, $srcIndex, $len)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function Memcpy (\override ...$args){}
	/**
	 * @uses BufferOverride::Memmove_1 <br>protected , args: ($destination, $source, $elementCount)<br>
	 * @uses BufferOverride::Memmove_2 <br>protected , args: ($dest, $src, $len)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function Memmove (\override ...$args){}
	/**
	 * @param \System\Array|array $src
	 * @param \System\Int32|int $srcOffset
	 * @param \System\Array|array $dst
	 * @param \System\Int32|int $dstOffset
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	public static function BlockCopy($src, $srcOffset, $dst, $dstOffset, $count){}
	/**
	 * @param \System\Array|array $array
	 * @return \System\Int32|int
	 */
	public static function ByteLength($array){}
	/**
	 * @param \System\Array|array $array
	 * @param \System\Int32|int $index
	 * @return \System\Byte
	 */
	public static function GetByte($array, $index){}
	/**
	 * @param \System\Array|array $array
	 * @param \System\Int32|int $index
	 * @param \System\Byte $value
	 * @return \System\Void|void
	 */
	public static function SetByte($array, $index, $value){}
	/**
	 * @uses BufferOverride::MemoryCopy_1 <br>public , args: ($source, $destination, $destinationSizeInBytes, $sourceBytesToCopy)<br>
	 * @uses BufferOverride::MemoryCopy_2 <br>public , args: ($source, $destination, $destinationSizeInBytes, $sourceBytesToCopy)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function MemoryCopy (\override ...$args){}
	private static function _Memmove($dest, $src, $len){}
}