<?php
namespace System\Threading\Tasks;
final class ManualResetEventWithAwaiterSupport extends \System\Threading\ManualResetEventSlim implements
	\System\IDisposable
{

	/**
	 * @property
	 * @var \System\Threading\WaitHandle
	 * @since readonly
	 */
	public $WaitHandle;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSet;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $SpinCount;
	/**
	 */
	public function __construct(){}
}