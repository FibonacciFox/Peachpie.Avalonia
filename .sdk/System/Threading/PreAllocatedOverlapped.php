<?php
namespace System\Threading;
final class PreAllocatedOverlapped extends \System\Object implements
	\System\IDisposable,
	\System\Threading\IDeferredDisposable
{

	/**
	 * @field
	 * @since readonly
	 * @var \System\Threading\ThreadPoolBoundHandleOverlapped
	 */
	protected $_overlapped;
	/**
	 * @param \System\Threading\IOCompletionCallback $callback
	 * @param \System\Object|object $state
	 * @param \System\Object|object $pinData
	 * @return \System\Threading\PreAllocatedOverlapped
	 */
	public static function UnsafeCreate($callback, $state, $pinData){}
	/**
	 * @return \System\Boolean|bool
	 */
	protected function AddRef(){}
	/**
	 * @return \System\Void|void
	 */
	protected function Release(){}
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	private function OnFinalRelease($disposed){}
	/**
	 * @param \System\Threading\IOCompletionCallback $callback
	 * @param \System\Object|object $state
	 * @param \System\Object|object $pinData
	 */
	public function __construct($callback, $state, $pinData){}
}