<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait BufferMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected static function Memcpy_1($dest, $src, $len){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected static function Memcpy_2($pDest, $destIndex, $src, $srcIndex, $len){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected static function Memmove_1($destination, $source, $elementCount){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected static function Memmove_2($dest, $src, $len){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function MemoryCopy_1($source, $destination, $destinationSizeInBytes, $sourceBytesToCopy){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function MemoryCopy_2($source, $destination, $destinationSizeInBytes, $sourceBytesToCopy){}
}
/**
 */
class Buffer extends \System\Object
{
	/**
	 * @param \System\Byte& $b
	 * @param \System\UIntPtr $byteLength
	 * @return \System\Void|void
	 */
	protected static function _ZeroMemory($b, $byteLength){}
	/**
	 * @param \System\Void* $b
	 * @param \System\UIntPtr $byteLength
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function __ZeroMemory($b, $byteLength){}
	/**
	 * @param \System\Byte& $destination
	 * @param \System\Byte& $source
	 * @param \System\UIntPtr $byteCount
	 * @return \System\Void|void
	 */
	protected static function BulkMoveWithWriteBarrier($destination, $source, $byteCount){}
	/**
	 * @param \System\Byte& $destination
	 * @param \System\Byte& $source
	 * @param \System\UIntPtr $byteCount
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function _BulkMoveWithWriteBarrier($destination, $source, $byteCount){}
	/**
	 * @param \System\Byte& $destination
	 * @param \System\Byte& $source
	 * @param \System\UIntPtr $byteCount
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function __BulkMoveWithWriteBarrier($destination, $source, $byteCount){}
	/**
	 * @param \System\Byte* $dest
	 * @param \System\Byte* $src
	 * @param \System\UIntPtr $len
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function __Memmove($dest, $src, $len){}
	/**
	 * @uses BufferMethodsOverride::Memcpy_1 ($dest, $src, $len)
	 * @uses BufferMethodsOverride::Memcpy_2 ($pDest, $destIndex, $src, $srcIndex, $len)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Memcpy(mixed ...$args){}
	/**
	 * @uses BufferMethodsOverride::Memmove_1 ($destination, $source, $elementCount)
	 * @uses BufferMethodsOverride::Memmove_2 ($dest, $src, $len)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Memmove(mixed ...$args){}
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
	 * @uses BufferMethodsOverride::MemoryCopy_1 ($source, $destination, $destinationSizeInBytes, $sourceBytesToCopy)
	 * @uses BufferMethodsOverride::MemoryCopy_2 ($source, $destination, $destinationSizeInBytes, $sourceBytesToCopy)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function MemoryCopy(mixed ...$args){}
	/**
	 * @param \System\Byte& $dest
	 * @param \System\Byte& $src
	 * @param \System\UIntPtr $len
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function _Memmove($dest, $src, $len){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
