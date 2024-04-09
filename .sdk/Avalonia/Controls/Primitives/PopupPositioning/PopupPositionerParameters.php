<?php
namespace Avalonia\Controls\Primitives\PopupPositioning;
final class PopupPositionerParameters extends \System\ValueType implements
	\System\IEquatable_1
{
	/**
	 * @property
	 * @var \Avalonia\Size
	 */
	public $Size;
	/**
	 * @property
	 * @var \Avalonia\Rect
	 */
	public $AnchorRectangle;
	/**
	 * @property
	 * @var \Avalonia\Controls\Primitives\PopupPositioning\PopupAnchor
	 */
	public $Anchor;
	/**
	 * @property
	 * @var \Avalonia\Controls\Primitives\PopupPositioning\PopupGravity
	 */
	public $Gravity;
	/**
	 * @property
	 * @var \Avalonia\Controls\Primitives\PopupPositioning\PopupPositionerConstraintAdjustment
	 */
	public $ConstraintAdjustment;
	/**
	 * @property
	 * @var \Avalonia\Point
	 */
	public $Offset;
	private function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Controls\Primitives\PopupPositioning\PopupPositionerParameters $left
	 * @param \Avalonia\Controls\Primitives\PopupPositioning\PopupPositionerParameters $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Controls\Primitives\PopupPositioning\PopupPositionerParameters $left
	 * @param \Avalonia\Controls\Primitives\PopupPositioning\PopupPositionerParameters $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
}