<?php
namespace Avalonia\Controls;
/**
 */
class WindowClosingEventArgs extends \System\ComponentModel\CancelEventArgs
{
	/**
	 * @var \Avalonia\Controls\WindowCloseReason
	 * @property
	 */
	public readonly $CloseReason;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsProgrammatic;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $Cancel;
	/**
	 * @return \Avalonia\Controls\WindowCloseReason
	 */
	public  function get_CloseReason(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsProgrammatic(){}
}
