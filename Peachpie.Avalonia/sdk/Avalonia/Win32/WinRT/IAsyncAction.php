<?php
namespace Avalonia\Win32\WinRT;
/**
 */
interface IAsyncAction
{
	/**
	 * @param \Avalonia\Win32\WinRT\IAsyncActionCompletedHandler $handler
	 */
	public function SetCompleted($handler);
	/**
	 */
	public function get_Completed();
	/**
	 */
	public function GetResults();
}
