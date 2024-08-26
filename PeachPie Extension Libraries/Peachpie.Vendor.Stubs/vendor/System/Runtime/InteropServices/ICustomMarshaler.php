<?php
namespace System\Runtime\InteropServices;
interface ICustomMarshaler
{

	/**
	 * @param \System\IntPtr $pNativeData
	 * @return \System\Object|object
	 */
	public function MarshalNativeToManaged($pNativeData);
	/**
	 * @param \System\Object|object $ManagedObj
	 * @return \System\IntPtr
	 */
	public function MarshalManagedToNative($ManagedObj);
	/**
	 * @param \System\IntPtr $pNativeData
	 * @return \System\Void|void
	 */
	public function CleanUpNativeData($pNativeData);
	/**
	 * @param \System\Object|object $ManagedObj
	 * @return \System\Void|void
	 */
	public function CleanUpManagedData($ManagedObj);
	/**
	 * @return \System\Int32|int
	 */
	public function GetNativeDataSize();
}