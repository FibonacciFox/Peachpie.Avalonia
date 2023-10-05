<?php
namespace Avalonia\X11;
/**
 */
class XCreateWindowEvent extends \System\ValueType
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
	protected $parent;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $window;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $x;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $y;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $width;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $height;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $border_width;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $override_redirect;
}
