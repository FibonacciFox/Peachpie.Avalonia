<?php
namespace Avalonia\X11;
/**
 */
class XClientMessageEvent extends \System\ValueType
{
	/**
	 * @var \Avalonia\X11\XEventName
	 * @field
	 */
	protected $type;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $serial;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $send_event;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $display;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $window;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $message_type;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $format;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $ptr1;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $ptr2;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $ptr3;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $ptr4;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $ptr5;
}
