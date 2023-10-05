<?php
namespace Avalonia\Input\Raw;
/**
 */
class RawDragEvent extends \Avalonia\Input\Raw\RawInputEventArgs
{
	/**
	 * @var \Avalonia\Point
	 * @property
	 */
	public $Location;
	/**
	 * @var \Avalonia\Input\IDataObject
	 * @property
	 */
	public readonly $Data;
	/**
	 * @var \Avalonia\Input\DragDropEffects
	 * @property
	 */
	public $Effects;
	/**
	 * @var \Avalonia\Input\Raw\RawDragEventType
	 * @property
	 */
	public readonly $Type;
	/**
	 * @var \Avalonia\Input\KeyModifiers
	 * @property
	 */
	public readonly $KeyModifiers;
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
	 * @return \Avalonia\Point
	 */
	public  function get_Location(){}
	/**
	 * @param \Avalonia\Point $value
	 * @return \System\Void|void
	 */
	public  function set_Location($value){}
	/**
	 * @return \Avalonia\Input\IDataObject
	 */
	public  function get_Data(){}
	/**
	 * @return \Avalonia\Input\DragDropEffects
	 */
	public  function get_Effects(){}
	/**
	 * @param \Avalonia\Input\DragDropEffects $value
	 * @return \System\Void|void
	 */
	public  function set_Effects($value){}
	/**
	 * @return \Avalonia\Input\Raw\RawDragEventType
	 */
	public  function get_Type(){}
	/**
	 * @return \Avalonia\Input\KeyModifiers
	 */
	public  function get_KeyModifiers(){}
}
