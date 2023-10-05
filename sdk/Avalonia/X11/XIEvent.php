<?php
namespace Avalonia\X11;
/**
 */
class XIEvent extends \System\ValueType
{
	/**
	 * @var \System\Int32
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
}
