<?php
namespace System\Runtime\CompilerServices;
final class AsyncIteratorMethodBuilder extends \System\ValueType
{

	/**
	 * @return \System\Runtime\CompilerServices\AsyncIteratorMethodBuilder
	 */
	public static function Create(){}
	/**
	 * @param \TStateMachine& $stateMachine
	 * @return \System\Void|void
	 */
	public function MoveNext($stateMachine){}
	/**
	 * @param \TAwaiter& $awaiter
	 * @param \TStateMachine& $stateMachine
	 * @return \System\Void|void
	 */
	public function AwaitOnCompleted($awaiter, $stateMachine){}
	/**
	 * @param \TAwaiter& $awaiter
	 * @param \TStateMachine& $stateMachine
	 * @return \System\Void|void
	 */
	public function AwaitUnsafeOnCompleted($awaiter, $stateMachine){}
	/**
	 * @return \System\Void|void
	 */
	public function Complete(){}
}