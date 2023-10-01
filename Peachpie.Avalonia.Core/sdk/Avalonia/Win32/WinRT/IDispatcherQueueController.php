<?php
namespace Avalonia\Win32\WinRT;
/**
 */
interface IDispatcherQueueController
{
	/**
	 */
	public function get_DispatcherQueue();
	/**
	 */
	public function ShutdownQueueAsync();
}
