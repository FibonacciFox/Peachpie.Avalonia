<?php
namespace Avalonia\Platform;
/**
 */
interface IWindowBaseImpl
{
	/**
	 * @param \System\Boolean $activate
	 * @param \System\Boolean $isDialog
	 */
	public function Show($activate, $isDialog);
	/**
	 */
	public function Hide();
	/**
	 */
	public function get_DesktopScaling();
	/**
	 */
	public function get_Position();
	/**
	 */
	public function get_PositionChanged();
	/**
	 * @param \System\Action_1 $value
	 */
	public function set_PositionChanged($value);
	/**
	 */
	public function Activate();
	/**
	 */
	public function get_Deactivated();
	/**
	 * @param \System\Action $value
	 */
	public function set_Deactivated($value);
	/**
	 */
	public function get_Activated();
	/**
	 * @param \System\Action $value
	 */
	public function set_Activated($value);
	/**
	 */
	public function get_Handle();
	/**
	 */
	public function get_MaxAutoSizeHint();
	/**
	 * @param \System\Boolean $value
	 */
	public function SetTopmost($value);
	/**
	 */
	public function get_Screen();
}
