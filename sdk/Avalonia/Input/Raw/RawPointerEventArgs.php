<?php
namespace Avalonia\Input\Raw;
/**
 */
class RawPointerEventArgs extends \Avalonia\Input\Raw\RawInputEventArgs
{
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
	 * @return \System\Int64|int
	 */
	public  function get_RawPointerId(){}
	/**
	 * @param \System\Int64|int $value
	 * @return \System\Void|void
	 */
	public  function set_RawPointerId($value){}
	/**
	 * @return \Avalonia\Input\Raw\RawPointerPoint
	 */
	public  function get_Point(){}
	/**
	 * @param \Avalonia\Input\Raw\RawPointerPoint $value
	 * @return \System\Void|void
	 */
	public  function set_Point($value){}
	/**
	 * @return \Avalonia\Point
	 */
	public  function get_Position(){}
	/**
	 * @param \Avalonia\Point $value
	 * @return \System\Void|void
	 */
	public  function set_Position($value){}
	/**
	 * @return \Avalonia\Input\Raw\RawPointerEventType
	 */
	public  function get_Type(){}
	/**
	 * @param \Avalonia\Input\Raw\RawPointerEventType $value
	 * @return \System\Void|void
	 */
	public  function set_Type($value){}
	/**
	 * @return \Avalonia\Input\RawInputModifiers
	 */
	public  function get_InputModifiers(){}
	/**
	 * @param \Avalonia\Input\RawInputModifiers $value
	 * @return \System\Void|void
	 */
	public  function set_InputModifiers($value){}
	/**
	 * @return \System\Lazy_1
	 */
	public  function get_IntermediatePoints(){}
	/**
	 * @param \System\Lazy_1 $value
	 * @return \System\Void|void
	 */
	public  function set_IntermediatePoints($value){}
	/**
	 * @return \Avalonia\Input\IInputElement
	 */
	protected  function get_InputHitTestResult(){}
	/**
	 * @param \Avalonia\Input\IInputElement $value
	 * @return \System\Void|void
	 */
	protected  function set_InputHitTestResult($value){}
}
