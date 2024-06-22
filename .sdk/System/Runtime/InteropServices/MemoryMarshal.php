<?php
namespace System\Runtime\InteropServices;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait MemoryMarshalOverride {
	/**
	 * @deprecated
	 * @param \T $array
	 * @return \T&
	 */
	#[MethodOverride]public static function GetArrayDataReference_1 ($array){}
	/**
	 * @deprecated
	 * @param \System\Array|array $array
	 * @return \System\Byte&
	 */
	#[MethodOverride]public static function GetArrayDataReference_2 ($array){}
	/**
	 * @deprecated
	 * @param \System\Span_1 $span [generic: T]
	 * @return \System\Span_1
	 */
	#[MethodOverride]public static function AsBytes_1 ($span){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $span [generic: T]
	 * @return \System\ReadOnlySpan_1
	 */
	#[MethodOverride]public static function AsBytes_2 ($span){}
	/**
	 * @deprecated
	 * @param \System\Span_1 $span [generic: T]
	 * @return \T&
	 */
	#[MethodOverride]public static function GetReference_1 ($span){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $span [generic: T]
	 * @return \T&
	 */
	#[MethodOverride]public static function GetReference_2 ($span){}
	/**
	 * @deprecated
	 * @param \System\Span_1 $span [generic: T]
	 * @return \T&
	 */
	#[MethodOverride]protected static function GetNonNullPinnableReference_1 ($span){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $span [generic: T]
	 * @return \T&
	 */
	#[MethodOverride]protected static function GetNonNullPinnableReference_2 ($span){}
	/**
	 * @deprecated
	 * @param \System\Span_1 $span [generic: TFrom]
	 * @return \System\Span_1
	 */
	#[MethodOverride]public static function Cast_1 ($span){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $span [generic: TFrom]
	 * @return \System\ReadOnlySpan_1
	 */
	#[MethodOverride]public static function Cast_2 ($span){}
	/**
	 * @deprecated
	 * @param \System\Char* $value
	 * @return \System\ReadOnlySpan_1
	 */
	#[MethodOverride]public static function CreateReadOnlySpanFromNullTerminated_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Byte* $value
	 * @return \System\ReadOnlySpan_1
	 */
	#[MethodOverride]public static function CreateReadOnlySpanFromNullTerminated_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlyMemory_1 $memory [generic: T]
	 * @param \TManager& &$manager
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryGetMemoryManager_1 ($memory, &$manager){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlyMemory_1 $memory [generic: T]
	 * @param \TManager& &$manager
	 * @param \System\Int32& &$start
	 * @param \System\Int32& &$length
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryGetMemoryManager_2 ($memory, &$manager, &$start, &$length){}
	/**
	 * @deprecated
	 * @param \System\Span_1 $span [generic: System\Byte]
	 * @return \T&
	 */
	#[MethodOverride]public static function AsRef_1 ($span){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $span [generic: System\Byte]
	 * @return \T&
	 */
	#[MethodOverride]public static function AsRef_2 ($span){}
}
class MemoryMarshal extends \System\Object
{
	use MemoryMarshalOverride;


