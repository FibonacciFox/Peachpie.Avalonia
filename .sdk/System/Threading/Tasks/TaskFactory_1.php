<?php
namespace System\Threading\Tasks;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait TaskFactory_1Override {
	/**
	 * @deprecated
	 * @param \System\Func_1 $function [generic: TResult]
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function StartNew_1 ($function){}
	/**
	 * @deprecated
	 * @param \System\Func_1 $function [generic: TResult]
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function StartNew_2 ($function, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\Func_1 $function [generic: TResult]
	 * @param \System\Threading\Tasks\TaskCreationOptions $creationOptions
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function StartNew_3 ($function, $creationOptions){}
	/**
	 * @deprecated
	 * @param \System\Func_1 $function [generic: TResult]
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @param \System\Threading\Tasks\TaskCreationOptions $creationOptions
	 * @param \System\Threading\Tasks\TaskScheduler $scheduler
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function StartNew_4 ($function, $cancellationToken, $creationOptions, $scheduler){}
	/**
	 * @deprecated
	 * @param \System\Func_2 $function [generic: System\Object,TResult]
	 * @param \System\Object|object $state
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function StartNew_5 ($function, $state){}
	/**
	 * @deprecated
	 * @param \System\Func_2 $function [generic: System\Object,TResult]
	 * @param \System\Object|object $state
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function StartNew_6 ($function, $state, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\Func_2 $function [generic: System\Object,TResult]
	 * @param \System\Object|object $state
	 * @param \System\Threading\Tasks\TaskCreationOptions $creationOptions
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function StartNew_7 ($function, $state, $creationOptions){}
	/**
	 * @deprecated
	 * @param \System\Func_2 $function [generic: System\Object,TResult]
	 * @param \System\Object|object $state
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @param \System\Threading\Tasks\TaskCreationOptions $creationOptions
	 * @param \System\Threading\Tasks\TaskScheduler $scheduler
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function StartNew_8 ($function, $state, $cancellationToken, $creationOptions, $scheduler){}
	/**
	 * @deprecated
	 * @param \System\IAsyncResult $asyncResult
	 * @param \System\Func_2 $endMethod [generic: System\IAsyncResult,TResult]
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function FromAsync_1 ($asyncResult, $endMethod){}
	/**
	 * @deprecated
	 * @param \System\IAsyncResult $asyncResult
	 * @param \System\Func_2 $endMethod [generic: System\IAsyncResult,TResult]
	 * @param \System\Threading\Tasks\TaskCreationOptions $creationOptions
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function FromAsync_2 ($asyncResult, $endMethod, $creationOptions){}
	/**
	 * @deprecated
	 * @param \System\IAsyncResult $asyncResult
	 * @param \System\Func_2 $endMethod [generic: System\IAsyncResult,TResult]
	 * @param \System\Threading\Tasks\TaskCreationOptions $creationOptions
	 * @param \System\Threading\Tasks\TaskScheduler $scheduler
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function FromAsync_3 ($asyncResult, $endMethod, $creationOptions, $scheduler){}
	/**
	 * @deprecated
	 * @param \System\Func_3 $beginMethod [generic: System\AsyncCallback,System\Object,System\IAsyncResult]
	 * @param \System\Func_2 $endMethod [generic: System\IAsyncResult,TResult]
	 * @param \System\Object|object $state
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function FromAsync_4 ($beginMethod, $endMethod, $state){}
	/**
	 * @deprecated
	 * @param \System\Func_3 $beginMethod [generic: System\AsyncCallback,System\Object,System\IAsyncResult]
	 * @param \System\Func_2 $endMethod [generic: System\IAsyncResult,TResult]
	 * @param \System\Object|object $state
	 * @param \System\Threading\Tasks\TaskCreationOptions $creationOptions
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function FromAsync_5 ($beginMethod, $endMethod, $state, $creationOptions){}
	/**
	 * @deprecated
	 * @param \System\Func_4 $beginMethod [generic: TArg1,System\AsyncCallback,System\Object,System\IAsyncResult]
	 * @param \System\Func_2 $endMethod [generic: System\IAsyncResult,TResult]
	 * @param \TArg1 $arg1
	 * @param \System\Object|object $state
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function FromAsync_6 ($beginMethod, $endMethod, $arg1, $state){}
	/**
	 * @deprecated
	 * @param \System\Func_4 $beginMethod [generic: TArg1,System\AsyncCallback,System\Object,System\IAsyncResult]
	 * @param \System\Func_2 $endMethod [generic: System\IAsyncResult,TResult]
	 * @param \TArg1 $arg1
	 * @param \System\Object|object $state
	 * @param \System\Threading\Tasks\TaskCreationOptions $creationOptions
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function FromAsync_7 ($beginMethod, $endMethod, $arg1, $state, $creationOptions){}
	/**
	 * @deprecated
	 * @param \System\Func_5 $beginMethod [generic: TArg1,TArg2,System\AsyncCallback,System\Object,System\IAsyncResult]
	 * @param \System\Func_2 $endMethod [generic: System\IAsyncResult,TResult]
	 * @param \TArg1 $arg1
	 * @param \TArg2 $arg2
	 * @param \System\Object|object $state
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function FromAsync_8 ($beginMethod, $endMethod, $arg1, $arg2, $state){}
	/**
	 * @deprecated
	 * @param \System\Func_5 $beginMethod [generic: TArg1,TArg2,System\AsyncCallback,System\Object,System\IAsyncResult]
	 * @param \System\Func_2 $endMethod [generic: System\IAsyncResult,TResult]
	 * @param \TArg1 $arg1
	 * @param \TArg2 $arg2
	 * @param \System\Object|object $state
	 * @param \System\Threading\Tasks\TaskCreationOptions $creationOptions
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function FromAsync_9 ($beginMethod, $endMethod, $arg1, $arg2, $state, $creationOptions){}
	/**
	 * @deprecated
	 * @param \System\Func_6 $beginMethod [generic: TArg1,TArg2,TArg3,System\AsyncCallback,System\Object,System\IAsyncResult]
	 * @param \System\Func_2 $endMethod [generic: System\IAsyncResult,TResult]
	 * @param \TArg1 $arg1
	 * @param \TArg2 $arg2
	 * @param \TArg3 $arg3
	 * @param \System\Object|object $state
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function FromAsync_10 ($beginMethod, $endMethod, $arg1, $arg2, $arg3, $state){}
	/**
	 * @deprecated
	 * @param \System\Func_6 $beginMethod [generic: TArg1,TArg2,TArg3,System\AsyncCallback,System\Object,System\IAsyncResult]
	 * @param \System\Func_2 $endMethod [generic: System\IAsyncResult,TResult]
	 * @param \TArg1 $arg1
	 * @param \TArg2 $arg2
	 * @param \TArg3 $arg3
	 * @param \System\Object|object $state
	 * @param \System\Threading\Tasks\TaskCreationOptions $creationOptions
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function FromAsync_11 ($beginMethod, $endMethod, $arg1, $arg2, $arg3, $state, $creationOptions){}
	/**
	 * @deprecated
	 * @param \System\IAsyncResult $asyncResult
	 * @param \System\Func_2 $endFunction [generic: System\IAsyncResult,TResult]
	 * @param \System\Action_1 $endAction [generic: System\IAsyncResult]
	 * @param \System\Threading\Tasks\TaskCreationOptions $creationOptions
	 * @param \System\Threading\Tasks\TaskScheduler $scheduler
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]protected static function FromAsyncImpl_1 ($asyncResult, $endFunction, $endAction, $creationOptions, $scheduler){}
	/**
	 * @deprecated
	 * @param \System\Func_3 $beginMethod [generic: System\AsyncCallback,System\Object,System\IAsyncResult]
	 * @param \System\Func_2 $endFunction [generic: System\IAsyncResult,TResult]
	 * @param \System\Action_1 $endAction [generic: System\IAsyncResult]
	 * @param \System\Object|object $state
	 * @param \System\Threading\Tasks\TaskCreationOptions $creationOptions
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]protected static function FromAsyncImpl_2 ($beginMethod, $endFunction, $endAction, $state, $creationOptions){}
	/**
	 * @deprecated
	 * @param \System\Func_4 $beginMethod [generic: TArg1,System\AsyncCallback,System\Object,System\IAsyncResult]
	 * @param \System\Func_2 $endFunction [generic: System\IAsyncResult,TResult]
	 * @param \System\Action_1 $endAction [generic: System\IAsyncResult]
	 * @param \TArg1 $arg1
	 * @param \System\Object|object $state
	 * @param \System\Threading\Tasks\TaskCreationOptions $creationOptions
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]protected static function FromAsyncImpl_3 ($beginMethod, $endFunction, $endAction, $arg1, $state, $creationOptions){}
	/**
	 * @deprecated
	 * @param \System\Func_5 $beginMethod [generic: TArg1,TArg2,System\AsyncCallback,System\Object,System\IAsyncResult]
	 * @param \System\Func_2 $endFunction [generic: System\IAsyncResult,TResult]
	 * @param \System\Action_1 $endAction [generic: System\IAsyncResult]
	 * @param \TArg1 $arg1
	 * @param \TArg2 $arg2
	 * @param \System\Object|object $state
	 * @param \System\Threading\Tasks\TaskCreationOptions $creationOptions
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]protected static function FromAsyncImpl_4 ($beginMethod, $endFunction, $endAction, $arg1, $arg2, $state, $creationOptions){}
	/**
	 * @deprecated
	 * @param \System\Func_6 $beginMethod [generic: TArg1,TArg2,TArg3,System\AsyncCallback,System\Object,System\IAsyncResult]
	 * @param \System\Func_2 $endFunction [generic: System\IAsyncResult,TResult]
	 * @param \System\Action_1 $endAction [generic: System\IAsyncResult]
	 * @param \TArg1 $arg1
	 * @param \TArg2 $arg2
	 * @param \TArg3 $arg3
	 * @param \System\Object|object $state
	 * @param \System\Threading\Tasks\TaskCreationOptions $creationOptions
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]protected static function FromAsyncImpl_5 ($beginMethod, $endFunction, $endAction, $arg1, $arg2, $arg3, $state, $creationOptions){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task $tasks
	 * @param \System\Func_2 $continuationFunction [generic: System\Threading\Tasks\Task[]
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function ContinueWhenAll_1 ($tasks, $continuationFunction){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task $tasks
	 * @param \System\Func_2 $continuationFunction [generic: System\Threading\Tasks\Task[]
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function ContinueWhenAll_2 ($tasks, $continuationFunction, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task $tasks
	 * @param \System\Func_2 $continuationFunction [generic: System\Threading\Tasks\Task[]
	 * @param \System\Threading\Tasks\TaskContinuationOptions $continuationOptions
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function ContinueWhenAll_3 ($tasks, $continuationFunction, $continuationOptions){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task $tasks
	 * @param \System\Func_2 $continuationFunction [generic: System\Threading\Tasks\Task[]
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @param \System\Threading\Tasks\TaskContinuationOptions $continuationOptions
	 * @param \System\Threading\Tasks\TaskScheduler $scheduler
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function ContinueWhenAll_4 ($tasks, $continuationFunction, $cancellationToken, $continuationOptions, $scheduler){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task_1 $tasks [generic: TAntecedentResult]
	 * @param \System\Func_2 $continuationFunction [generic: System\Threading\Tasks\Task_1[TAntecedentResult]
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function ContinueWhenAll_5 ($tasks, $continuationFunction){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task_1 $tasks [generic: TAntecedentResult]
	 * @param \System\Func_2 $continuationFunction [generic: System\Threading\Tasks\Task_1[TAntecedentResult]
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function ContinueWhenAll_6 ($tasks, $continuationFunction, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task_1 $tasks [generic: TAntecedentResult]
	 * @param \System\Func_2 $continuationFunction [generic: System\Threading\Tasks\Task_1[TAntecedentResult]
	 * @param \System\Threading\Tasks\TaskContinuationOptions $continuationOptions
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function ContinueWhenAll_7 ($tasks, $continuationFunction, $continuationOptions){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task_1 $tasks [generic: TAntecedentResult]
	 * @param \System\Func_2 $continuationFunction [generic: System\Threading\Tasks\Task_1[TAntecedentResult]
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @param \System\Threading\Tasks\TaskContinuationOptions $continuationOptions
	 * @param \System\Threading\Tasks\TaskScheduler $scheduler
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function ContinueWhenAll_8 ($tasks, $continuationFunction, $cancellationToken, $continuationOptions, $scheduler){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task_1 $tasks [generic: TAntecedentResult]
	 * @param \System\Func_2 $continuationFunction [generic: System\Threading\Tasks\Task_1[TAntecedentResult]
	 * @param \System\Action_1 $continuationAction [generic: System\Threading\Tasks\Task_1[TAntecedentResult]
	 * @param \System\Threading\Tasks\TaskContinuationOptions $continuationOptions
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @param \System\Threading\Tasks\TaskScheduler $scheduler
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]protected static function ContinueWhenAllImpl_1 ($tasks, $continuationFunction, $continuationAction, $continuationOptions, $cancellationToken, $scheduler){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task $tasks
	 * @param \System\Func_2 $continuationFunction [generic: System\Threading\Tasks\Task[]
	 * @param \System\Action_1 $continuationAction [generic: System\Threading\Tasks\Task[]
	 * @param \System\Threading\Tasks\TaskContinuationOptions $continuationOptions
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @param \System\Threading\Tasks\TaskScheduler $scheduler
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]protected static function ContinueWhenAllImpl_2 ($tasks, $continuationFunction, $continuationAction, $continuationOptions, $cancellationToken, $scheduler){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task $tasks
	 * @param \System\Func_2 $continuationFunction [generic: System\Threading\Tasks\Task,TResult]
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function ContinueWhenAny_1 ($tasks, $continuationFunction){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task $tasks
	 * @param \System\Func_2 $continuationFunction [generic: System\Threading\Tasks\Task,TResult]
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function ContinueWhenAny_2 ($tasks, $continuationFunction, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task $tasks
	 * @param \System\Func_2 $continuationFunction [generic: System\Threading\Tasks\Task,TResult]
	 * @param \System\Threading\Tasks\TaskContinuationOptions $continuationOptions
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function ContinueWhenAny_3 ($tasks, $continuationFunction, $continuationOptions){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task $tasks
	 * @param \System\Func_2 $continuationFunction [generic: System\Threading\Tasks\Task,TResult]
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @param \System\Threading\Tasks\TaskContinuationOptions $continuationOptions
	 * @param \System\Threading\Tasks\TaskScheduler $scheduler
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function ContinueWhenAny_4 ($tasks, $continuationFunction, $cancellationToken, $continuationOptions, $scheduler){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task_1 $tasks [generic: TAntecedentResult]
	 * @param \System\Func_2 $continuationFunction [generic: System\Threading\Tasks\Task_1[TAntecedentResult]
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function ContinueWhenAny_5 ($tasks, $continuationFunction){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task_1 $tasks [generic: TAntecedentResult]
	 * @param \System\Func_2 $continuationFunction [generic: System\Threading\Tasks\Task_1[TAntecedentResult]
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function ContinueWhenAny_6 ($tasks, $continuationFunction, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task_1 $tasks [generic: TAntecedentResult]
	 * @param \System\Func_2 $continuationFunction [generic: System\Threading\Tasks\Task_1[TAntecedentResult]
	 * @param \System\Threading\Tasks\TaskContinuationOptions $continuationOptions
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function ContinueWhenAny_7 ($tasks, $continuationFunction, $continuationOptions){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task_1 $tasks [generic: TAntecedentResult]
	 * @param \System\Func_2 $continuationFunction [generic: System\Threading\Tasks\Task_1[TAntecedentResult]
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @param \System\Threading\Tasks\TaskContinuationOptions $continuationOptions
	 * @param \System\Threading\Tasks\TaskScheduler $scheduler
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function ContinueWhenAny_8 ($tasks, $continuationFunction, $cancellationToken, $continuationOptions, $scheduler){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task $tasks
	 * @param \System\Func_2 $continuationFunction [generic: System\Threading\Tasks\Task,TResult]
	 * @param \System\Action_1 $continuationAction [generic: System\Threading\Tasks\Task]
	 * @param \System\Threading\Tasks\TaskContinuationOptions $continuationOptions
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @param \System\Threading\Tasks\TaskScheduler $scheduler
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]protected static function ContinueWhenAnyImpl_1 ($tasks, $continuationFunction, $continuationAction, $continuationOptions, $cancellationToken, $scheduler){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task_1 $tasks [generic: TAntecedentResult]
	 * @param \System\Func_2 $continuationFunction [generic: System\Threading\Tasks\Task_1[TAntecedentResult]
	 * @param \System\Action_1 $continuationAction [generic: System\Threading\Tasks\Task_1[TAntecedentResult]
	 * @param \System\Threading\Tasks\TaskContinuationOptions $continuationOptions
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @param \System\Threading\Tasks\TaskScheduler $scheduler
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]protected static function ContinueWhenAnyImpl_2 ($tasks, $continuationFunction, $continuationAction, $continuationOptions, $cancellationToken, $scheduler){}
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\Threading\CancellationToken $cancellationToken
	 */
	#[MethodOverride]public function __construct_2 ($cancellationToken){}
	/**
	 * @param \System\Threading\Tasks\TaskScheduler $scheduler
	 */
	#[MethodOverride]public function __construct_3 ($scheduler){}
	/**
	 * @param \System\Threading\Tasks\TaskCreationOptions $creationOptions
	 * @param \System\Threading\Tasks\TaskContinuationOptions $continuationOptions
	 */
	#[MethodOverride]public function __construct_4 ($creationOptions, $continuationOptions){}
	/**
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @param \System\Threading\Tasks\TaskCreationOptions $creationOptions
	 * @param \System\Threading\Tasks\TaskContinuationOptions $continuationOptions
	 * @param \System\Threading\Tasks\TaskScheduler $scheduler
	 */
	#[MethodOverride]public function __construct_5 ($cancellationToken, $creationOptions, $continuationOptions, $scheduler){}
}
class TaskFactory_1 extends \System\Object
{
	use TaskFactory_1Override;
	/**
	 * @property
	 * @var \System\Threading\CancellationToken
	 * @since readonly
	 */
	public $CancellationToken;
	/**
	 * @property
	 * @var \System\Threading\Tasks\TaskScheduler
	 * @since readonly
	 */
	public $Scheduler;
	/**
	 * @property
	 * @var \System\Threading\Tasks\TaskCreationOptions
	 * @since readonly
	 */
	public $CreationOptions;
	/**
	 * @property
	 * @var \System\Threading\Tasks\TaskContinuationOptions
	 * @since readonly
	 */
	public $ContinuationOptions;
	private function GetDefaultScheduler($currTask){}
	/**
	 * @uses TaskFactory_1Override::StartNew_1 <br>public , args: ($function)<br>
	 * @uses TaskFactory_1Override::StartNew_2 <br>public , args: ($function, $cancellationToken)<br>
	 * @uses TaskFactory_1Override::StartNew_3 <br>public , args: ($function, $creationOptions)<br>
	 * @uses TaskFactory_1Override::StartNew_4 <br>public , args: ($function, $cancellationToken, $creationOptions, $scheduler)<br>
	 * @uses TaskFactory_1Override::StartNew_5 <br>public , args: ($function, $state)<br>
	 * @uses TaskFactory_1Override::StartNew_6 <br>public , args: ($function, $state, $cancellationToken)<br>
	 * @uses TaskFactory_1Override::StartNew_7 <br>public , args: ($function, $state, $creationOptions)<br>
	 * @uses TaskFactory_1Override::StartNew_8 <br>public , args: ($function, $state, $cancellationToken, $creationOptions, $scheduler)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Threading\Tasks\Task_1|mixed|\override
	 */
	#[MethodOverridePublic]function StartNew (\override ...$args){}
	private static function FromAsyncCoreLogic($iar, $endFunction, $endAction, $promise, $requiresSynchronization){}
	/**
	 * @uses TaskFactory_1Override::FromAsync_1 <br>public , args: ($asyncResult, $endMethod)<br>
	 * @uses TaskFactory_1Override::FromAsync_2 <br>public , args: ($asyncResult, $endMethod, $creationOptions)<br>
	 * @uses TaskFactory_1Override::FromAsync_3 <br>public , args: ($asyncResult, $endMethod, $creationOptions, $scheduler)<br>
	 * @uses TaskFactory_1Override::FromAsync_4 <br>public , args: ($beginMethod, $endMethod, $state)<br>
	 * @uses TaskFactory_1Override::FromAsync_5 <br>public , args: ($beginMethod, $endMethod, $state, $creationOptions)<br>
	 * @uses TaskFactory_1Override::FromAsync_6 <br>public , args: ($beginMethod, $endMethod, $arg1, $state)<br>
	 * @uses TaskFactory_1Override::FromAsync_7 <br>public , args: ($beginMethod, $endMethod, $arg1, $state, $creationOptions)<br>
	 * @uses TaskFactory_1Override::FromAsync_8 <br>public , args: ($beginMethod, $endMethod, $arg1, $arg2, $state)<br>
	 * @uses TaskFactory_1Override::FromAsync_9 <br>public , args: ($beginMethod, $endMethod, $arg1, $arg2, $state, $creationOptions)<br>
	 * @uses TaskFactory_1Override::FromAsync_10 <br>public , args: ($beginMethod, $endMethod, $arg1, $arg2, $arg3, $state)<br>
	 * @uses TaskFactory_1Override::FromAsync_11 <br>public , args: ($beginMethod, $endMethod, $arg1, $arg2, $arg3, $state, $creationOptions)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Threading\Tasks\Task_1|mixed|\override
	 */
	#[MethodOverridePublic]function FromAsync (\override ...$args){}
	/**
	 * @uses TaskFactory_1Override::FromAsyncImpl_1 <br>protected , args: ($asyncResult, $endFunction, $endAction, $creationOptions, $scheduler)<br>
	 * @uses TaskFactory_1Override::FromAsyncImpl_2 <br>protected , args: ($beginMethod, $endFunction, $endAction, $state, $creationOptions)<br>
	 * @uses TaskFactory_1Override::FromAsyncImpl_3 <br>protected , args: ($beginMethod, $endFunction, $endAction, $arg1, $state, $creationOptions)<br>
	 * @uses TaskFactory_1Override::FromAsyncImpl_4 <br>protected , args: ($beginMethod, $endFunction, $endAction, $arg1, $arg2, $state, $creationOptions)<br>
	 * @uses TaskFactory_1Override::FromAsyncImpl_5 <br>protected , args: ($beginMethod, $endFunction, $endAction, $arg1, $arg2, $arg3, $state, $creationOptions)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Threading\Tasks\Task_1|mixed|\override
	 */
	#[MethodOverrideProtected]function FromAsyncImpl (\override ...$args){}
	/**
	 * @param \TInstance $thisRef
	 * @param \TArgs $args
	 * @param \System\Func_5 $beginMethod [generic: TInstance,TArgs,System\AsyncCallback,System\Object,System\IAsyncResult]
	 * @param \System\Func_3 $endMethod [generic: TInstance,System\IAsyncResult,TResult]
	 * @return \System\Threading\Tasks\Task_1[TResult]
	 */
	protected static function FromAsyncTrim($thisRef, $args, $beginMethod, $endMethod){}
	private static function CreateCanceledTask($continuationOptions, $ct){}
	/**
	 * @uses TaskFactory_1Override::ContinueWhenAll_1 <br>public , args: ($tasks, $continuationFunction)<br>
	 * @uses TaskFactory_1Override::ContinueWhenAll_2 <br>public , args: ($tasks, $continuationFunction, $cancellationToken)<br>
	 * @uses TaskFactory_1Override::ContinueWhenAll_3 <br>public , args: ($tasks, $continuationFunction, $continuationOptions)<br>
	 * @uses TaskFactory_1Override::ContinueWhenAll_4 <br>public , args: ($tasks, $continuationFunction, $cancellationToken, $continuationOptions, $scheduler)<br>
	 * @uses TaskFactory_1Override::ContinueWhenAll_5 <br>public , args: ($tasks, $continuationFunction)<br>
	 * @uses TaskFactory_1Override::ContinueWhenAll_6 <br>public , args: ($tasks, $continuationFunction, $cancellationToken)<br>
	 * @uses TaskFactory_1Override::ContinueWhenAll_7 <br>public , args: ($tasks, $continuationFunction, $continuationOptions)<br>
	 * @uses TaskFactory_1Override::ContinueWhenAll_8 <br>public , args: ($tasks, $continuationFunction, $cancellationToken, $continuationOptions, $scheduler)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Threading\Tasks\Task_1|mixed|\override
	 */
	#[MethodOverridePublic]function ContinueWhenAll (\override ...$args){}
	/**
	 * @uses TaskFactory_1Override::ContinueWhenAllImpl_1 <br>protected , args: ($tasks, $continuationFunction, $continuationAction, $continuationOptions, $cancellationToken, $scheduler)<br>
	 * @uses TaskFactory_1Override::ContinueWhenAllImpl_2 <br>protected , args: ($tasks, $continuationFunction, $continuationAction, $continuationOptions, $cancellationToken, $scheduler)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Threading\Tasks\Task_1|mixed|\override
	 */
	#[MethodOverrideProtected]function ContinueWhenAllImpl (\override ...$args){}
	/**
	 * @uses TaskFactory_1Override::ContinueWhenAny_1 <br>public , args: ($tasks, $continuationFunction)<br>
	 * @uses TaskFactory_1Override::ContinueWhenAny_2 <br>public , args: ($tasks, $continuationFunction, $cancellationToken)<br>
	 * @uses TaskFactory_1Override::ContinueWhenAny_3 <br>public , args: ($tasks, $continuationFunction, $continuationOptions)<br>
	 * @uses TaskFactory_1Override::ContinueWhenAny_4 <br>public , args: ($tasks, $continuationFunction, $cancellationToken, $continuationOptions, $scheduler)<br>
	 * @uses TaskFactory_1Override::ContinueWhenAny_5 <br>public , args: ($tasks, $continuationFunction)<br>
	 * @uses TaskFactory_1Override::ContinueWhenAny_6 <br>public , args: ($tasks, $continuationFunction, $cancellationToken)<br>
	 * @uses TaskFactory_1Override::ContinueWhenAny_7 <br>public , args: ($tasks, $continuationFunction, $continuationOptions)<br>
	 * @uses TaskFactory_1Override::ContinueWhenAny_8 <br>public , args: ($tasks, $continuationFunction, $cancellationToken, $continuationOptions, $scheduler)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Threading\Tasks\Task_1|mixed|\override
	 */
	#[MethodOverridePublic]function ContinueWhenAny (\override ...$args){}
	/**
	 * @uses TaskFactory_1Override::ContinueWhenAnyImpl_1 <br>protected , args: ($tasks, $continuationFunction, $continuationAction, $continuationOptions, $cancellationToken, $scheduler)<br>
	 * @uses TaskFactory_1Override::ContinueWhenAnyImpl_2 <br>protected , args: ($tasks, $continuationFunction, $continuationAction, $continuationOptions, $cancellationToken, $scheduler)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Threading\Tasks\Task_1|mixed|\override
	 */
	#[MethodOverrideProtected]function ContinueWhenAnyImpl (\override ...$args){}
	/**
	 * @uses TaskFactory_1Override::__construct_1 <br>public , args: ()<br>
	 * @uses TaskFactory_1Override::__construct_2 <br>public , args: ($cancellationToken)<br>
	 * @uses TaskFactory_1Override::__construct_3 <br>public , args: ($scheduler)<br>
	 * @uses TaskFactory_1Override::__construct_4 <br>public , args: ($creationOptions, $continuationOptions)<br>
	 * @uses TaskFactory_1Override::__construct_5 <br>public , args: ($cancellationToken, $creationOptions, $continuationOptions, $scheduler)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}