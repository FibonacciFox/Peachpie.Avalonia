<?php
namespace System\Threading;
/**
 */
class LocalDataStore extends \System\Object
{
	/**
	 * @return \System\LocalDataStoreSlot
	 */
	public static function AllocateSlot(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function EnsureNameToSlotMap(){}
	/**
	 * @param \System\String|string $name
	 * @return \System\LocalDataStoreSlot
	 */
	public static function AllocateNamedSlot($name){}
	/**
	 * @param \System\String|string $name
	 * @return \System\LocalDataStoreSlot
	 */
	public static function GetNamedSlot($name){}
	/**
	 * @param \System\String|string $name
	 * @return \System\Void|void
	 */
	public static function FreeNamedSlot($name){}
	/**
	 * @param \System\LocalDataStoreSlot $slot
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetThreadLocal($slot){}
	/**
	 * @param \System\LocalDataStoreSlot $slot
	 * @return \System\Object|object
	 */
	public static function GetData($slot){}
	/**
	 * @param \System\LocalDataStoreSlot $slot
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public static function SetData($slot, $value){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
