<?php
namespace System\Threading;
final class CallbackNode extends \System\Object
{
	/**
	 * @field
	 * @since readonly
	 * @var \System\Threading\CancellationTokenSource+Registrations
	 */
	public $Registrations;
	/**
	 * @field
	 * @var \System\Threading\CancellationTokenSource+CallbackNode
	 */
	public $Prev;
	/**
	 * @field
	 * @var \System\Threading\CancellationTokenSource+CallbackNode
	 */
	public $Next;
	/**
	 * @field
	 * @var \System\Int64|int
	 */
	public $Id;
	/**
	 * @field
	 * @var \System\Delegate
	 */
	public $Callback;
	/**
	 * @field
	 * @var \System\Object|object
	 */
	public $CallbackState;
	/**
	 * @field
	 * @var \System\Threading\ExecutionContext
	 */
	public $ExecutionContext;
	/**
	 * @field
	 * @var \System\Threading\SynchronizationContext
	 */
	public $SynchronizationContext;
	/**
	 * @return \System\Void|void
	 */
	public function ExecuteCallback(){}
	/**
	 * @param \System\Threading\CancellationTokenSource+Registrations $registrations
	 */
	public function __construct($registrations){}
}