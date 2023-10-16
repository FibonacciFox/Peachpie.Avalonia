<?php
namespace System\Runtime\InteropServices\Marshalling;
/**
 */
class UnmanagedToManagedOut extends \System\Object
{
	/**
	 * @param \System\ReadOnlySpan_1 $managed
	 * @param \System\Int32& $numElements
	 * @return \System\Runtime\InteropServices\Marshalling\TUnmanagedElement*
	 */
	public static function AllocateContainerForUnmanagedElements($managed, $numElements){}
	/**
	 * @param \System\ReadOnlySpan_1 $managed
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
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
