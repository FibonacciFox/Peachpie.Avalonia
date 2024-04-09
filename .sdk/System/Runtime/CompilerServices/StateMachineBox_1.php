<?php
namespace System\Runtime\CompilerServices;
final class StateMachineBox_1 extends \System\Runtime\CompilerServices\StateMachineBox implements
	\System\Threading\Tasks\Sources\IValueTaskSource_1,
	\System\Threading\Tasks\Sources\IValueTaskSource,
	\System\Runtime\CompilerServices\IAsyncStateMachineBox,
	\System\Threading\IThreadPoolWorkItem
{
	/**
	 * @field
	 * @var \TStateMachine
	 */
	public $StateMachine;
	/**
	 * @field
	 * @var \System\Action
	 */
	protected $_moveNextAction;
	/**
	 * @field
	 * @var \System\Threading\ExecutionContext
	 */
	public $Context;
	/**
	 * @field
	 * @var \System\Threading\Tasks\Sources\ManualResetValueTaskSourceCore_1[TResult]
	 */
	protected $_valueTaskSource;
	/**
	 * @property
	 * @var \System\Action
	 * @since readonly
	 */
	public $MoveNextAction;
	/**
	 * @property
	 * @var \System\Int16
	 * @since readonly
	 */
	public $Version;
	/**
	 * @return \System\Runtime\CompilerServices\PoolingAsyncValueTaskMethodBuilder_1+StateMachineBox_1[TResult,TStateMachine]
	 */
	protected static function RentFromCache(){}
	private function ReturnToCache(){}
	/**
	 * @return \System\Void|void
	 */
	public function ClearStateUponCompletion(){}
	private static function ExecutionContextCallback($s){}
	private function Execute(){}
	/**
	 * @return \System\Void|void
	 */
	public function MoveNext(){}
	private function GetStateMachineObject(){}
	/**
	 */
	public function __construct(){}
}