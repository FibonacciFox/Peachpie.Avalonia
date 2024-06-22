<?php
namespace System\Threading;
final class ConfiguredNoThrowAwaiter_1 extends \System\ValueType implements
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
	 * @return \System\Threading\SemaphoreSlim+ConfiguredNoThrowAwaiter_1[T]
	 */
	public function GetAwaiter(){}
	/**
	 * @return \System\Void|void
	 */
	public function GetResult(){}
	/**
	 * @param \System\Action $continuation
	 * @return \System\Void|void
	 */
	public function UnsafeOnCompleted($continuation){}
	/**
	 * @param \System\Action $continuation
	 * @return \System\Void|void
	 */
	public function OnCompleted($continuation){}
	/**
	 * @param \System\Threading\Tasks\Task_1 $task [generic: T]
	 */
	public function __construct($task){}
}