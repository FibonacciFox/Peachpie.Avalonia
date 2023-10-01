<?php
namespace Avalonia\Input;
/**
 */
interface IMainMenu
{
	/**
	 */
	public function get_IsOpen();
	/**
	 */
	public function Close();
	/**
	 */
	public function Open();
	/**
	 * @param \System\EventHandler_1 $value
	 */
	public function add_Closed($value);
	/**
	 * @param \System\EventHandler_1 $value
	 */
	public function remove_Closed($value);
}
