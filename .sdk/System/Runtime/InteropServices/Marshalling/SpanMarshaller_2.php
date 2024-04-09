<?php
namespace System\Runtime\InteropServices\Marshalling;
class SpanMarshaller_2 extends \System\Object
{

	/**
	 * @param \System\Span_1 $managed [generic: T]
	 * @param \System\Int32& &$numElements
	 * @return \TUnmanagedElement*
	 */
	public static function AllocateContainerForUnmanagedElements($managed, &$numElements){}
	/**
	 * @param \System\Span_1 $managed [generic: T]
	 * @return \System\ReadOnlySpan_1[T]
	 */
	public static function GetManagedValuesSource($managed){}
	/**
	 * @param \TUnmanagedElement* $unmanaged
	 * @param \System\Int32|int $numElements
	 * @return \System\Span_1[TUnmanagedElement]
	 */
	public static function GetUnmanagedValuesDestination($unmanaged, $numElements){}
	/**
	 * @param \TUnmanagedElement* $unmanaged
	 * @param \System\Int32|int $numElements
	 * @return \System\Span_1[T]
	 */
	public static function AllocateContainerForManagedElements($unmanaged, $numElements){}
	/**
	 * @param \System\Span_1 $managed [generic: T]
	 * @return \System\Span_1[T]
	 */
	public static function GetManagedValuesDestination($managed){}
	/**
	 * @param \TUnmanagedElement* $unmanaged
	 * @param \System\Int32|int $numElements
	 * @return \System\ReadOnlySpan_1[TUnmanagedElement]
	 */
	public static function GetUnmanagedValuesSource($unmanaged, $numElements){}
	/**
	 * @param \TUnmanagedElement* $unmanaged
	 * @return \System\Void|void
	 */
	public static function Free($unmanaged){}
}