<?php
namespace Avalonia\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait DispatcherOperationOverride {
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Wait_1 (){}
	/**
	 * @deprecated
	 * @param \System\TimeSpan $timeout
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Wait_2 ($timeout){}
}
class DispatcherOperation extends \System\Object
{
	use DispatcherOperationOverride;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Boolean|bool
	 */
	protected $ThrowOnUiThread;
	/**
	 * @field
	 * @var \System\Object|object
	 */
	protected $Callback;
	/**
	 * @field
	 * @var \System\Object|object
	 */
	protected $TaskSource;
	/**
	 * @property
	 * @var \Avalonia\Threading\DispatcherOperationStatus
	 */
	public $Status;
	/**
	 * @property
	 * @var \Avalonia\Threading\Dispatcher
	 * @since readonly
	 */
	public $Dispatcher;
	/**
	 * @property
	 * @var \Avalonia\Threading\DispatcherPriority
	 */
	public $Priority;
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function add_Aborted($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function remove_Aborted($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function add_Completed($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function remove_Completed($value){}
	/**
	 * @return \System\Boolean|bool
	 */
	public function Abort(){}
	/**
	 * @uses DispatcherOperationOverride::Wait_1 <br>public , args: ()<br>
	 * @uses DispatcherOperationOverride::Wait_2 <br>public , args: ($timeout)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Wait (\override ...$args){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	public function GetTask(){}
	/**
	 * @return \System\Runtime\CompilerServices\TaskAwaiter
	 */
	public function GetAwaiter(){}
	/**
	 * @return \System\Void|void
	 */
	protected function DoAbort(){}
	/**
	 * @return \System\Void|void
	 */
	protected function Execute(){}
	/**
	 * @return \System\Void|void
	 */
	protected function InvokeCore(){}
	/**
	 * @return \System\Object|object
	 */
	protected function GetResult(){}
	/**
	 * @return \System\Void|void
	 */
	protected function AbortTask(){}
	private static function CreateCancelledToken(){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	protected function GetTaskCore(){}
}