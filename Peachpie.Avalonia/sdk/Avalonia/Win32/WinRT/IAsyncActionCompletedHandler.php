<?php
namespace Avalonia\Win32\WinRT;
/**
 */
interface IAsyncActionCompletedHandler
{
	/**
	 * @param \Avalonia\Win32\WinRT\IAsyncAction $asyncInfo
	 * @param \Avalonia\Win32\WinRT\AsyncStatus $asyncStatus
	 */
	public function Invoke($asyncInfo, $asyncStatus);
}
