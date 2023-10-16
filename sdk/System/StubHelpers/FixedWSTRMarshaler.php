<?php
namespace System\StubHelpers;
/**
 */
class FixedWSTRMarshaler extends \System\Object
{
	/**
	 * @param \System\String|string $strManaged
	 * @param \System\IntPtr $nativeHome
	 * @param \System\Int32|int $length
	 * @return \System\Void|void
	 */
	protected static function ConvertToNative($strManaged, $nativeHome, $length){}
	/**
	 * @param \System\IntPtr $nativeHome
	 * @param \System\Int32|int $length
	 * @return \System\String|string
	 */
	protected static function ConvertToManaged($nativeHome, $length){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
