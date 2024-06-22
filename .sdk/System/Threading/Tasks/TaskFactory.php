<?php
namespace System\Threading\Tasks;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait TaskFactoryOverride {
	/**
	 * @deprecated
	 * @param \System\Action $action
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function StartNew_1 ($action){}
	/**
	 * @deprecated
	 * @param \System\Action $action
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function StartNew_2 ($action, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\Action $action
	 * @param \System\Threading\Tasks\TaskCreationOptions $creationOptions
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function StartNew_3 ($action, $creationOptions){}
	/**
	 * @deprecated
	 * @param \System\Action $action
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @param \System\Threading\Tasks\TaskCreationOptions $creationOptions
	 * @param \System\Threading\Tasks\TaskScheduler $scheduler
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function StartNew_4 ($action, $cancellationToken, $creationOptions, $scheduler){}
	/**
	 * @deprecated
	 * @param \System\Action_1 $action [generic: System\Object]
	 * @param \System\Object|object $state
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function StartNew_5 ($action, $state){}
	/**
	 * @deprecated
	 * @param \System\Action_1 $action [generic: System\Object]
	 * @param \System\Object|object $state
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function StartNew_6 ($action, $state, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\Action_1 $action [generic: System\Object]
	 * @param \System\Object|object $state
	 * @param \System\Threading\Tasks\TaskCreationOptions $creationOptions
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function StartNew_7 ($action, $state, $creationOptions){}
	/**
	 * @deprecated
	 * @param \System\Action_1 $action [generic: System\Object]
	 * @param \System\Object|object $state
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @param \System\Threading\Tasks\TaskCreationOptions $creationOptions
	 * @param \System\Threading\Tasks\TaskScheduler $scheduler
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function StartNew_8 ($action, $state, $cancellationToken, $creationOptions, $scheduler){}
	/**
	 * @deprecated
	 * @param \System\Func_1 $function [generic: TResult]
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function StartNew_9 ($function){}
	/**
	 * @deprecated
	 * @param \System\Func_1 $function [generic: TResult]
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function StartNew_10 ($function, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\Func_1 $function [generic: TResult]
	 * @param \System\Threading\Tasks\TaskCreationOptions $creationOptions
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function StartNew_11 ($function, $creationOptions){}
	/**
	 * @deprecated
	 * @param \System\Func_1 $function [generic: TResult]
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @param \System\Threading\Tasks\TaskCreationOptions $creationOptions
	 * @param \System\Threading\Tasks\TaskScheduler $scheduler
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function StartNew_12 ($function, $cancellationToken, $creationOptions, $scheduler){}
	/**
	 * @deprecated
	 * @param \System\Func_2 $function [generic: System\Object,TResult]
	 * @param \System\Object|object $state
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function StartNew_13 ($function, $state){}
	/**
	 * @deprecated
	 * @param \System\Func_2 $function [generic: System\Object,TResult]
	 * @param \System\Object|object $state
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function StartNew_14 ($function, $state, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\Func_2 $function [generic: System\Object,TResult]
	 * @param \System\Object|object $state
	 * @param \System\Threading\Tasks\TaskCreationOptions $creationOptions
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function StartNew_15 ($function, $state, $creationOptions){}
	/**
	 * @deprecated
	 * @param \System\Func_2 $function [generic: System\Object,TResult]
	 * @param \System\Object|object $state
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @param \System\Threading\Tasks\TaskCreationOptions $creationOptions
	 * @param \System\Threading\Tasks\TaskScheduler $scheduler
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function StartNew_16 ($function, $state, $cancellationToken, $creationOptions, $scheduler){}
	/**
	 * @deprecated
	 * @param \System\IAsyncResult $asyncResult
	 * @param \System\Action_1 $endMethod [generic: System\IAsyncResult]
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function FromAsync_1 ($asyncResult, $endMethod){}
	/**
	 * @deprecated
	 * @param \System\IAsyncResult $asyncResult
	 * @param \System\Action_1 $endMethod [generic: System\IAsyncResult]
	 * @param \System\Threading\Tasks\TaskCreationOptions $creationOptions
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function FromAsync_2 ($asyncResult, $endMethod, $creationOptions){}
	/**
	 * @deprecated
	 * @param \System\IAsyncResult $asyncResult
	 * @param \System\Action_1 $endMethod [generic: System\IAsyncResult]
	 * @param \System\Threading\Tasks\TaskCreationOptions $creationOptions
	 * @param \System\Threading\Tasks\TaskScheduler $scheduler
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function FromAsync_3 ($asyncResult, $endMethod, $creationOptions, $scheduler){}
	/**
	 * @deprecated
	 * @param \System\Func_3 $beginMethod [generic: System\AsyncCallback,System\Object,System\IAsyncResult]
	 * @param \System\Action_1 $endMethod [generic: System\IAsyncResult]
	 * @param \System\Object|object $state
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function FromAsync_4 ($beginMethod, $endMethod, $state){}
	/**
	 * @deprecated
	 * @param \System\Func_3 $beginMethod [generic: System\AsyncCallback,System\Object,System\IAsyncResult]
	 * @param \System\Action_1 $endMethod [generic: System\IAsyncResult]
	 * @param \System\Object|object $state
	 * @param \System\Threading\Tasks\TaskCreationOptions $creationOptions
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function FromAsync_5 ($beginMethod, $endMethod, $state, $creationOptions){}
	/**
	 * @deprecated
	 * @param \System\Func_4 $beginMethod [generic: TArg1,System\AsyncCallback,System\Object,System\IAsyncResult]
	 * @param \System\Action_1 $endMethod [generic: System\IAsyncResult]
	 * @param \TArg1 $arg1
	 * @param \System\Object|object $state
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function FromAsync_6 ($beginMethod, $endMethod, $arg1, $state){}
	/**
	 * @deprecated
	 * @param \System\Func_4 $beginMethod [generic: TArg1,System\AsyncCallback,System\Object,System\IAsyncResult]
	 * @param \System\Action_1 $endMethod [generic: System\IAsyncResult]
	 * @param \TArg1 $arg1
	 * @param \System\Object|object $state
	 * @param \System\Threading\Tasks\TaskCreationOptions $creationOptions
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function FromAsync_7 ($beginMethod, $endMethod, $arg1, $state, $creationOptions){}
	/**
	 * @deprecated
	 * @param \System\Func_5 $beginMethod [generic: TArg1,TArg2,System\AsyncCallback,System\Object,System\IAsyncResult]
	 * @param \System\Action_1 $endMethod [generic: System\IAsyncResult]
	 * @param \TArg1 $arg1
	 * @param \TArg2 $arg2
	 * @param \System\Object|object $state
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function FromAsync_8 ($beginMethod, $endMethod, $arg1, $arg2, $state){}
	/**
	 * @deprecated
	 * @param \System\Func_5 $beginMethod [generic: TArg1,TArg2,System\AsyncCallback,System\Object,System\IAsyncResult]
	 * @param \System\Action_1 $endMethod [generic: System\IAsyncResult]
	 * @param \TArg1 $arg1
	 * @param \TArg2 $arg2
	 * @param \System\Object|object $state
	 * @param \System\Threading\Tasks\TaskCreationOptions $creationOptions
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function FromAsync_9 ($beginMethod, $endMethod, $arg1, $arg2, $state, $creationOptions){}
	/**
	 * @deprecated
	 * @param \System\Func_6 $beginMethod [generic: TArg1,TArg2,TArg3,System\AsyncCallback,System\Object,System\IAsyncResult]
	 * @param \System\Action_1 $endMethod [generic: System\IAsyncResult]
	 * @param \TArg1 $arg1
	 * @param \TArg2 $arg2
	 * @param \TArg3 $arg3
	 * @param \System\Object|object $state
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function FromAsync_10 ($beginMethod, $endMethod, $arg1, $arg2, $arg3, $state){}
	/**
	 * @deprecated
	 * @param \System\Func_6 $beginMethod [generic: TArg1,TArg2,TArg3,System\AsyncCallback,System\Object,System\IAsyncResult]
	 * @param \System\Action_1 $endMethod [generic: System\IAsyncResult]
	 * @param \TArg1 $arg1
	 * @param \TArg2 $arg2
	 * @param \TArg3 $arg3
	 * @param \System\Object|object $state
	 * @param \System\Threading\Tasks\TaskCreationOptions $creationOptions
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function FromAsync_11 ($beginMethod, $endMethod, $arg1, $arg2, $arg3, $state, $creationOptions){}
	/**
	 * @deprecated
	 * @param \System\IAsyncResult $asyncResult
	 * @param \System\Func_2 $endMethod [generic: System\IAsyncResult,TResult]
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function FromAsync_12 ($asyncResult, $endMethod){}
	/**
	 * @deprecated
	 * @param \System\IAsyncResult $asyncResult
	 * @param \System\Func_2 $endMethod [generic: System\IAsyncResult,TResult]
	 * @param \System\Threading\Tasks\TaskCreationOptions $creationOptions
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function FromAsync_13 ($asyncResult, $endMethod, $creationOptions){}
	/**
	 * @deprecated
	 * @param \System\IAsyncResult $asyncResult
	 * @param \System\Func_2 $endMethod [generic: System\IAsyncResult,TResult]
	 * @param \System\Threading\Tasks\TaskCreationOptions $creationOptions
	 * @param \System\Threading\Tasks\TaskScheduler $scheduler
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function FromAsync_14 ($asyncResult, $endMethod, $creationOptions, $scheduler){}
	/**
	 * @deprecated
	 * @param \System\Func_3 $beginMethod [generic: System\AsyncCallback,System\Object,System\IAsyncResult]
	 * @param \System\Func_2 $endMethod [generic: System\IAsyncResult,TResult]
	 * @param \System\Object|object $state
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function FromAsync_15 ($beginMethod, $endMethod, $state){}
	/**
	 * @deprecated
	 * @param \System\Func_3 $beginMethod [generic: System\AsyncCallback,System\Object,System\IAsyncResult]
	 * @param \System\Func_2 $endMethod [generic: System\IAsyncResult,TResult]
	 * @param \System\Object|object $state
	 * @param \System\Threading\Tasks\TaskCreationOptions $creationOptions
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function FromAsync_16 ($beginMethod, $endMethod, $state, $creationOptions){}
	/**
	 * @deprecated
	 * @param \System\Func_4 $beginMethod [generic: TArg1,System\AsyncCallback,System\Object,System\IAsyncResult]
	 * @param \System\Func_2 $endMethod [generic: System\IAsyncResult,TResult]
	 * @param \TArg1 $arg1
	 * @param \System\Object|object $state
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function FromAsync_17 ($beginMethod, $endMethod, $arg1, $state){}
	/**
	 * @deprecated
	 * @param \System\Func_4 $beginMethod [generic: TArg1,System\AsyncCallback,System\Object,System\IAsyncResult]
	 * @param \System\Func_2 $endMethod [generic: System\IAsyncResult,TResult]
	 * @param \TArg1 $arg1
	 * @param \System\Object|object $state
	 * @param \System\Threading\Tasks\TaskCreationOptions $creationOptions
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function FromAsync_18 ($beginMethod, $endMethod, $arg1, $state, $creationOptions){}
	/**
	 * @deprecated
	 * @param \System\Func_5 $beginMethod [generic: TArg1,TArg2,System\AsyncCallback,System\Object,System\IAsyncResult]
	 * @param \System\Func_2 $endMethod [generic: System\IAsyncResult,TResult]
	 * @param \TArg1 $arg1
	 * @param \TArg2 $arg2
	 * @param \System\Object|object $state
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function FromAsync_19 ($beginMethod, $endMethod, $arg1, $arg2, $state){}
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
	#[MethodOverride]public function FromAsync_20 ($beginMethod, $endMethod, $arg1, $arg2, $state, $creationOptions){}
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
	#[MethodOverride]public function FromAsync_21 ($beginMethod, $endMethod, $arg1, $arg2, $arg3, $state){}
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
	#[MethodOverride]public function FromAsync_22 ($beginMethod, $endMethod, $arg1, $arg2, $arg3, $state, $creationOptions){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task $tasksCopy
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]protected static function CommonCWAllLogic_1 ($tasksCopy){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task_1 $tasksCopy [generic: T]
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]protected static function CommonCWAllLogic_2 ($tasksCopy){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task $tasks
	 * @param \System\Action_1 $continuationAction [generic: System\Threading\Tasks\Task[]
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function ContinueWhenAll_1 ($tasks, $continuationAction){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task $tasks
	 * @param \System\Action_1 $continuationAction [generic: System\Threading\Tasks\Task[]
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function ContinueWhenAll_2 ($tasks, $continuationAction, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task $tasks
	 * @param \System\Action_1 $continuationAction [generic: System\Threading\Tasks\Task[]
	 * @param \System\Threading\Tasks\TaskContinuationOptions $continuationOptions
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function ContinueWhenAll_3 ($tasks, $continuationAction, $continuationOptions){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task $tasks
	 * @param \System\Action_1 $continuationAction [generic: System\Threading\Tasks\Task[]
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @param \System\Threading\Tasks\TaskContinuationOptions $continuationOptions
	 * @param \System\Threading\Tasks\TaskScheduler $scheduler
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function ContinueWhenAll_4 ($tasks, $continuationAction, $cancellationToken, $continuationOptions, $scheduler){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task_1 $tasks [generic: TAntecedentResult]
	 * @param \System\Action_1 $continuationAction [generic: System\Threading\Tasks\Task_1[TAntecedentResult]
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function ContinueWhenAll_5 ($tasks, $continuationAction){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task_1 $tasks [generic: TAntecedentResult]
	 * @param \System\Action_1 $continuationAction [generic: System\Threading\Tasks\Task_1[TAntecedentResult]
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function ContinueWhenAll_6 ($tasks, $continuationAction, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task_1 $tasks [generic: TAntecedentResult]
	 * @param \System\Action_1 $continuationAction [generic: System\Threading\Tasks\Task_1[TAntecedentResult]
	 * @param \System\Threading\Tasks\TaskContinuationOptions $continuationOptions
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function ContinueWhenAll_7 ($tasks, $continuationAction, $continuationOptions){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task_1 $tasks [generic: TAntecedentResult]
	 * @param \System\Action_1 $continuationAction [generic: System\Threading\Tasks\Task_1[TAntecedentResult]
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @param \System\Threading\Tasks\TaskContinuationOptions $continuationOptions
	 * @param \System\Threading\Tasks\TaskScheduler $scheduler
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function ContinueWhenAll_8 ($tasks, $continuationAction, $cancellationToken, $continuationOptions, $scheduler){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task $tasks
	 * @param \System\Func_2 $continuationFunction [generic: System\Threading\Tasks\Task[]
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function ContinueWhenAll_9 ($tasks, $continuationFunction){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task $tasks
	 * @param \System\Func_2 $continuationFunction [generic: System\Threading\Tasks\Task[]
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function ContinueWhenAll_10 ($tasks, $continuationFunction, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task $tasks
	 * @param \System\Func_2 $continuationFunction [generic: System\Threading\Tasks\Task[]
	 * @param \System\Threading\Tasks\TaskContinuationOptions $continuationOptions
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function ContinueWhenAll_11 ($tasks, $continuationFunction, $continuationOptions){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task $tasks
	 * @param \System\Func_2 $continuationFunction [generic: System\Threading\Tasks\Task[]
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @param \System\Threading\Tasks\TaskContinuationOptions $continuationOptions
	 * @param \System\Threading\Tasks\TaskScheduler $scheduler
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function ContinueWhenAll_12 ($tasks, $continuationFunction, $cancellationToken, $continuationOptions, $scheduler){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task_1 $tasks [generic: TAntecedentResult]
	 * @param \System\Func_2 $continuationFunction [generic: System\Threading\Tasks\Task_1[TAntecedentResult]
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function ContinueWhenAll_13 ($tasks, $continuationFunction){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task_1 $tasks [generic: TAntecedentResult]
	 * @param \System\Func_2 $continuationFunction [generic: System\Threading\Tasks\Task_1[TAntecedentResult]
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function ContinueWhenAll_14 ($tasks, $continuationFunction, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task_1 $tasks [generic: TAntecedentResult]
	 * @param \System\Func_2 $continuationFunction [generic: System\Threading\Tasks\Task_1[TAntecedentResult]
	 * @param \System\Threading\Tasks\TaskContinuationOptions $continuationOptions
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function ContinueWhenAll_15 ($tasks, $continuationFunction, $continuationOptions){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task_1 $tasks [generic: TAntecedentResult]
	 * @param \System\Func_2 $continuationFunction [generic: System\Threading\Tasks\Task_1[TAntecedentResult]
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @param \System\Threading\Tasks\TaskContinuationOptions $continuationOptions
	 * @param \System\Threading\Tasks\TaskScheduler $scheduler
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function ContinueWhenAll_16 ($tasks, $continuationFunction, $cancellationToken, $continuationOptions, $scheduler){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task $tasks
	 * @param \System\Action_1 $continuationAction [generic: System\Threading\Tasks\Task]
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function ContinueWhenAny_1 ($tasks, $continuationAction){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task $tasks
	 * @param \System\Action_1 $continuationAction [generic: System\Threading\Tasks\Task]
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function ContinueWhenAny_2 ($tasks, $continuationAction, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task $tasks
	 * @param \System\Action_1 $continuationAction [generic: System\Threading\Tasks\Task]
	 * @param \System\Threading\Tasks\TaskContinuationOptions $continuationOptions
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function ContinueWhenAny_3 ($tasks, $continuationAction, $continuationOptions){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task $tasks
	 * @param \System\Action_1 $continuationAction [generic: System\Threading\Tasks\Task]
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @param \System\Threading\Tasks\TaskContinuationOptions $continuationOptions
	 * @param \System\Threading\Tasks\TaskScheduler $scheduler
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function ContinueWhenAny_4 ($tasks, $continuationAction, $cancellationToken, $continuationOptions, $scheduler){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task $tasks
	 * @param \System\Func_2 $continuationFunction [generic: System\Threading\Tasks\Task,TResult]
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function ContinueWhenAny_5 ($tasks, $continuationFunction){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task $tasks
	 * @param \System\Func_2 $continuationFunction [generic: System\Threading\Tasks\Task,TResult]
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function ContinueWhenAny_6 ($tasks, $continuationFunction, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task $tasks
	 * @param \System\Func_2 $continuationFunction [generic: System\Threading\Tasks\Task,TResult]
	 * @param \System\Threading\Tasks\TaskContinuationOptions $continuationOptions
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function ContinueWhenAny_7 ($tasks, $continuationFunction, $continuationOptions){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task $tasks
	 * @param \System\Func_2 $continuationFunction [generic: System\Threading\Tasks\Task,TResult]
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @param \System\Threading\Tasks\TaskContinuationOptions $continuationOptions
	 * @param \System\Threading\Tasks\TaskScheduler $scheduler
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function ContinueWhenAny_8 ($tasks, $continuationFunction, $cancellationToken, $continuationOptions, $scheduler){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task_1 $tasks [generic: TAntecedentResult]
	 * @param \System\Func_2 $continuationFunction [generic: System\Threading\Tasks\Task_1[TAntecedentResult]
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function ContinueWhenAny_9 ($tasks, $continuationFunction){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task_1 $tasks [generic: TAntecedentResult]
	 * @param \System\Func_2 $continuationFunction [generic: System\Threading\Tasks\Task_1[TAntecedentResult]
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function ContinueWhenAny_10 ($tasks, $continuationFunction, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task_1 $tasks [generic: TAntecedentResult]
	 * @param \System\Func_2 $continuationFunction [generic: System\Threading\Tasks\Task_1[TAntecedentResult]
	 * @param \System\Threading\Tasks\TaskContinuationOptions $continuationOptions
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function ContinueWhenAny_11 ($tasks, $continuationFunction, $continuationOptions){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task_1 $tasks [generic: TAntecedentResult]
	 * @param \System\Func_2 $continuationFunction [generic: System\Threading\Tasks\Task_1[TAntecedentResult]
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @param \System\Threading\Tasks\TaskContinuationOptions $continuationOptions
	 * @param \System\Threading\Tasks\TaskScheduler $scheduler
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function ContinueWhenAny_12 ($tasks, $continuationFunction, $cancellationToken, $continuationOptions, $scheduler){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task_1 $tasks [generic: TAntecedentResult]
	 * @param \System\Action_1 $continuationAction [generic: System\Threading\Tasks\Task_1[TAntecedentResult]
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function ContinueWhenAny_13 ($tasks, $continuationAction){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task_1 $tasks [generic: TAntecedentResult]
	 * @param \System\Action_1 $continuationAction [generic: System\Threading\Tasks\Task_1[TAntecedentResult]
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function ContinueWhenAny_14 ($tasks, $continuationAction, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task_1 $tasks [generic: TAntecedentResult]
	 * @param \System\Action_1 $continuationAction [generic: System\Threading\Tasks\Task_1[TAntecedentResult]
	 * @param \System\Threading\Tasks\TaskContinuationOptions $continuationOptions
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function ContinueWhenAny_15 ($tasks, $continuationAction, $continuationOptions){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task_1 $tasks [generic: TAntecedentResult]
	 * @param \System\Action_1 $continuationAction [generic: System\Threading\Tasks\Task_1[TAntecedentResult]
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @param \System\Threading\Tasks\TaskContinuationOptions $continuationOptions
	 * @param \System\Threading\Tasks\TaskScheduler $scheduler
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function ContinueWhenAny_16 ($tasks, $continuationAction, $cancellationToken, $continuationOptions, $scheduler){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task $tasks
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]protected static function CheckMultiContinuationTasksAndCopy_1 ($tasks){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task_1 $tasks [generic: TResult]
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]protected static function CheckMultiContinuationTasksAndCopy_2 ($tasks){}
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
class TaskFactory extends \System\Object
{
	use TaskFactoryOverride;

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
	 * @param \System\Threading\Tasks\TaskCreationOptions $creationOptions
	 * @return \System\Void|void
	 */
	protected static function CheckCreationOptions($creationOptions){}
	/**
	 * @uses TaskFactoryOverride::StartNew_1 <br>public , args: ($action)<br>
	 * @uses TaskFactoryOverride::StartNew_2 <br>public , args: ($action, $cancellationToken)<br>
	 * @uses TaskFactoryOverride::StartNew_3 <br>public , args: ($action, $creationOptions)<br>
	 * @uses TaskFactoryOverride::StartNew_4 <br>public , args: ($action, $cancellationToken, $creationOptions, $scheduler)<br>
	 * @uses TaskFactoryOverride::StartNew_5 <br>public , args: ($action, $state)<br>
	 * @uses TaskFactoryOverride::StartNew_6 <br>public , args: ($action, $state, $cancellationToken)<br>
	 * @uses TaskFactoryOverride::StartNew_7 <br>public , args: ($action, $state, $creationOptions)<br>
	 * @uses TaskFactoryOverride::StartNew_8 <br>public , args: ($action, $state, $cancellationToken, $creationOptions, $scheduler)<br>
	 * @uses TaskFactoryOverride::StartNew_9 <br>public , args: ($function)<br>
	 * @uses TaskFactoryOverride::StartNew_10 <br>public , args: ($function, $cancellationToken)<br>
	 * @uses TaskFactoryOverride::StartNew_11 <br>public , args: ($function, $creationOptions)<br>
	 * @uses TaskFactoryOverride::StartNew_12 <br>public , args: ($function, $cancellationToken, $creationOptions, $scheduler)<br>
	 * @uses TaskFactoryOverride::StartNew_13 <br>public , args: ($function, $state)<br>
	 * @uses TaskFactoryOverride::StartNew_14 <br>public , args: ($function, $state, $cancellationToken)<br>
	 * @uses TaskFactoryOverride::StartNew_15 <br>public , args: ($function, $state, $creationOptions)<br>
	 * @uses TaskFactoryOverride::StartNew_16 <br>public , args: ($function, $state, $cancellationToken, $creationOptions, $scheduler)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Threading\Tasks\Task|\System\Threading\Tasks\Task_1|mixed|\override
	 */
	#[MethodOverridePublic]function StartNew (\override ...$args){}
	/**
	 * @uses TaskFactoryOverride::FromAsync_1 <br>public , args: ($asyncResult, $endMethod)<br>
	 * @uses TaskFactoryOverride::FromAsync_2 <br>public , args: ($asyncResult, $endMethod, $creationOptions)<br>
	 * @uses TaskFactoryOverride::FromAsync_3 <br>public , args: ($asyncResult, $endMethod, $creationOptions, $scheduler)<br>
	 * @uses TaskFactoryOverride::FromAsync_4 <br>public , args: ($beginMethod, $endMethod, $state)<br>
	 * @uses TaskFactoryOverride::FromAsync_5 <br>public , args: ($beginMethod, $endMethod, $state, $creationOptions)<br>
	 * @uses TaskFactoryOverride::FromAsync_6 <br>public , args: ($beginMethod, $endMethod, $arg1, $state)<br>
	 * @uses TaskFactoryOverride::FromAsync_7 <br>public , args: ($beginMethod, $endMethod, $arg1, $state, $creationOptions)<br>
	 * @uses TaskFactoryOverride::FromAsync_8 <br>public , args: ($beginMethod, $endMethod, $arg1, $arg2, $state)<br>
	 * @uses TaskFactoryOverride::FromAsync_9 <br>public , args: ($beginMethod, $endMethod, $arg1, $arg2, $state, $creationOptions)<br>
	 * @uses TaskFactoryOverride::FromAsync_10 <br>public , args: ($beginMethod, $endMethod, $arg1, $arg2, $arg3, $state)<br>
	 * @uses TaskFactoryOverride::FromAsync_11 <br>public , args: ($beginMethod, $endMethod, $arg1, $arg2, $arg3, $state, $creationOptions)<br>
	 * @uses TaskFactoryOverride::FromAsync_12 <br>public , args: ($asyncResult, $endMethod)<br>
	 * @uses TaskFactoryOverride::FromAsync_13 <br>public , args: ($asyncResult, $endMethod, $creationOptions)<br>
	 * @uses TaskFactoryOverride::FromAsync_14 <br>public , args: ($asyncResult, $endMethod, $creationOptions, $scheduler)<br>
	 * @uses TaskFactoryOverride::FromAsync_15 <br>public , args: ($beginMethod, $endMethod, $state)<br>
	 * @uses TaskFactoryOverride::FromAsync_16 <br>public , args: ($beginMethod, $endMethod, $state, $creationOptions)<br>
	 * @uses TaskFactoryOverride::FromAsync_17 <br>public , args: ($beginMethod, $endMethod, $arg1, $state)<br>
	 * @uses TaskFactoryOverride::FromAsync_18 <br>public , args: ($beginMethod, $endMethod, $arg1, $state, $creationOptions)<br>
	 * @uses TaskFactoryOverride::FromAsync_19 <br>public , args: ($beginMethod, $endMethod, $arg1, $arg2, $state)<br>
	 * @uses TaskFactoryOverride::FromAsync_20 <br>public , args: ($beginMethod, $endMethod, $arg1, $arg2, $state, $creationOptions)<br>
	 * @uses TaskFactoryOverride::FromAsync_21 <br>public , args: ($beginMethod, $endMethod, $arg1, $arg2, $arg3, $state)<br>
	 * @uses TaskFactoryOverride::FromAsync_22 <br>public , args: ($beginMethod, $endMethod, $arg1, $arg2, $arg3, $state, $creationOptions)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Threading\Tasks\Task|\System\Threading\Tasks\Task_1|mixed|\override
	 */
	#[MethodOverridePublic]function FromAsync (\override ...$args){}
	/**
	 * @param \System\Threading\Tasks\TaskCreationOptions $creationOptions
	 * @param \System\Boolean|bool $hasBeginMethod
	 * @return \System\Void|void
	 */
	protected static function CheckFromAsyncOptions($creationOptions, $hasBeginMethod){}
	/**
	 * @uses TaskFactoryOverride::CommonCWAllLogic_1 <br>protected , args: ($tasksCopy)<br>
	 * @uses TaskFactoryOverride::CommonCWAllLogic_2 <br>protected , args: ($tasksCopy)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Threading\Tasks\Task_1|mixed|\override
	 */
	#[MethodOverrideProtected]function CommonCWAllLogic (\override ...$args){}
	/**
	 * @uses TaskFactoryOverride::ContinueWhenAll_1 <br>public , args: ($tasks, $continuationAction)<br>
	 * @uses TaskFactoryOverride::ContinueWhenAll_2 <br>public , args: ($tasks, $continuationAction, $cancellationToken)<br>
	 * @uses TaskFactoryOverride::ContinueWhenAll_3 <br>public , args: ($tasks, $continuationAction, $continuationOptions)<br>
	 * @uses TaskFactoryOverride::ContinueWhenAll_4 <br>public , args: ($tasks, $continuationAction, $cancellationToken, $continuationOptions, $scheduler)<br>
	 * @uses TaskFactoryOverride::ContinueWhenAll_5 <br>public , args: ($tasks, $continuationAction)<br>
	 * @uses TaskFactoryOverride::ContinueWhenAll_6 <br>public , args: ($tasks, $continuationAction, $cancellationToken)<br>
	 * @uses TaskFactoryOverride::ContinueWhenAll_7 <br>public , args: ($tasks, $continuationAction, $continuationOptions)<br>
	 * @uses TaskFactoryOverride::ContinueWhenAll_8 <br>public , args: ($tasks, $continuationAction, $cancellationToken, $continuationOptions, $scheduler)<br>
	 * @uses TaskFactoryOverride::ContinueWhenAll_9 <br>public , args: ($tasks, $continuationFunction)<br>
	 * @uses TaskFactoryOverride::ContinueWhenAll_10 <br>public , args: ($tasks, $continuationFunction, $cancellationToken)<br>
	 * @uses TaskFactoryOverride::ContinueWhenAll_11 <br>public , args: ($tasks, $continuationFunction, $continuationOptions)<br>
	 * @uses TaskFactoryOverride::ContinueWhenAll_12 <br>public , args: ($tasks, $continuationFunction, $cancellationToken, $continuationOptions, $scheduler)<br>
	 * @uses TaskFactoryOverride::ContinueWhenAll_13 <br>public , args: ($tasks, $continuationFunction)<br>
	 * @uses TaskFactoryOverride::ContinueWhenAll_14 <br>public , args: ($tasks, $continuationFunction, $cancellationToken)<br>
	 * @uses TaskFactoryOverride::ContinueWhenAll_15 <br>public , args: ($tasks, $continuationFunction, $continuationOptions)<br>
	 * @uses TaskFactoryOverride::ContinueWhenAll_16 <br>public , args: ($tasks, $continuationFunction, $cancellationToken, $continuationOptions, $scheduler)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Threading\Tasks\Task|\System\Threading\Tasks\Task_1|mixed|\override
	 */
	#[MethodOverridePublic]function ContinueWhenAll (\override ...$args){}
	/**
	 * @param \System\Collections\Generic\IList_1 $tasks [generic: System\Threading\Tasks\Task]
	 * @param \System\Boolean|bool $isSyncBlocking
	 * @return \System\Threading\Tasks\Task_1[System\Threading\Tasks\Task]
	 */
	protected static function CommonCWAnyLogic($tasks, $isSyncBlocking){}
	/**
	 * @param \System\Threading\Tasks\Task_1 $continuation [generic: System\Threading\Tasks\Task]
	 * @return \System\Void|void
	 */
	protected static function CommonCWAnyLogicCleanup($continuation){}
	/**
	 * @uses TaskFactoryOverride::ContinueWhenAny_1 <br>public , args: ($tasks, $continuationAction)<br>
	 * @uses TaskFactoryOverride::ContinueWhenAny_2 <br>public , args: ($tasks, $continuationAction, $cancellationToken)<br>
	 * @uses TaskFactoryOverride::ContinueWhenAny_3 <br>public , args: ($tasks, $continuationAction, $continuationOptions)<br>
	 * @uses TaskFactoryOverride::ContinueWhenAny_4 <br>public , args: ($tasks, $continuationAction, $cancellationToken, $continuationOptions, $scheduler)<br>
	 * @uses TaskFactoryOverride::ContinueWhenAny_5 <br>public , args: ($tasks, $continuationFunction)<br>
	 * @uses TaskFactoryOverride::ContinueWhenAny_6 <br>public , args: ($tasks, $continuationFunction, $cancellationToken)<br>
	 * @uses TaskFactoryOverride::ContinueWhenAny_7 <br>public , args: ($tasks, $continuationFunction, $continuationOptions)<br>
	 * @uses TaskFactoryOverride::ContinueWhenAny_8 <br>public , args: ($tasks, $continuationFunction, $cancellationToken, $continuationOptions, $scheduler)<br>
	 * @uses TaskFactoryOverride::ContinueWhenAny_9 <br>public , args: ($tasks, $continuationFunction)<br>
	 * @uses TaskFactoryOverride::ContinueWhenAny_10 <br>public , args: ($tasks, $continuationFunction, $cancellationToken)<br>
	 * @uses TaskFactoryOverride::ContinueWhenAny_11 <br>public , args: ($tasks, $continuationFunction, $continuationOptions)<br>
	 * @uses TaskFactoryOverride::ContinueWhenAny_12 <br>public , args: ($tasks, $continuationFunction, $cancellationToken, $continuationOptions, $scheduler)<br>
	 * @uses TaskFactoryOverride::ContinueWhenAny_13 <br>public , args: ($tasks, $continuationAction)<br>
	 * @uses TaskFactoryOverride::ContinueWhenAny_14 <br>public , args: ($tasks, $continuationAction, $cancellationToken)<br>
	 * @uses TaskFactoryOverride::ContinueWhenAny_15 <br>public , args: ($tasks, $continuationAction, $continuationOptions)<br>
	 * @uses TaskFactoryOverride::ContinueWhenAny_16 <br>public , args: ($tasks, $continuationAction, $cancellationToken, $continuationOptions, $scheduler)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Threading\Tasks\Task|\System\Threading\Tasks\Task_1|mixed|\override
	 */
	#[MethodOverridePublic]function ContinueWhenAny (\override ...$args){}
	/**
	 * @uses TaskFactoryOverride::CheckMultiContinuationTasksAndCopy_1 <br>protected , args: ($tasks)<br>
	 * @uses TaskFactoryOverride::CheckMultiContinuationTasksAndCopy_2 <br>protected , args: ($tasks)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Threading\Tasks\Task|\System\Threading\Tasks\Task_1|mixed|\override
	 */
	#[MethodOverrideProtected]function CheckMultiContinuationTasksAndCopy (\override ...$args){}
	/**
	 * @param \System\Threading\Tasks\TaskContinuationOptions $continuationOptions
	 * @return \System\Void|void
	 */
	protected static function CheckMultiTaskContinuationOptions($continuationOptions){}
	/**
	 * @uses TaskFactoryOverride::__construct_1 <br>public , args: ()<br>
	 * @uses TaskFactoryOverride::__construct_2 <br>public , args: ($cancellationToken)<br>
	 * @uses TaskFactoryOverride::__construct_3 <br>public , args: ($scheduler)<br>
	 * @uses TaskFactoryOverride::__construct_4 <br>public , args: ($creationOptions, $continuationOptions)<br>
	 * @uses TaskFactoryOverride::__construct_5 <br>public , args: ($cancellationToken, $creationOptions, $continuationOptions, $scheduler)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}