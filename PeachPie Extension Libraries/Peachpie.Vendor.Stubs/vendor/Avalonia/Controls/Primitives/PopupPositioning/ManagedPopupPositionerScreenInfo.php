<?php
namespace Avalonia\Controls\Primitives\PopupPositioning;
class ManagedPopupPositionerScreenInfo extends \System\Object
{
	/**
	 * @property
	 * @var \Avalonia\Rect
	 * @since readonly
	 */
	public $Bounds;
	/**
	 * @property
	 * @var \Avalonia\Rect
	 * @since readonly
	 */
	public $WorkingArea;
	/**
	 * @param \Avalonia\Rect $bounds
	 * @param \Avalonia\Rect $workingArea
	 */
	public function __construct($bounds, $workingArea){}
}