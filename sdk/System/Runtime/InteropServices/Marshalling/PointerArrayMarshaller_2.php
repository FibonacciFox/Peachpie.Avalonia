<?php
namespace System\Runtime\InteropServices\Marshalling;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class PointerArrayMarshaller_2 extends \System\Object
{
	/**
	 * @param \System\Runtime\InteropServices\Marshalling\T*[] $managed
	 * @param \System\Int32& $numElements
	 * @return \System\Runtime\InteropServices\Marshalling\TUnmanagedElement*
	 */
	public static function AllocateContainerForUnmanagedElements($managed, $numElements){}
	/**
	 * @param \System\Runtime\InteropServices\Marshalling\T*[] $managed
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
	 * @return \System\Runtime\InteropServices\Marshalling\T*[]
	 */
	public static function AllocateContainerForManagedElements($unmanaged, $numElements){}
	/**
	 * @param \System\Runtime\InteropServices\Marshalling\T*[] $managed
	 * @return \System\Span_1
	 */
	public static function GetManagedValuesDestination($managed){}
	/**
	 * @param \System\Runtime\InteropServices\Marshalling\TUnmanagedElement* $unmanagedValue
	 * @param \System\Int32|int $numElements
	 * @return \System\ReadOnlySpan_1
	 */
	public static function GetUnmanagedValuesSource($unmanagedValue, $numElements){}
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
