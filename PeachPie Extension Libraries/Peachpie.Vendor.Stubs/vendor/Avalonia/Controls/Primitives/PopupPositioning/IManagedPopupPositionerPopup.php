<?php
namespace Avalonia\Controls\Primitives\PopupPositioning;
interface IManagedPopupPositionerPopup
{

	/**
	 * @param \Avalonia\Point $devicePoint
	 * @param \Avalonia\Size $virtualSize
	 * @return \System\Void|void
	 */
	public function MoveAndResize($devicePoint, $virtualSize);
}