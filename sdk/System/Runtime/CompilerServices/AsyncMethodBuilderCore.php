<?php
namespace System\Runtime\CompilerServices;
/**
 */
class AsyncMethodBuilderCore extends \System\Object
{
	/**
	 * @param \System\Runtime\CompilerServices\TStateMachine& $stateMachine
	 * @return \System\Void|void
	 */
	public static function Start($stateMachine){}
	/**
	 * @param \System\Runtime\CompilerServices\IAsyncStateMachine $stateMachine
	 * @param \System\Threading\Tasks\Task $task
	 * @return \System\Void|void
	 */
	public static function SetStateMachine($stateMachine, $task){}
	/**
	 * @return \System\Boolean
	 */
	protected static function get_TrackAsyncMethodCompletion(){}
	/**
	 * @param \System\Runtime\CompilerServices\IAsyncStateMachine $stateMachine
	 * @return \System\String|string
	 */
	protected static function GetAsyncStateMachineDescription($stateMachine){}
	/**
	 * @param \System\Action $continuation
	 * @param \System\Action_2 $invokeAction
	 * @param \System\Threading\Tasks\Task $innerTask
	 * @return \System\Action
	 */
	protected static function CreateContinuationWrapper($continuation, $invokeAction, $innerTask){}
	/**
	 * @param \System\Action $action
	 * @return \System\Action
	 */
	protected static function TryGetStateMachineForDebugger($action){}
	/**
	 * @param \System\Action $continuation
	 * @return \System\Threading\Tasks\Task
	 */
	protected static function TryGetContinuationTask($continuation){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
