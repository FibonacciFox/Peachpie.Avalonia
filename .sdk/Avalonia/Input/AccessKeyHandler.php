<?php
namespace Avalonia\Input;
class AccessKeyHandler extends \System\Object implements
	\Avalonia\Input\IAccessKeyHandler
{

	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Interactivity\RoutedEventArgs]
	 */
	public static $AccessKeyPressedEvent;
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
	 * @param \Avalonia\Input\KeyEventArgs $e
	 * @return \System\Void|void
	 */
	protected function OnPreviewKeyDown($sender, $e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Input\KeyEventArgs $e
	 * @return \System\Void|void
	 */
	protected function OnKeyDown($sender, $e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Input\KeyEventArgs $e
	 * @return \System\Void|void
	 */
	protected function OnPreviewKeyUp($sender, $e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Input\PointerEventArgs $e
	 * @return \System\Void|void
	 */
	protected function OnPreviewPointerPressed($sender, $e){}
	private function CloseMenu(){}
	private function MainMenuClosed($sender, $e){}
	/**
	 */
	public function __construct(){}
}