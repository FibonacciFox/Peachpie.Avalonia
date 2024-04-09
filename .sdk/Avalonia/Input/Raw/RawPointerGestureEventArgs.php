<?php
namespace Avalonia\Input\Raw;
class RawPointerGestureEventArgs extends \Avalonia\Input\Raw\RawPointerEventArgs
{
	/**
	 * @property
	 * @var \Avalonia\Vector
	 */
	public $Delta;
	/**
	 * @property
	 * @var \System\Int64|int
	 */
	public $RawPointerId;
	/**
	 * @property
	 * @var \Avalonia\Input\Raw\RawPointerPoint
	 */
	public $Point;
	/**
	 * @property
	 * @var \Avalonia\Point
	 */
	public $Position;
	/**
	 * @property
	 * @var \Avalonia\Input\Raw\RawPointerEventType
	 */
	public $Type;
	/**
	 * @property
	 * @var \Avalonia\Input\RawInputModifiers
	 */
	public $InputModifiers;
	/**
	 * @property
	 * @var \System\Lazy_1[System\Collections\Generic\IReadOnlyList_1[Avalonia\Input\Raw\RawPointerPoint]]
	 */
	public $IntermediatePoints;
	/**
	 * @property
	 * @var \Avalonia\Input\IInputDevice
	 * @since readonly
	 */
	public $Device;
	/**
	 * @property
	 * @var \Avalonia\Input\IInputRoot
	 * @since readonly
	 */
	public $Root;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $Handled;
	/**
	 * @property
	 * @var \System\UInt64
	 */
	public $Timestamp;
	/**
	 * @param \Avalonia\Input\IInputDevice $device
	 * @param \System\UInt64 $timestamp
	 * @param \Avalonia\Input\IInputRoot $root
	 * @param \Avalonia\Input\Raw\RawPointerEventType $gestureType
	 * @param \Avalonia\Point $position
	 * @param \Avalonia\Vector $delta
	 * @param \Avalonia\Input\RawInputModifiers $inputModifiers
	 */
	public function __construct($device, $timestamp, $root, $gestureType, $position, $delta, $inputModifiers){}
}