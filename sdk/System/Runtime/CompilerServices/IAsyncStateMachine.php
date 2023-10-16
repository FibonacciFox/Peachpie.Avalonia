<?php
namespace System\Runtime\CompilerServices;
/**
 */
interface IAsyncStateMachine
{
	/**
	 */
	public function MoveNext();
	/**
	 * @param \System\Runtime\CompilerServices\IAsyncStateMachine $stateMachine
	 */
	public function SetStateMachine($stateMachine);
}
