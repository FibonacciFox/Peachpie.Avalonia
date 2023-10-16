<?php
namespace System\Threading\Tasks;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait TaskCompletionSourceMethodsOverride
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
 */
class TaskCompletionSource extends \System\Object
{
	/**
	 * @var \System\Threading\Tasks\Task
	 * @property
	 */
	public readonly $Task;
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	public  function get_Task(){}
	/**
	 * @uses TaskCompletionSourceMethodsOverride::SetException_1 ($exception)
	 * @uses TaskCompletionSourceMethodsOverride::SetException_2 ($exceptions)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetException(mixed ...$args){}
	/**
	 * @uses TaskCompletionSourceMethodsOverride::TrySetException_1 ($exception)
	 * @uses TaskCompletionSourceMethodsOverride::TrySetException_2 ($exceptions)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function TrySetException(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public  function SetResult(){}
	/**
	 * @return \System\Boolean
	 */
	public  function TrySetResult(){}
	/**
	 * @uses TaskCompletionSourceMethodsOverride::SetCanceled_1 ()
	 * @uses TaskCompletionSourceMethodsOverride::SetCanceled_2 ($cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCanceled(mixed ...$args){}
	/**
	 * @uses TaskCompletionSourceMethodsOverride::TrySetCanceled_1 ()
	 * @uses TaskCompletionSourceMethodsOverride::TrySetCanceled_2 ($cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function TrySetCanceled(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
