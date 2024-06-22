<?php
namespace System\Threading;
class LocalDataStore extends \System\Object
{


	/**
	 * @return \System\LocalDataStoreSlot
	 */
	public static function AllocateSlot(){}
	private static function EnsureNameToSlotMap(){}
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
	private static function GetThreadLocal($slot){}
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
}