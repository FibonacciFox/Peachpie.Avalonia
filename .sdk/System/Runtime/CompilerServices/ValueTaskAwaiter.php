<?php
namespace System\Runtime\CompilerServices;
final class ValueTaskAwaiter extends \System\ValueType implements
	\System\Runtime\CompilerServices\ICriticalNotifyCompletion,
	\System\Runtime\CompilerServices\INotifyCompletion,
	\System\Runtime\CompilerServices\IStateMachineBoxAwareAwaiter
{
	/**
	 * @field
	 * @since readonly
	 * @var \System\Action_1[System\Object]
	 */
	protected static $s_invokeActionDelegate;
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
	private function AwaitUnsafeOnCompleted($box){}
}