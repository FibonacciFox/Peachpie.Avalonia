<?php
namespace Avalonia\Controls;
/**
 */
class MenuItemAccessKeyHandler extends \System\Object implements 
	\Avalonia\Input\IAccessKeyHandler
{
	/**
	 * @var \Avalonia\Input\IMainMenu
	 * @property
	 */
	public $MainMenu;
	/**
	 * @return \Avalonia\Input\IMainMenu
	 */
	public  function get_MainMenu(){}
	/**
	 * @param \Avalonia\Input\IMainMenu $value
	 * @return \System\Void|void
	 */
	public  function set_MainMenu($value){}
	/**
	 * @param \Avalonia\Input\IInputRoot $owner
	 * @return \System\Void|void
	 */
	public  function SetOwner($owner){}
	/**
	 * @param \System\Char $accessKey
	 * @param \Avalonia\Input\IInputElement $element
	 * @return \System\Void|void
	 */
	public  function Register($accessKey, $element){}
	/**
	 * @param \Avalonia\Input\IInputElement $element
	 * @return \System\Void|void
	 */
	public  function Unregister($element){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Input\TextInputEventArgs $e
	 * @return \System\Void|void
	 */
	protected  function OnTextInput($sender, $e){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
