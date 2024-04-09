<?php
namespace Avalonia\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait DispatcherPriorityQueueOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \Avalonia\Threading\DispatcherPriority $priority
	 */
	#[MethodOverride]public function __construct_2 ($priority){}
	/**
	 * @param \System\TimeSpan $interval
	 * @param \Avalonia\Threading\DispatcherPriority $priority
	 * @param \System\EventHandler $callback
	 */
	#[MethodOverride]public function __construct_3 ($interval, $priority, $callback){}
}
class DispatcherTimer extends \System\Object
{
	use DispatcherPriorityQueueOverride;
	/**
	 * @property
	 * @var \Avalonia\Threading\Dispatcher
	 * @since readonly
	 */
	public $Dispatcher;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsEnabled;
	/**
	 * @property
	 * @var \System\TimeSpan
	 */
	public $Interval;
	/**
	 * @property
	 * @var \System\Object|object
	 */
	public $Tag;
	/**
	 * @return \System\Void|void
	 */
	public function Start(){}
	/**
	 * @return \System\Void|void
	 */
	public function Stop(){}
	/**
	 * @param \System\Func_1 $action [generic: System\Boolean]
	 * @param \System\TimeSpan $interval
	 * @param \Avalonia\Threading\DispatcherPriority $priority
	 * @return \System\IDisposable
	 */
	public static function Run($action, $interval, $priority){}
	/**
	 * @param \System\Action $action
	 * @param \System\TimeSpan $interval
	 * @param \Avalonia\Threading\DispatcherPriority $priority
	 * @return \System\IDisposable
	 */
	public static function RunOnce($action, $interval, $priority){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function add_Tick($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function remove_Tick($value){}
	private function Restart(){}
	/**
	 * @return \System\Void|void
	 */
	protected function Promote(){}
	private function FireTick(){}
	/**
	 * @uses DispatcherTimerOverride::__construct_1 <br>public , args: ()<br>
	 * @uses DispatcherTimerOverride::__construct_2 <br>public , args: ($priority)<br>
	 * @uses DispatcherTimerOverride::__construct_3 <br>public , args: ($interval, $priority, $callback)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}