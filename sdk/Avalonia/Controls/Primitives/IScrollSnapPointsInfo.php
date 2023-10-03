<?php
namespace Avalonia\Controls\Primitives;
/**
 */
interface IScrollSnapPointsInfo
{
	/**
	 */
	public function get_AreHorizontalSnapPointsRegular();
	/**
	 * @param \System\Boolean $value
	 */
	public function set_AreHorizontalSnapPointsRegular($value);
	/**
	 */
	public function get_AreVerticalSnapPointsRegular();
	/**
	 * @param \System\Boolean $value
	 */
	public function set_AreVerticalSnapPointsRegular($value);
	/**
	 * @param \Avalonia\Layout\Orientation $orientation
	 * @param \Avalonia\Controls\Primitives\SnapPointsAlignment $snapPointsAlignment
	 */
	public function GetIrregularSnapPoints($orientation, $snapPointsAlignment);
	/**
	 * @param \Avalonia\Layout\Orientation $orientation
	 * @param \Avalonia\Controls\Primitives\SnapPointsAlignment $snapPointsAlignment
	 * @param \System\Double& $offset
	 */
	public function GetRegularSnapPoints($orientation, $snapPointsAlignment, $offset);
	/**
	 * @param \System\EventHandler_1 $value
	 */
	public function add_HorizontalSnapPointsChanged($value);
	/**
	 * @param \System\EventHandler_1 $value
	 */
	public function remove_HorizontalSnapPointsChanged($value);
	/**
	 * @param \System\EventHandler_1 $value
	 */
	public function add_VerticalSnapPointsChanged($value);
	/**
	 * @param \System\EventHandler_1 $value
	 */
	public function remove_VerticalSnapPointsChanged($value);
}
