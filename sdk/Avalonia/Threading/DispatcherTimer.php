<?php
namespace Avalonia\Threading;
/**
 */
class DispatcherTimer extends \System\Object
{
	/**
	 * @var \Avalonia\Threading\Dispatcher
	 * @property
	 */
	public readonly $Dispatcher;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $IsEnabled;
	/**
	 * @var \System\TimeSpan
	 * @property
	 */
	public $Interval;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $Tag;
	/**
	 * @return \Avalonia\Threading\Dispatcher
	 */
	public  function get_Dispatcher(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsEnabled(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_IsEnabled($value){}
	/**
	 * @return \System\TimeSpan
	 */
	public  function get_Interval(){}
	/**
	 * @param \System\TimeSpan $value
	 * @return \System\Void|void
	 */
	public  function set_Interval($value){}
	/**
	 * @return \System\Void|void
	 */
	public  function Start(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Stop(){}
	/**
	 * @param \System\Func_1 $action
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
	public  function add_Tick($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function remove_Tick($value){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_Tag(){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public  function set_Tag($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Restart(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function Promote(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function FireTick(){}
	/**
	 * @return \System\Int64|int
	 */
	protected  function get_DueTimeInMs(){}
	/**
	 * @param \System\Int64|int $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_DueTimeInMs($value){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
