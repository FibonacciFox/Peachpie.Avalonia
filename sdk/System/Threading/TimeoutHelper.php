<?php
namespace System\Threading;
/**
 */
class TimeoutHelper extends \System\Object
{
	/**
	 * @return \System\UInt32
	 */
	public static function GetTime(){}
	/**
	 * @param \System\UInt32 $startTime
	 * @param \System\Int32|int $originalWaitMillisecondsTimeout
	 * @return \System\Int32|int
	 */
	public static function UpdateTimeOut($startTime, $originalWaitMillisecondsTimeout){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
