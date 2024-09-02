<?php
namespace System\Runtime\CompilerServices;
final class YieldAwaiter extends \System\ValueType implements
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
	 * @param \System\Action $continuation
	 * @return \System\Void|void
	 */
	public function OnCompleted($continuation){}
	/**
	 * @param \System\Action $continuation
	 * @return \System\Void|void
	 */
	public function UnsafeOnCompleted($continuation){}
	private static function QueueContinuation($continuation, $flowContext){}
	private function AwaitUnsafeOnCompleted($box){}
	private static function OutputCorrelationEtwEvent($continuation){}
	private static function RunAction($state){}
	/**
	 * @return \System\Void|void
	 */
	public function GetResult(){}
}