<?php
namespace Avalonia\Input;
/**
 */
interface ICloseable
{
	/**
	 * @param \System\EventHandler $value
	 */
	public function add_Closed($value);
	/**
	 * @param \System\EventHandler $value
	 */
	public function remove_Closed($value);
}
