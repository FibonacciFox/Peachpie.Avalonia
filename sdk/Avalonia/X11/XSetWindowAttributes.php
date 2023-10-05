<?php
namespace Avalonia\X11;
/**
 */
class XSetWindowAttributes extends \System\ValueType
{
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $background_pixmap;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $background_pixel;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $border_pixmap;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $border_pixel;
	/**
	 * @var \Avalonia\X11\Gravity
	 * @field
	 */
	protected $bit_gravity;
	/**
	 * @var \Avalonia\X11\Gravity
	 * @field
	 */
	protected $win_gravity;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $backing_store;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $backing_planes;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $backing_pixel;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $save_under;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $event_mask;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $do_not_propagate_mask;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $override_redirect;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $colormap;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $cursor;
}
