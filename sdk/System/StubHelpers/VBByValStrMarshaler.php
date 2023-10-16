<?php
namespace System\StubHelpers;
/**
 */
class VBByValStrMarshaler extends \System\Object
{
	/**
	 * @param \System\String|string $strManaged
	 * @param \System\Boolean $fBestFit
	 * @param \System\Boolean $fThrowOnUnmappableChar
	 * @param \System\Int32& $cch
	 * @return \System\IntPtr
	 */
	protected static function ConvertToNative($strManaged, $fBestFit, $fThrowOnUnmappableChar, $cch){}
	/**
	 * @param \System\IntPtr $pNative
	 * @param \System\Int32|int $cch
	 * @return \System\String|string
	 */
	protected static function ConvertToManaged($pNative, $cch){}
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
