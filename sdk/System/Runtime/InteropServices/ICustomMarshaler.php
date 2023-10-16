<?php
namespace System\Runtime\InteropServices;
/**
 */
interface ICustomMarshaler
{
	/**
	 * @param \System\IntPtr $pNativeData
	 */
	public function MarshalNativeToManaged($pNativeData);
	/**
	 * @param \System\Object|object $ManagedObj
	 */
	public function MarshalManagedToNative($ManagedObj);
	/**
	 * @param \System\IntPtr $pNativeData
	 */
	public function CleanUpNativeData($pNativeData);
	/**
	 * @param \System\Object|object $ManagedObj
	 */
	public function CleanUpManagedData($ManagedObj);
	/**
	 */
	public function GetNativeDataSize();
}
