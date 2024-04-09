<?php
namespace Avalonia\Input;
interface IFocusManager
{

	/**
	 * @return \Avalonia\Input\IInputElement
	 */
	public function GetFocusedElement();
	/**
	 * @return \System\Void|void
	 */
	public function ClearFocus();
}