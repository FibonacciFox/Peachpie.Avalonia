<?php
namespace Avalonia\X11;
/**
 */
class XIDeviceEvent extends \System\ValueType
{
	/**
	 * @var \Avalonia\X11\XEventName
	 * @field
	 */
	public $type;
	/**
	 * @var \System\UIntPtr
	 * @field
	 */
	public $serial;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	public $send_event;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $display;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $extension;
	/**
	 * @var \Avalonia\X11\XiEventType
	 * @field
	 */
	public $evtype;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $time;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $deviceid;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $sourceid;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $detail;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $RootWindow;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $EventWindow;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $ChildWindow;
	/**
	 * @var \System\Double
	 * @field
	 */
	public $root_x;
	/**
	 * @var \System\Double
	 * @field
	 */
	public $root_y;
	/**
	 * @var \System\Double
	 * @field
	 */
	public $event_x;
	/**
	 * @var \System\Double
	 * @field
	 */
	public $event_y;
	/**
	 * @var \Avalonia\X11\XiDeviceEventFlags
	 * @field
	 */
	public $flags;
	/**
	 * @var \Avalonia\X11\XIButtonState
	 * @field
	 */
	public $buttons;
	/**
	 * @var \Avalonia\X11\XIValuatorState
	 * @field
	 */
	public $valuators;
	/**
	 * @var \Avalonia\X11\XIModifierState
	 * @field
	 */
	public $mods;
	/**
	 * @var \Avalonia\X11\XIModifierState
	 * @field
	 */
	public $group;
}
