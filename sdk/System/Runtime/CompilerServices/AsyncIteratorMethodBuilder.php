<?php
namespace System\Runtime\CompilerServices;
/**
 */
class AsyncIteratorMethodBuilder extends \System\ValueType
{
	/**
	 * @return \System\Runtime\CompilerServices\AsyncIteratorMethodBuilder
	 */
	public static function Create(){}
	/**
	 * @param \System\Runtime\CompilerServices\TStateMachine& $stateMachine
	 * @return \System\Void|void
	 */
	public  function MoveNext($stateMachine){}
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
	public  function Complete(){}
	/**
	 * @return \System\Object|object
	 */
	protected  function get_ObjectIdForDebugger(){}
}
