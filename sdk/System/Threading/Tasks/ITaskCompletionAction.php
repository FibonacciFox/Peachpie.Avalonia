<?php
namespace System\Threading\Tasks;
/**
 */
interface ITaskCompletionAction
{
	/**
	 * @param \System\Threading\Tasks\Task $completingTask
	 */
	public function Invoke($completingTask);
	/**
	 */
	public function get_InvokeMayRunArbitraryCode();
}
