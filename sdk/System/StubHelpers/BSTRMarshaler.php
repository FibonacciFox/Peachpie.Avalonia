<?php
namespace System\StubHelpers;
/**
 */
class BSTRMarshaler extends \System\Object
{
	/**
	 * @param \System\String|string $strManaged
	 * @param \System\IntPtr $pNativeBuffer
	 * @return \System\IntPtr
	 */
	protected static function ConvertToNative($strManaged, $pNativeBuffer){}
	/**
	 * @param \System\IntPtr $bstr
	 * @return \System\String|string
	 */
	protected static function ConvertToManaged($bstr){}
	/**
	 * @param \System\IntPtr $pNative
	 * @return \System\Void|void
	 */
	protected static function ClearNative($pNative){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
