<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait TimerQueueTimerOverride {
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Close_1 (){}
	/**
	 * @deprecated
	 * @param \System\Threading\WaitHandle $toSignal
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function Close_2 ($toSignal){}
}
final class TimerQueueTimer extends \System\Object implements
	\System\Threading\IThreadPoolWorkItem
{
	use TimerQueueTimerOverride;

	/**
	 * @field
	 * @var \System\Threading\TimerQueueTimer
	 */
	protected $_next;
	/**
	 * @field
	 * @var \System\Threading\TimerQueueTimer
	 */
	protected $_prev;
	/**
	 * @field
	 * @var \System\Boolean|bool
	 */
	protected $_short;
	/**
	 * @field
	 * @var \System\Int64|int
	 */
	protected $_startTicks;
	/**
	 * @field
	 * @var \System\UInt32
	 */
	protected $_dueTime;
	/**
	 * @field
	 * @var \System\UInt32
	 */
	protected $_period;
	/**
	 * @field
	 * @var \System\Boolean|bool
	 */
	protected $_everQueued;
	/**
	 * @param \System\UInt32 $dueTime
	 * @param \System\UInt32 $period
	 * @param \System\Boolean|bool $throwIfDisposed
	 * @return \System\Boolean|bool
	 */
	protected function Change($dueTime, $period, $throwIfDisposed){}
	/**
	 * @uses TimerQueueTimerOverride::Close_1 <br>public , args: ()<br>
	 * @uses TimerQueueTimerOverride::Close_2 <br>public , args: ($toSignal)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|\System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function Close (\override ...$args){}
	/**
	 * @return \System\Threading\Tasks\ValueTask
	 */
	public function CloseAsync(){}
	private function Execute(){}
	/**
	 * @param \System\Boolean|bool $isThreadPool
	 * @return \System\Void|void
	 */
	protected function Fire($isThreadPool){}
	/**
	 * @return \System\Void|void
	 */
	protected function SignalNoCallbacksRunning(){}
	/**
	 * @param \System\Boolean|bool $isThreadPool
	 * @return \System\Void|void
	 */
	protected function CallCallback($isThreadPool){}
}