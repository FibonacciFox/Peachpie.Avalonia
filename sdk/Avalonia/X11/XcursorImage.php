<?php
namespace Avalonia\X11;
/**
 */
class XcursorImage extends \System\ValueType
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $version;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $size;
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
	public $xhot;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $yhot;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $delay;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $pixels;
}
