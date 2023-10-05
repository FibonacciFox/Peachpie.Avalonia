<?php
namespace Avalonia\Controls\ApplicationLifetimes;
/**
 */
class ControlledApplicationLifetimeStartupEventArgs extends \System\EventArgs
{
	/**
	 * @var \System\String[]
	 * @property
	 */
	public readonly $Args;
	/**
	 * @return \System\String[]
	 */
	public  function get_Args(){}
}
