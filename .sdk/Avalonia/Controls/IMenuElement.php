<?php
namespace Avalonia\Controls;
interface IMenuElement
{


	/**
	 * @return \System\Void|void
	 */
	public function Open();
	/**
	 * @return \System\Void|void
	 */
	public function Close();
	/**
	 * @param \Avalonia\Input\NavigationDirection $direction
	 * @param \System\Boolean|bool $wrap
	 * @return \System\Boolean|bool
	 */
	public function MoveSelection($direction, $wrap);
}