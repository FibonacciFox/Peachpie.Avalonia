<?php
namespace Avalonia\Input;
/**
 */
interface IInputRoot
{
	/**
	 */
	public function get_KeyboardNavigationHandler();
	/**
	 */
	public function get_FocusManager();
	/**
	 */
	public function get_PlatformSettings();
	/**
	 */
	public function get_PointerOverElement();
	/**
	 * @param \Avalonia\Input\IInputElement $value
	 */
	public function set_PointerOverElement($value);
	/**
	 */
	public function get_ShowAccessKeys();
	/**
	 * @param \System\Boolean $value
	 */
	public function set_ShowAccessKeys($value);
}
