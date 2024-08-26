<?php
namespace System\Threading\Tasks;
interface ITaskCompletionAction
{

	/**
	 * @param \System\Threading\Tasks\Task $completingTask
	 * @return \System\Void|void
	 */
	public function Invoke($completingTask);
}