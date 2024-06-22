<?php
namespace Avalonia\Input\Raw;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait RawPointerPointOverride {
	/**
	 * @param \Avalonia\Input\IInputDevice $device
	 * @param \System\UInt64 $timestamp
	 * @param \Avalonia\Input\IInputRoot $root
	 * @param \Avalonia\Input\Raw\RawPointerEventType $type
	 * @param \Avalonia\Point $position
	 * @param \Avalonia\Input\RawInputModifiers $inputModifiers
	 * @param \System\Int64|int $rawPointerId
	 */
	#[MethodOverride]public function __construct_1 ($device, $timestamp, $root, $type, $position, $inputModifiers, $rawPointerId){}
	/**
	 * @param \Avalonia\Input\IInputDevice $device
	 * @param \System\UInt64 $timestamp
	 * @param \Avalonia\Input\IInputRoot $root
	 * @param \Avalonia\Input\Raw\RawPointerEventType $type
	 * @param \Avalonia\Input\Raw\RawPointerPoint $point
	 * @param \Avalonia\Input\RawInputModifiers $inputModifiers
	 * @param \System\Int64|int $rawPointerId
	 */
	#[MethodOverride]public function __construct_2 ($device, $timestamp, $root, $type, $point, $inputModifiers, $rawPointerId){}
}
class RawTouchEventArgs extends \Avalonia\Input\Raw\RawPointerEventArgs
{
	use RawPointerPointOverride;

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
	 * @uses RawTouchEventArgsOverride::__construct_1 <br>public , args: ($device, $timestamp, $root, $type, $position, $inputModifiers, $rawPointerId)<br>
	 * @uses RawTouchEventArgsOverride::__construct_2 <br>public , args: ($device, $timestamp, $root, $type, $point, $inputModifiers, $rawPointerId)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}