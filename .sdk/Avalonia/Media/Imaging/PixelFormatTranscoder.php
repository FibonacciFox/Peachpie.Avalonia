<?php
namespace Avalonia\Media\Imaging;
class PixelFormatTranscoder extends \System\Object
{


	/**
	 * @param \System\IntPtr $source
	 * @param \Avalonia\PixelSize $srcSize
	 * @param \System\Int32|int $sourceStride
	 * @param \Avalonia\Platform\PixelFormat $srcFormat
	 * @param \Avalonia\Platform\AlphaFormat $srcAlphaFormat
	 * @param \System\IntPtr $dest
	 * @param \System\Int32|int $destStride
	 * @param \Avalonia\Platform\PixelFormat $destFormat
	 * @param \Avalonia\Platform\AlphaFormat $destAlphaFormat
	 * @return \System\Void|void
	 */
	public static function Transcode($source, $srcSize, $sourceStride, $srcFormat, $srcAlphaFormat, $dest, $destStride, $destFormat, $destAlphaFormat){}
	private static function GetConvertedPixel($pixel, $sourceAlpha, $destAlpha){}
	private static function ConvertToPremultiplied($pixel){}
	private static function ConvertFromPremultiplied($pixel){}
	private static function GetReader($format){}
	private static function GetWriter($format){}
}