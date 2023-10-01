<?php
namespace Avalonia\Native\Interop;
/**
 */
interface IAvnPlatformThreadingInterface
{
	/**
	 */
	public function get_CurrentThreadIsLoopThread();
	/**
	 * @param \Avalonia\Native\Interop\IAvnPlatformThreadingInterfaceEvents $cb
	 */
	public function SetEvents($cb);
	/**
	 */
	public function CreateLoopCancellation();
	/**
	 * @param \Avalonia\Native\Interop\IAvnLoopCancellation $cancel
	 */
	public function RunLoop($cancel);
	/**
	 */
	public function Signal();
	/**
	 * @param \System\Int32|int $ms
	 */
	public function UpdateTimer($ms);
	/**
	 */
	public function RequestBackgroundProcessing();
}
