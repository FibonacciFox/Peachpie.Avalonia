<?php
namespace Avalonia\FreeDesktop;
/**
 */
interface IX11InputMethodControl
{
	/**
	 * @param \System\Boolean $active
	 */
	public function SetWindowActive($active);
	/**
	 */
	public function get_IsEnabled();
	/**
	 * @param \Avalonia\Input\Raw\RawKeyEventArgs $args
	 * @param \System\Int32|int $keyVal
	 * @param \System\Int32|int $keyCode
	 */
	public function HandleEventAsync($args, $keyVal, $keyCode);
	/**
	 * @param \System\Action_1 $value
	 */
	public function add_Commit($value);
	/**
	 * @param \System\Action_1 $value
	 */
	public function remove_Commit($value);
	/**
	 * @param \System\Action_1 $value
	 */
	public function add_ForwardKey($value);
	/**
	 * @param \System\Action_1 $value
	 */
	public function remove_ForwardKey($value);
	/**
	 * @param \Avalonia\PixelPoint $position
	 * @param \System\Double|double $scaling
	 */
	public function UpdateWindowInfo($position, $scaling);
}
