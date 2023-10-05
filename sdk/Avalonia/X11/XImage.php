<?php
namespace Avalonia\X11;
/**
 */
class XImage extends \System\ValueType
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $width;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $height;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $xoffset;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $format;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $data;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $byte_order;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $bitmap_unit;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $bitmap_bit_order;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $bitmap_pad;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $depth;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $bytes_per_line;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $bits_per_pixel;
	/**
	 * @var \System\UInt64
	 * @field
	 */
	public $red_mask;
	/**
	 * @var \System\UInt64
	 * @field
	 */
	public $green_mask;
	/**
	 * @var \System\UInt64
	 * @field
	 */
	public $blue_mask;
}
