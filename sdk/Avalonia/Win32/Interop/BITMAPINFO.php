<?php
namespace Avalonia\Win32\Interop;
/**
 */
class BITMAPINFO extends \System\ValueType
{
	/**
	 * @var \System\UInt32
	 * @field
	 */
	public $biSize;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $biWidth;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $biHeight;
	/**
	 * @var \System\UInt16
	 * @field
	 */
	public $biPlanes;
	/**
	 * @var \System\UInt16
	 * @field
	 */
	public $biBitCount;
	/**
	 * @var \Avalonia\Win32\Interop\UnmanagedMethods+BitmapCompressionMode
	 * @field
	 */
	public $biCompression;
	/**
	 * @var \System\UInt32
	 * @field
	 */
	public $biSizeImage;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $biXPelsPerMeter;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $biYPelsPerMeter;
	/**
	 * @var \System\UInt32
	 * @field
	 */
	public $biClrUsed;
	/**
	 * @var \System\UInt32
	 * @field
	 */
	public $biClrImportant;
	/**
	 * @var \System\UInt32[]
	 * @field
	 */
	public $cols;
}
