<?php
namespace Avalonia\Controls;
class WindowResizedEventArgs extends \System\EventArgs
{

	/**
	 * @property
	 * @var \Avalonia\Size
	 * @since readonly
	 */
	public $ClientSize;
	/**
	 * @property
	 * @var \Avalonia\Controls\WindowResizeReason
	 * @since readonly
	 */
	public $Reason;

}