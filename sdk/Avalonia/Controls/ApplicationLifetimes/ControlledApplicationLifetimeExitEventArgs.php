<?php
namespace Avalonia\Controls\ApplicationLifetimes;
/**
 */
class ControlledApplicationLifetimeExitEventArgs extends \System\EventArgs
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $ApplicationExitCode;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_ApplicationExitCode(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_ApplicationExitCode($value){}
}
