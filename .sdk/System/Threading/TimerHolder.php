<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait TimerHolderOverride {
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Close_1 (){}
	/**
	 * @deprecated
	 * @param \System\Threading\WaitHandle $notifyObject
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function Close_2 ($notifyObject){}
}
final class TimerHolder extends \System\Object
{
	use TimerHolderOverride;

	/**
	 * @field
	 * @since readonly
	 * @var \System\Threading\TimerQueueTimer
	 */
	protected $_timer;
	/**
	 * @uses TimerHolderOverride::Close_1 <br>public , args: ()<br>
	 * @uses TimerHolderOverride::Close_2 <br>public , args: ($notifyObject)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|\System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function Close (\override ...$args){}
	/**
	 * @return \System\Threading\Tasks\ValueTask
	 */
	public function CloseAsync(){}
	/**
	 * @param \System\Threading\TimerQueueTimer $timer
	 */
	public function __construct($timer){}
}