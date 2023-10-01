<?php
namespace Avalonia\Input;
/**
 */
interface ICommandSource
{
	/**
	 */
	public function get_Command();
	/**
	 */
	public function get_CommandParameter();
	/**
	 * @param \System\Object|object $sender
	 * @param \System\EventArgs $e
	 */
	public function CanExecuteChanged($sender, $e);
	/**
	 */
	public function get_IsEffectivelyEnabled();
}
