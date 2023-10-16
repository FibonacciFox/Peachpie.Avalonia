<?php
namespace System\Runtime\CompilerServices;
/**
 */
interface IStateMachineBoxAwareAwaiter
{
	/**
	 * @param \System\Runtime\CompilerServices\IAsyncStateMachineBox $box
	 */
	public function AwaitUnsafeOnCompleted($box);
}
