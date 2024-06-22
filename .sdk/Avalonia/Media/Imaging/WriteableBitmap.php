<?php
namespace Avalonia\Media\Imaging;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait WriteableBitmapOverride {
	/**
	 * @param \Avalonia\PixelSize $size
	 * @param \Avalonia\Vector $dpi
	 * @param \System\Nullable_1 $format [generic: Avalonia\Platform\PixelFormat]
	 * @param \System\Nullable_1 $alphaFormat [generic: Avalonia\Platform\AlphaFormat]
	 */
	#[MethodOverride]public function __construct_1 ($size, $dpi, $format, $alphaFormat){}
	/**
	 * @param \Avalonia\Platform\PixelFormat $format
	 * @param \Avalonia\Platform\AlphaFormat $alphaFormat
	 * @param \System\IntPtr $data
	 * @param \Avalonia\PixelSize $size
	 * @param \Avalonia\Vector $dpi
	 * @param \System\Int32|int $stride
	 */
	#[MethodOverride]public function __construct_2 ($format, $alphaFormat, $data, $size, $dpi, $stride){}
}
class WriteableBitmap extends \Avalonia\Media\Imaging\Bitmap implements
	\Avalonia\Media\Imaging\IBitmap,
	\Avalonia\Media\IImage,
	\System\IDisposable,
	\Avalonia\Media\IImageBrushSource
{
	use WriteableBitmapOverride;

	/**
	 * @property
	 * @var \System\Nullable_1[Avalonia\Platform\PixelFormat]
	 * @since readonly
	 */
	public $Format;
	/**
	 * @property
	 * @var \Avalonia\Vector
	 * @since readonly
	 */
	public $Dpi;
	/**
	 * @property
	 * @var \Avalonia\Size
	 * @since readonly
	 */
	public $Size;
	/**
	 * @property
	 * @var \Avalonia\PixelSize
	 * @since readonly
	 */
	public $PixelSize;
	/**
	 * @property
	 * @var \System\Nullable_1[Avalonia\Platform\AlphaFormat]
	 * @since readonly
	 */
	public $AlphaFormat;
	/**
	 * @return \Avalonia\Platform\ILockedFramebuffer
	 */
	public function Lock(){}
	/**
	 * @param \System\IO\Stream $stream
	 * @return \Avalonia\Media\Imaging\WriteableBitmap
	 */
	public static function Decode($stream){}
	private static function CreatePlatformImpl($size, &$dpi, $format, $alphaFormat){}
	private function Draw($context, $sourceRect, $destRect){}
	private function get_Bitmap(){}
	/**
	 * @uses WriteableBitmapOverride::__construct_1 <br>public , args: ($size, $dpi, $format, $alphaFormat)<br>
	 * @uses WriteableBitmapOverride::__construct_2 <br>public , args: ($format, $alphaFormat, $data, $size, $dpi, $stride)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}