<?php
namespace Avalonia\Controls;
/**
 */
class WindowResizedEventArgs extends \System\EventArgs
{
	/**
	 * @return \Avalonia\Size
	 */
	public  function get_ClientSize(){}
	/**
	 * @return \Avalonia\Controls\WindowResizeReason
	 */
	public  function get_Reason(){}
}
