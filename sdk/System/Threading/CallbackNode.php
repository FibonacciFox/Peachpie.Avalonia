<?php
namespace System\Threading;
/**
 */
class CallbackNode extends \System\Object
{
	/**
	 * @var \System\Threading\CancellationTokenSource+Registrations
	 * @field
	 */
	public readonly $Registrations;
	/**
	 * @var \System\Threading\CancellationTokenSource+CallbackNode
	 * @field
	 */
	public $Prev;
	/**
	 * @var \System\Threading\CancellationTokenSource+CallbackNode
	 * @field
	 */
	public $Next;
	/**
	 * @var \System\Int64
	 * @field
	 */
	public $Id;
	/**
	 * @var \System\Delegate
	 * @field
	 */
	public $Callback;
	/**
	 * @var \System\Object
	 * @field
	 */
	public $CallbackState;
	/**
	 * @var \System\Threading\ExecutionContext
	 * @field
	 */
	public $ExecutionContext;
	/**
	 * @var \System\Threading\SynchronizationContext
	 * @field
	 */
	public $SynchronizationContext;
	/**
	 * @return \System\Void|void
	 */
	public  function ExecuteCallback(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
