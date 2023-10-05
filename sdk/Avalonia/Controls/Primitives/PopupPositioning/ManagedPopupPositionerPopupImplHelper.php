<?php
namespace Avalonia\Controls\Primitives\PopupPositioning;
/**
 */
class ManagedPopupPositionerPopupImplHelper extends \System\Object implements 
	\Avalonia\Controls\Primitives\PopupPositioning\IManagedPopupPositionerPopup
{
	/**
	 * @var \System\Collections\Generic\IReadOnlyList_1[Avalonia\Controls\Primitives\PopupPositioning\ManagedPopupPositionerScreenInfo]
	 * @property
	 */
	public readonly $Screens;
	/**
	 * @var \Avalonia\Rect
	 * @property
	 */
	public readonly $ParentClientAreaScreenGeometry;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $Scaling;
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	public  function get_Screens(){}
	/**
	 * @return \Avalonia\Rect
	 */
	public  function get_ParentClientAreaScreenGeometry(){}
	/**
	 * @param \Avalonia\Point $devicePoint
	 * @param \Avalonia\Size $virtualSize
	 * @return \System\Void|void
	 */
	public  function MoveAndResize($devicePoint, $virtualSize){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Scaling(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
