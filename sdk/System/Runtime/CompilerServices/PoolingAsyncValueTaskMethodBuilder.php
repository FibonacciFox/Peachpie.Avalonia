<?php
namespace System\Runtime\CompilerServices;
/**
 */
class PoolingAsyncValueTaskMethodBuilder extends \System\ValueType
{
	/**
	 * @var \System\Threading\Tasks\ValueTask
	 * @property
	 */
	public readonly $Task;
	/**
	 * @return \System\Runtime\CompilerServices\PoolingAsyncValueTaskMethodBuilder
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
	 * @return \System\Void|void
	 */
	public  function SetResult(){}
	/**
	 * @param \System\Exception $exception
	 * @return \System\Void|void
	 */
	public  function SetException($exception){}
	/**
	 * @return \System\Threading\Tasks\ValueTask
	 */
	public  function get_Task(){}
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
}
