<?php
namespace Avalonia\Input;
/**
 */
interface INavigableContainer
{
	/**
	 * @param \Avalonia\Input\NavigationDirection $direction
	 * @param \Avalonia\Input\IInputElement $from
	 * @param \System\Boolean $wrap
	 */
	public function GetControl($direction, $from, $wrap);
}
