<?php
namespace System\Runtime\InteropServices;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait NativeMemoryOverride {
	/**
	 * @deprecated
	 * @param \System\UIntPtr $elementCount
	 * @param \System\UIntPtr $elementSize
	 * @return \System\Void*
	 */
	#[MethodOverride]public static function Alloc_1 ($elementCount, $elementSize){}
	/**
	 * @deprecated
	 * @param \System\UIntPtr $byteCount
	 * @return \System\Void*
	 */
	#[MethodOverride]public static function Alloc_2 ($byteCount){}
	/**
	 * @deprecated
	 * @param \System\UIntPtr $byteCount
	 * @return \System\Void*
	 */
	#[MethodOverride]public static function AllocZeroed_1 ($byteCount){}
	/**
	 * @deprecated
	 * @param \System\UIntPtr $elementCount
	 * @param \System\UIntPtr $elementSize
	 * @return \System\Void*
	 */
	#[MethodOverride]public static function AllocZeroed_2 ($elementCount, $elementSize){}
}
class NativeMemory extends \System\Object
{
	use NativeMemoryOverride;

	/**
	 * @uses NativeMemoryOverride::Alloc_1 <br>public , args: ($elementCount, $elementSize)<br>
	 * @uses NativeMemoryOverride::Alloc_2 <br>public , args: ($byteCount)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void*|mixed|\override
	 */
	#[MethodOverridePublic]function Alloc (\override ...$args){}
	/**
	 * @uses NativeMemoryOverride::AllocZeroed_1 <br>public , args: ($byteCount)<br>
	 * @uses NativeMemoryOverride::AllocZeroed_2 <br>public , args: ($elementCount, $elementSize)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void*|mixed|\override
	 */
	#[MethodOverridePublic]function AllocZeroed (\override ...$args){}
	/**
	 * @param \System\Void* $ptr
	 * @param \System\UIntPtr $byteCount
	 * @return \System\Void|void
	 */
	public static function Clear($ptr, $byteCount){}
	/**
	 * @param \System\Void* $source
	 * @param \System\Void* $destination
	 * @param \System\UIntPtr $byteCount
	 * @return \System\Void|void
	 */
	public static function Copy($source, $destination, $byteCount){}
	/**
	 * @param \System\Void* $ptr
	 * @param \System\UIntPtr $byteCount
	 * @param \System\Byte $value
	 * @return \System\Void|void
	 */
	public static function Fill($ptr, $byteCount, $value){}
	private static function GetByteCount($elementCount, $elementSize){}
	/**
	 * @param \System\UIntPtr $byteCount
	 * @param \System\UIntPtr $alignment
	 * @return \System\Void*
	 */
	public static function AlignedAlloc($byteCount, $alignment){}
	/**
	 * @param \System\Void* $ptr
	 * @return \System\Void|void
	 */
	public static function AlignedFree($ptr){}
	/**
	 * @param \System\Void* $ptr
	 * @param \System\UIntPtr $byteCount
	 * @param \System\UIntPtr $alignment
	 * @return \System\Void*
	 */
	public static function AlignedRealloc($ptr, $byteCount, $alignment){}
	/**
	 * @param \System\Void* $ptr
	 * @return \System\Void|void
	 */
	public static function Free($ptr){}
	/**
	 * @param \System\Void* $ptr
	 * @param \System\UIntPtr $byteCount
	 * @return \System\Void*
	 */
	public static function Realloc($ptr, $byteCount){}
}