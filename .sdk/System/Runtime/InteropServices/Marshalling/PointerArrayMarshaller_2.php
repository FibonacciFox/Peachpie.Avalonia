<?php
namespace System\Runtime\InteropServices\Marshalling;
class PointerArrayMarshaller_2 extends \System\Object
{

	/**
	 * @param \T* $managed
	 * @param \System\Int32& &$numElements
	 * @return \TUnmanagedElement*
	 */
	public static function AllocateContainerForUnmanagedElements($managed, &$numElements){}
	/**
	 * @param \T* $managed
	 * @return \System\ReadOnlySpan_1[System\IntPtr]
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
	 * @return \T*[]
	 */
	public static function AllocateContainerForManagedElements($unmanaged, $numElements){}
	/**
	 * @param \T* $managed
	 * @return \System\Span_1[System\IntPtr]
	 */
	public static function GetManagedValuesDestination($managed){}
	/**
	 * @param \TUnmanagedElement* $unmanagedValue
	 * @param \System\Int32|int $numElements
	 * @return \System\ReadOnlySpan_1[TUnmanagedElement]
	 */
	public static function GetUnmanagedValuesSource($unmanagedValue, $numElements){}
	/**
	 * @param \TUnmanagedElement* $unmanaged
	 * @return \System\Void|void
	 */
	public static function Free($unmanaged){}
}