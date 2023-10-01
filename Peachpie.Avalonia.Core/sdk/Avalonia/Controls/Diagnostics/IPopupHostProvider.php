<?php
namespace Avalonia\Controls\Diagnostics;
/**
 */
interface IPopupHostProvider
{
	/**
	 */
	public function get_PopupHost();
	/**
	 * @param \System\Action_1 $value
	 */
	public function add_PopupHostChanged($value);
	/**
	 * @param \System\Action_1 $value
	 */
	public function remove_PopupHostChanged($value);
}
