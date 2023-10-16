<?php
namespace System\StubHelpers;
/**
 */
class MngdRefCustomMarshaler extends \System\Object
{
	/**
	 * @param \System\IntPtr $pMarshalState
	 * @param \System\IntPtr $pCMHelper
	 * @return \System\Void|void
	 */
	protected static function CreateMarshaler($pMarshalState, $pCMHelper){}
	/**
	 * @param \System\IntPtr $pMarshalState
	 * @param \System\Object& $pManagedHome
	 * @param \System\IntPtr $pNativeHome
	 * @return \System\Void|void
	 */
	protected static function ConvertContentsToNative($pMarshalState, $pManagedHome, $pNativeHome){}
	/**
	 * @param \System\IntPtr $pMarshalState
	 * @param \System\Object& $pManagedHome
	 * @param \System\IntPtr $pNativeHome
	 * @return \System\Void|void
	 */
	protected static function ConvertContentsToManaged($pMarshalState, $pManagedHome, $pNativeHome){}
	/**
	 * @param \System\IntPtr $pMarshalState
	 * @param \System\Object& $pManagedHome
	 * @param \System\IntPtr $pNativeHome
	 * @return \System\Void|void
	 */
	protected static function ClearNative($pMarshalState, $pManagedHome, $pNativeHome){}
	/**
	 * @param \System\IntPtr $pMarshalState
	 * @param \System\Object& $pManagedHome
	 * @param \System\IntPtr $pNativeHome
	 * @return \System\Void|void
	 */
	protected static function ClearManaged($pMarshalState, $pManagedHome, $pNativeHome){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
