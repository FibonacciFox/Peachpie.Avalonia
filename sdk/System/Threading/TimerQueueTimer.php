<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait TimerQueueTimerMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Close_1(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Close_2($toSignal){}
}
/**
 */
class TimerQueueTimer extends \System\Object implements 
	\System\Threading\IThreadPoolWorkItem
{
	/**
	 * @var \System\Threading\TimerQueueTimer
	 * @field
	 */
	protected $_next;
	/**
	 * @var \System\Threading\TimerQueueTimer
	 * @field
	 */
	protected $_prev;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	protected $_short;
	/**
	 * @var \System\Int64
	 * @field
	 */
	protected $_startTicks;
	/**
	 * @var \System\UInt32
	 * @field
	 */
	protected $_dueTime;
	/**
	 * @var \System\UInt32
	 * @field
	 */
	protected $_period;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	protected $_everQueued;
	/**
	 * @return \System\String|string
	 */
	protected  function get_DisplayString(){}
	/**
	 * @param \System\UInt32 $dueTime
	 * @param \System\UInt32 $period
	 * @param \System\Boolean $throwIfDisposed
	 * @return \System\Boolean
	 */
	protected  function Change($dueTime, $period, $throwIfDisposed){}
	/**
	 * @uses TimerQueueTimerMethodsOverride::Close_1 ()
	 * @uses TimerQueueTimerMethodsOverride::Close_2 ($toSignal)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Close(mixed ...$args){}
	/**
	 * @return \System\Threading\Tasks\ValueTask
	 */
	public  function CloseAsync(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Execute(){}
	/**
	 * @param \System\Boolean $isThreadPool
	 * @return \System\Void|void
	 */
	protected  function Fire($isThreadPool){}
	/**
	 * @return \System\Void|void
	 */
	protected  function SignalNoCallbacksRunning(){}
	/**
	 * @param \System\Boolean $isThreadPool
	 * @return \System\Void|void
	 */
	protected  function CallCallback($isThreadPool){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
