<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait TimerMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Change_1($dueTime, $period){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Change_2($dueTime, $period){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Change_3($dueTime, $period){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Change_4($dueTime, $period){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Dispose_1($notifyObject){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Dispose_2(){}
	/**
	 * @return \System\MarshalByRefObject
	 */
	#[MethodOverride] protected  function MemberwiseClone_1($cloneIdentity){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] protected  function MemberwiseClone_2(){}
}
/**
 */
class Timer extends \System\MarshalByRefObject implements 
	\System\IDisposable,
	\System\IAsyncDisposable
{
	/**
	 * @var \System\Threading\TimerHolder
	 * @field
	 */
	protected $_timer;
	/**
	 * @var \System\Int64
	 * @property
	 */
	public readonly $ActiveCount;
	/**
	 * @param \System\Threading\TimerCallback $callback
	 * @param \System\Object|object $state
	 * @param \System\UInt32 $dueTime
	 * @param \System\UInt32 $period
	 * @param \System\Boolean $flowExecutionContext
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TimerSetup($callback, $state, $dueTime, $period, $flowExecutionContext){}
	/**
	 * @uses TimerMethodsOverride::Change_1 ($dueTime, $period)
	 * @uses TimerMethodsOverride::Change_2 ($dueTime, $period)
	 * @uses TimerMethodsOverride::Change_3 ($dueTime, $period)
	 * @uses TimerMethodsOverride::Change_4 ($dueTime, $period)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Change(mixed ...$args){}
	/**
	 * @return \System\Int64|int
	 */
	public static function get_ActiveCount(){}
	/**
	 * @uses TimerMethodsOverride::Dispose_1 ($notifyObject)
	 * @uses TimerMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @return \System\Threading\Tasks\ValueTask
	 */
	public  function DisposeAsync(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_DisplayString(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_AllTimers(){}
	/**
	 * @uses TimerMethodsOverride::MemberwiseClone_1 ($cloneIdentity)
	 * @uses TimerMethodsOverride::MemberwiseClone_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MemberwiseClone(mixed ...$args){}
}
