<?php
namespace System\Threading\Tasks;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait Task_1Override {
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task $parent
	 * @param \System\Func_1 $function [generic: TResult]
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @param \System\Threading\Tasks\TaskCreationOptions $creationOptions
	 * @param \System\Threading\Tasks\InternalTaskOptions $internalOptions
	 * @param \System\Threading\Tasks\TaskScheduler $scheduler
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]protected static function StartNew_1 ($parent, $function, $cancellationToken, $creationOptions, $internalOptions, $scheduler){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task $parent
	 * @param \System\Func_2 $function [generic: System\Object,TResult]
	 * @param \System\Object|object $state
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @param \System\Threading\Tasks\TaskCreationOptions $creationOptions
	 * @param \System\Threading\Tasks\InternalTaskOptions $internalOptions
	 * @param \System\Threading\Tasks\TaskScheduler $scheduler
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]protected static function StartNew_2 ($parent, $function, $state, $cancellationToken, $creationOptions, $internalOptions, $scheduler){}
	/**
	 * @param \System\Func_1 $function [generic: TResult]
	 */
	#[MethodOverride]public function __construct_1 ($function){}
	/**
	 * @param \System\Func_1 $function [generic: TResult]
	 * @param \System\Threading\CancellationToken $cancellationToken
	 */
	#[MethodOverride]public function __construct_2 ($function, $cancellationToken){}
	/**
	 * @param \System\Func_1 $function [generic: TResult]
	 * @param \System\Threading\Tasks\TaskCreationOptions $creationOptions
	 */
	#[MethodOverride]public function __construct_3 ($function, $creationOptions){}
	/**
	 * @param \System\Func_1 $function [generic: TResult]
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @param \System\Threading\Tasks\TaskCreationOptions $creationOptions
	 */
	#[MethodOverride]public function __construct_4 ($function, $cancellationToken, $creationOptions){}
	/**
	 * @param \System\Func_2 $function [generic: System\Object,TResult]
	 * @param \System\Object|object $state
	 */
	#[MethodOverride]public function __construct_5 ($function, $state){}
	/**
	 * @param \System\Func_2 $function [generic: System\Object,TResult]
	 * @param \System\Object|object $state
	 * @param \System\Threading\CancellationToken $cancellationToken
	 */
	#[MethodOverride]public function __construct_6 ($function, $state, $cancellationToken){}
	/**
	 * @param \System\Func_2 $function [generic: System\Object,TResult]
	 * @param \System\Object|object $state
	 * @param \System\Threading\Tasks\TaskCreationOptions $creationOptions
	 */
	#[MethodOverride]public function __construct_7 ($function, $state, $creationOptions){}
	/**
	 * @param \System\Func_2 $function [generic: System\Object,TResult]
	 * @param \System\Object|object $state
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @param \System\Threading\Tasks\TaskCreationOptions $creationOptions
	 */
	#[MethodOverride]public function __construct_8 ($function, $state, $cancellationToken, $creationOptions){}
}
class Task_1 extends \System\Threading\Tasks\Task implements
	\System\IAsyncResult,
	\System\IDisposable
{
	use Task_1Override;
	/**
	 * @field
	 * @var \TResult
	 */
	protected $m_result;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Threading\Tasks\Task_1[TResult]
	 */
	protected static $s_defaultResultTask;
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
	 * @var \TResult
	 * @since readonly
	 */
	public $Result;
	/**
	 * @property
	 * @var \System\Threading\Tasks\TaskFactory_1[TResult]
	 * @since readonly
	 */
	public $Factory;
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
	/**
	 * @uses Task_1Override::StartNew_1 <br>protected , args: ($parent, $function, $cancellationToken, $creationOptions, $internalOptions, $scheduler)<br>
	 * @uses Task_1Override::StartNew_2 <br>protected , args: ($parent, $function, $state, $cancellationToken, $creationOptions, $internalOptions, $scheduler)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Threading\Tasks\Task_1|mixed|\override
	 */
	#[MethodOverrideProtected]function StartNew (\override ...$args){}
	/**
	 * @param \TResult $result
	 * @return \System\Void|void
	 */
	protected function DangerousSetResult($result){}
	/**
	 * @param \System\Boolean|bool $waitCompletionNotification
	 * @return \TResult
	 */
	protected function GetResultCore($waitCompletionNotification){}
	private function get_AsyncWaitHandle(){}
	private function get_CompletedSynchronously(){}
	/**
	 * @uses Task_1Override::__construct_1 <br>public , args: ($function)<br>
	 * @uses Task_1Override::__construct_2 <br>public , args: ($function, $cancellationToken)<br>
	 * @uses Task_1Override::__construct_3 <br>public , args: ($function, $creationOptions)<br>
	 * @uses Task_1Override::__construct_4 <br>public , args: ($function, $cancellationToken, $creationOptions)<br>
	 * @uses Task_1Override::__construct_5 <br>public , args: ($function, $state)<br>
	 * @uses Task_1Override::__construct_6 <br>public , args: ($function, $state, $cancellationToken)<br>
	 * @uses Task_1Override::__construct_7 <br>public , args: ($function, $state, $creationOptions)<br>
	 * @uses Task_1Override::__construct_8 <br>public , args: ($function, $state, $cancellationToken, $creationOptions)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}