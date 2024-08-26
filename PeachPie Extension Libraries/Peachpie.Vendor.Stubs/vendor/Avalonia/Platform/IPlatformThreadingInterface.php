<?php
namespace Avalonia\Platform;
/**
 * @method \System\Void|void add_Signaled($value) [modifier: public]
 * @method \System\Void|void remove_Signaled($value) [modifier: public]
*/
interface IPlatformThreadingInterface
{

	/**
	 * @param \Avalonia\Threading\DispatcherPriority $priority
	 * @param \System\TimeSpan $interval
	 * @param \System\Action $tick
	 * @return \System\IDisposable
	 */
	public function StartTimer($priority, $interval, $tick);
	/**
	 * @param \Avalonia\Threading\DispatcherPriority $priority
	 * @return \System\Void|void
	 */
	public function Signal($priority);
}