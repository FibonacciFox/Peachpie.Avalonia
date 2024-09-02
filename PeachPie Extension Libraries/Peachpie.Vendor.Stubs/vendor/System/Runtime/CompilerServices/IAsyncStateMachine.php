<?php
namespace System\Runtime\CompilerServices;
interface IAsyncStateMachine
{

	/**
	 * @return \System\Void|void
	 */
	public function MoveNext();
	/**
	 * @param \System\Runtime\CompilerServices\IAsyncStateMachine $stateMachine
	 * @return \System\Void|void
	 */
	public function SetStateMachine($stateMachine);
}