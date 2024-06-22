<?php
namespace System\Threading\Tasks;
final class ContingentProperties extends \System\Object
{

	/**
	 * @field
	 * @var \System\Threading\ExecutionContext
	 */
	protected $m_capturedContext;
	/**
	 * @field
	 * @var \System\Threading\ManualResetEventSlim
	 */
	protected $m_completionEvent;
	/**
	 * @field
	 * @var \System\Threading\Tasks\TaskExceptionHolder
	 */
	protected $m_exceptionsHolder;
	/**
	 * @field
	 * @var \System\Threading\CancellationToken
	 */
	protected $m_cancellationToken;
	/**
	 * @field
	 * @var \System\Runtime\CompilerServices\StrongBox_1[System\Threading\CancellationTokenRegistration]
	 */
	protected $m_cancellationRegistration;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $m_internalCancellationRequested;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $m_completionCountdown;
	/**
	 * @field
	 * @var \System\Collections\Generic\List_1[System\Threading\Tasks\Task]
	 */
	protected $m_exceptionalChildren;
	/**
	 * @field
	 * @var \System\Threading\Tasks\Task
	 */
	protected $m_parent;
	/**
	 * @return \System\Void|void
	 */
	protected function SetCompleted(){}
	/**
	 * @param \System\Threading\ManualResetEventSlim $mres
	 * @return \System\Void|void
	 */
	protected static function SetEvent($mres){}
	/**
	 * @return \System\Void|void
	 */
	protected function UnregisterCancellationCallback(){}
	/**
	 */
	public function __construct(){}
}