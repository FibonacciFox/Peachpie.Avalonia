<?php
namespace System\Runtime\CompilerServices;
final class SyncSuccessSentinelStateMachineBox extends \System\Runtime\CompilerServices\StateMachineBox implements
	\System\Threading\Tasks\Sources\IValueTaskSource_1,
	\System\Threading\Tasks\Sources\IValueTaskSource
{
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
	 * @var \System\Int16
	 * @since readonly
	 */
	public $Version;
	/**
	 */
	public function __construct(){}
}