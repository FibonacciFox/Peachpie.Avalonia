<?php
namespace Avalonia\Input;
interface IPointer
{

	/**
	 * @param \Avalonia\Input\IInputElement $control
	 * @return \System\Void|void
	 */
	public function Capture($control);
}