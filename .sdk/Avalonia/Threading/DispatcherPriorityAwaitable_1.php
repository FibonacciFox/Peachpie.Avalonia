<?php
namespace Avalonia\Threading;
class DispatcherPriorityAwaitable_1 extends \Avalonia\Threading\DispatcherPriorityAwaitable implements
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

}