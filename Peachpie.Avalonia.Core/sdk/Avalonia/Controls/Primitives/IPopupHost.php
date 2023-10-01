<?php
namespace Avalonia\Controls\Primitives;
/**
 */
interface IPopupHost
{
	/**
	 */
	public function get_Width();
	/**
	 * @param \System\Double|double $value
	 */
	public function set_Width($value);
	/**
	 */
	public function get_MinWidth();
	/**
	 * @param \System\Double|double $value
	 */
	public function set_MinWidth($value);
	/**
	 */
	public function get_MaxWidth();
	/**
	 * @param \System\Double|double $value
	 */
	public function set_MaxWidth($value);
	/**
	 */
	public function get_Height();
	/**
	 * @param \System\Double|double $value
	 */
	public function set_Height($value);
	/**
	 */
	public function get_MinHeight();
	/**
	 * @param \System\Double|double $value
	 */
	public function set_MinHeight($value);
	/**
	 */
	public function get_MaxHeight();
	/**
	 * @param \System\Double|double $value
	 */
	public function set_MaxHeight($value);
	/**
	 */
	public function get_Presenter();
	/**
	 */
	public function get_Topmost();
	/**
	 * @param \System\Boolean $value
	 */
	public function set_Topmost($value);
	/**
	 */
	public function get_Transform();
	/**
	 * @param \Avalonia\Media\Transform $value
	 */
	public function set_Transform($value);
	/**
	 */
	public function get_HostedVisualTreeRoot();
	/**
	 * @param \System\EventHandler_1 $value
	 */
	public function add_TemplateApplied($value);
	/**
	 * @param \System\EventHandler_1 $value
	 */
	public function remove_TemplateApplied($value);
	/**
	 * @param \Avalonia\Visual $target
	 * @param \Avalonia\Controls\PlacementMode $placement
	 * @param \Avalonia\Point $offset
	 * @param \Avalonia\Controls\Primitives\PopupPositioning\PopupAnchor $anchor
	 * @param \Avalonia\Controls\Primitives\PopupPositioning\PopupGravity $gravity
	 * @param \Avalonia\Controls\Primitives\PopupPositioning\PopupPositionerConstraintAdjustment $constraintAdjustment
	 * @param \System\Nullable_1 $rect
	 */
	public function ConfigurePosition($target, $placement, $offset, $anchor, $gravity, $constraintAdjustment, $rect);
	/**
	 * @param \Avalonia\Controls\Control $control
	 */
	public function SetChild($control);
	/**
	 */
	public function Show();
	/**
	 */
	public function Hide();
}
