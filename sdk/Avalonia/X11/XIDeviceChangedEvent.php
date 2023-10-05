<?php
namespace Avalonia\X11;
/**
 */
class XIDeviceChangedEvent extends \System\ValueType
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $Type;
	/**
	 * @var \System\UIntPtr
	 * @field
	 */
	public $Serial;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	public $SendEvent;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $Display;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $Extension;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $Evtype;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $Time;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $Deviceid;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $Sourceid;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $Reason;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $NumClasses;
	/**
	 * @var \Avalonia\X11\XIAnyClassInfo**
	 * @field
	 */
	public $Classes;
}
