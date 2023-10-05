<?php
namespace Avalonia\X11;
/**
 */
class XErrorEvent extends \System\ValueType
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
	protected $display;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $resourceid;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $serial;
	/**
	 * @var \System\Byte
	 * @field
	 */
	protected $error_code;
	/**
	 * @var \Avalonia\X11\XRequest
	 * @field
	 */
	protected $request_code;
	/**
	 * @var \System\Byte
	 * @field
	 */
	protected $minor_code;
}
