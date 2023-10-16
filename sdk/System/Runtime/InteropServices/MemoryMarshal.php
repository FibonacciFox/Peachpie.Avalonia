<?php
namespace System\Runtime\InteropServices;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait MemoryMarshalMethodsOverride
{
	/**
	 * @return \System\Runtime\InteropServices\T&
	 */
	#[MethodOverride] public static function GetArrayDataReference_1($array){}
	/**
	 * @return \System\Byte&
	 */
	#[MethodOverride] public static function GetArrayDataReference_2($array){}
	/**
	 * @return \System\Span_1
	 */
	#[MethodOverride] public static function AsBytes_1($span){}
	/**
	 * @return \System\ReadOnlySpan_1
	 */
	#[MethodOverride] public static function AsBytes_2($span){}
	/**
	 * @return \System\Runtime\InteropServices\T&
	 */
	#[MethodOverride] public static function GetReference_1($span){}
	/**
	 * @return \System\Runtime\InteropServices\T&
	 */
	#[MethodOverride] public static function GetReference_2($span){}
	/**
	 * @return \System\Runtime\InteropServices\T&
	 */
	#[MethodOverride] protected static function GetNonNullPinnableReference_1($span){}
	/**
	 * @return \System\Runtime\InteropServices\T&
	 */
	#[MethodOverride] protected static function GetNonNullPinnableReference_2($span){}
	/**
	 * @return \System\Span_1
	 */
	#[MethodOverride] public static function Cast_1($span){}
	/**
	 * @return \System\ReadOnlySpan_1
	 */
	#[MethodOverride] public static function Cast_2($span){}
	/**
	 * @return \System\ReadOnlySpan_1
	 */
	#[MethodOverride] public static function CreateReadOnlySpanFromNullTerminated_1($value){}
	/**
	 * @return \System\ReadOnlySpan_1
	 */
	#[MethodOverride] public static function CreateReadOnlySpanFromNullTerminated_2($value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryGetMemoryManager_1($memory, $manager){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryGetMemoryManager_2($memory, $manager, $start, $length){}
	/**
	 * @return \System\Runtime\InteropServices\T&
	 */
	#[MethodOverride] public static function AsRef_1($span){}
	/**
	 * @return \System\Runtime\InteropServices\T&
	 */
	#[MethodOverride] public static function AsRef_2($span){}
}
/**
 */
class MemoryMarshal extends \System\Object
{
	/**
	 * @uses MemoryMarshalMethodsOverride::GetArrayDataReference_1 ($array)
	 * @uses MemoryMarshalMethodsOverride::GetArrayDataReference_2 ($array)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetArrayDataReference(mixed ...$args){}
	/**
	 * @uses MemoryMarshalMethodsOverride::AsBytes_1 ($span)
	 * @uses MemoryMarshalMethodsOverride::AsBytes_2 ($span)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function AsBytes(mixed ...$args){}
	/**
	 * @param \System\ReadOnlyMemory_1 $memory
	 * @return \System\Memory_1
	 */
	public static function AsMemory($memory){}
	/**
	 * @uses MemoryMarshalMethodsOverride::GetReference_1 ($span)
	 * @uses MemoryMarshalMethodsOverride::GetReference_2 ($span)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetReference(mixed ...$args){}
	/**
	 * @uses MemoryMarshalMethodsOverride::GetNonNullPinnableReference_1 ($span)
	 * @uses MemoryMarshalMethodsOverride::GetNonNullPinnableReference_2 ($span)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetNonNullPinnableReference(mixed ...$args){}
	/**
	 * @uses MemoryMarshalMethodsOverride::Cast_1 ($span)
	 * @uses MemoryMarshalMethodsOverride::Cast_2 ($span)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Cast(mixed ...$args){}
	/**
	 * @param \System\Runtime\InteropServices\T& $reference
	 * @param \System\Int32|int $length
	 * @return \System\Span_1
	 */
	public static function CreateSpan($reference, $length){}
	/**
	 * @param \System\Runtime\InteropServices\T& $reference
	 * @param \System\Int32|int $length
	 * @return \System\ReadOnlySpan_1
	 */
	public static function CreateReadOnlySpan($reference, $length){}
	/**
	 * @uses MemoryMarshalMethodsOverride::CreateReadOnlySpanFromNullTerminated_1 ($value)
	 * @uses MemoryMarshalMethodsOverride::CreateReadOnlySpanFromNullTerminated_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function CreateReadOnlySpanFromNullTerminated(mixed ...$args){}
	/**
	 * @param \System\ReadOnlyMemory_1 $memory
	 * @param \System\ArraySegment_1& $segment
	 * @return \System\Boolean
	 */
	public static function TryGetArray($memory, $segment){}
	/**
	 * @uses MemoryMarshalMethodsOverride::TryGetMemoryManager_1 ($memory, $manager)
	 * @uses MemoryMarshalMethodsOverride::TryGetMemoryManager_2 ($memory, $manager, $start, $length)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TryGetMemoryManager(mixed ...$args){}
	/**
	 * @param \System\ReadOnlyMemory_1 $memory
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public static function ToEnumerable($memory){}
	/**
	 * @param \System\ReadOnlyMemory_1 $memory
	 * @param \System\String& $text
	 * @param \System\Int32& $start
	 * @param \System\Int32& $length
	 * @return \System\Boolean
	 */
	public static function TryGetString($memory, $text, $start, $length){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @return \System\Runtime\InteropServices\T
	 */
	public static function Read($source){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\Runtime\InteropServices\T& $value
	 * @return \System\Boolean
	 */
	public static function TryRead($source, $value){}
	/**
	 * @param \System\Span_1 $destination
	 * @param \System\Runtime\InteropServices\T& $value
	 * @return \System\Void|void
	 */
	public static function Write($destination, $value){}
	/**
	 * @param \System\Span_1 $destination
	 * @param \System\Runtime\InteropServices\T& $value
	 * @return \System\Boolean
	 */
	public static function TryWrite($destination, $value){}
	/**
	 * @uses MemoryMarshalMethodsOverride::AsRef_1 ($span)
	 * @uses MemoryMarshalMethodsOverride::AsRef_2 ($span)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function AsRef(mixed ...$args){}
	/**
	 * @param \System\Runtime\InteropServices\T[] $array
	 * @param \System\Int32|int $start
	 * @param \System\Int32|int $length
	 * @return \System\Memory_1
	 */
	public static function CreateFromPinnedArray($array, $start, $length){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
