<?php
namespace Avalonia\Controls;
/**
 */
class WindowResizedEventArgs extends \System\EventArgs
{
	/**
	 * @var \Avalonia\Size
	 * @property
	 */
	public readonly $ClientSize;
	/**
	 * @var \Avalonia\Controls\WindowResizeReason
	 * @property
	 */
	public readonly $Reason;
	/**
	 * @return \Avalonia\Size
	 */
	public  function get_ClientSize(){}
	/**
	 * @return \Avalonia\Controls\WindowResizeReason
	 */
	public  function get_Reason(){}
}
