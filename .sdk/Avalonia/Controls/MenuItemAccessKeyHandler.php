<?php
namespace Avalonia\Controls;
class MenuItemAccessKeyHandler extends \System\Object implements
	\Avalonia\Input\IAccessKeyHandler
{

	/**
	 * @property
	 * @var \Avalonia\Input\IMainMenu
	 */
	public $MainMenu;
	/**
	 * @param \Avalonia\Input\IInputRoot $owner
	 * @return \System\Void|void
	 */
	public function SetOwner($owner){}
	/**
	 * @param \System\Char $accessKey
	 * @param \Avalonia\Input\IInputElement $element
	 * @return \System\Void|void
	 */
	public function Register($accessKey, $element){}
	/**
	 * @param \Avalonia\Input\IInputElement $element
	 * @return \System\Void|void
	 */
	public function Unregister($element){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Input\TextInputEventArgs $e
	 * @return \System\Void|void
	 */
	protected function OnTextInput($sender, $e){}
	/**
	 */
	public function __construct(){}
}