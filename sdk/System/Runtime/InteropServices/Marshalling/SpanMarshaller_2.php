<?php
namespace System\Runtime\InteropServices\Marshalling;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class SpanMarshaller_2 extends \System\Object
{
	/**
	 * @param \System\Span_1 $managed
	 * @param \System\Int32& $numElements
	 * @return \System\Runtime\InteropServices\Marshalling\TUnmanagedElement*
	 */
	public static function AllocateContainerForUnmanagedElements($managed, $numElements){}
	/**
	 * @param \System\Span_1 $managed
	 * @return \System\ReadOnlySpan_1
	 */
	public static function GetManagedValuesSource($managed){}
	/**
	 * @param \System\Runtime\InteropServices\Marshalling\TUnmanagedElement* $unmanaged
	 * @param \System\Int32|int $numElements
	 * @return \System\Span_1
	 */
	public static function GetUnmanagedValuesDestination($unmanaged, $numElements){}
	/**
	 * @param \System\Runtime\InteropServices\Marshalling\TUnmanagedElement* $unmanaged
	 * @param \System\Int32|int $numElements
	 * @return \System\Span_1
	 */
	public static function AllocateContainerForManagedElements($unmanaged, $numElements){}
	/**
	 * @param \System\Span_1 $managed
	 * @return \System\Span_1
	 */
	public static function GetManagedValuesDestination($managed){}
	/**
	 * @param \System\Runtime\InteropServices\Marshalling\TUnmanagedElement* $unmanaged
	 * @param \System\Int32|int $numElements
	 * @return \System\ReadOnlySpan_1
	 */
	public static function GetUnmanagedValuesSource($unmanaged, $numElements){}
	/**
	 * @param \System\Runtime\InteropServices\Marshalling\TUnmanagedElement* $unmanaged
	 * @return \System\Void|void
	 */
	public static function Free($unmanaged){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
