<?php
namespace Avalonia\Threading;
class DispatcherOperation_1 extends \Avalonia\Threading\DispatcherOperation
{
	/**
	 * @field
	 * @since readonly
	 * @var \System\Boolean|bool
	 */
	protected $ThrowOnUiThread;
	/**
	 * @field
	 * @var \System\Object|object
	 */
	protected $Callback;
	/**
	 * @field
	 * @var \System\Object|object
	 */
	protected $TaskSource;
	/**
	 * @property
	 * @var \T|object
	 * @since readonly
	 */
	public $Result;
	/**
	 * @property
	 * @var \Avalonia\Threading\DispatcherOperationStatus
	 */
	public $Status;
	/**
	 * @property
	 * @var \Avalonia\Threading\Dispatcher
	 * @since readonly
	 */
	public $Dispatcher;
	/**
	 * @property
	 * @var \Avalonia\Threading\DispatcherPriority
	 */
	public $Priority;
	/**
	 * @param \Avalonia\Threading\Dispatcher $dispatcher
	 * @param \Avalonia\Threading\DispatcherPriority $priority
	 * @param \System\Func_1 $callback [generic: T]
	 */
	public function __construct($dispatcher, $priority, $callback){}
}