<?php
namespace Avalonia\X11;
/**
 */
class XIDeviceInfo extends \System\ValueType
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $Deviceid;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $Name;
	/**
	 * @var \Avalonia\X11\XiDeviceType
	 * @field
	 */
	public $Use;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $Attachment;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	public $Enabled;
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
