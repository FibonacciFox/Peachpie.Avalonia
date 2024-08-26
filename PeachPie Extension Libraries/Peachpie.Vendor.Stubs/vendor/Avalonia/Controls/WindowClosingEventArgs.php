<?php
namespace Avalonia\Controls;
class WindowClosingEventArgs extends \System\ComponentModel\CancelEventArgs
{
	/**
	 * @property
	 * @var \Avalonia\Controls\WindowCloseReason
	 * @since readonly
	 */
	public $CloseReason;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsProgrammatic;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $Cancel;

}