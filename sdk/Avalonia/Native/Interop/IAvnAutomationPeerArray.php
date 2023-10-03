<?php
namespace Avalonia\Native\Interop;
/**
 */
interface IAvnAutomationPeerArray
{
	/**
	 */
	public function get_Count();
	/**
	 * @param \System\UInt32 $index
	 */
	public function Get($index);
}
