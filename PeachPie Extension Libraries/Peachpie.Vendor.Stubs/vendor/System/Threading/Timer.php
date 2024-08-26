<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait TimerOverride {
	/**
	 * @deprecated
	 * @param \System\Int32|int $dueTime
	 * @param \System\Int32|int $period
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function Change_1 ($dueTime, $period){}
	/**
	 * @deprecated
	 * @param \System\TimeSpan $dueTime
	 * @param \System\TimeSpan $period
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function Change_2 ($dueTime, $period){}
	/**
	 * @deprecated
	 * @param \System\UInt32 $dueTime
	 * @param \System\UInt32 $period
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function Change_3 ($dueTime, $period){}
	/**
	 * @deprecated
	 * @param \System\Int64|int $dueTime
	 * @param \System\Int64|int $period
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function Change_4 ($dueTime, $period){}
	/**
	 * @deprecated
	 * @param \System\Threading\WaitHandle $notifyObject
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function Dispose_1 ($notifyObject){}
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Dispose_2 (){}
	/**
	 * @param \System\Threading\TimerCallback $callback
	 * @param \System\Object|object $state
	 * @param \System\Int32|int $dueTime
	 * @param \System\Int32|int $period
	 */
	#[MethodOverride]public function __construct_1 ($callback, $state, $dueTime, $period){}
	/**
	 * @param \System\Threading\TimerCallback $callback
	 * @param \System\Object|object $state
	 * @param \System\TimeSpan $dueTime
	 * @param \System\TimeSpan $period
	 */
	#[MethodOverride]public function __construct_2 ($callback, $state, $dueTime, $period){}
	/**
	 * @param \System\Threading\TimerCallback $callback
	 * @param \System\Object|object $state
	 * @param \System\UInt32 $dueTime
	 * @param \System\UInt32 $period
	 */
	#[MethodOverride]public function __construct_3 ($callback, $state, $dueTime, $period){}
	/**
	 * @param \System\Threading\TimerCallback $callback
	 * @param \System\Object|object $state
	 * @param \System\Int64|int $dueTime
	 * @param \System\Int64|int $period
	 */
	#[MethodOverride]public function __construct_4 ($callback, $state, $dueTime, $period){}
	/**
	 * @param \System\Threading\TimerCallback $callback
	 */
	#[MethodOverride]public function __construct_5 ($callback){}
}
final class Timer extends \System\MarshalByRefObject implements
	\System\IDisposable,
	\System\IAsyncDisposable
{
	use TimerOverride;
	/**
	 * @field
	 * @var \System\Threading\TimerHolder
	 */
	protected $_timer;
	/**
	 * @property
	 * @var \System\Int64|int
	 * @since readonly
	 */
	public $ActiveCount;
	private function TimerSetup($callback, $state, $dueTime, $period, $flowExecutionContext){}
	/**
	 * @uses TimerOverride::Change_1 <br>public , args: ($dueTime, $period)<br>
	 * @uses TimerOverride::Change_2 <br>public , args: ($dueTime, $period)<br>
	 * @uses TimerOverride::Change_3 <br>public , args: ($dueTime, $period)<br>
	 * @uses TimerOverride::Change_4 <br>public , args: ($dueTime, $period)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function Change (\override ...$args){}
	/**
	 * @uses TimerOverride::Dispose_1 <br>public , args: ($notifyObject)<br>
	 * @uses TimerOverride::Dispose_2 <br>public , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|\System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Dispose (\override ...$args){}
	/**
	 * @return \System\Threading\Tasks\ValueTask
	 */
	public function DisposeAsync(){}
	/**
	 * @uses TimerOverride::__construct_1 <br>public , args: ($callback, $state, $dueTime, $period)<br>
	 * @uses TimerOverride::__construct_2 <br>public , args: ($callback, $state, $dueTime, $period)<br>
	 * @uses TimerOverride::__construct_3 <br>public , args: ($callback, $state, $dueTime, $period)<br>
	 * @uses TimerOverride::__construct_4 <br>public , args: ($callback, $state, $dueTime, $period)<br>
	 * @uses TimerOverride::__construct_5 <br>public , args: ($callback)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}