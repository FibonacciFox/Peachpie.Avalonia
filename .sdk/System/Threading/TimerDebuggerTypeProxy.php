<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait TimerQueueTimerOverride {
	/**
	 * @param \System\Threading\Timer $timer
	 */
	#[MethodOverride]public function __construct_1 ($timer){}
	/**
	 * @param \System\Threading\TimerQueueTimer $timer
	 */
	#[MethodOverride]public function __construct_2 ($timer){}
}
final class TimerDebuggerTypeProxy extends \System\Object
{
	use TimerQueueTimerOverride;

	/**
	 * @property
	 * @var \System\Nullable_1[System\DateTime]
	 * @since readonly
	 */
	public $EstimatedNextTimeUtc;
	/**
	 * @property
	 * @var \System\Nullable_1[System\TimeSpan]
	 * @since readonly
	 */
	public $DueTime;
	/**
	 * @property
	 * @var \System\Nullable_1[System\TimeSpan]
	 * @since readonly
	 */
	public $Period;
	/**
	 * @property
	 * @var \System\Threading\TimerCallback
	 * @since readonly
	 */
	public $Callback;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $State;
	/**
	 * @uses TimerDebuggerTypeProxyOverride::__construct_1 <br>public , args: ($timer)<br>
	 * @uses TimerDebuggerTypeProxyOverride::__construct_2 <br>public , args: ($timer)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}