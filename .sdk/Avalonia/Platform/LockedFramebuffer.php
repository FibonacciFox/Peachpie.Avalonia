<?php
namespace Avalonia\Platform;
class LockedFramebuffer extends \System\Object implements
	\Avalonia\Platform\ILockedFramebuffer,
	\System\IDisposable
{

	/**
	 * @property
	 * @var \System\IntPtr
	 * @since readonly
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
	 * @var \Avalonia\Vector
	 * @since readonly
	 */
	public $Dpi;
	/**
	 * @property
	 * @var \Avalonia\Platform\PixelFormat
	 * @since readonly
	 */
	public $Format;
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 * @param \System\IntPtr $address
	 * @param \Avalonia\PixelSize $size
	 * @param \System\Int32|int $rowBytes
	 * @param \Avalonia\Vector $dpi
	 * @param \Avalonia\Platform\PixelFormat $format
	 * @param \System\Action $onDispose
	 */
	public function __construct($address, $size, $rowBytes, $dpi, $format, $onDispose){}
}