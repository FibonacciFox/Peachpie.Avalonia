<?php
namespace Avalonia\X11;
/**
 */
class XSelectionRequestEvent extends \System\ValueType
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
	protected $owner;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $requestor;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $selection;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $target;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $property;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $time;
}
