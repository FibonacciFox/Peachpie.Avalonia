<?php
namespace Avalonia\X11;
/**
 */
class XGravityEvent extends \System\ValueType
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
	protected $xevent;
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
}
