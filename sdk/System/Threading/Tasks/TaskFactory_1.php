<?php
namespace System\Threading\Tasks;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait TaskFactory_1MethodsOverride
{
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function StartNew_1($function){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function StartNew_2($function, $cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function StartNew_3($function, $creationOptions){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function StartNew_4($function, $cancellationToken, $creationOptions, $scheduler){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function StartNew_5($function, $state){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function StartNew_6($function, $state, $cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function StartNew_7($function, $state, $creationOptions){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function StartNew_8($function, $state, $cancellationToken, $creationOptions, $scheduler){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function FromAsync_1($asyncResult, $endMethod){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function FromAsync_2($asyncResult, $endMethod, $creationOptions){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function FromAsync_3($asyncResult, $endMethod, $creationOptions, $scheduler){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function FromAsync_4($beginMethod, $endMethod, $state){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function FromAsync_5($beginMethod, $endMethod, $state, $creationOptions){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function FromAsync_6($beginMethod, $endMethod, $arg1, $state){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function FromAsync_7($beginMethod, $endMethod, $arg1, $state, $creationOptions){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function FromAsync_8($beginMethod, $endMethod, $arg1, $arg2, $state){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function FromAsync_9($beginMethod, $endMethod, $arg1, $arg2, $state, $creationOptions){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function FromAsync_10($beginMethod, $endMethod, $arg1, $arg2, $arg3, $state){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function FromAsync_11($beginMethod, $endMethod, $arg1, $arg2, $arg3, $state, $creationOptions){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] protected static function FromAsyncImpl_1($asyncResult, $endFunction, $endAction, $creationOptions, $scheduler){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] protected static function FromAsyncImpl_2($beginMethod, $endFunction, $endAction, $state, $creationOptions){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] protected static function FromAsyncImpl_3($beginMethod, $endFunction, $endAction, $arg1, $state, $creationOptions){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] protected static function FromAsyncImpl_4($beginMethod, $endFunction, $endAction, $arg1, $arg2, $state, $creationOptions){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] protected static function FromAsyncImpl_5($beginMethod, $endFunction, $endAction, $arg1, $arg2, $arg3, $state, $creationOptions){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function ContinueWhenAll_1($tasks, $continuationFunction){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function ContinueWhenAll_2($tasks, $continuationFunction, $cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function ContinueWhenAll_3($tasks, $continuationFunction, $continuationOptions){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function ContinueWhenAll_4($tasks, $continuationFunction, $cancellationToken, $continuationOptions, $scheduler){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function ContinueWhenAll_5($tasks, $continuationFunction){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function ContinueWhenAll_6($tasks, $continuationFunction, $cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function ContinueWhenAll_7($tasks, $continuationFunction, $continuationOptions){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function ContinueWhenAll_8($tasks, $continuationFunction, $cancellationToken, $continuationOptions, $scheduler){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] protected static function ContinueWhenAllImpl_1($tasks, $continuationFunction, $continuationAction, $continuationOptions, $cancellationToken, $scheduler){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] protected static function ContinueWhenAllImpl_2($tasks, $continuationFunction, $continuationAction, $continuationOptions, $cancellationToken, $scheduler){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function ContinueWhenAny_1($tasks, $continuationFunction){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function ContinueWhenAny_2($tasks, $continuationFunction, $cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function ContinueWhenAny_3($tasks, $continuationFunction, $continuationOptions){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function ContinueWhenAny_4($tasks, $continuationFunction, $cancellationToken, $continuationOptions, $scheduler){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function ContinueWhenAny_5($tasks, $continuationFunction){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function ContinueWhenAny_6($tasks, $continuationFunction, $cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function ContinueWhenAny_7($tasks, $continuationFunction, $continuationOptions){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function ContinueWhenAny_8($tasks, $continuationFunction, $cancellationToken, $continuationOptions, $scheduler){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] protected static function ContinueWhenAnyImpl_1($tasks, $continuationFunction, $continuationAction, $continuationOptions, $cancellationToken, $scheduler){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] protected static function ContinueWhenAnyImpl_2($tasks, $continuationFunction, $continuationAction, $continuationOptions, $cancellationToken, $scheduler){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class TaskFactory_1 extends \System\Object
{
	/**
	 * @var \System\Threading\CancellationToken
	 * @property
	 */
	public readonly $CancellationToken;
	/**
	 * @var \System\Threading\Tasks\TaskScheduler
	 * @property
	 */
	public readonly $Scheduler;
	/**
	 * @var \System\Threading\Tasks\TaskCreationOptions
	 * @property
	 */
	public readonly $CreationOptions;
	/**
	 * @var \System\Threading\Tasks\TaskContinuationOptions
	 * @property
	 */
	public readonly $ContinuationOptions;
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_DefaultScheduler(){}
	/**
	 * @param \System\Threading\Tasks\Task $currTask
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetDefaultScheduler($currTask){}
	/**
	 * @return \System\Threading\CancellationToken
	 */
	public  function get_CancellationToken(){}
	/**
	 * @return \System\Threading\Tasks\TaskScheduler
	 */
	public  function get_Scheduler(){}
	/**
	 * @return \System\Threading\Tasks\TaskCreationOptions
	 */
	public  function get_CreationOptions(){}
	/**
	 * @return \System\Threading\Tasks\TaskContinuationOptions
	 */
	public  function get_ContinuationOptions(){}
	/**
	 * @uses TaskFactory_1MethodsOverride::StartNew_1 ($function)
	 * @uses TaskFactory_1MethodsOverride::StartNew_2 ($function, $cancellationToken)
	 * @uses TaskFactory_1MethodsOverride::StartNew_3 ($function, $creationOptions)
	 * @uses TaskFactory_1MethodsOverride::StartNew_4 ($function, $cancellationToken, $creationOptions, $scheduler)
	 * @uses TaskFactory_1MethodsOverride::StartNew_5 ($function, $state)
	 * @uses TaskFactory_1MethodsOverride::StartNew_6 ($function, $state, $cancellationToken)
	 * @uses TaskFactory_1MethodsOverride::StartNew_7 ($function, $state, $creationOptions)
	 * @uses TaskFactory_1MethodsOverride::StartNew_8 ($function, $state, $cancellationToken, $creationOptions, $scheduler)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function StartNew(mixed ...$args){}
	/**
	 * @param \System\IAsyncResult $iar
	 * @param \System\Func_2 $endFunction
	 * @param \System\Action_1 $endAction
	 * @param \System\Threading\Tasks\Task_1 $promise
	 * @param \System\Boolean $requiresSynchronization
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function FromAsyncCoreLogic($iar, $endFunction, $endAction, $promise, $requiresSynchronization){}
	/**
	 * @uses TaskFactory_1MethodsOverride::FromAsync_1 ($asyncResult, $endMethod)
	 * @uses TaskFactory_1MethodsOverride::FromAsync_2 ($asyncResult, $endMethod, $creationOptions)
	 * @uses TaskFactory_1MethodsOverride::FromAsync_3 ($asyncResult, $endMethod, $creationOptions, $scheduler)
	 * @uses TaskFactory_1MethodsOverride::FromAsync_4 ($beginMethod, $endMethod, $state)
	 * @uses TaskFactory_1MethodsOverride::FromAsync_5 ($beginMethod, $endMethod, $state, $creationOptions)
	 * @uses TaskFactory_1MethodsOverride::FromAsync_6 ($beginMethod, $endMethod, $arg1, $state)
	 * @uses TaskFactory_1MethodsOverride::FromAsync_7 ($beginMethod, $endMethod, $arg1, $state, $creationOptions)
	 * @uses TaskFactory_1MethodsOverride::FromAsync_8 ($beginMethod, $endMethod, $arg1, $arg2, $state)
	 * @uses TaskFactory_1MethodsOverride::FromAsync_9 ($beginMethod, $endMethod, $arg1, $arg2, $state, $creationOptions)
	 * @uses TaskFactory_1MethodsOverride::FromAsync_10 ($beginMethod, $endMethod, $arg1, $arg2, $arg3, $state)
	 * @uses TaskFactory_1MethodsOverride::FromAsync_11 ($beginMethod, $endMethod, $arg1, $arg2, $arg3, $state, $creationOptions)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function FromAsync(mixed ...$args){}
	/**
	 * @uses TaskFactory_1MethodsOverride::FromAsyncImpl_1 ($asyncResult, $endFunction, $endAction, $creationOptions, $scheduler)
	 * @uses TaskFactory_1MethodsOverride::FromAsyncImpl_2 ($beginMethod, $endFunction, $endAction, $state, $creationOptions)
	 * @uses TaskFactory_1MethodsOverride::FromAsyncImpl_3 ($beginMethod, $endFunction, $endAction, $arg1, $state, $creationOptions)
	 * @uses TaskFactory_1MethodsOverride::FromAsyncImpl_4 ($beginMethod, $endFunction, $endAction, $arg1, $arg2, $state, $creationOptions)
	 * @uses TaskFactory_1MethodsOverride::FromAsyncImpl_5 ($beginMethod, $endFunction, $endAction, $arg1, $arg2, $arg3, $state, $creationOptions)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function FromAsyncImpl(mixed ...$args){}
	/**
	 * @param \System\Threading\Tasks\TInstance $thisRef
	 * @param \System\Threading\Tasks\TArgs $args
	 * @param \System\Func_5 $beginMethod
	 * @param \System\Func_3 $endMethod
	 * @return \System\Threading\Tasks\Task_1
	 */
	protected static function FromAsyncTrim($thisRef, $args, $beginMethod, $endMethod){}
	/**
	 * @param \System\Threading\Tasks\TaskContinuationOptions $continuationOptions
	 * @param \System\Threading\CancellationToken $ct
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateCanceledTask($continuationOptions, $ct){}
	/**
	 * @uses TaskFactory_1MethodsOverride::ContinueWhenAll_1 ($tasks, $continuationFunction)
	 * @uses TaskFactory_1MethodsOverride::ContinueWhenAll_2 ($tasks, $continuationFunction, $cancellationToken)
	 * @uses TaskFactory_1MethodsOverride::ContinueWhenAll_3 ($tasks, $continuationFunction, $continuationOptions)
	 * @uses TaskFactory_1MethodsOverride::ContinueWhenAll_4 ($tasks, $continuationFunction, $cancellationToken, $continuationOptions, $scheduler)
	 * @uses TaskFactory_1MethodsOverride::ContinueWhenAll_5 ($tasks, $continuationFunction)
	 * @uses TaskFactory_1MethodsOverride::ContinueWhenAll_6 ($tasks, $continuationFunction, $cancellationToken)
	 * @uses TaskFactory_1MethodsOverride::ContinueWhenAll_7 ($tasks, $continuationFunction, $continuationOptions)
	 * @uses TaskFactory_1MethodsOverride::ContinueWhenAll_8 ($tasks, $continuationFunction, $cancellationToken, $continuationOptions, $scheduler)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ContinueWhenAll(mixed ...$args){}
	/**
	 * @uses TaskFactory_1MethodsOverride::ContinueWhenAllImpl_1 ($tasks, $continuationFunction, $continuationAction, $continuationOptions, $cancellationToken, $scheduler)
	 * @uses TaskFactory_1MethodsOverride::ContinueWhenAllImpl_2 ($tasks, $continuationFunction, $continuationAction, $continuationOptions, $cancellationToken, $scheduler)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ContinueWhenAllImpl(mixed ...$args){}
	/**
	 * @uses TaskFactory_1MethodsOverride::ContinueWhenAny_1 ($tasks, $continuationFunction)
	 * @uses TaskFactory_1MethodsOverride::ContinueWhenAny_2 ($tasks, $continuationFunction, $cancellationToken)
	 * @uses TaskFactory_1MethodsOverride::ContinueWhenAny_3 ($tasks, $continuationFunction, $continuationOptions)
	 * @uses TaskFactory_1MethodsOverride::ContinueWhenAny_4 ($tasks, $continuationFunction, $cancellationToken, $continuationOptions, $scheduler)
	 * @uses TaskFactory_1MethodsOverride::ContinueWhenAny_5 ($tasks, $continuationFunction)
	 * @uses TaskFactory_1MethodsOverride::ContinueWhenAny_6 ($tasks, $continuationFunction, $cancellationToken)
	 * @uses TaskFactory_1MethodsOverride::ContinueWhenAny_7 ($tasks, $continuationFunction, $continuationOptions)
	 * @uses TaskFactory_1MethodsOverride::ContinueWhenAny_8 ($tasks, $continuationFunction, $cancellationToken, $continuationOptions, $scheduler)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ContinueWhenAny(mixed ...$args){}
	/**
	 * @uses TaskFactory_1MethodsOverride::ContinueWhenAnyImpl_1 ($tasks, $continuationFunction, $continuationAction, $continuationOptions, $cancellationToken, $scheduler)
	 * @uses TaskFactory_1MethodsOverride::ContinueWhenAnyImpl_2 ($tasks, $continuationFunction, $continuationAction, $continuationOptions, $cancellationToken, $scheduler)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ContinueWhenAnyImpl(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
