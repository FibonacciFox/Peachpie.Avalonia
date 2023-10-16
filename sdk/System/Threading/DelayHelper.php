<?php
namespace System\Threading;
/**
 */
class DelayHelper extends \System\ValueType
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $HasBlockingAdjustmentDelay;
	/**
	 * @param \System\Int32|int $currentTimeMs
	 * @return \System\Void|void
	 */
	public  function SetGateActivitiesTime($currentTimeMs){}
	/**
	 * @param \System\Int32|int $currentTimeMs
	 * @param \System\UInt32 $delayMs
	 * @return \System\Void|void
	 */
	public  function SetBlockingAdjustmentTimeAndDelay($currentTimeMs, $delayMs){}
	/**
	 * @return \System\Void|void
	 */
	public  function ClearBlockingAdjustmentDelay(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_HasBlockingAdjustmentDelay(){}
	/**
	 * @param \System\Int32|int $currentTimeMs
	 * @return \System\UInt32
	 */
	public  function GetNextDelay($currentTimeMs){}
	/**
	 * @param \System\Int32|int $currentTimeMs
	 * @param \System\Boolean $wasSignaledToWake
	 * @return \System\Boolean
	 */
	public  function ShouldPerformGateActivities($currentTimeMs, $wasSignaledToWake){}
	/**
	 * @param \System\Int32|int $currentTimeMs
	 * @param \System\Boolean $wasSignaledToWake
	 * @return \System\Boolean
	 */
	public  function HasBlockingAdjustmentDelayElapsed($currentTimeMs, $wasSignaledToWake){}
}
