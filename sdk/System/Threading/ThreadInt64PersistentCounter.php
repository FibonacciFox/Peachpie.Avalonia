<?php
namespace System\Threading;
/**
 */
class ThreadInt64PersistentCounter extends \System\Object
{
	/**
	 * @var \System\Int64
	 * @property
	 */
	public readonly $Count;
	/**
	 * @param \System\Object|object $threadLocalCountObject
	 * @return \System\Void|void
	 */
	public static function Increment($threadLocalCountObject){}
	/**
	 * @param \System\Object|object $threadLocalCountObject
	 * @param \System\UInt32 $count
	 * @return \System\Void|void
	 */
	public static function Add($threadLocalCountObject, $count){}
	/**
	 * @return \System\Object|object
	 */
	public  function CreateThreadLocalCountObject(){}
	/**
	 * @return \System\Int64|int
	 */
	public  function get_Count(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
