<?php
namespace System\Threading;
final class ThreadPoolBoundHandleOverlapped extends \System\Threading\Overlapped
{

	/**
	 * @field
	 * @since readonly
	 * @var \System\Object|object
	 */
	protected $_userState;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Threading\PreAllocatedOverlapped
	 */
	protected $_preAllocated;
	/**
	 * @field
	 * @var \System\Threading\NativeOverlapped*
	 */
	protected $_nativeOverlapped;
	/**
	 * @field
	 * @var \System\Threading\ThreadPoolBoundHandle
	 */
	protected $_boundHandle;
	/**
	 * @field
	 * @var \System\Boolean|bool
	 */
	protected $_completed;
	/**
	 * @property
	 * @var \System\IAsyncResult
	 */
	public $AsyncResult;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $OffsetLow;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $OffsetHigh;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $EventHandle;
	/**
	 * @property
	 * @var \System\IntPtr
	 */
	public $EventHandleIntPtr;
	private static function CompletionCallback($errorCode, $numBytes, $nativeOverlapped){}
	/**
	 * @param \System\Threading\IOCompletionCallback $callback
	 * @param \System\Object|object $state
	 * @param \System\Object|object $pinData
	 * @param \System\Threading\PreAllocatedOverlapped $preAllocated
	 * @param \System\Boolean|bool $flowExecutionContext
	 */
	public function __construct($callback, $state, $pinData, $preAllocated, $flowExecutionContext){}
}