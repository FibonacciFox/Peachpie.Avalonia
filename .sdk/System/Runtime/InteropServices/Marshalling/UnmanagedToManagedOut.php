<?php
namespace System\Runtime\InteropServices\Marshalling;
class UnmanagedToManagedOut extends \System\Object
{


	/**
	 * @param \System\ReadOnlySpan_1 $managed [generic: T]
	 * @param \System\Int32& &$numElements
	 * @return \TUnmanagedElement*
	 */
	public static function AllocateContainerForUnmanagedElements($managed, &$numElements){}
	/**
	 * @param \System\ReadOnlySpan_1 $managed [generic: T]
	 * @return \System\ReadOnlySpan_1[T]
	 */
	public static function GetManagedValuesSource($managed){}
	/**
	 * @param \TUnmanagedElement* $unmanaged
	 * @param \System\Int32|int $numElements
	 * @return \System\Span_1[TUnmanagedElement]
	 */
	public static function GetUnmanagedValuesDestination($unmanaged, $numElements){}
}