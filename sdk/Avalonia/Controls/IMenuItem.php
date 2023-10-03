<?php
namespace Avalonia\Controls;
/**
 */
interface IMenuItem
{
	/**
	 */
	public function get_HasSubMenu();
	/**
	 */
	public function get_IsPointerOverSubMenu();
	/**
	 */
	public function get_IsSubMenuOpen();
	/**
	 * @param \System\Boolean $value
	 */
	public function set_IsSubMenuOpen($value);
	/**
	 */
	public function get_StaysOpenOnClick();
	/**
	 * @param \System\Boolean $value
	 */
	public function set_StaysOpenOnClick($value);
	/**
	 */
	public function get_IsTopLevel();
	/**
	 */
	public function get_Parent();
	/**
	 */
	public function RaiseClick();
}
