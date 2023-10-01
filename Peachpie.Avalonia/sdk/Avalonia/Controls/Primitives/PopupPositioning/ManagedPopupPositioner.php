<?php
namespace Avalonia\Controls\Primitives\PopupPositioning;
/**
 */
class ManagedPopupPositioner extends \System\Object implements 
	\Avalonia\Controls\Primitives\PopupPositioning\IPopupPositioner
{
	/**
	 * @param \Avalonia\Rect $anchorRect
	 * @param \Avalonia\Controls\Primitives\PopupPositioning\PopupAnchor $edge
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetAnchorPoint($anchorRect, $edge){}
	/**
	 * @param \Avalonia\Point $anchorPoint
	 * @param \Avalonia\Size $size
	 * @param \Avalonia\Controls\Primitives\PopupPositioning\PopupGravity $gravity
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Gravitate($anchorPoint, $size, $gravity){}
	/**
	 * @param \Avalonia\Controls\Primitives\PopupPositioning\PopupPositionerParameters $parameters
	 * @return \System\Void|void
	 */
	public  function Update($parameters){}
	/**
	 * @param \Avalonia\Size $translatedSize
	 * @param \Avalonia\Rect $anchorRect
	 * @param \Avalonia\Controls\Primitives\PopupPositioning\PopupAnchor $anchor
	 * @param \Avalonia\Controls\Primitives\PopupPositioning\PopupGravity $gravity
	 * @param \Avalonia\Controls\Primitives\PopupPositioning\PopupPositionerConstraintAdjustment $constraintAdjustment
	 * @param \Avalonia\Point $offset
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Calculate($translatedSize, $anchorRect, $anchor, $gravity, $constraintAdjustment, $offset){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
