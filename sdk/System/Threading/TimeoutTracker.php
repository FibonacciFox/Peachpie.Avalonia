<?php
namespace System\Threading;
/**
 */
class TimeoutTracker extends \System\ValueType
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $RemainingMilliseconds;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsExpired;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_RemainingMilliseconds(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsExpired(){}
}
