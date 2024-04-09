<?php
namespace Avalonia\Media\Imaging;
class BitmapMemory extends \System\Object implements
	\System\IDisposable
{
	/**
	 * @property
	 * @var \System\IntPtr
	 */
	public $Address;
	/**
	 * @property
	 * @var \Avalonia\PixelSize
	 * @since readonly
	 */
	public $Size;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $RowBytes;
	/**
	 * @property
	 * @var \Avalonia\Platform\PixelFormat
	 * @since readonly
	 */
	public $Format;
	/**
	 * @property
	 * @var \Avalonia\Platform\AlphaFormat
	 * @since readonly
	 */
	public $AlphaFormat;
	private function ReleaseUnmanagedResources(){}
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 * @param \Avalonia\Platform\AlphaFormat $alphaFormat
	 * @param \System\IntPtr $buffer
	 * @param \System\Int32|int $stride
	 * @return \System\Void|void
	 */
	public function CopyToRgba($alphaFormat, $buffer, $stride){}
	/**
	 * @param \Avalonia\Platform\PixelFormat $format
	 * @param \Avalonia\Platform\AlphaFormat $alphaFormat
	 * @param \Avalonia\PixelSize $size
	 */
	public function __construct($format, $alphaFormat, $size){}
}