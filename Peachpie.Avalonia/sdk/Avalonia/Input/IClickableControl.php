<?php
namespace Avalonia\Input;
/**
 */
interface IClickableControl
{
	/**
	 * @param \System\EventHandler_1 $value
	 */
	public function add_Click($value);
	/**
	 * @param \System\EventHandler_1 $value
	 */
	public function remove_Click($value);
	/**
	 */
	public function RaiseClick();
	/**
	 */
	public function get_IsEffectivelyEnabled();
}
