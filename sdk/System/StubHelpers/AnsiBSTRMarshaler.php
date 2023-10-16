<?php
namespace System\StubHelpers;
/**
 */
class AnsiBSTRMarshaler extends \System\Object
{
	/**
	 * @param \System\Int32|int $flags
	 * @param \System\String|string $strManaged
	 * @return \System\IntPtr
	 */
	protected static function ConvertToNative($flags, $strManaged){}
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
