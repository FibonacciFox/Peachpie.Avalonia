<?php
namespace System\StubHelpers;
/**
 */
class ObjectMarshaler extends \System\Object
{
	/**
	 * @param \System\Object|object $objSrc
	 * @param \System\IntPtr $pDstVariant
	 * @return \System\Void|void
	 */
	protected static function ConvertToNative($objSrc, $pDstVariant){}
	/**
	 * @param \System\IntPtr $pSrcVariant
	 * @return \System\Object|object
	 */
	protected static function ConvertToManaged($pSrcVariant){}
	/**
	 * @param \System\IntPtr $pVariant
	 * @return \System\Void|void
	 */
	protected static function ClearNative($pVariant){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
