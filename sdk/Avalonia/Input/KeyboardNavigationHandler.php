<?php
namespace Avalonia\Input;
/**
 */
class KeyboardNavigationHandler extends \System\Object implements 
	\Avalonia\Input\IKeyboardNavigationHandler
{
	/**
	 * @param \Avalonia\Input\IInputRoot $owner
	 * @return \System\Void|void
	 */
	public  function SetOwner($owner){}
	/**
	 * @param \Avalonia\Input\IInputElement $element
	 * @param \Avalonia\Input\NavigationDirection $direction
	 * @return \Avalonia\Input\IInputElement
	 */
	public static function GetNext($element, $direction){}
	/**
	 * @param \Avalonia\Input\IInputElement $element
	 * @param \Avalonia\Input\NavigationDirection $direction
	 * @param \Avalonia\Input\KeyModifiers $keyModifiers
	 * @return \System\Void|void
	 */
	public  function Move($element, $direction, $keyModifiers){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Input\KeyEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnKeyDown($sender, $e){}
	/**
	 * @param \Avalonia\Input\ICustomKeyboardNavigation $customHandler
	 * @param \Avalonia\Input\IInputElement $element
	 * @param \Avalonia\Input\NavigationDirection $direction
	 * @param \Avalonia\Input\IInputElement& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function HandlePreCustomNavigation($customHandler, $element, $direction, $result){}
	/**
	 * @param \Avalonia\Input\IInputElement $element
	 * @param \Avalonia\Input\IInputElement $newElement
	 * @param \Avalonia\Input\NavigationDirection $direction
	 * @param \Avalonia\Input\IInputElement& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function HandlePostCustomNavigation($element, $newElement, $direction, $result){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
