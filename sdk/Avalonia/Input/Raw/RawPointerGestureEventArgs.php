<?php
namespace Avalonia\Input\Raw;
/**
 */
class RawPointerGestureEventArgs extends \Avalonia\Input\Raw\RawPointerEventArgs
{
	/**
	 * @var \Avalonia\Vector
	 * @property
	 */
	public $Delta;
	/**
	 * @var \System\Int64
	 * @property
	 */
	public $RawPointerId;
	/**
	 * @var \Avalonia\Input\Raw\RawPointerPoint
	 * @property
	 */
	public $Point;
	/**
	 * @var \Avalonia\Point
	 * @property
	 */
	public $Position;
	/**
	 * @var \Avalonia\Input\Raw\RawPointerEventType
	 * @property
	 */
	public $Type;
	/**
	 * @var \Avalonia\Input\RawInputModifiers
	 * @property
	 */
	public $InputModifiers;
	/**
	 * @var \System\Lazy_1[System\Collections\Generic\IReadOnlyList_1[Avalonia\Input\Raw\RawPointerPoint]]
	 * @property
	 */
	public $IntermediatePoints;
	/**
	 * @var \Avalonia\Input\IInputDevice
	 * @property
	 */
	public readonly $Device;
	/**
	 * @var \Avalonia\Input\IInputRoot
	 * @property
	 */
	public readonly $Root;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $Handled;
	/**
	 * @var \System\UInt64
	 * @property
	 */
	public $Timestamp;
	/**
	 * @return \Avalonia\Vector
	 */
	public  function get_Delta(){}
	/**
	 * @param \Avalonia\Vector $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Delta($value){}
}
