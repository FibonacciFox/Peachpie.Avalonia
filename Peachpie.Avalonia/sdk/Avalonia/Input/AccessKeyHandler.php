<?php
namespace Avalonia\Input;
/**
 */
class AccessKeyHandler extends \System\Object implements 
	\Avalonia\Input\IAccessKeyHandler
{
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
	 * @param \Avalonia\Input\KeyEventArgs $e
	 * @return \System\Void|void
	 */
	protected  function OnPreviewKeyDown($sender, $e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Input\KeyEventArgs $e
	 * @return \System\Void|void
	 */
	protected  function OnKeyDown($sender, $e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Input\KeyEventArgs $e
	 * @return \System\Void|void
	 */
	protected  function OnPreviewKeyUp($sender, $e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Input\PointerEventArgs $e
	 * @return \System\Void|void
	 */
	protected  function OnPreviewPointerPressed($sender, $e){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CloseMenu(){}
	/**
	 * @param \System\Object|object $sender
	 * @param \System\EventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function MainMenuClosed($sender, $e){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
