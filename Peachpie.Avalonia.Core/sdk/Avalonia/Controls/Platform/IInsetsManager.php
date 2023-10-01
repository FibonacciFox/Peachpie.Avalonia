<?php
namespace Avalonia\Controls\Platform;
/**
 */
interface IInsetsManager
{
	/**
	 */
	public function get_IsSystemBarVisible();
	/**
	 * @param \System\Nullable_1 $value
	 */
	public function set_IsSystemBarVisible($value);
	/**
	 */
	public function get_DisplayEdgeToEdge();
	/**
	 * @param \System\Boolean $value
	 */
	public function set_DisplayEdgeToEdge($value);
	/**
	 */
	public function get_SafeAreaPadding();
	/**
	 */
	public function get_SystemBarColor();
	/**
	 * @param \System\Nullable_1 $value
	 */
	public function set_SystemBarColor($value);
	/**
	 * @param \System\EventHandler_1 $value
	 */
	public function add_SafeAreaChanged($value);
	/**
	 * @param \System\EventHandler_1 $value
	 */
	public function remove_SafeAreaChanged($value);
}
