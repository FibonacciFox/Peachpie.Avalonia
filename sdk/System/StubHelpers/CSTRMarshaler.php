<?php
namespace System\StubHelpers;
/**
 */
class CSTRMarshaler extends \System\Object
{
	/**
	 * @param \System\Int32|int $flags
	 * @param \System\String|string $strManaged
	 * @param \System\IntPtr $pNativeBuffer
	 * @return \System\IntPtr
	 */
	protected static function ConvertToNative($flags, $strManaged, $pNativeBuffer){}
	/**
	 * @param \System\IntPtr $cstr
	 * @return \System\String|string
	 */
	protected static function ConvertToManaged($cstr){}
	/**
	 * @param \System\Int32|int $flags
	 * @param \System\String|string $strManaged
	 * @param \System\IntPtr $pNativeBuffer
	 * @param \System\Int32|int $length
	 * @return \System\Void|void
	 */
	protected static function ConvertFixedToNative($flags, $strManaged, $pNativeBuffer, $length){}
	/**
	 * @param \System\IntPtr $cstr
	 * @param \System\Int32|int $length
	 * @return \System\String|string
	 */
	protected static function ConvertFixedToManaged($cstr, $length){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
