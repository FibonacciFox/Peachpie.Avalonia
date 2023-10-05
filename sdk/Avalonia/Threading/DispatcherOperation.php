<?php
namespace Avalonia\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait DispatcherOperationMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Wait_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Wait_2($timeout){}
}
/**
 */
class DispatcherOperation extends \System\Object
{
	/**
	 * @var \System\Boolean
	 * @field
	 */
	protected readonly $ThrowOnUiThread;
	/**
	 * @var \System\Object
	 * @field
	 */
	protected $Callback;
	/**
	 * @var \System\Object
	 * @field
	 */
	protected $TaskSource;
	/**
	 * @var \Avalonia\Threading\DispatcherOperationStatus
	 * @property
	 */
	public $Status;
	/**
	 * @var \Avalonia\Threading\Dispatcher
	 * @property
	 */
	public readonly $Dispatcher;
	/**
	 * @var \Avalonia\Threading\DispatcherPriority
	 * @property
	 */
	public $Priority;
	/**
	 * @return \Avalonia\Threading\DispatcherOperationStatus
	 */
	public  function get_Status(){}
	/**
	 * @param \Avalonia\Threading\DispatcherOperationStatus $value
	 * @return \System\Void|void
	 */
	protected  function set_Status($value){}
	/**
	 * @return \Avalonia\Threading\Dispatcher
	 */
	public  function get_Dispatcher(){}
	/**
	 * @return \Avalonia\Threading\DispatcherPriority
	 */
	public  function get_Priority(){}
	/**
	 * @param \Avalonia\Threading\DispatcherPriority $value
	 * @return \System\Void|void
	 */
	public  function set_Priority($value){}
	/**
	 * @return \Avalonia\Threading\DispatcherOperation
	 */
	protected  function get_SequentialPrev(){}
	/**
	 * @param \Avalonia\Threading\DispatcherOperation $value
	 * @return \System\Void|void
	 */
	protected  function set_SequentialPrev($value){}
	/**
	 * @return \Avalonia\Threading\DispatcherOperation
	 */
	protected  function get_SequentialNext(){}
	/**
	 * @param \Avalonia\Threading\DispatcherOperation $value
	 * @return \System\Void|void
	 */
	protected  function set_SequentialNext($value){}
	/**
	 * @return \Avalonia\Threading\DispatcherOperation
	 */
	protected  function get_PriorityPrev(){}
	/**
	 * @param \Avalonia\Threading\DispatcherOperation $value
	 * @return \System\Void|void
	 */
	protected  function set_PriorityPrev($value){}
	/**
	 * @return \Avalonia\Threading\DispatcherOperation
	 */
	protected  function get_PriorityNext(){}
	/**
	 * @param \Avalonia\Threading\DispatcherOperation $value
	 * @return \System\Void|void
	 */
	protected  function set_PriorityNext($value){}
	/**
	 * @return \Avalonia\Threading\PriorityChain
	 */
	protected  function get_Chain(){}
	/**
	 * @param \Avalonia\Threading\PriorityChain $value
	 * @return \System\Void|void
	 */
	protected  function set_Chain($value){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_IsQueued(){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function add_Aborted($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function remove_Aborted($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function add_Completed($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function remove_Completed($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function Abort(){}
	/**
	 * @uses DispatcherOperationMethodsOverride::Wait_1 ()
	 * @uses DispatcherOperationMethodsOverride::Wait_2 ($timeout)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Wait(mixed ...$args){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	public  function GetTask(){}
	/**
	 * @return \System\Runtime\CompilerServices\TaskAwaiter
	 */
	public  function GetAwaiter(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function DoAbort(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function Execute(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function InvokeCore(){}
	/**
	 * @return \System\Object|object
	 */
	protected  function GetResult(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function AbortTask(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateCancelledToken(){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	protected  function GetTaskCore(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
