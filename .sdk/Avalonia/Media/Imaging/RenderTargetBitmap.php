<?php
namespace Avalonia\Media\Imaging;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait RenderTargetBitmapOverride {
	/**
	 * @param \Avalonia\PixelSize $pixelSize
	 */
	#[MethodOverride]public function __construct_1 ($pixelSize){}
	/**
	 * @param \Avalonia\PixelSize $pixelSize
	 * @param \Avalonia\Vector $dpi
	 */
	#[MethodOverride]public function __construct_2 ($pixelSize, $dpi){}
}
class RenderTargetBitmap extends \Avalonia\Media\Imaging\Bitmap implements
	\Avalonia\Media\Imaging\IBitmap,
	\Avalonia\Media\IImage,
	\System\IDisposable,
	\Avalonia\Media\IImageBrushSource
{
	use RenderTargetBitmapOverride;
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
	 * @var \System\Nullable_1[Avalonia\Platform\PixelFormat]
	 * @since readonly
	 */
	public $Format;
	/**
	 * @property
	 * @var \System\Nullable_1[Avalonia\Platform\AlphaFormat]
	 * @since readonly
	 */
	public $AlphaFormat;
	/**
	 * @param \Avalonia\Visual $visual
	 * @return \System\Void|void
	 */
	public function Render($visual){}
	private static function CreateImpl($size, $dpi){}
	/**
	 * @return \Avalonia\Media\DrawingContext
	 */
	public function CreateDrawingContext(){}
	private function Draw($context, $sourceRect, $destRect){}
	private function get_Bitmap(){}
	/**
	 * @uses RenderTargetBitmapOverride::__construct_1 <br>public , args: ($pixelSize)<br>
	 * @uses RenderTargetBitmapOverride::__construct_2 <br>public , args: ($pixelSize, $dpi)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}