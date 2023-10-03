<?php
namespace Avalonia\Input;
/**
 */
interface ICustomKeyboardNavigation
{
	/**
	 * @param \Avalonia\Input\IInputElement $element
	 * @param \Avalonia\Input\NavigationDirection $direction
	 */
	public function GetNext($element, $direction);
}
