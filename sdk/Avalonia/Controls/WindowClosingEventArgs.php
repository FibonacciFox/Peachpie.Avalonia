<?php
namespace Avalonia\Controls;
/**
 */
class WindowClosingEventArgs extends \System\ComponentModel\CancelEventArgs
{
	/**
	 * @return \Avalonia\Controls\WindowCloseReason
	 */
	public  function get_CloseReason(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsProgrammatic(){}
}
