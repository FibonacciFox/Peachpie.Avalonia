<?php
namespace Avalonia\Threading;
class LegacyDispatcherImpl extends \System\Object implements
	\Avalonia\Threading\IDispatcherImpl
{
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $CurrentThreadIsLoopThread;
	/**
	 * @property
	 * @var \System\Int64|int
	 * @since readonly
	 */
	public $Now;
	/**
	 * @return \System\Void|void
	 */
	public function Signal(){}
	/**
	 * @param \System\Action $value
	 * @return \System\Void|void
	 */
	public function add_Signaled($value){}
	/**
	 * @param \System\Action $value
	 * @return \System\Void|void
	 */
	public function remove_Signaled($value){}
	/**
	 * @param \System\Action $value
	 * @return \System\Void|void
	 */
	public function add_Timer($value){}
	/**
	 * @param \System\Action $value
	 * @return \System\Void|void
	 */
	public function remove_Timer($value){}
	/**
	 * @param \System\Nullable_1 $dueTimeInMs [generic: System\Int64]
	 * @return \System\Void|void
	 */
	public function UpdateTimer($dueTimeInMs){}
	private function OnTick(){}
	/**
	 * @param \Avalonia\Platform\IPlatformThreadingInterface $platformThreading
	 */
	public function __construct($platformThreading){}
}