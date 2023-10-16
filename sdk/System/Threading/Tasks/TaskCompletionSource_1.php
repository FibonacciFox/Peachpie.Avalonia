<?php
namespace System\Threading\Tasks;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait TaskCompletionSource_1MethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetException_1($exception){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetException_2($exceptions){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function TrySetException_1($exception){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function TrySetException_2($exceptions){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetCanceled_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetCanceled_2($cancellationToken){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function TrySetCanceled_1(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function TrySetCanceled_2($cancellationToken){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class TaskCompletionSource_1 extends \System\Object
{
	/**
	 * @var \System\Threading\Tasks\Task_1[TResult]
	 * @property
	 */
	public readonly $Task;
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	public  function get_Task(){}
	/**
	 * @uses TaskCompletionSource_1MethodsOverride::SetException_1 ($exception)
	 * @uses TaskCompletionSource_1MethodsOverride::SetException_2 ($exceptions)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetException(mixed ...$args){}
	/**
	 * @uses TaskCompletionSource_1MethodsOverride::TrySetException_1 ($exception)
	 * @uses TaskCompletionSource_1MethodsOverride::TrySetException_2 ($exceptions)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function TrySetException(mixed ...$args){}
	/**
	 * @param \System\Threading\Tasks\TResult $result
	 * @return \System\Void|void
	 */
	public  function SetResult($result){}
	/**
	 * @param \System\Threading\Tasks\TResult $result
	 * @return \System\Boolean
	 */
	public  function TrySetResult($result){}
	/**
	 * @uses TaskCompletionSource_1MethodsOverride::SetCanceled_1 ()
	 * @uses TaskCompletionSource_1MethodsOverride::SetCanceled_2 ($cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCanceled(mixed ...$args){}
	/**
	 * @uses TaskCompletionSource_1MethodsOverride::TrySetCanceled_1 ()
	 * @uses TaskCompletionSource_1MethodsOverride::TrySetCanceled_2 ($cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function TrySetCanceled(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
