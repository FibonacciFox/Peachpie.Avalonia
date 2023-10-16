<?php
namespace System\Threading;
/**
 */
class TimerDebuggerTypeProxy extends \System\Object
{
	/**
	 * @var \System\Nullable_1[System\DateTime]
	 * @property
	 */
	public readonly $EstimatedNextTimeUtc;
	/**
	 * @var \System\Nullable_1[System\TimeSpan]
	 * @property
	 */
	public readonly $DueTime;
	/**
	 * @var \System\Nullable_1[System\TimeSpan]
	 * @property
	 */
	public readonly $Period;
	/**
	 * @var \System\Threading\TimerCallback
	 * @property
	 */
	public readonly $Callback;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $State;
	/**
	 * @return \System\Nullable_1
	 */
	public  function get_EstimatedNextTimeUtc(){}
	/**
	 * @return \System\Nullable_1
	 */
	public  function get_DueTime(){}
	/**
	 * @return \System\Nullable_1
	 */
	public  function get_Period(){}
	/**
	 * @return \System\Threading\TimerCallback
	 */
	public  function get_Callback(){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_State(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
