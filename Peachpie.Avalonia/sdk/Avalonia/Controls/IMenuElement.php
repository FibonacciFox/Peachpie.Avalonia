<?php
namespace Avalonia\Controls;
/**
 */
interface IMenuElement
{
	/**
	 */
	public function get_SelectedItem();
	/**
	 * @param \Avalonia\Controls\IMenuItem $value
	 */
	public function set_SelectedItem($value);
	/**
	 */
	public function get_SubItems();
	/**
	 */
	public function Open();
	/**
	 */
	public function Close();
	/**
	 * @param \Avalonia\Input\NavigationDirection $direction
	 * @param \System\Boolean $wrap
	 */
	public function MoveSelection($direction, $wrap);
}
