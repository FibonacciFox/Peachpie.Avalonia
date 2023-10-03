<?php
namespace Avalonia\Input;
/**
 */
interface IPointer
{
	/**
	 */
	public function get_Id();
	/**
	 * @param \Avalonia\Input\IInputElement $control
	 */
	public function Capture($control);
	/**
	 */
	public function get_Captured();
	/**
	 */
	public function get_Type();
	/**
	 */
	public function get_IsPrimary();
}
