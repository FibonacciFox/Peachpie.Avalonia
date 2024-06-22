<?php
namespace Avalonia\Threading;
class DispatcherPriorityAwaitable extends \System\Object implements
	\System\Runtime\CompilerServices\INotifyCompletion
{

	/**
	 * @field
	 * @since readonly
	 * @var \System\Threading\Tasks\Task
	 */
	protected $Task;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsCompleted;
	/**
	 * @param \System\Action $continuation
	 * @return \System\Void|void
	 */
	public function OnCompleted($continuation){}
	/**
	 * @return \System\Void|void
	 */
	public function GetResult(){}
	/**
	 * @return \Avalonia\Threading\DispatcherPriorityAwaitable
	 */
	public function GetAwaiter(){}
}