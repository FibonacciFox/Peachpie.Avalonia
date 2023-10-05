<?php
namespace Avalonia\X11;
/**
 */
class XScreen extends \System\ValueType
{
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $ext_data;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $display;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $root;
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
	protected $mwidth;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $mheight;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $ndepths;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $depths;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $root_depth;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $root_visual;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $default_gc;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $cmap;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $white_pixel;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $black_pixel;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $max_maps;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $min_maps;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $backing_store;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $save_unders;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $root_input_mask;
}
