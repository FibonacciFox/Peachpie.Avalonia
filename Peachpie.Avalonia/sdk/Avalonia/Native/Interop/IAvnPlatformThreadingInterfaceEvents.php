<?php
namespace Avalonia\Native\Interop;
/**
 */
interface IAvnPlatformThreadingInterfaceEvents
{
	/**
	 */
	public function Signaled();
	/**
	 */
	public function Timer();
	/**
	 */
	public function ReadyForBackgroundProcessing();
}
