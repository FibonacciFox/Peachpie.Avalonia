<?php
namespace System\Runtime\CompilerServices;
/**
 */
class AsyncVoidMethodBuilder extends \System\ValueType
{
	/**
	 * @return \System\Runtime\CompilerServices\AsyncVoidMethodBuilder
	 */
	public static function Create(){}
	/**
	 * @param \System\Runtime\CompilerServices\TStateMachine& $stateMachine
	 * @return \System\Void|void
	 */
	public  function Start($stateMachine){}
	/**
	 * @param \System\Runtime\CompilerServices\IAsyncStateMachine $stateMachine
	 * @return \System\Void|void
	 */
	public  function SetStateMachine($stateMachine){}
	/**
	 * @param \System\Runtime\CompilerServices\TAwaiter& $awaiter
	 * @param \System\Runtime\CompilerServices\TStateMachine& $stateMachine
	 * @return \System\Void|void
	 */
	public  function AwaitOnCompleted($awaiter, $stateMachine){}
	/**
	 * @param \System\Runtime\CompilerServices\TAwaiter& $awaiter
	 * @param \System\Runtime\CompilerServices\TStateMachine& $stateMachine
	 * @return \System\Void|void
	 */
	public  function AwaitUnsafeOnCompleted($awaiter, $stateMachine){}
	/**
	 * @return \System\Void|void
	 */
	public  function SetResult(){}
	/**
	 * @param \System\Exception $exception
	 * @return \System\Void|void
	 */
	public  function SetException($exception){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function NotifySynchronizationContextOfCompletion(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_Task(){}
	/**
	 * @return \System\Object|object
	 */
	protected  function get_ObjectIdForDebugger(){}
}
