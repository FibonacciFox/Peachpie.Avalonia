<?php
namespace Avalonia\Input;
interface IKeyboardNavigationHandler
{


	/**
	 * @param \Avalonia\Input\IInputRoot $owner
	 * @return \System\Void|void
	 */
	public function SetOwner($owner);
	/**
	 * @param \Avalonia\Input\IInputElement $element
	 * @param \Avalonia\Input\NavigationDirection $direction
	 * @param \Avalonia\Input\KeyModifiers $keyModifiers
	 * @return \System\Void|void
	 */
	public function Move($element, $direction, $keyModifiers);
}