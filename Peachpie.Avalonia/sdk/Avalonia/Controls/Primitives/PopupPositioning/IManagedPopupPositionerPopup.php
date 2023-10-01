<?php
namespace Avalonia\Controls\Primitives\PopupPositioning;
/**
 */
interface IManagedPopupPositionerPopup
{
	/**
	 */
	public function get_Screens();
	/**
	 */
	public function get_ParentClientAreaScreenGeometry();
	/**
	 */
	public function get_Scaling();
	/**
	 * @param \Avalonia\Point $devicePoint
	 * @param \Avalonia\Size $virtualSize
	 */
	public function MoveAndResize($devicePoint, $virtualSize);
}
