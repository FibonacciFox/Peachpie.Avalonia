<?php
namespace Avalonia\Input;
final class KeyboardNavigationHandler extends \System\Object implements
	\Avalonia\Input\IKeyboardNavigationHandler
{

	/**
	 * @param \Avalonia\Input\IInputRoot $owner
	 * @return \System\Void|void
	 */
	public function SetOwner($owner){}
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
	public function Move($element, $direction, $keyModifiers){}
	private function OnKeyDown($sender, $e){}
	private static function HandlePreCustomNavigation($customHandler, $element, $direction, &$result){}
	private static function HandlePostCustomNavigation($element, $newElement, $direction, &$result){}
	/**
	 */
	public function __construct(){}
}