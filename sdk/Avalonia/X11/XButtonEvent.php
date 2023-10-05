<?php
namespace Avalonia\X11;
/**
 */
class XButtonEvent extends \System\ValueType
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
	protected $root;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $subwindow;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $time;
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
	protected $x_root;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $y_root;
	/**
	 * @var \Avalonia\X11\XModifierMask
	 * @field
	 */
	protected $state;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $button;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $same_screen;
}
