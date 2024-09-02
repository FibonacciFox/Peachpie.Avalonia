<?php
namespace Avalonia\Media\Imaging;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait BitmapOverride {
	/**
	 * @deprecated
	 * @return \Avalonia\Utilities\IRef_1
	 */
	#[MethodOverride]protected function get_PlatformImpl_1 (){}
	/**
	 * @deprecated
	 * @return \Avalonia\Utilities\IRef_1
	 */
	#[MethodOverride]private function get_PlatformImpl_2 (){}
	/**
	 * @deprecated
	 * @param \System\String|string $fileName
	 * @param \System\Nullable_1 $quality [generic: System\Int32]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Save_1 ($fileName, $quality){}
	/**
	 * @deprecated
	 * @param \System\IO\Stream $stream
	 * @param \System\Nullable_1 $quality [generic: System\Int32]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Save_2 ($stream, $quality){}
	/**
	 * @deprecated
	 * @param \Avalonia\PixelRect $sourceRect
	 * @param \System\IntPtr $buffer
	 * @param \System\Int32|int $bufferSize
	 * @param \System\Int32|int $stride
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function CopyPixels_1 ($sourceRect, $buffer, $bufferSize, $stride){}
	/**
	 * @deprecated
	 * @param \Avalonia\Platform\ILockedFramebuffer $buffer
	 * @param \Avalonia\Platform\AlphaFormat $alphaFormat
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function CopyPixels_2 ($buffer, $alphaFormat){}
	/**
	 * @param \System\String|string $fileName
	 */
	#[MethodOverride]public function __construct_1 ($fileName){}
	/**
	 * @param \System\IO\Stream $stream
	 */
	#[MethodOverride]public function __construct_2 ($stream){}
	/**
	 * @param \Avalonia\Platform\PixelFormat $format
	 * @param \Avalonia\Platform\AlphaFormat $alphaFormat
	 * @param \System\IntPtr $data
	 * @param \Avalonia\PixelSize $size
	 * @param \Avalonia\Vector $dpi
	 * @param \System\Int32|int $stride
	 */
	#[MethodOverride]public function __construct_3 ($format, $alphaFormat, $data, $size, $dpi, $stride){}
}
class Bitmap extends \System\Object implements
	\Avalonia\Media\Imaging\IBitmap,
	\Avalonia\Media\IImage,
	\System\IDisposable,
	\Avalonia\Media\IImageBrushSource
{
	use BitmapOverride;
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
	 * @param \System\IO\Stream $stream
	 * @param \System\Int32|int $width
	 * @param \Avalonia\Media\Imaging\BitmapInterpolationMode $interpolationMode
	 * @return \Avalonia\Media\Imaging\Bitmap
	 */
	public static function DecodeToWidth($stream, $width, $interpolationMode){}
	/**
	 * @param \System\IO\Stream $stream
	 * @param \System\Int32|int $height
	 * @param \Avalonia\Media\Imaging\BitmapInterpolationMode $interpolationMode
	 * @return \Avalonia\Media\Imaging\Bitmap
	 */
	public static function DecodeToHeight($stream, $height, $interpolationMode){}
	/**
	 * @param \Avalonia\PixelSize $destinationSize
	 * @param \Avalonia\Media\Imaging\BitmapInterpolationMode $interpolationMode
	 * @return \Avalonia\Media\Imaging\Bitmap
	 */
	public function CreateScaledBitmap($destinationSize, $interpolationMode){}
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 * @uses BitmapOverride::get_PlatformImpl_1 <br>protected , args: ()<br>
	 * @uses BitmapOverride::get_PlatformImpl_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Utilities\IRef_1|mixed|\override
	 */
	#[MethodOverrideProtected]function get_PlatformImpl (){}
	/**
	 * @uses BitmapOverride::Save_1 <br>public , args: ($fileName, $quality)<br>
	 * @uses BitmapOverride::Save_2 <br>public , args: ($stream, $quality)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Save (\override ...$args){}
	/**
	 * @param \Avalonia\PixelRect $sourceRect
	 * @param \System\IntPtr $buffer
	 * @param \System\Int32|int $bufferSize
	 * @param \System\Int32|int $stride
	 * @param \Avalonia\Platform\ILockedFramebuffer $fb
	 * @return \System\Void|void
	 */
	protected function CopyPixelsCore($sourceRect, $buffer, $bufferSize, $stride, $fb){}
	/**
	 * @uses BitmapOverride::CopyPixels_1 <br>public , args: ($sourceRect, $buffer, $bufferSize, $stride)<br>
	 * @uses BitmapOverride::CopyPixels_2 <br>public , args: ($buffer, $alphaFormat)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function CopyPixels (\override ...$args){}
	private function Draw($context, $sourceRect, $destRect){}
	private static function GetFactory(){}
	private function get_Bitmap(){}
	/**
	 * @uses BitmapOverride::__construct_1 <br>public , args: ($fileName)<br>
	 * @uses BitmapOverride::__construct_2 <br>public , args: ($stream)<br>
	 * @uses BitmapOverride::__construct_3 <br>public , args: ($format, $alphaFormat, $data, $size, $dpi, $stride)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}