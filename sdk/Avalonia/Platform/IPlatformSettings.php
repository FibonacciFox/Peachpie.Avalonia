<?php
namespace Avalonia\Platform;
/**
 */
interface IPlatformSettings
{
	/**
	 * @param \Avalonia\Input\PointerType $type
	 */
	public function GetTapSize($type);
	/**
	 * @param \Avalonia\Input\PointerType $type
	 */
	public function GetDoubleTapSize($type);
	/**
	 * @param \Avalonia\Input\PointerType $type
	 */
	public function GetDoubleTapTime($type);
	/**
	 */
	public function get_HoldWaitDuration();
	/**
	 */
	public function get_HotkeyConfiguration();
	/**
	 */
	public function GetColorValues();
	/**
	 * @param \System\EventHandler_1 $value
	 */
	public function add_ColorValuesChanged($value);
	/**
	 * @param \System\EventHandler_1 $value
	 */
	public function remove_ColorValuesChanged($value);
}
