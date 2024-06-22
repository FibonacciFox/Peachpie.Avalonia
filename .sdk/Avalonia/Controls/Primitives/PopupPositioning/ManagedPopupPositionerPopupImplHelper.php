<?php
namespace Avalonia\Controls\Primitives\PopupPositioning;
class ManagedPopupPositionerPopupImplHelper extends \System\Object implements
	\Avalonia\Controls\Primitives\PopupPositioning\IManagedPopupPositionerPopup
{

	/**
	 * @property
	 * @var \System\Collections\Generic\IReadOnlyList_1[Avalonia\Controls\Primitives\PopupPositioning\ManagedPopupPositionerScreenInfo]
	 * @since readonly
	 */
	public $Screens;
	/**
	 * @property
	 * @var \Avalonia\Rect
	 * @since readonly
	 */
	public $ParentClientAreaScreenGeometry;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $Scaling;
	/**
	 * @param \Avalonia\Point $devicePoint
	 * @param \Avalonia\Size $virtualSize
	 * @return \System\Void|void
	 */
	public function MoveAndResize($devicePoint, $virtualSize){}
	/**
	 * @param \Avalonia\Platform\IWindowBaseImpl $parent
	 * @param \Avalonia\Controls\Primitives\PopupPositioning\ManagedPopupPositionerPopupImplHelper+MoveResizeDelegate $moveResize
	 */
	public function __construct($parent, $moveResize){}
}