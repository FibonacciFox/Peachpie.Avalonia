<?php
namespace Avalonia\Input;
/**
 */
interface IAccessKeyHandler
{
	/**
	 */
	public function get_MainMenu();
	/**
	 * @param \Avalonia\Input\IMainMenu $value
	 */
	public function set_MainMenu($value);
	/**
	 * @param \Avalonia\Input\IInputRoot $owner
	 */
	public function SetOwner($owner);
	/**
	 * @param \System\Char $accessKey
	 * @param \Avalonia\Input\IInputElement $element
	 */
	public function Register($accessKey, $element);
	/**
	 * @param \Avalonia\Input\IInputElement $element
	 */
	public function Unregister($element);
}
