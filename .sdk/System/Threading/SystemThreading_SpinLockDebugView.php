<?php
namespace System\Threading;
final class SystemThreading_SpinLockDebugView extends \System\Object
{
	/**
	 * @property
	 * @var \System\Nullable_1[System\Boolean]
	 * @since readonly
	 */
	public $IsHeldByCurrentThread;
	/**
	 * @property
	 * @var \System\Nullable_1[System\Int32]
	 * @since readonly
	 */
	public $OwnerThreadID;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsHeld;
	/**
	 * @param \System\Threading\SpinLock $spinLock
	 */
	public function __construct($spinLock){}
}