<?php
namespace System\Threading;
/**
 */
class ThreadLocalLockEntry extends \System\Object
{
	/**
	 * @var \System\UInt16
	 * @field
	 */
	public $_readerLevel;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsFree;
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsFree(){}
	/**
	 * @param \System\Int64|int $lockID
	 * @return \System\Threading\ThreadLocalLockEntry
	 */
	public static function GetCurrent($lockID){}
	/**
	 * @param \System\Int64|int $lockID
	 * @return \System\Threading\ThreadLocalLockEntry
	 */
	public static function GetOrCreateCurrent($lockID){}
	/**
	 * @param \System\Int64|int $lockID
	 * @param \System\Threading\ThreadLocalLockEntry $headEntry
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetOrCreateCurrentSlow($lockID, $headEntry){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
