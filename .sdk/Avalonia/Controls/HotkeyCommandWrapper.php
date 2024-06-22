<?php
namespace Avalonia\Controls;
class HotkeyCommandWrapper extends \System\Object implements
	\System\Windows\Input\ICommand
{


	/**
	 * @return \System\Windows\Input\ICommand
	 */
	public function GetCommand(){}
	/**
	 * @param \System\Object|object $parameter
	 * @return \System\Boolean|bool
	 */
	public function CanExecute($parameter){}
	/**
	 * @param \System\Object|object $parameter
	 * @return \System\Void|void
	 */
	public function Execute($parameter){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function add_CanExecuteChanged($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function remove_CanExecuteChanged($value){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 */
	public function __construct($control){}
}