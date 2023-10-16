<?php
namespace System\Runtime\InteropServices\Marshalling;
/**
 */
class Utf16StringMarshaller extends \System\Object
{
	/**
	 * @param \System\String|string $managed
	 * @return \System\UInt16*
	 */
	public static function ConvertToUnmanaged($managed){}
	/**
	 * @param \System\UInt16* $unmanaged
	 * @return \System\String|string
	 */
	public static function ConvertToManaged($unmanaged){}
	/**
	 * @param \System\UInt16* $unmanaged
	 * @return \System\Void|void
	 */
	public static function Free($unmanaged){}
	/**
	 * @param \System\String|string $str
	 * @return \System\Char&
	 */
	public static function GetPinnableReference($str){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
