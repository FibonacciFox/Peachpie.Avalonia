<?php
namespace System\Runtime\InteropServices\CustomMarshalers;
/**
 */
class ExpandoToDispatchExMarshaler extends \System\Object implements 
	\System\Runtime\InteropServices\ICustomMarshaler
{
	/**
	 * @param \System\String|string $cookie
	 * @return \System\Runtime\InteropServices\ICustomMarshaler
	 */
	public static function GetInstance($cookie){}
	/**
	 * @param \System\Object|object $ManagedObj
	 * @return \System\Void|void
	 */
	public  function CleanUpManagedData($ManagedObj){}
	/**
	 * @param \System\IntPtr $pNativeData
	 * @return \System\Void|void
	 */
	public  function CleanUpNativeData($pNativeData){}
	/**
	 * @return \System\Int32|int
	 */
	public  function GetNativeDataSize(){}
	/**
	 * @param \System\Object|object $ManagedObj
	 * @return \System\IntPtr
	 */
	public  function MarshalManagedToNative($ManagedObj){}
	/**
	 * @param \System\IntPtr $pNativeData
	 * @return \System\Object|object
	 */
	public  function MarshalNativeToManaged($pNativeData){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
