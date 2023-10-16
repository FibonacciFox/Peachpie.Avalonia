<?php
namespace System\Threading\Tasks;
/**
 */
class ContingentProperties extends \System\Object
{
	/**
	 * @var \System\Threading\ExecutionContext
	 * @field
	 */
	protected $m_capturedContext;
	/**
	 * @var \System\Threading\ManualResetEventSlim
	 * @field
	 */
	protected $m_completionEvent;
	/**
	 * @var \System\Threading\Tasks\TaskExceptionHolder
	 * @field
	 */
	protected $m_exceptionsHolder;
	/**
	 * @var \System\Threading\CancellationToken
	 * @field
	 */
	protected $m_cancellationToken;
	/**
	 * @var \System\Runtime\CompilerServices\StrongBox_1[System\Threading\CancellationTokenRegistration]
	 * @field
	 */
	protected $m_cancellationRegistration;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $m_internalCancellationRequested;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $m_completionCountdown;
	/**
	 * @var \System\Collections\Generic\List_1[System\Threading\Tasks\Task]
	 * @field
	 */
	protected $m_exceptionalChildren;
	/**
	 * @var \System\Threading\Tasks\Task
	 * @field
	 */
	protected $m_parent;
	/**
	 * @return \System\Void|void
	 */
	protected  function SetCompleted(){}
	/**
	 * @param \System\Threading\ManualResetEventSlim $mres
	 * @return \System\Void|void
	 */
	protected static function SetEvent($mres){}
	/**
	 * @return \System\Void|void
	 */
	protected  function UnregisterCancellationCallback(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
