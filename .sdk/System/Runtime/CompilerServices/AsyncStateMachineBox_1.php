<?php
namespace System\Runtime\CompilerServices;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait AsyncStateMachineBox_1Override {
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function MoveNext_1 (){}
	/**
	 * @deprecated
	 * @param \System\Threading\Thread $threadPoolThread
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function MoveNext_2 ($threadPoolThread){}
}
class AsyncStateMachineBox_1 extends \System\Threading\Tasks\Task_1 implements
	\System\IAsyncResult,
	\System\IDisposable,
	\System\Runtime\CompilerServices\IAsyncStateMachineBox
{
	use AsyncStateMachineBox_1Override;
	/**
	 * @field
	 * @var \TStateMachine
	 */
	public $StateMachine;
	/**
	 * @field
	 * @var \System\Threading\ExecutionContext
	 */
	public $Context;
	/**
	 * @field
	 * @var \TResult
	 */
	protected $m_result;
	/**
	 * @field
	 * @var \System\Delegate
	 */
	protected $m_action;
	/**
	 * @field
	 * @var \System\Object|object
	 */
	protected $m_stateObject;
	/**
	 * @field
	 * @var \System\Threading\Tasks\TaskScheduler
	 */
	protected $m_taskScheduler;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $m_stateFlags;
	/**
	 * @field
	 * @var \System\Threading\Tasks\Task+ContingentProperties
	 */
	protected $m_contingentProperties;
	/**
	 * @property
	 * @var \System\Action
	 * @since readonly
	 */
	public $MoveNextAction;
	/**
	 * @property
	 * @var \TResult
	 * @since readonly
	 */
	public $Result;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Id;
	/**
	 * @property
	 * @var \System\AggregateException
	 * @since readonly
	 */
	public $Exception;
	/**
	 * @property
	 * @var \System\Threading\Tasks\TaskStatus
	 * @since readonly
	 */
	public $Status;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsCanceled;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsCompleted;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsCompletedSuccessfully;
	/**
	 * @property
	 * @var \System\Threading\Tasks\TaskCreationOptions
	 * @since readonly
	 */
	public $CreationOptions;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $AsyncState;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsFaulted;
	private static function ExecutionContextCallback($s){}
	/**
	 * @uses AsyncStateMachineBox_1Override::MoveNext_1 <br>public , args: ()<br>
	 * @uses AsyncStateMachineBox_1Override::MoveNext_2 <br>private , args: ($threadPoolThread)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function MoveNext (\override ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public function ClearStateUponCompletion(){}
	private function GetStateMachineObject(){}
	private function get_AsyncWaitHandle(){}
	private function get_CompletedSynchronously(){}
	/**
	 */
	public function __construct(){}
}