	/**
	 * @uses MemoryMarshalOverride::GetArrayDataReference_1 <br>public , args: ($array)<br>
	 * @uses MemoryMarshalOverride::GetArrayDataReference_2 <br>public , args: ($array)<br>
	 * @var mixed|\override ...$args
	 * @return \T&|\System\Byte&|mixed|\override
	 */
	#[MethodOverridePublic]function GetArrayDataReference (\override ...$args){}
	/**
	 * @uses MemoryMarshalOverride::AsBytes_1 <br>public , args: ($span)<br>
	 * @uses MemoryMarshalOverride::AsBytes_2 <br>public , args: ($span)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Span_1|\System\ReadOnlySpan_1|mixed|\override
	 */
	#[MethodOverridePublic]function AsBytes (\override ...$args){}
	/**
	 * @param \System\ReadOnlyMemory_1 $memory [generic: T]
	 * @return \System\Memory_1[T]
	 */
	public static function AsMemory($memory){}
	/**
	 * @uses MemoryMarshalOverride::GetReference_1 <br>public , args: ($span)<br>
	 * @uses MemoryMarshalOverride::GetReference_2 <br>public , args: ($span)<br>
	 * @var mixed|\override ...$args
	 * @return \T&|mixed|\override
	 */
	#[MethodOverridePublic]function GetReference (\override ...$args){}
	/**
	 * @uses MemoryMarshalOverride::GetNonNullPinnableReference_1 <br>protected , args: ($span)<br>
	 * @uses MemoryMarshalOverride::GetNonNullPinnableReference_2 <br>protected , args: ($span)<br>
	 * @var mixed|\override ...$args
	 * @return \T&|mixed|\override
	 */
	#[MethodOverrideProtected]function GetNonNullPinnableReference (\override ...$args){}
	/**
	 * @uses MemoryMarshalOverride::Cast_1 <br>public , args: ($span)<br>
	 * @uses MemoryMarshalOverride::Cast_2 <br>public , args: ($span)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Span_1|\System\ReadOnlySpan_1|mixed|\override
	 */
	#[MethodOverridePublic]function Cast (\override ...$args){}
	/**
	 * @param \T& $reference
	 * @param \System\Int32|int $length
	 * @return \System\Span_1[T]
	 */
	public static function CreateSpan($reference, $length){}
	/**
	 * @param \T& $reference
	 * @param \System\Int32|int $length
	 * @return \System\ReadOnlySpan_1[T]
	 */
	public static function CreateReadOnlySpan($reference, $length){}
	/**
	 * @uses MemoryMarshalOverride::CreateReadOnlySpanFromNullTerminated_1 <br>public , args: ($value)<br>
	 * @uses MemoryMarshalOverride::CreateReadOnlySpanFromNullTerminated_2 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\ReadOnlySpan_1|mixed|\override
	 */
	#[MethodOverridePublic]function CreateReadOnlySpanFromNullTerminated (\override ...$args){}
	/**
	 * @param \System\ReadOnlyMemory_1 $memory [generic: T]
	 * @param \System\ArraySegment_1 &$segment [generic: T]
	 * @return \System\Boolean|bool
	 */
	public static function TryGetArray($memory, &$segment){}
	/**
	 * @uses MemoryMarshalOverride::TryGetMemoryManager_1 <br>public , args: ($memory, &$manager)<br>
	 * @uses MemoryMarshalOverride::TryGetMemoryManager_2 <br>public , args: ($memory, &$manager, &$start, &$length)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function TryGetMemoryManager (\override ...$args){}
	/**
	 * @param \System\ReadOnlyMemory_1 $memory [generic: T]
	 * @return \System\Collections\Generic\IEnumerable_1[T]
	 */
	public static function ToEnumerable($memory){}
	/**
	 * @param \System\ReadOnlyMemory_1 $memory [generic: System\Char]
	 * @param \System\String& &$text
	 * @param \System\Int32& &$start
	 * @param \System\Int32& &$length
	 * @return \System\Boolean|bool
	 */
	public static function TryGetString($memory, &$text, &$start, &$length){}
	/**
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Byte]
	 * @return \T|object
	 */
	public static function Read($source){}
	/**
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Byte]
	 * @param \T& &$value
	 * @return \System\Boolean|bool
	 */
	public static function TryRead($source, &$value){}
	/**
	 * @param \System\Span_1 $destination [generic: System\Byte]
	 * @param \T& $value
	 * @return \System\Void|void
	 */
	public static function Write($destination, $value){}
	/**
	 * @param \System\Span_1 $destination [generic: System\Byte]
	 * @param \T& $value
	 * @return \System\Boolean|bool
	 */
	public static function TryWrite($destination, $value){}
	/**
	 * @uses MemoryMarshalOverride::AsRef_1 <br>public , args: ($span)<br>
	 * @uses MemoryMarshalOverride::AsRef_2 <br>public , args: ($span)<br>
	 * @var mixed|\override ...$args
	 * @return \T&|mixed|\override
	 */
	#[MethodOverridePublic]function AsRef (\override ...$args){}
	/**
	 * @param \T $array
	 * @param \System\Int32|int $start
	 * @param \System\Int32|int $length
	 * @return \System\Memory_1[T]
	 */
	public static function CreateFromPinnedArray($array, $start, $length){}
}