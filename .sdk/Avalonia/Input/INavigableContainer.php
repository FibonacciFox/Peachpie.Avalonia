<?php
namespace Avalonia\Input;
interface INavigableContainer
{

	/**
	 * @param \Avalonia\Input\NavigationDirection $direction
	 * @param \Avalonia\Input\IInputElement $from
	 * @param \System\Boolean|bool $wrap
	 * @return \Avalonia\Input\IInputElement
	 */
	public function GetControl($direction, $from, $wrap);
}