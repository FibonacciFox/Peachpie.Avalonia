<?php
namespace Avalonia;
/**
 */
interface IDataContextProvider
{
	/**
	 */
	public function get_DataContext();
	/**
	 * @param \System\Object|object $value
	 */
	public function set_DataContext($value);
}
