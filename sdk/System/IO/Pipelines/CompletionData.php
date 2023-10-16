<?php
namespace System\IO\Pipelines;
/**
 */
class CompletionData extends \System\ValueType
{
	/**
	 * @var \System\Action_1[System\Object]
	 * @property
	 */
	public readonly $Completion;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $CompletionState;
	/**
	 * @var \System\Threading\ExecutionContext
	 * @property
	 */
	public readonly $ExecutionContext;
	/**
	 * @var \System\Threading\SynchronizationContext
	 * @property
	 */
	public readonly $SynchronizationContext;
	/**
	 * @return \System\Action_1
	 */
	public  function get_Completion(){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_CompletionState(){}
	/**
	 * @return \System\Threading\ExecutionContext
	 */
	public  function get_ExecutionContext(){}
	/**
	 * @return \System\Threading\SynchronizationContext
	 */
	public  function get_SynchronizationContext(){}
}
