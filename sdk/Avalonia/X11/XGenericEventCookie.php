<?php
namespace Avalonia\X11;
/**
 */
class XGenericEventCookie extends \System\ValueType
{
	/**
	 * @var \System\Int32
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
	 * @var \System\Int32
	 * @field
	 */
	protected $extension;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $evtype;
	/**
	 * @var \System\UInt32
	 * @field
	 */
	protected $cookie;
	/**
	 * @var \System\Void*
	 * @field
	 */
	protected $data;
	/**
	 * @return \Avalonia\X11\T
	 */
	public  function GetEvent(){}
}
