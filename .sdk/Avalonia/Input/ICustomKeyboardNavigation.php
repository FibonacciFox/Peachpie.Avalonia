<?php
namespace Avalonia\Input;
interface ICustomKeyboardNavigation
{

	/**
	 * @param \Avalonia\Input\IInputElement $element
	 * @param \Avalonia\Input\NavigationDirection $direction
	 * @return \System\ValueTuple_2[System\Boolean,Avalonia\Input\IInputElement]
	 */
	public function GetNext($element, $direction);
}