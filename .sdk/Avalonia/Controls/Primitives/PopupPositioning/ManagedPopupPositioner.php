<?php
namespace Avalonia\Controls\Primitives\PopupPositioning;
class ManagedPopupPositioner extends \System\Object implements
	\Avalonia\Controls\Primitives\PopupPositioning\IPopupPositioner
{


	private static function GetAnchorPoint($anchorRect, $edge){}
	private static function Gravitate($anchorPoint, $size, $gravity){}
	/**
	 * @param \Avalonia\Controls\Primitives\PopupPositioning\PopupPositionerParameters $parameters
	 * @return \System\Void|void
	 */
	public function Update($parameters){}
	private function Calculate($translatedSize, $anchorRect, $anchor, $gravity, $constraintAdjustment, $offset){}
	/**
	 * @param \Avalonia\Controls\Primitives\PopupPositioning\IManagedPopupPositionerPopup $popup
	 */
	public function __construct($popup){}
}