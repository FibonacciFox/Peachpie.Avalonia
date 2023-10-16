<?php
namespace System\Threading;
/**
 */
class TimerQueue extends \System\Object implements 
	\System\Threading\IThreadPoolWorkItem
{
	/**
	 * @var \System\ValueTuple_2[System\Int64,System\DateTime]
	 * @field
	 */
	protected readonly $s_tickCountToTimeMap;
	/**
	 * @var \System\Threading\TimerQueue[]
	 * @property
	 */
	public readonly $Instances;
	/**
	 * @var \System\Int64
	 * @property
	 */
	public $ActiveCount;
	/**
	 * @return \System\Threading\TimerQueue[]
	 */
	public static function get_Instances(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateTimerQueues(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_CountForDebugger(){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	protected  function GetTimersForDebugger(){}
	/**
	 * @param \System\UInt32 $requestedDuration
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function EnsureTimerFiresBy($requestedDuration){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function FireNextTimers(){}
	/**
	 * @return \System\Int64|int
	 */
	public  function get_ActiveCount(){}
	/**
	 * @param \System\Int64|int $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_ActiveCount($value){}
	/**
	 * @param \System\Threading\TimerQueueTimer $timer
	 * @param \System\UInt32 $dueTime
	 * @param \System\UInt32 $period
	 * @return \System\Boolean
	 */
	public  function UpdateTimer($timer, $dueTime, $period){}
	/**
	 * @param \System\Threading\TimerQueueTimer $timer
	 * @param \System\Boolean $shortList
	 * @return \System\Void|void
	 */
	public  function MoveTimerToCorrectList($timer, $shortList){}
	/**
	 * @param \System\Threading\TimerQueueTimer $timer
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function LinkTimer($timer){}
	/**
	 * @param \System\Threading\TimerQueueTimer $timer
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function UnlinkTimer($timer){}
	/**
	 * @param \System\Threading\TimerQueueTimer $timer
	 * @return \System\Void|void
	 */
	public  function DeleteTimer($timer){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InitializeScheduledTimerManager_Locked(){}
	/**
	 * @param \System\UInt32 $actualDuration
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetTimer($actualDuration){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TimerThread(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Execute(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_TickCount64(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
