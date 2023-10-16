<?php
namespace System\StubHelpers;
/**
 */
class UTF8BufferMarshaler extends \System\Object
{
	/**
	 * @param \System\Text\StringBuilder $sb
	 * @param \System\IntPtr $pNativeBuffer
	 * @param \System\Int32|int $flags
	 * @return \System\IntPtr
	 */
	protected static function ConvertToNative($sb, $pNativeBuffer, $flags){}
	/**
	 * @param \System\Text\StringBuilder $sb
	 * @param \System\IntPtr $pNative
	 * @return \System\Void|void
	 */
	protected static function ConvertToManaged($sb, $pNative){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
