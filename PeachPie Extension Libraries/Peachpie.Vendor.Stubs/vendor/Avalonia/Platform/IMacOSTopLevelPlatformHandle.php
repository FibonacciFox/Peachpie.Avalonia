<?php
namespace Avalonia\Platform;
interface IMacOSTopLevelPlatformHandle
{

	/**
	 * @return \System\IntPtr
	 */
	public function GetNSViewRetained();
	/**
	 * @return \System\IntPtr
	 */
	public function GetNSWindowRetained();
}