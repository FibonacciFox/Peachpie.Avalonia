<?php
namespace Avalonia\Input;
interface ICommandSource
{

	/**
	 * @param \System\Object|object $sender
	 * @param \System\EventArgs $e
	 * @return \System\Void|void
	 */
	public function CanExecuteChanged($sender, $e);
}