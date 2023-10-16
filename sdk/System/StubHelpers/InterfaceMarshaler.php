<?php
namespace System\StubHelpers;
/**
 */
class InterfaceMarshaler extends \System\Object
{
	/**
	 * @param \System\Object|object $objSrc
	 * @param \System\IntPtr $itfMT
	 * @param \System\IntPtr $classMT
	 * @param \System\Int32|int $flags
	 * @return \System\IntPtr
	 */
	protected static function ConvertToNative($objSrc, $itfMT, $classMT, $flags){}
	/**
	 * @param \System\IntPtr& $ppUnk
	 * @param \System\IntPtr $itfMT
	 * @param \System\IntPtr $classMT
	 * @param \System\Int32|int $flags
	 * @return \System\Object|object
	 */
	protected static function ConvertToManaged($ppUnk, $itfMT, $classMT, $flags){}
	/**
	 * @param \System\IntPtr $pUnk
	 * @return \System\Void|void
	 */
	protected static function ClearNative($pUnk){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
