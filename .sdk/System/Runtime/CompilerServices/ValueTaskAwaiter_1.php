<?php
namespace System\Runtime\CompilerServices;
final class ValueTaskAwaiter_1 extends \System\ValueType implements
	\System\Runtime\CompilerServices\ICriticalNotifyCompletion,
	\System\Runtime\CompilerServices\INotifyCompletion,
	\System\Runtime\CompilerServices\IStateMachineBoxAwareAwaiter
{
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsCompleted;
	/**
	 * @return \TResult
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
	private function AwaitUnsafeOnCompleted($box){}
}