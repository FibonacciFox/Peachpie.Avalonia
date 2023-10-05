<?php
namespace Avalonia\Win32\Interop;
/**
 */
class BITMAPINFOHEADER extends \System\ValueType
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
	 * @var \System\UInt32
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
	 * @return \System\Void|void
	 */
	public  function Init(){}
}
