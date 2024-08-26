<?php
namespace System\Threading;
final class TimerQueue extends \System\Object implements
	\System\Threading\IThreadPoolWorkItem
{
	/**
	 * @field
	 * @since readonly
	 * @var \System\ValueTuple_2[System\Int64,System\DateTime]
	 */
	protected static $s_tickCountToTimeMap;
	/**
	 * @property
	 * @var \System\Threading\TimerQueue[]
	 * @since readonly
	 */
	public $Instances;
	/**
	 * @property
	 * @var \System\Int64|int
	 */
	public $ActiveCount;
	private static function CreateTimerQueues(){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1[System\Threading\TimerQueueTimer]
	 */
	protected function GetTimersForDebugger(){}
	private function EnsureTimerFiresBy($requestedDuration){}
	private function FireNextTimers(){}
	/**
	 * @param \System\Threading\TimerQueueTimer $timer
	 * @param \System\UInt32 $dueTime
	 * @param \System\UInt32 $period
	 * @return \System\Boolean|bool
	 */
	public function UpdateTimer($timer, $dueTime, $period){}
	/**
	 * @param \System\Threading\TimerQueueTimer $timer
	 * @param \System\Boolean|bool $shortList
	 * @return \System\Void|void
	 */
	public function MoveTimerToCorrectList($timer, $shortList){}
	private function LinkTimer($timer){}
	private function UnlinkTimer($timer){}
	/**
	 * @param \System\Threading\TimerQueueTimer $timer
	 * @return \System\Void|void
	 */
	public function DeleteTimer($timer){}
	private static function InitializeScheduledTimerManager_Locked(){}
	private function SetTimer($actualDuration){}
	private static function TimerThread(){}
	private function Execute(){}
}