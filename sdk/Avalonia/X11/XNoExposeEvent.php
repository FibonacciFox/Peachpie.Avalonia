<?php
namespace Avalonia\X11;
/**
 */
class XNoExposeEvent extends \System\ValueType
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
	protected $drawable;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $major_code;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $minor_code;
}
