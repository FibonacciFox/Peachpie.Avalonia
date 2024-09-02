<?php
namespace Avalonia\Controls\Primitives;
/**
 * @method \System\Void|void add_TemplateApplied($value) [modifier: public]
 * @method \System\Void|void remove_TemplateApplied($value) [modifier: public]
*/
interface IPopupHost
{

	/**
	 * @param \Avalonia\Visual $target
	 * @param \Avalonia\Controls\PlacementMode $placement
	 * @param \Avalonia\Point $offset
	 * @param \Avalonia\Controls\Primitives\PopupPositioning\PopupAnchor $anchor
	 * @param \Avalonia\Controls\Primitives\PopupPositioning\PopupGravity $gravity
	 * @param \Avalonia\Controls\Primitives\PopupPositioning\PopupPositionerConstraintAdjustment $constraintAdjustment
	 * @param \System\Nullable_1 $rect [generic: Avalonia\Rect]
	 * @return \System\Void|void
	 */
	public function ConfigurePosition($target, $placement, $offset, $anchor, $gravity, $constraintAdjustment, $rect);
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @return \System\Void|void
	 */
	public function SetChild($control);
	/**
	 * @return \System\Void|void
	 */
	public function Show();
	/**
	 * @return \System\Void|void
	 */
	public function Hide();
}