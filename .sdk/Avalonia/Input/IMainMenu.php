<?php
namespace Avalonia\Input;
/**
 * @method \System\Void|void add_Closed($value) [modifier: public]
 * @method \System\Void|void remove_Closed($value) [modifier: public]
*/
interface IMainMenu
{

	/**
	 * @return \System\Void|void
	 */
	public function Close();
	/**
	 * @return \System\Void|void
	 */
	public function Open();
}