<?php
namespace System\Threading;
final class DelayHelper extends \System\ValueType
{
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $HasBlockingAdjustmentDelay;
	/**
	 * @param \System\Int32|int $currentTimeMs
	 * @return \System\Void|void
	 */
	public function SetGateActivitiesTime($currentTimeMs){}
	/**
	 * @param \System\Int32|int $currentTimeMs
	 * @param \System\UInt32 $delayMs
	 * @return \System\Void|void
	 */
	public function SetBlockingAdjustmentTimeAndDelay($currentTimeMs, $delayMs){}
	/**
	 * @return \System\Void|void
	 */
	public function ClearBlockingAdjustmentDelay(){}
	/**
	 * @param \System\Int32|int $currentTimeMs
	 * @return \System\UInt32
	 */
	public function GetNextDelay($currentTimeMs){}
	/**
	 * @param \System\Int32|int $currentTimeMs
	 * @param \System\Boolean|bool $wasSignaledToWake
	 * @return \System\Boolean|bool
	 */
	public function ShouldPerformGateActivities($currentTimeMs, $wasSignaledToWake){}
	/**
	 * @param \System\Int32|int $currentTimeMs
	 * @param \System\Boolean|bool $wasSignaledToWake
	 * @return \System\Boolean|bool
	 */
	public function HasBlockingAdjustmentDelayElapsed($currentTimeMs, $wasSignaledToWake){}
}