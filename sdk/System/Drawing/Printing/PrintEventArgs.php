<?php
namespace System\Drawing\Printing;
/**
 */
class PrintEventArgs extends \System\ComponentModel\CancelEventArgs
{
	/**
	 * @var \System\Drawing\Printing\PrintAction
	 * @property
	 */
	public readonly $PrintAction;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $Cancel;
	/**
	 * @return \System\Drawing\Printing\PrintAction
	 */
	public  function get_PrintAction(){}
}
