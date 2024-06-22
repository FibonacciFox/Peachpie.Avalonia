<?php
namespace Avalonia\Threading;
class SendOrPostCallbackDispatcherOperation extends \Avalonia\Threading\DispatcherOperation
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

}