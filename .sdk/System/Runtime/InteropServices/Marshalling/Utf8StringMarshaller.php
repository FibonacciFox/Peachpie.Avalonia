<?php
namespace System\Runtime\InteropServices\Marshalling;
class Utf8StringMarshaller extends \System\Object
{

	/**
	 * @param \System\String|string $managed
	 * @return \System\Byte*
	 */
	public static function ConvertToUnmanaged($managed){}
	/**
	 * @param \System\Byte* $unmanaged
	 * @return \System\String|string
	 */
	public static function ConvertToManaged($unmanaged){}
	/**
	 * @param \System\Byte* $unmanaged
	 * @return \System\Void|void
	 */
	public static function Free($unmanaged){}
}