<?php
namespace Avalonia\Native\Interop;
/**
 */
interface IAvnWindowEvents
{
	/**
	 */
	public function Closing();
	/**
	 * @param \Avalonia\Native\Interop\AvnWindowState $state
	 */
	public function WindowStateChanged($state);
	/**
	 */
	public function GotInputWhenDisabled();
}
