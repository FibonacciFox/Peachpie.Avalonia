<?php
namespace System\Windows\Input;
/**
 * @method \System\Void|void add_CanExecuteChanged($value) [modifier: public]
 * @method \System\Void|void remove_CanExecuteChanged($value) [modifier: public]
*/
interface ICommand
{


	/**
	 * @param \System\Object|object $parameter
	 * @return \System\Boolean|bool
	 */
	public function CanExecute($parameter);
	/**
	 * @param \System\Object|object $parameter
	 * @return \System\Void|void
	 */
	public function Execute($parameter);
}