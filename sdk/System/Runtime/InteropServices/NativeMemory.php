<?php
namespace System\Runtime\InteropServices;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait NativeMemoryMethodsOverride
{
	/**
	 * @return \System\Void*
	 */
	#[MethodOverride] public static function Alloc_1($elementCount, $elementSize){}
	/**
	 * @return \System\Void*
	 */
	#[MethodOverride] public static function Alloc_2($byteCount){}
	/**
	 * @return \System\Void*
	 */
	#[MethodOverride] public static function AllocZeroed_1($byteCount){}
	/**
	 * @return \System\Void*
	 */
	#[MethodOverride] public static function AllocZeroed_2($elementCount, $elementSize){}
}
/**
 */
class NativeMemory extends \System\Object
{
	/**
	 * @uses NativeMemoryMethodsOverride::Alloc_1 ($elementCount, $elementSize)
	 * @uses NativeMemoryMethodsOverride::Alloc_2 ($byteCount)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Alloc(mixed ...$args){}
	/**
	 * @uses NativeMemoryMethodsOverride::AllocZeroed_1 ($byteCount)
	 * @uses NativeMemoryMethodsOverride::AllocZeroed_2 ($elementCount, $elementSize)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function AllocZeroed(mixed ...$args){}
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
	/**
	 * @param \System\UIntPtr $elementCount
	 * @param \System\UIntPtr $elementSize
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetByteCount($elementCount, $elementSize){}
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
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
