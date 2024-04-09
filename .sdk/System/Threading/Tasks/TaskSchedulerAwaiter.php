<?php
namespace System\Threading\Tasks;
final class TaskSchedulerAwaiter extends \System\ValueType implements
	\System\Runtime\CompilerServices\ICriticalNotifyCompletion,
	\System\Runtime\CompilerServices\INotifyCompletion
{
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsCompleted;
	/**
	 * @return \System\Void|void
	 */
	public function GetResult(){}
	/**
	 * @param \System\Action $continuation
	 * @return \System\Void|void
	 */
	public function OnCompleted($continuation){}
	/**
	 * @param \System\Action $continuation
	 * @return \System\Void|void
	 */
	public function UnsafeOnCompleted($continuation){}
	/**
	 * @param \System\Threading\Tasks\TaskScheduler $scheduler
	 */
	public function __construct($scheduler){}
}