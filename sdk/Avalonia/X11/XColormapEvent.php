<?php
namespace Avalonia\X11;
/**
 */
class XColormapEvent extends \System\ValueType
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
	protected $colormap;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $c_new;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $state;
}
