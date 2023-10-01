<?php
namespace Avalonia\Platform;
/**
 */
interface IPlatformThreadingInterface
{
	/**
	 * @param \Avalonia\Threading\DispatcherPriority $priority
	 * @param \System\TimeSpan $interval
	 * @param \System\Action $tick
	 */
	public function StartTimer($priority, $interval, $tick);
	/**
	 * @param \Avalonia\Threading\DispatcherPriority $priority
	 */
	public function Signal($priority);
	/**
	 */
	public function get_CurrentThreadIsLoopThread();
	/**
	 * @param \System\Action_1 $value
	 */
	public function add_Signaled($value);
	/**
	 * @param \System\Action_1 $value
	 */
	public function remove_Signaled($value);
}
