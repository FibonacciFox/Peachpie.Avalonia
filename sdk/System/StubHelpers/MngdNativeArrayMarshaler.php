<?php
namespace System\StubHelpers;
/**
 */
class MngdNativeArrayMarshaler extends \System\Object
{
	/**
	 * @param \System\IntPtr $pMarshalState
	 * @param \System\IntPtr $pMT
	 * @param \System\Int32|int $dwFlags
	 * @param \System\IntPtr $pManagedMarshaler
	 * @return \System\Void|void
	 */
	protected static function CreateMarshaler($pMarshalState, $pMT, $dwFlags, $pManagedMarshaler){}
	/**
	 * @param \System\IntPtr $pMarshalState
	 * @param \System\Object& $pManagedHome
	 * @param \System\IntPtr $pNativeHome
	 * @return \System\Void|void
	 */
	protected static function ConvertSpaceToNative($pMarshalState, $pManagedHome, $pNativeHome){}
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
	 * @param \System\Int32|int $cElements
	 * @return \System\Void|void
	 */
	protected static function ConvertSpaceToManaged($pMarshalState, $pManagedHome, $pNativeHome, $cElements){}
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
	 * @param \System\Int32|int $cElements
	 * @return \System\Void|void
	 */
	protected static function ClearNative($pMarshalState, $pManagedHome, $pNativeHome, $cElements){}
	/**
	 * @param \System\IntPtr $pMarshalState
	 * @param \System\Object& $pManagedHome
	 * @param \System\IntPtr $pNativeHome
	 * @param \System\Int32|int $cElements
	 * @return \System\Void|void
	 */
	protected static function ClearNativeContents($pMarshalState, $pManagedHome, $pNativeHome, $cElements){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
