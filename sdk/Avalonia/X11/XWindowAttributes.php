<?php
namespace Avalonia\X11;
/**
 */
class XWindowAttributes extends \System\ValueType
{
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
	protected $depth;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $visual;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $root;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $c_class;
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
	protected $colormap;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $map_installed;
	/**
	 * @var \Avalonia\X11\MapState
	 * @field
	 */
	protected $map_state;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $all_event_masks;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $your_event_mask;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $do_not_propagate_mask;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $override_direct;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $screen;
}
