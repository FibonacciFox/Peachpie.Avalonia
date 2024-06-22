<?php
namespace System\Threading\Tasks;
final class SetOnCountdownMres extends \System\Threading\ManualResetEventSlim implements
	\System\IDisposable,
	\System\Threading\Tasks\ITaskCompletionAction
{

	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $InvokeMayRunArbitraryCode;
	/**
	 * @property
	 * @var \System\Threading\WaitHandle
	 * @since readonly
	 */
	public $WaitHandle;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSet;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $SpinCount;
	/**
	 * @param \System\Threading\Tasks\Task $completingTask
	 * @return \System\Void|void
	 */
	public function Invoke($completingTask){}
}