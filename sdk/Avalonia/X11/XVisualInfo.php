<?php
namespace Avalonia\X11;
/**
 */
class XVisualInfo extends \System\ValueType
{
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $visual;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $visualid;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $screen;
	/**
	 * @var \System\UInt32
	 * @field
	 */
	protected $depth;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $klass;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $red_mask;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $green_mask;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $blue_mask;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $colormap_size;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $bits_per_rgb;
}
