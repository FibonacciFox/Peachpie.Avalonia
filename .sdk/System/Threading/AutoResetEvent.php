<?php
namespace System\Threading;
final class AutoResetEvent extends \System\Threading\EventWaitHandle implements
	\System\IDisposable
{

	/**
	 * @property
	 * @var \System\IntPtr
	 */
	public $Handle;
	/**
	 * @property
	 * @var \Microsoft\Win32\SafeHandles\SafeWaitHandle
	 */
	public $SafeWaitHandle;
	/**
	 * @param \System\Boolean|bool $initialState
	 */
	public function __construct($initialState){}
}