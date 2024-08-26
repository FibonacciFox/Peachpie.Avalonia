<?php
namespace System\Runtime\CompilerServices;
interface IAsyncStateMachineBox
{

	/**
	 * @return \System\Void|void
	 */
	public function MoveNext();
	/**
	 * @return \System\Runtime\CompilerServices\IAsyncStateMachine
	 */
	public function GetStateMachineObject();
	/**
	 * @return \System\Void|void
	 */
	public function ClearStateUponCompletion();
}