<?php
namespace System\StubHelpers;
/**
 */
class AnsiCharMarshaler extends \System\Object
{
	/**
	 * @param \System\String|string $str
	 * @param \System\Boolean $fBestFit
	 * @param \System\Boolean $fThrowOnUnmappableChar
	 * @param \System\Int32& $cbLength
	 * @return \System\Byte[]
	 */
	protected static function DoAnsiConversion($str, $fBestFit, $fThrowOnUnmappableChar, $cbLength){}
	/**
	 * @param \System\Char $managedChar
	 * @param \System\Boolean $fBestFit
	 * @param \System\Boolean $fThrowOnUnmappableChar
	 * @return \System\Byte
	 */
	protected static function ConvertToNative($managedChar, $fBestFit, $fThrowOnUnmappableChar){}
	/**
	 * @param \System\Byte $nativeChar
	 * @return \System\Char
	 */
	protected static function ConvertToManaged($nativeChar){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
