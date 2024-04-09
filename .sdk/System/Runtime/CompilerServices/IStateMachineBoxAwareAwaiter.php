<?php
namespace System\Runtime\CompilerServices;
interface IStateMachineBoxAwareAwaiter
{

	/**
	 * @param \System\Runtime\CompilerServices\IAsyncStateMachineBox $box
	 * @return \System\Void|void
	 */
	public function AwaitUnsafeOnCompleted($box);
}